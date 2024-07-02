<?php

namespace App\Controller;

use App\Lib\Controller\AForm;
use App\Lib\Controller\AListView;
use App\Lib\Controller\AObjectView;
use App\Lib\Resolver\APIRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ProfileAPIController extends AbstractAPIController
{
    #[Route(path: '/api/v3/profile', name: "ProfileObjectView", methods: ["GET"])]
    public function ProfileObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AObjectView($APIRequest, ProfileMockData::class))->execute());
    }

    #[Route(path: '/api/v3/profile/business', name: "ProfileBusinessObjectView", methods: ["GET"])]
    public function ProfileBusinessObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AObjectView($APIRequest, ProfileBusinessMockData::class))->execute());
    }

    #[Route(path: '/api/v3/profile/store', name: "ProfileStoreObjectView", methods: ["GET"])]
    public function ProfileStoreObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AObjectView($APIRequest, ProfileStoreMockData::class))->execute());
    }

    #[Route(path: '/api/v3/profile/address', name: "ProfileAddressListView", methods: ["GET"])]
    public function ProfileAddressListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AListView($APIRequest, ProfileAddressMockData::class))->execute());
    }

    #[Route(path: '/api/v3/profile/warehouse', name: "ProfileWarehouseAddressListView", methods: ["GET"])]
    public function ProfileWarehouseAddressListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AListView($APIRequest, ProfileWarehouseAddressMockData::class))->execute());
    }

    #[Route(path: '/api/v3/profile/document', name: "ProfileDocumentObjectView", methods: ["GET"])]
    public function ProfileDocumentObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AObjectView($APIRequest, ProfileDocumentMockData::class))->execute());
    }

    #[Route(path: '/api/v3/profile/training', name: "ProfileTrainingObjectView", methods: ["GET"])]
    public function ProfileTrainingObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AObjectView($APIRequest, ProfileTrainingMockData::class))->execute());
    }

    #[Route(path: '/api/v3/profile/performance', name: "ProfilePerformanceObjectView", methods: ["GET"])]
    public function ProfilePerformanceObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AObjectView($APIRequest, ProfilePerformanceMockData::class))->execute());
    }

    #[Route(path: '/api/v3/profile/business', name: "UpdateBusinessDataForm", methods: ["PATCH"])]
    public function UpdateBusinessDataForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AForm($APIRequest, UpdateBusinessDataMockData::class))->execute());
    }

}