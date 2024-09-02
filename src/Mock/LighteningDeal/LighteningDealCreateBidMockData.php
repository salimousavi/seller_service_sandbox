<?php

namespace App\Mock\LighteningDeal;

use App\Mock\AMockV2;

class LighteningDealCreateBidMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
            "status": "ok",
            "data": {
                "chargeWallet": true,
                "totalBIdsPrice": 7000000,
                "productVariantsCount": 1,
                "promotionsCount": 1,
                "totalPrice": 7000000,
                "totalPriceWallet": 7000000,
                "totalPriceCredit": 0,
                "variantQuantity": 1,
                "promotionsQuantity": 1
            }
        }';
    }
}