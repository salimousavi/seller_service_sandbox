<?php

namespace App\Controller;

use App\Lib\Constant\Constant;
use App\Lib\Resolver\APIRequest;
use App\View\Auth\ScopeListView;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class AuthAPIController extends AbstractAPIController
{
    #[Route(path: Constant::API_VERSION . '/auth/scopes', name: "ScopeListView", methods: ["GET"])]
    public function scopeListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new ScopeListView($APIRequest))->execute());
    }

    #[Route(path: '/api/v3/auth/token', name: "ClientCreateTokenForm", methods: ["POST"])]
    public function ClientCreateTokenForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new ClientCreateTokenForm($APIRequest))->execute());
    }

    #[Route(path: '/api/v3/auth/refresh-token', name: "ClientRefreshTokenForm", methods: ["POST"])]
    public function ClientRefreshTokenForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new ClientRefreshTokenForm($APIRequest))->execute());
    }

    #[Route(path: '/api/v3/auth/decrypt-code', name: "DemoAuthorizationCodeDecryptionForm", methods: ["POST"])]
    public function DemoAuthorizationCodeDecryptionForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new DemoAuthorizationCodeDecryptionForm($APIRequest))->execute());
    }

}