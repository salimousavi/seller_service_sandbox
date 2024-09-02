<?php

namespace App\Mock\LighteningDeal;

use App\Mock\AMockV2;

class LighteningDealDuplicateBidVariantMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
            "status": "ok",
            "data": {
                "message": ""
            }
        }';
    }
}