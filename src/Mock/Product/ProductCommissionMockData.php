<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class ProductCommissionMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
          "status": "ok",
          "data": {
            "canSell": true,
            "product": {
              "id": 1234566,
              "name": "هودی زنانه",
              "reference_price": 0,
              "brand": "متفرقه",
              "commission": "۱۵",
              "fd_cost": 500000
            }
          }
        }';
    }

    protected static function response2(): ?string
    {
        return '{
          "status": "ok",
          "data": {
            "canSell": false
          }
        }';
    }
}