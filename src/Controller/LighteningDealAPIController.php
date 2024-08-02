<?php

namespace App\Controller;

use App\Lib\Controller\ResponseBuilder;
use App\Lib\Resolver\APIRequest;
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
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, LighteningDealProductMockData::class));
    }

    #[Route(path: '/api/v3/lightening-deal/products/{product_id}', name: "LighteningDealProductVariantListView", methods: ["GET"])]
    public function LighteningDealProductVariantListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, LighteningDealProductVariantMockData::class));
    }

    // TODO
    #[Route(path: '/api/v3/lightening-deal/promotions', name: "LighteningDealPromotionsListView", methods: ["GET"])]
    public function LighteningDealPromotionsListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, LighteningDealPromotionsMockData::class));
    }

    #[Route(path: '/api/v3/lightening-deal/promotions/{productId}', name: "LighteningDealValidatedPromotionsListView", methods: ["GET"])]
    public function LighteningDealValidatedPromotionsListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, LighteningDealValidatedPromotionsMockData::class));
    }

    // TODO
    #[Route(path: '/api/v3/lightening-deal/bids', name: "LighteningDealCreateBidForm", methods: ["POST"])]
    public function LighteningDealCreateBidForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, LighteningDealCreateBidMockData::class));
    }

    // TODO
    #[Route(path: '/api/v3/lightening-deal/bids', name: "LighteningDealBidsListView", methods: ["GET"])]
    public function LighteningDealBidsListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, LighteningDealBidsMockData::class));
    }

    #[Route(path: '/api/v3/lightening-deal/bidsSummary', name: "LighteningDealBidsSummaryObjectView", methods: ["GET"])]
    public function LighteningDealBidsSummaryObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, LighteningDealBidsSummaryMockData::class));
    }

    #[Route(path: '/api/v3/lightening-deal/check-duplicate-dkp-in-promotion/{promotionId}/{productId}/{sellerId}', name: "LighteningDealDuplicateBidVariantObjectView", methods: ["GET"])]
    public function LighteningDealDuplicateBidVariantObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, LighteningDealDuplicateBidVariantMockData::class));
    }

    #[Route(path: '/api/v3/lightening-deal/bids/{bidId}/payment-method', name: "LighteningDealChangePaymentMethodForm", methods: ["POST"])]
    public function LighteningDealChangePaymentMethodForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, LighteningDealChangePaymentMethodMockData::class));
    }

    #[Route(path: '/api/v3/lightening-deal/validate/product/{productId}', name: "LighteningDealValidateProductObjectView", methods: ["GET"])]
    public function LighteningDealValidateProductObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, LighteningDealValidateProductMockData::class));
    }
}