<?php

namespace App\Listener;

use App\Controller\AbstractAPIController;
use App\Helpers;
use App\Lib\Exception\BadRequestException;
use App\Lib\Exception\IpLimiterException;
use App\Lib\Exception\NotFoundException;
use App\Lib\Exception\UnAuthorizedException;
use App\Lib\Helper\TimeService;
use App\Service\CacheService;
use App\View\AListView;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\KernelEvents;

class ExceptionListener implements EventSubscriberInterface
{
    use Helpers;

    public function __construct(private CacheService $cacheService)
    {
    }

    public static function getSubscribedEvents()
    {
        return [KernelEvents::EXCEPTION => 'onKernelException'];
    }

    public function onKernelException(ExceptionEvent $event)
    {
        $exception = $event->getThrowable();
        $event->allowCustomResponseCode();

        switch (get_class($exception)) {
            case BadRequestException::class:
            case NotFoundException::class:
            case UnAuthorizedException::class:
            case IpLimiterException::class:
                $rateLimit = $this->checkAndGetRateLimit($event->getRequest());
            case NotFoundHttpException::class:
                $exception = new NotFoundException('Route does not exists');
                $data = $exception->buildErrorResponse();
                if (!empty($rateLimit)) $data['rate_limit'] = $rateLimit;
                $event->setResponse(new JsonResponse($data, $exception->getCode()));
                break;
            default:
                throw $exception;
        }
    }

    /**
     * @throws IpLimiterException
     */
    public function checkAndGetRateLimit(?Request $request): ?array
    {
        if (empty($request)) return null;

        $ipLong = ip2long($request->getClientIp());
        if (empty($ipLong)) return null;
        $cacheKey = 'ipl:' . $ipLong;

        $count = $this->cacheService->get($cacheKey);

        if (empty($count)) {
            $this->cacheService->inc($cacheKey, 1, TimeService::HOUR);
        } elseif ($count < AListView::MAX_RATE_LIMITER) {
            $this->cacheService->inc($cacheKey, 1, $this->cacheService->ttl($cacheKey));
        } else {
            return [
                'max' => AListView::MAX_RATE_LIMITER,
                'current' => $count,
                'reset_time' => $this->serviceTime()->addSecondsToNow($this->cacheService->ttl($cacheKey))->format(TimeService::FORMAT_YMDHIS),
            ];
        }

        return [
            'max' => AListView::MAX_RATE_LIMITER,
            'current' => $count,
            'reset_time' => $this->serviceTime()->addSecondsToNow($this->cacheService->ttl($cacheKey))->format(TimeService::FORMAT_YMDHIS),
        ];
    }
}