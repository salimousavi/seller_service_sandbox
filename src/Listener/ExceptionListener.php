<?php

namespace App\Listener;

use App\Helpers;
use App\Lib\Exception\AccessDeniedException;
use App\Lib\Exception\BadRequestException;
use App\Lib\Exception\IpLimiterException;
use App\Lib\Exception\NotFoundException;
use App\Lib\Exception\UnAuthorizedException;
use App\Lib\Exception\UndefinedResponseModeException;
use App\Service\CacheService;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
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
            case NotFoundHttpException::class:
                $exception = new NotFoundException('Route does not exists');
            case BadRequestException::class:
            case NotFoundException::class:
            case UnAuthorizedException::class:
            case AccessDeniedException::class:
            case IpLimiterException::class:
            case UndefinedResponseModeException::class:
                $data = $exception->buildErrorResponse();
                $event->setResponse(new JsonResponse($data, $exception->getCode()));
                break;
            default:
                throw $exception;
        }
    }
}