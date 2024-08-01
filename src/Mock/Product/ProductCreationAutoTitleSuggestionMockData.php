<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class ProductCreationAutoTitleSuggestionMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "title_fa": "ست تی شرت و شلوارک دخترانه مدل یونیکورن کد ۳۰ رنگ سبز",
          "title_en": "",
          "hint": {
            "hint_fa": "ماهیت کالا + برند + کلمه مدل+مدل کالا",
            "hint_en": "Brand+Model+Division"
          },
          "enable_edit": true
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "title_fa": "ست تی شرت و شلوارک دخترانه مدل یونیکورن کد ۳ رنگ سبز",
          "title_en": "",
          "hint": {
            "hint_fa": "ماهیت کالا + برند + کلمه مدل+مدل کالا",
            "hint_en": "Brand+Model+Division"
          },
          "enable_edit": true
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "title_fa": "",
          "title_en": "",
          "enable_edit": null
        }
      }';
    }
}