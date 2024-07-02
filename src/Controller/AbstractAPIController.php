<?php

namespace App\Controller;

use App\Helpers;
use App\Lib\Resolver\APIRequest;
use App\Service\CacheService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

abstract class AbstractAPIController extends AbstractController
{
    use Helpers;

    public function __construct(private CacheService $cacheService)
    {
    }

    protected function createJsonResponse(array $data): JsonResponse
    {
        return new JsonResponse([
            'status' => 'ok',
            'data' => $data,
        ]);
    }
}