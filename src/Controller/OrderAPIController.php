<?php

namespace App\Controller;

use App\Lib\Controller\AForm;
use App\Lib\Controller\AListView;
use App\Lib\Controller\AObjectView;
use App\Lib\Resolver\APIRequest;
use App\Mock\Order\AllSellerDigikalaOrderMockData;
use App\Mock\Order\SellerCancelDigikalaOrderItemMockData;
use App\Mock\Order\SellerDigikalaOrderMockData;
use App\Mock\Order\SellerDigikalaOrdersExcelExportMockData;
use App\Mock\Order\SellerDigikalaOrderStatisticsMockData;
use App\Mock\Order\SellerOrderStatisticsMockData;
use App\Mock\Order\SellerOVLMockData;
use App\Mock\Order\VariantDigikalaOrderStatisticsMockData;
use App\Mock\Order\VariantOrdersMockData;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class OrderAPIController extends AbstractAPIController
{
    #[Route(path: '/api/v3/orders', name: "AllSellerDigikalaOrderListView", methods: ["GET"])]
    public function AllSellerDigikalaOrderListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AListView($APIRequest, AllSellerDigikalaOrderMockData::class))->execute());
    }

    #[Route(path: '/api/v3/orders/statistics', name: "SellerOrderStatisticsObjectView", methods: ["GET"])]
    public function SellerOrderStatisticsObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AObjectView($APIRequest, SellerOrderStatisticsMockData::class))->execute());
    }

    #[Route(path: '/api/v3/orders/ongoing', name: "SellerDigikalaOrderListView", methods: ["GET"])]
    public function SellerDigikalaOrderListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AListView($APIRequest, SellerDigikalaOrderMockData::class))->execute());
    }

    #[Route(path: '/api/v3/orders/ongoing/statistics', name: "SellerDigikalaOrderStatisticsObjectView", methods: ["GET"])]
    public function SellerDigikalaOrderStatisticsObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AObjectView($APIRequest, SellerDigikalaOrderStatisticsMockData::class))->execute());
    }

    #[Route(path: '/api/v3/orders/excel/export', name: "SellerDigikalaOrdersExcelExportForm", methods: ["POST"])]
    public function SellerDigikalaOrdersExcelExportForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AForm($APIRequest, SellerDigikalaOrdersExcelExportMockData::class))->execute());
    }

    #[Route(path: '/api/v3/orders/{order_item_id}', name: "SellerCancelDigikalaOrderItemForm", methods: ["DELETE"])]
    public function SellerCancelDigikalaOrderItemForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AForm($APIRequest, SellerCancelDigikalaOrderItemMockData::class))->execute());
    }

    #[Route(path: '/api/v3/variants/{variant_id}/order-items', name: "VariantOrdersListView", methods: ["GET"])]
    public function VariantOrdersListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AListView($APIRequest, VariantOrdersMockData::class))->execute());
    }

    #[Route(path: '/api/v3/variants/{variant_id}/order-items/statistics', name: "VariantDigikalaOrderStatisticsObjectView", methods: ["GET"])]
    public function VariantDigikalaOrderStatisticsObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AObjectView($APIRequest, VariantDigikalaOrderStatisticsMockData::class))->execute());
    }

}