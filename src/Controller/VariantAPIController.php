<?php

namespace App\Controller;

use App\Lib\Controller\AForm;
use App\Lib\Controller\AListView;
use App\Lib\Controller\AObjectView;
use App\Lib\Resolver\APIRequest;
use App\Mock\Variant\ActivateProductVariantsB2BMockData;
use App\Mock\Variant\ArchiveProductVariantMockData;
use App\Mock\Variant\ProductConfigExcelExportMockData;
use App\Mock\Variant\ProductVariantB2BModalMockData;
use App\Mock\Variant\ProductVariantGoldModalMockData;
use App\Mock\Variant\ProductVariantGoldModalPriceCalculatorMockData;
use App\Mock\Variant\ProductVariantImportMockData;
use App\Mock\Variant\ProductVariantMockData;
use App\Mock\Variant\UpdateProductVariantActivationMockData;
use App\Mock\Variant\UpdateProductVariantB2BPricesMockData;
use App\Mock\Variant\UpdateProductVariantGoldModalMockData;
use App\Mock\Variant\UpdateProductVariantMockData;
use App\Mock\Variant\UpdateVariantStockMockData;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class VariantAPIController extends AbstractAPIController
{
    #[Route(path: '/api/v3/variants', name: "ProductVariantListView", methods: ["GET"])]
    public function ProductVariantListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AListView($APIRequest, ProductVariantMockData::class))->execute());
    }

    #[Route(path: '/api/v3/variants/{variant_id}', name: "ProductVariantObjectView", methods: ["GET"])]
    public function ProductVariantObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AObjectView($APIRequest, ProductVariantMockData::class))->execute());
    }

    #[Route(path: '/api/v3/variants/b2b-activation', name: "ActivateProductVariantsB2BForm", methods: ["PUT"])]
    public function ActivateProductVariantsB2BForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AForm($APIRequest, ActivateProductVariantsB2BMockData::class))->execute());
    }

    #[Route(path: '/api/v3/variants/{variant_id}', name: "UpdateProductVariantForm", methods: ["PUT"])]
    public function UpdateProductVariantForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AForm($APIRequest, UpdateProductVariantMockData::class))->execute());
    }

    #[Route(path: '/api/v3/variants/import', name: "ProductVariantImportForm", methods: ["POST"])]
    public function ProductVariantImportForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AForm($APIRequest, ProductVariantImportMockData::class))->execute());
    }

    #[Route(path: '/api/v3/variants/export', name: "ProductConfigExcelExportForm", methods: ["POST"])]
    public function ProductConfigExcelExportForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AForm($APIRequest, ProductConfigExcelExportMockData::class))->execute());
    }

    #[Route(path: '/api/v3/variants/{variant_id}/gold', name: "ProductVariantGoldModalObjectView", methods: ["GET"])]
    public function ProductVariantGoldModalObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AObjectView($APIRequest, ProductVariantGoldModalMockData::class))->execute());
    }

    #[Route(path: '/api/v3/variants/{variant_id}/gold', name: "UpdateProductVariantGoldModalForm", methods: ["PUT"])]
    public function UpdateProductVariantGoldModalForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AForm($APIRequest, UpdateProductVariantGoldModalMockData::class))->execute());
    }

    #[Route(path: '/api/v3/variants/{variant_id}/price-calculator', name: "ProductVariantGoldModalPriceCalculatorObjectView", methods: ["GET"])]
    public function ProductVariantGoldModalPriceCalculatorObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AObjectView($APIRequest, ProductVariantGoldModalPriceCalculatorMockData::class))->execute());
    }

    #[Route(path: '/api/v3/variants/{variant_id}/activation', name: "UpdateProductVariantActivationForm", methods: ["PUT"])]
    public function UpdateProductVariantActivationForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AForm($APIRequest, UpdateProductVariantActivationMockData::class))->execute());
    }

    #[Route(path: '/api/v3/variants/{variant_id}/b2b-prices', name: "ProductVariantB2BModalObjectView", methods: ["GET"])]
    public function ProductVariantB2BModalObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AObjectView($APIRequest, ProductVariantB2BModalMockData::class))->execute());
    }

    #[Route(path: '/api/v3/variants/{variant_id}/b2b-prices', name: "UpdateProductVariantB2BPricesForm", methods: ["PUT"])]
    public function UpdateProductVariantB2BPricesForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AForm($APIRequest, UpdateProductVariantB2BPricesMockData::class))->execute());
    }

    #[Route(path: '/api/v3/variants/{variant_id}/archive', name: "ArchiveProductVariantForm", methods: ["PUT"])]
    public function ArchiveProductVariantForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AForm($APIRequest, ArchiveProductVariantMockData::class))->execute());
    }

    #[Route(path: '/api/v3/variants/{variant_id}/seller-stock', name: "UpdateVariantStockForm", methods: ["PATCH"])]
    public function UpdateVariantStockForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AForm($APIRequest, UpdateVariantStockMockData::class))->execute());
    }

}