<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class ProductCreationStep5MockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "data": {
            "product_id": 16248972
          }
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "data": {
            "product_id": 16248958
          }
        }
      }';
    }
}