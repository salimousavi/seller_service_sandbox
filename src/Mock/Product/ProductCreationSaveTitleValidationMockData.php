<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class ProductCreationSaveTitleValidationMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
          "isValid": true,
          "data": {
            "title_fa": "کاور قاب گارد گوشی طرح پروانه کد TPU-385 مناسب برای گوشی موبایل اپل iPhone 13 / 14",
            "title_en": null,
            "suggested_title_fa": "",
            "suggested_title_en": "",
            "url_code": "کاور-قاب-گارد-گوشی-طرح-پروانه-کد-tpu-385-مناسب-برای-گوشی-موبایل-اپل-iphone-13-14"
          }
        }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "isValid": true,
          "data": {
            "title_fa": "کوله پشتی مدل برجسته طرح آدم فضایی",
            "title_en": null,
            "suggested_title_fa": "کوله پشتی مدل کوله پشتی",
            "suggested_title_en": "",
            "url_code": "کوله-پشتی-مدل-برجسته-طرح-آدم-فضایی"
          }
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "isValid": true,
          "data": {
            "title_fa": "کاور قاب گارد گوشی طرح پروانه کد TPU-384 مناسب برای گوشی موبایل اپل iPhone 13 / 14",
            "title_en": null,
            "suggested_title_fa": "",
            "suggested_title_en": "",
            "url_code": "کاور-قاب-گارد-گوشی-طرح-پروانه-کد-tpu-384-مناسب-برای-گوشی-موبایل-اپل-iphone-13-14"
          }
        }
      }';
    }
}