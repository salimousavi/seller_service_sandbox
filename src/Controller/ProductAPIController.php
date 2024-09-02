<?php

namespace App\Controller;

use App\Lib\Controller\AForm;
use App\Lib\Controller\AListView;
use App\Lib\Controller\AObjectView;
use App\Lib\Controller\ResponseBuilder;
use App\Lib\Resolver\APIRequest;
use App\Mock\Auth\ClientCreateTokenMockData;
use App\Mock\Auth\ClientRefreshTokenMockData;
use App\Mock\Auth\ScopeMockData;
use App\Mock\Product\BeingProductSellerViewMockData;
use App\Mock\Product\BrandCategoryCommissionMockData;
use App\Mock\Product\BrandRequestMockData;
use App\Mock\Product\CategoryAttributesValidatableMockData;
use App\Mock\Product\CategoryAttributesValidationMockData;
use App\Mock\Product\ContentCreationBrandRequestLogoImageMockData;
use App\Mock\Product\ContentCreationRequestUploadImageMockData;
use App\Mock\Product\DeleteDraftProductMockData;
use App\Mock\Product\DraftProductCountMockData;
use App\Mock\Product\DraftProductListMockData;
use App\Mock\Product\DraftProductMockData;
use App\Mock\Product\ProductAssignMockData;
use App\Mock\Product\ProductCategorySearchV2MockData;
use App\Mock\Product\ProductCommissionMockData;
use App\Mock\Product\ProductContentScoreMockData;
use App\Mock\Product\ProductCreationAutoTitleSuggestionMockData;
use App\Mock\Product\ProductCreationImageAIMockData;
use App\Mock\Product\ProductCreationSaveTitleValidationMockData;
use App\Mock\Product\ProductCreationStep2MockData;
use App\Mock\Product\ProductCreationStep2ValidationMockData;
use App\Mock\Product\ProductCreationStep5MockData;
use App\Mock\Product\ProductCreationUploadImageMockData;
use App\Mock\Product\ProductEditAutoTitleSuggestionMockData;
use App\Mock\Product\ProductEditFormMockData;
use App\Mock\Product\ProductEditMockData;
use App\Mock\Product\ProductManagementFilterSuggestViewMockData;
use App\Mock\Product\ProductPublishMockData;
use App\Mock\Product\ProductSearchSuggestionV2MockData;
use App\Mock\Product\ProductSearchV2MockData;
use App\Mock\Product\SearchBrandsMockData;
use App\Mock\Product\SellerDraftProductMockData;
use App\Mock\Product\SellerProductManagementFiltersMockData;
use App\Mock\Product\SellerProductManagementMockData;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ProductAPIController extends AbstractAPIController
{
    #[Route(path: '/api/v3/product-creation/search/v2', name: "ProductSearchListViewV2", methods: ["GET"])]
    public function ProductSearchListViewV2(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ProductSearchV2MockData::class));
    }

    #[Route(path: '/api/v3/product-creation/search/suggestion/v2', name: "ProductSearchSuggestionListViewV2", methods: ["GET"])]
    public function ProductSearchSuggestionListViewV2(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ProductSearchSuggestionV2MockData::class));
    }

    #[Route(path: '/api/v3/product-creation/be-seller/{product_id}', name: "BeingProductSellerView", methods: ["GET"])]
    public function BeingProductSellerView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, BeingProductSellerViewMockData::class));
    }

    #[Route(path: '/api/v3/product-creation/search/category/v2/{keyword}', name: "ProductCategorySearchListViewV2", methods: ["GET"])]
    public function ProductCategorySearchListViewV2(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ProductCategorySearchV2MockData::class));
    }

    #[Route(path: '/api/v3/product-creation/category/{category_id}/validation', name: "ProductCreationStep2ObjectView", methods: ["GET"])]
    public function ProductCreationStep2ObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ProductCreationStep2MockData::class));
    }

    #[Route(path: '/api/v3/product-creation/product/detail/validation', name: "ProductCreationStep2ValidationForm", methods: ["POST"])]
    public function ProductCreationStep2ValidationForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ProductCreationStep2ValidationMockData::class));
    }

    #[Route(path: '/api/v3/product-creation/draft-product/count', name: "DraftProductCountObjectView", methods: ["GET"])]
    public function DraftProductCountObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, DraftProductCountMockData::class));
    }

    #[Route(path: '/api/v3/product-creation/draft-product/{draft_product_id}', name: "DraftProductObjectView", methods: ["GET"])]
    public function DraftProductObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, DraftProductMockData::class));
    }

    #[Route(path: '/api/v3/product-creation/{draft_product_id}/auto-title', name: "ProductCreationAutoTitleSuggestionObjectView", methods: ["GET"])]
    public function ProductCreationAutoTitleSuggestionObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ProductCreationAutoTitleSuggestionMockData::class));
    }

    #[Route(path: '/api/v3/product-creation/auto-title/save', name: "ProductCreationSaveTitleValidationForm", methods: ["POST"])]
    public function ProductCreationSaveTitleValidationForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ProductCreationSaveTitleValidationMockData::class));
    }

    #[Route(path: '/api/v3/product-creation/attributes/{category_id}', name: "CategoryAttributesValidatableObjectView", methods: ["GET"])]
    public function CategoryAttributesValidatableObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, CategoryAttributesValidatableMockData::class));
    }

    #[Route(path: '/api/v3/product-creation/attributes', name: "CategoryAttributesValidationForm", methods: ["POST"])]
    public function CategoryAttributesValidationForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, CategoryAttributesValidationMockData::class));
    }

    #[Route(path: '/api/v3/product-creation/images/requests/brand-logo/upload', name: "ContentCreationBrandRequestLogoImageForm", methods: ["POST"])]
    public function ContentCreationBrandRequestLogoImageForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ContentCreationBrandRequestLogoImageMockData::class));
    }

    #[Route(path: '/api/v3/product-creation/images/requests/upload', name: "ContentCreationRequestUploadImageForm", methods: ["POST"])]
    public function ContentCreationRequestUploadImageForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ContentCreationRequestUploadImageMockData::class));
    }

    #[Route(path: '/api/v3/product-creation/images/upload', name: "ProductCreationUploadImageForm", methods: ["POST"])]
    public function ProductCreationUploadImageForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ProductCreationUploadImageMockData::class));
    }

    #[Route(path: '/api/v3/product-creation/images/ai', name: "ProductCreationImageAIForm", methods: ["POST"])]
    public function ProductCreationImageAIForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ProductCreationImageAIMockData::class));
    }

    #[Route(path: '/api/v3/product-creation/save', name: "ProductCreationStep5Form", methods: ["POST"])]
    public function ProductCreationStep5Form(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ProductCreationStep5MockData::class));
    }

    #[Route(path: '/api/v3/product-creation/assign', name: "ProductAssignForm", methods: ["POST"])]
    public function ProductAssignForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ProductAssignMockData::class));
    }

    #[Route(path: '/api/v3/product-creation/brand/request', name: "BrandRequestForm", methods: ["POST"])]
    public function BrandRequestForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, BrandRequestMockData::class));
    }

    #[Route(path: '/api/v3/product-creation/brand', name: "SearchBrandsListView", methods: ["GET"])]
    public function SearchBrandsListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, SearchBrandsMockData::class));
    }

    #[Route(path: '/api/v3/draft-products/seller', name: "SellerDraftProductListView", methods: ["GET"])]
    public function SellerDraftProductListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, SellerDraftProductMockData::class));
    }

    #[Route(path: '/api/v3/draft-products/{draft_product_id}', name: "DeleteDraftProductForm", methods: ["DELETE"])]
    public function DeleteDraftProductForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, DeleteDraftProductMockData::class));
    }

    #[Route(path: '/api/v3/products/seller', name: "SellerProductManagementListView", methods: ["GET"])]
    public function SellerProductManagementListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, SellerProductManagementMockData::class));
    }

    #[Route(path: '/api/v3/products/filters/seller', name: "SellerProductManagementFiltersObjectView", methods: ["GET"])]
    public function SellerProductManagementFiltersObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, SellerProductManagementFiltersMockData::class));
    }

    #[Route(path: '/api/v3/products/{product_id}/score', name: "ProductContentScoreObjectView", methods: ["GET"])]
    public function ProductContentScoreObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ProductContentScoreMockData::class));
    }

    #[Route(path: '/api/v3/product-edit/{product_id}/publish', name: "ProductPublishForm", methods: ["POST"])]
    public function ProductPublishForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ProductPublishMockData::class));
    }

    #[Route(path: '/api/v3/product-edit/{product_id}', name: "ProductEditObjectView", methods: ["GET"])]
    public function ProductEditObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ProductEditMockData::class));
    }

    #[Route(path: '/api/v3/product-edit/{product_id}', name: "ProductEditForm", methods: ["PUT"])]
    public function ProductEditForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ProductEditFormMockData::class));
    }

    #[Route(path: '/api/v3/product-edit/{category_id}', name: "ProductEditAutoTitleSuggestionForm", methods: ["POST"])]
    public function ProductEditAutoTitleSuggestionForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ProductEditAutoTitleSuggestionMockData::class));
    }

    #[Route(path: '/api/v3/commission/commissions/{product_id}', name: "ProductCommissionObjectView", methods: ["GET"])]
    public function ProductCommissionObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, ProductCommissionMockData::class));
    }

    #[Route(path: '/api/v3/commission/{category_id}/{brand_id}', name: "BrandCategoryCommissionObjectView", methods: ["GET"])]
    public function BrandCategoryCommissionObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, BrandCategoryCommissionMockData::class));
    }
}