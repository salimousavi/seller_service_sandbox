<?php

namespace App\Controller;

use App\Lib\Constant\Constant;
use App\Lib\Resolver\APIRequest;
use App\Service\CacheService;
use App\View\Auth\ScopeListView;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class AuthAPIController extends AbstractAPIController
{
    #[Route(path: Constant::API_VERSION . '/auth/scopes', name: "ScopeListView", methods: ["GET"])]
    public function scopeListView(APIRequest $APIRequest, CacheService $cacheService): JsonResponse
    {
        return $this->createJsonResponse((new ScopeListView($APIRequest, $cacheService))->build());
    }

    #[Route(path: '/api/v3/auth/token', name: "ClientCreateTokenForm", methods: ["post"])]
    public function ClientCreateTokenForm(APIRequest $APIRequest, CacheService $cacheService): JsonResponse
    {
        return $this->createJsonResponse((new ClientCreateTokenForm($APIRequest, $cacheService))->build(), $APIRequest);
    }

    #[Route(path: '/api/v3/auth/refresh-token', name: "ClientRefreshTokenForm", methods: ["post"])]
    public function ClientRefreshTokenForm(APIRequest $APIRequest, CacheService $cacheService): JsonResponse
    {
        return $this->createJsonResponse((new ClientRefreshTokenForm($APIRequest, $cacheService))->build(), $APIRequest);
    }

    #[Route(path: '/api/v3/auth/decrypt-code', name: "DemoAuthorizationCodeDecryptionForm", methods: ["post"])]
    public function DemoAuthorizationCodeDecryptionForm(APIRequest $APIRequest, CacheService $cacheService): JsonResponse
    {
        return $this->createJsonResponse((new DemoAuthorizationCodeDecryptionForm($APIRequest, $cacheService))->build(), $APIRequest);
    }

}