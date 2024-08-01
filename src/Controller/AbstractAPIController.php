<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

abstract class AbstractAPIController extends AbstractController
{
    protected function createJsonResponse(array $data): JsonResponse
    {
        return new JsonResponse([
            'status' => 'ok',
            'data' => $data,
        ]);
    }

    protected function createJsonResponseV2(array $data): JsonResponse
    {
        return new JsonResponse($data);
    }
}