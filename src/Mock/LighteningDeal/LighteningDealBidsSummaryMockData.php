<?php

namespace App\Mock\LighteningDeal;

use App\Mock\AMockV2;

class LighteningDealBidsSummaryMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "pending": 7,
          "payment": 0,
          "productSupply": 0,
          "approvedWinner": 0,
          "live": 0,
          "ended": 0,
          "lost": 0
        }
      }';
    }
}