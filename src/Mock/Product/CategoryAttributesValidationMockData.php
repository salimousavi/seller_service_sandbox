<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class CategoryAttributesValidationMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "data": {
            "attributes": {
              "5785": {
                "2749": "۴ تیغ + ۶ تیغ + همزن سس\nتیغه ها قابل جدا شدن",
                "2800": "استیل",
                "3579": 3800,
                "6666": "استیل ضد زنگ",
                "3520": 1,
                "4672": 3.5,
                "4673": "۳.۵",
                "5374": [14770],
                "5478": [17140],
                "5504": [14620],
                "5505": [18248],
                "5508": [15335],
                "5509": [16571],
                "2686": null,
                "5503": [0],
                "5281": [0],
                "119": null,
                "5426": [0],
                "5175": [0],
                "5080": [0],
                "4667": null,
                "4621": null,
                "3571": null,
                "3518": null,
                "3435": null,
                "2786": null
              }
            },
            "width": 0,
            "height": 0,
            "length": 0,
            "weight": 0
          },
          "isValid": true
        }
      }';
    }
}