<?php

namespace App\Mock\Order;

use App\Mock\AMockV2;

class SellerOrderStatisticsMockData extends AMockV2
{

    protected static function response1(): ?string
    {
        return '{
            "status": "ok",
            "data": {
                "all_shipped_by_dk": 255,
                "shipped_by_seller_count": 2
            }
        }';
    }
}