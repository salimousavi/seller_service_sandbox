<?php

namespace App\Controller;

use App\Lib\Controller\AForm;
use App\Lib\Controller\AListView;
use App\Lib\Controller\ResponseBuilder;
use App\Lib\Resolver\APIRequest;
use App\Mock\Insight\InsightOverviewExcelExportMockData;
use App\Mock\Insight\InsightOverviewMockData;
use App\Mock\Insight\InsightSalesReportsMockData;
use App\Mock\Insight\InsightTopDeactivatedMockData;
use App\Mock\Insight\InsightTrendSalesReportsMockData;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class InsightAPIController extends AbstractAPIController
{
    #[Route(path: '/api/v3/insight/overview', name: "InsightOverviewListView", methods: ["GET"])]
    public function InsightOverviewListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AListView($APIRequest, InsightOverviewMockData::class))->execute());
    }

    #[Route(path: '/api/v3/insight/top-deactivated', name: "InsightTopDeactivatedListView", methods: ["GET"])]
    public function InsightTopDeactivatedListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AListView($APIRequest, InsightTopDeactivatedMockData::class))->execute());
    }

    #[Route(path: '/api/v3/insight/trend-sales-reports', name: "InsightTrendSalesReportsListView", methods: ["GET"])]
    public function InsightTrendSalesReportsListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, InsightTrendSalesReportsMockData::class));
    }

    #[Route(path: '/api/v3/insight/sales-reports', name: "InsightSalesReportsListView", methods: ["GET"])]
    public function InsightSalesReportsListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AListView($APIRequest, InsightSalesReportsMockData::class))->execute());
    }

    #[Route(path: '/api/v3/insight/overview/export', name: "InsightOverviewExcelExportForm", methods: ["POST"])]
    public function InsightOverviewExcelExportForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AForm($APIRequest, InsightOverviewExcelExportMockData::class))->execute());
    }
}