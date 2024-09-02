<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class ProductEditAutoTitleSuggestionMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "title_fa": "شلوار جین بچگانه مدل طرح لی رنگ زغالی",
          "title_en": "",
          "hint": {
            "hint_fa": "ماهیت کالا+برند+ کلمه مدل+مدل کالا",
            "hint_en": null
          },
          "enable_edit": true
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "title_fa": "",
          "title_en": "",
          "enable_edit": null
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "title_fa": "شلوارک مردانه لیورجی مدل 16248876",
          "title_en": "",
          "hint": {
            "hint_fa": "ماهیت کالا+برند کالا+کلمه \"مدل\"+مدل کالا",
            "hint_en": "Brand+Model+Division+For Men"
          },
          "enable_edit": true
        }
      }';
    }
}