<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class BrandCategoryCommissionMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "commission": "17%"
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "commission": "10%"
        }
      }';
    }
}