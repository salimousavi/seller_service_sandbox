<?php

namespace App\Controller;

use App\Lib\Controller\AForm;
use App\Lib\Controller\AListView;
use App\Lib\Controller\AObjectView;
use App\Lib\Resolver\APIRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class InventoryAPIController extends AbstractAPIController
{
    #[Route(path: '/api/v3/inventories', name: "SellerInventoriesListView", methods: ["GET"])]
    public function SellerInventoriesListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AListView($APIRequest, SellerInventoriesMockData::class))->execute());
    }

    #[Route(path: '/api/v3/inventories/{product_variant_id}', name: "SellerInventoriesDeadStockListView", methods: ["GET"])]
    public function SellerInventoriesDeadStockListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AListView($APIRequest, SellerInventoriesDeadStockMockData::class))->execute());
    }

    #[Route(path: '/api/v3/inventories/{product_variant_id}/export', name: "SellerInventoriesDetailExcelExportView", methods: ["GET"])]
    public function SellerInventoriesDetailExcelExportView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AObjectView($APIRequest, SellerInventoriesDetailExcelExportViewMockData::class))->execute());
    }

    #[Route(path: '/api/v3/inventories/export', name: "SellerInventoriesExcelExportForm", methods: ["POST"])]
    public function SellerInventoriesExcelExportForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AForm($APIRequest, SellerInventoriesExcelExportMockData::class))->execute());
    }

}