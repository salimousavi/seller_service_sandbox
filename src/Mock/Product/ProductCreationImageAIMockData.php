<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class ProductCreationImageAIMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "isValid": true,
          "data": {
            "5NcnR": ["واترمارک، نوشته و یا طرح های گرافیکی وجود دارد"]
          }
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "isValid": true,
          "data": []
        }
      }';
    }
}