<?php

namespace App\Controller;

use App\Lib\Controller\AForm;
use App\Lib\Controller\AListView;
use App\Lib\Controller\AObjectView;
use App\Lib\Resolver\APIRequest;
use App\Mock\Auth\ClientCreateTokenMockData;
use App\Mock\Auth\ClientRefreshTokenMockData;
use App\Mock\Auth\ScopeMockData;
use App\Mock\Default\HealthCheckMockData;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class DefaulController extends AbstractAPIController
{
    #[Route(path: '/api/v3', name: "SellerApplicationServiceDetailsApiView", methods: ["GET"])]
    public function scopeListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AObjectView($APIRequest, HealthCheckMockData::class))->execute());
    }
}