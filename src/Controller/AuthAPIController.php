<?php

namespace App\Controller;

use App\Lib\Controller\AForm;
use App\Lib\Controller\AListView;
use App\Lib\Resolver\APIRequest;
use App\Mock\Auth\ClientCreateTokenMockData;
use App\Mock\Auth\ClientRefreshTokenMockData;
use App\Mock\Auth\ScopeMockData;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class AuthAPIController extends AbstractAPIController
{
    #[Route(path: '/api/v3/auth/scopes', name: "ScopeListView", methods: ["GET"])]
    public function scopeListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AListView($APIRequest, ScopeMockData::class))->execute());
    }

    #[Route(path: '/api/v3/auth/scopes/{client_code}', name: "clientScopeListView", methods: ["GET"])]
    public function clientScopeListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AListView($APIRequest, ScopeMockData::class))->execute());
    }

    #[Route(path: '/api/v3/auth/token', name: "ClientCreateTokenForm", methods: ["POST"])]
    public function ClientCreateTokenForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AForm($APIRequest, ClientCreateTokenMockData::class))->execute());
    }

    #[Route(path: '/api/v3/auth/refresh-token', name: "ClientRefreshTokenForm", methods: ["POST"])]
    public function ClientRefreshTokenForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AForm($APIRequest, ClientRefreshTokenMockData::class))->execute());
    }
}