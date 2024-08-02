<?php

namespace App\Listener;

use App\Entity\RequestLogger;
use App\Lib\Controller\AResponse;
use App\Lib\Exception\AccessDeniedException;
use App\Lib\Exception\BadRequestException;
use App\Lib\Exception\IpLimiterException;
use App\Lib\Exception\NotFoundException;
use App\Lib\Exception\UnAuthorizedException;
use App\Lib\Exception\UndefinedResponseModeException;
use App\Lib\Helper\TimeService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;

class ExceptionListener implements EventSubscriberInterface
{
    public function __construct(private EntityManagerInterface $entityManager)
    {
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::EXCEPTION => 'onKernelException',
            KernelEvents::RESPONSE => 'onKernelResponse',
        ];
    }

    public function onKernelException(ExceptionEvent $event)
    {
        $exception = $event->getThrowable();
        $event->allowCustomResponseCode();

        switch (get_class($exception)) {
            case NotFoundHttpException::class:
            case MethodNotAllowedException::class:
            case MethodNotAllowedHttpException::class:
                $exception = new NotFoundException('No route found for ' . $event->getRequest()->getPathInfo());
                $data = $exception->buildErrorResponse();
                $event->setResponse(new JsonResponse($data, $exception->getCode()));
                break;
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

    public function onKernelResponse(ResponseEvent $event)
    {
        if ($event->getRequestType() !== HttpKernelInterface::MAIN_REQUEST) return;
        $this->logHttpRequest($event->getRequest(), $event->getResponse());
    }

    private function logHttpRequest(Request $request, ?Response $response = null)
    {
        $requestLoggerRepo = $this->entityManager->getRepository(RequestLogger::class);

        $requestLogger = (new RequestLogger())
            ->setIp($request->getClientIp())
            ->setUri($request->getPathInfo())
            ->setRouteName($request->attributes->get('_route'))
            ->setStatus($response->getStatusCode() != AResponse::RESPONSE_MODE_200 ? RequestLogger::STATUS_ERROR : RequestLogger::STATUS_OK)
            ->setCreatedAt(TimeService::Now())
            ->setResponseCode($request->headers->get(AResponse::RESPONSE_CODE_HEADER_NAME))
            ->setQueryParams($request->query->all())
            ->setRequestParams($request->request->all());

        if ($response) {
            $requestLogger->setResponse(json_encode($response));
        }

        $this->entityManager->persist($requestLogger);
        $this->entityManager->flush();
    }
}