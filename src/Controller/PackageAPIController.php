<?php

namespace App\Controller;

use App\Lib\Controller\ResponseBuilder;
use App\Lib\Resolver\APIRequest;
use App\Mock\Package\ConsignmentMockData;
use App\Mock\Package\DeletePackageMockData;
use App\Mock\Package\PackageDetailExcelExportViewMockData;
use App\Mock\Package\PackageDetailMockData;
use App\Mock\Package\PackageMockData;
use App\Mock\Package\PackageWarehouseCapacitiesMockData;
use App\Mock\Package\PackageWarehousesMockData;
use App\Mock\Package\SellerCreateConsignmentPackageMockData;
use App\Mock\Package\SellerCreateOrderFulfilmentPackageV2MockData;
use App\Mock\Package\SellerCreatePackageMockData;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class PackageAPIController extends AbstractAPIController
{
    #[Route(path: '/api/v3/packages', name: "PackageListView", methods: ["GET"])]
    public function PackageListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, PackageMockData::class));
    }

    #[Route(path: '/api/v3/packages/warehouses', name: "PackageWarehousesListView", methods: ["GET"])]
    public function PackageWarehousesListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, PackageWarehousesMockData::class));
    }

    #[Route(path: '/api/v3/packages/warehouses/{warehouse_id}/capacities', name: "PackageWarehouseCapacitiesObjectView", methods: ["GET"])]
    public function PackageWarehouseCapacitiesObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, PackageWarehouseCapacitiesMockData::class));
    }

    #[Route(path: '/api/v3/packages', name: "SellerCreatePackageForm", methods: ["POST"])]
    public function SellerCreatePackageForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, SellerCreatePackageMockData::class));
    }

    #[Route(path: '/api/v3/packages/{package_id}', name: "PackageDetailListView", methods: ["GET"])]
    public function PackageDetailListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, PackageDetailMockData::class));
    }

    #[Route(path: '/api/v3/packages/{package_id}', name: "DeletePackageForm", methods: ["DELETE"])]
    public function DeletePackageForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, DeletePackageMockData::class));
    }

    #[Route(path: '/api/v3/packages/{package_id}/excel/export', name: "PackageDetailExcelExportView", methods: ["GET"])]
    public function PackageDetailExcelExportView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, PackageDetailExcelExportViewMockData::class));
    }

    #[Route(path: '/api/v3/packages/consignment/variants', name: "SellerCreateConsignmentPackageListView", methods: ["GET"])]
    public function SellerCreateConsignmentPackageListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, SellerCreateConsignmentPackageMockData::class));
    }

    #[Route(path: '/api/v3/packages/order-fulfilment/variants', name: "SellerCreateOrderFulfilmentPackageListViewV2", methods: ["POST"])]
    public function SellerCreateOrderFulfilmentPackageListViewV2(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, SellerCreateOrderFulfilmentPackageV2MockData::class));
    }

    #[Route(path: '/api/v3/variants/packages/consignment', name: "ConsignmentListView", methods: ["GET"])]
    public function ConsignmentListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ConsignmentMockData::class));
    }
}