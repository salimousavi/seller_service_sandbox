<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class ProductPublishMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "isValid": true
        }
      }';
    }
}