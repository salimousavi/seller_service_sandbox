<?php

namespace App\Controller;

use App\Lib\Controller\AForm;
use App\Lib\Controller\AListView;
use App\Lib\Controller\AObjectView;
use App\Lib\Resolver\APIRequest;
use App\Mock\Auth\ClientCreateTokenMockData;
use App\Mock\Auth\ClientRefreshTokenMockData;
use App\Mock\Auth\ScopeMockData;
use App\Mock\LighteningDeal\LighteningDealBidsMockData;
use App\Mock\LighteningDeal\LighteningDealBidsSummaryMockData;
use App\Mock\LighteningDeal\LighteningDealChangePaymentMethodMockData;
use App\Mock\LighteningDeal\LighteningDealCreateBidMockData;
use App\Mock\LighteningDeal\LighteningDealDuplicateBidVariantMockData;
use App\Mock\LighteningDeal\LighteningDealProductMockData;
use App\Mock\LighteningDeal\LighteningDealProductVariantMockData;
use App\Mock\LighteningDeal\LighteningDealPromotionsMockData;
use App\Mock\LighteningDeal\LighteningDealValidatedPromotionsMockData;
use App\Mock\LighteningDeal\LighteningDealValidateProductMockData;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class LighteningDealAPIController extends AbstractAPIController
{
    #[Route(path: '/api/v3/lightening-deal/products', name: "LighteningDealProductListView", methods: ["GET"])]
    public function LighteningDealProductListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AListView($APIRequest, LighteningDealProductMockData::class))->execute());
    }
    #[Route(path: '/api/v3/lightening-deal/products/{product_id}', name: "LighteningDealProductVariantListView", methods: ["GET"])]
    public function LighteningDealProductVariantListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AListView($APIRequest, LighteningDealProductVariantMockData::class))->execute());
    }
    #[Route(path: '/api/v3/lightening-deal/promotions', name: "LighteningDealPromotionsListView", methods: ["GET"])]
    public function LighteningDealPromotionsListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AListView($APIRequest, LighteningDealPromotionsMockData::class))->execute());
    }
    #[Route(path: '/api/v3/lightening-deal/promotions/{productId}', name: "LighteningDealValidatedPromotionsListView", methods: ["GET"])]
    public function LighteningDealValidatedPromotionsListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AListView($APIRequest, LighteningDealValidatedPromotionsMockData::class))->execute());
    }
    #[Route(path: '/api/v3/lightening-deal/bids', name: "LighteningDealCreateBidForm", methods: ["POST"])]
    public function LighteningDealCreateBidForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AForm($APIRequest, LighteningDealCreateBidMockData::class))->execute());
    }
    #[Route(path: '/api/v3/lightening-deal/bids', name: "LighteningDealBidsListView", methods: ["GET"])]
    public function LighteningDealBidsListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AListView($APIRequest, LighteningDealBidsMockData::class))->execute());
    }
    #[Route(path: '/api/v3/lightening-deal/bidsSummary', name: "LighteningDealBidsSummaryObjectView", methods: ["GET"])]
    public function LighteningDealBidsSummaryObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AObjectView($APIRequest, LighteningDealBidsSummaryMockData::class))->execute());
    }
    #[Route(path: '/api/v3/lightening-deal/check-duplicate-dkp-in-promotion/{promotionId}/{productId}/{sellerId}', name: "LighteningDealDuplicateBidVariantObjectView", methods: ["GET"])]
    public function LighteningDealDuplicateBidVariantObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AObjectView($APIRequest, LighteningDealDuplicateBidVariantMockData::class))->execute());
    }
    #[Route(path: '/api/v3/lightening-deal/bids/{bidId}/payment-method', name: "LighteningDealChangePaymentMethodForm", methods: ["POST"])]
    public function LighteningDealChangePaymentMethodForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AForm($APIRequest, LighteningDealChangePaymentMethodMockData::class))->execute());
    }
    #[Route(path: '/api/v3/lightening-deal/validate/product/{productId}', name: "LighteningDealValidateProductObjectView", methods: ["GET"])]
    public function LighteningDealValidateProductObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponse((new AObjectView($APIRequest, LighteningDealValidateProductMockData::class))->execute());
    }
}