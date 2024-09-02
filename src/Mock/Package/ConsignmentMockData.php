<?php

namespace App\Mock\Package;

use App\Mock\AMockV2;

class ConsignmentMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "sort_data": {
            "sort_column": "_id",
            "sort_order": "desc",
            "sort_columns": ["_id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 10,
            "total_pages": 4,
            "total_rows": 34
          },
          "form_data": [],
          "items": [
            {
              "product_variant_id": 55433738,
              "product_variant_title": "دستمال کاغذی شکوه مدل جیبی بسته 24 عددی | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 5133707,
              "link_to_product": "https://www.digikala.com/product/dkp-5133707?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjU3NTQ0MSwicHJvZHVjdF9pZCI6NTEzMzcwNywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjU4In0.Ws6r8wXZaOIzpUG7YXzr6kqVhHZawhCQSWt_4ocRCpI",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/5d9e77f264e0dafd70af96e46ab3be4b601bef2e_1620643203.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 11
            },
            {
              "product_variant_id": 53654829,
              "product_variant_title": "فندک مدل لایتر بسته 5 عددی | چند رنگ | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 1127822,
              "link_to_product": "https://www.digikala.com/product/dkp-1127822?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjU3NTQ0MSwicHJvZHVjdF9pZCI6MTEyNzgyMiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjU4In0.Ufn8BRLwjrhS2c2TBCgt3g6LhIyqI2BpSf62_BZ7Zzs",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/5354445.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 1,
              "allowed_count_consignment": 80
            },
            {
              "product_variant_id": 53654803,
              "product_variant_title": "فندک مدل f5 | چند رنگ | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 3791050,
              "link_to_product": "https://www.digikala.com/product/dkp-3791050?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjU3NTQ0MSwicHJvZHVjdF9pZCI6Mzc5MTA1MCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjU4In0.S9yD_BGewyUm3v4bBHW6le1VbRd1JMLZpoo9xXHZNWQ",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/cfbf79248325e82292d12eda109bf6d9cdd1f485_1605693908.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 4,
              "allowed_count_consignment": 11
            },
            {
              "product_variant_id": 50906074,
              "product_variant_title": "کیسه اسلایدر بادوک مدل Large new بسته 15 عددی | بی رنگ | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 7120976,
              "link_to_product": "https://www.digikala.com/product/dkp-7120976?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjU3NTQ0MSwicHJvZHVjdF9pZCI6NzEyMDk3NiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjU4In0.s9hMFS5e0lMyoCc-dnbloHm4IIjFO8DwGLu40BaVvGs",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/c30b37d81a456b24726c27a704a0c425ead21a37_1637420063.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 5,
              "allowed_count_consignment": 37
            },
            {
              "product_variant_id": 50836361,
              "product_variant_title": "مایع سوسک کش شهاب مدل Roach Killer  حجم 1000 میلی لیتر | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 8627894,
              "link_to_product": "https://www.digikala.com/product/dkp-8627894?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjU3NTQ0MSwicHJvZHVjdF9pZCI6ODYyNzg5NCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjU5In0.mfBvHj50H14WVllCkg6FNAYS_1ZXUiGQmOla-1nP2eM",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/ae1ba07b5f85c1a067a293d33151a7272d0079a2_1653820673.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 2,
              "allowed_count_consignment": 9
            },
            {
              "product_variant_id": 50830559,
              "product_variant_title": "فندک کد 100 بسته 5 عددی | چند رنگ | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 1598294,
              "link_to_product": "https://www.digikala.com/product/dkp-1598294?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjU3NTQ0MSwicHJvZHVjdF9pZCI6MTU5ODI5NCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjU5In0.aPiOuCeBdWSkMW5PFUhQEtTYMKRB7cJW6yB_tw9RpbU",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/111051085.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 1,
              "allowed_count_consignment": 8
            },
            {
              "product_variant_id": 50714280,
              "product_variant_title": "کیسه اسلایدر بادوک مدل L20 بسته 20 عددی | بی رنگ | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 6746497,
              "link_to_product": "https://www.digikala.com/product/dkp-6746497?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjU3NTQ0MSwicHJvZHVjdF9pZCI6Njc0NjQ5NywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjU5In0.QeGfSBeA_3l3jFAIEgXQJINujOyUQ9uRYtszyyhSodg",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/e1da03055138a15c325725c1b52f94f1db34aaf0_1634135367.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 1,
              "allowed_count_consignment": 29
            },
            {
              "product_variant_id": 50714258,
              "product_variant_title": "کیسه اسلایدر بادوک مدل 20x18 بسته 30 عددی | بی رنگ | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 8304882,
              "link_to_product": "https://www.digikala.com/product/dkp-8304882?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjU3NTQ0MSwicHJvZHVjdF9pZCI6ODMwNDg4MiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjU5In0._1QkAlh69QkbZLflKuRGjTabAQ-7MbxqzNCR36sSfA0",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/580cafb69382bf3f9d27cddb665cd68c75ff5697_1650217247.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 5,
              "allowed_count_consignment": 5
            },
            {
              "product_variant_id": 50677213,
              "product_variant_title": "کیسه زباله بادوک مدل S5 بسته 10 عددی | مشکی | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 3690143,
              "link_to_product": "https://www.digikala.com/product/dkp-3690143?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjU3NTQ0MSwicHJvZHVjdF9pZCI6MzY5MDE0MywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjU5In0.lFMkZ_WpSTzJ6tPxWadiB-81mNUth09CnEH2fpe_9SY",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/344cb3abc334e8bc360d117e20827cd655789984_1604756974.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 7,
              "allowed_count_consignment": 67
            },
            {
              "product_variant_id": 50626229,
              "product_variant_title": "پودر سوسک و مورچه کش شهاب کد 05 وزن 150 گرم | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 1550450,
              "link_to_product": "https://www.digikala.com/product/dkp-1550450?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjU3NTQ0MSwicHJvZHVjdF9pZCI6MTU1MDQ1MCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjU5In0.1lzhcf7ygHDUFbmUJiAmfCbkdxHAYqZZ5RtZdlXTitw",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/b6bcbc459fca0776cf532b341d6c5f309bab0c23_1701033179.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 4,
              "allowed_count_consignment": 6
            }
          ],
          "meta_data": {
            "filters": {
              "shipping_natures": {
                "1": "کوچک",
                "3": "متوسط",
                "2": "بزرگ"
              }
            }
          }
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "sort_data": {
            "sort_column": "_id",
            "sort_order": "desc",
            "sort_columns": ["_id"]
          },
          "pager": {
            "page": 3,
            "item_per_page": 200,
            "total_pages": 3,
            "total_rows": 477
          },
          "form_data": [],
          "items": [
            {
              "product_variant_id": 21526565,
              "product_variant_title": "کیف کلاسوری مدل m002 مناسب برای تبلت ایسوس fonepad 7 FE380 CG | سفید | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 5454517,
              "link_to_product": "https://www.digikala.com/product/dkp-5454517?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NTQ1NDUxNywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.xvQnpVQExv9Nb5NhE6zMAHGcdVWMCteGdrxCRzYtoN8",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/66d779cef3ab89ef4999848a8a9d025c64cb5786_1623596557.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 1
            },
            {
              "product_variant_id": 21526564,
              "product_variant_title": "کیف کلاسوری مدل m002 مناسب برای تبلت ایسوس fonepad 7 FE380 CG | مشکی | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 5454517,
              "link_to_product": "https://www.digikala.com/product/dkp-5454517?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NTQ1NDUxNywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.xvQnpVQExv9Nb5NhE6zMAHGcdVWMCteGdrxCRzYtoN8",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/66d779cef3ab89ef4999848a8a9d025c64cb5786_1623596557.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 2
            },
            {
              "product_variant_id": 20685486,
              "product_variant_title": "قلم لمسی مدل 001 | بنفش | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 3402894,
              "link_to_product": "https://www.digikala.com/product/dkp-3402894?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MzQwMjg5NCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.9fEqftGe64PgcNIl6NI-ONgsLeJn1PFWpRLEx0xGssU",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/78bf1dbb443d7c61a3b2ec083a467d5bdaadda78_1601750123.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 3,
              "allowed_count_consignment": 33
            },
            {
              "product_variant_id": 20685485,
              "product_variant_title": "قلم لمسی مدل 001 | آبی | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 3402894,
              "link_to_product": "https://www.digikala.com/product/dkp-3402894?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MzQwMjg5NCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.9fEqftGe64PgcNIl6NI-ONgsLeJn1PFWpRLEx0xGssU",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/78bf1dbb443d7c61a3b2ec083a467d5bdaadda78_1601750123.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 29,
              "allowed_count_consignment": 1
            },
            {
              "product_variant_id": 20685482,
              "product_variant_title": "قلم لمسی مدل 001 | نقره ای | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 3402894,
              "link_to_product": "https://www.digikala.com/product/dkp-3402894?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MzQwMjg5NCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.9fEqftGe64PgcNIl6NI-ONgsLeJn1PFWpRLEx0xGssU",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/78bf1dbb443d7c61a3b2ec083a467d5bdaadda78_1601750123.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 38,
              "allowed_count_consignment": 30
            },
            {
              "product_variant_id": 20685481,
              "product_variant_title": "قلم لمسی مدل 001 | قرمز | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 3402894,
              "link_to_product": "https://www.digikala.com/product/dkp-3402894?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MzQwMjg5NCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.9fEqftGe64PgcNIl6NI-ONgsLeJn1PFWpRLEx0xGssU",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/78bf1dbb443d7c61a3b2ec083a467d5bdaadda78_1601750123.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 10,
              "allowed_count_consignment": 9
            },
            {
              "product_variant_id": 20685480,
              "product_variant_title": "قلم لمسی مدل 001 | فیروزه ای | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 3402894,
              "link_to_product": "https://www.digikala.com/product/dkp-3402894?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MzQwMjg5NCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.9fEqftGe64PgcNIl6NI-ONgsLeJn1PFWpRLEx0xGssU",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/78bf1dbb443d7c61a3b2ec083a467d5bdaadda78_1601750123.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 9,
              "allowed_count_consignment": 9
            },
            {
              "product_variant_id": 20546879,
              "product_variant_title": "کاور مدل BULLDOG مناسب برای گوشی موبایل سامسونگ GALAXY A6 PLUS | مشکی | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 6158286,
              "link_to_product": "https://www.digikala.com/product/dkp-6158286?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NjE1ODI4NiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.9G5JpFdfy9qOp09oMXvpOjg0JrT3prt_crLn0Wa65fI",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/74dee8d6f126e875daccff781f430d06ce4d1c59_1629276245.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 2
            },
            {
              "product_variant_id": 20467717,
              "product_variant_title": "قلم لمسی مدل 001 بسته 2 عددی | آبی | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4685802,
              "link_to_product": "https://www.digikala.com/product/dkp-4685802?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDY4NTgwMiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.cs9DxTGaPgaT20PUfnT1yZ8BsoNOWujhsmcHaA9FZKQ",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/38db288aff0b23f5ab65fc518df3dfd3fcfe96ac_1615470113.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 1,
              "allowed_count_consignment": 13
            },
            {
              "product_variant_id": 20467716,
              "product_variant_title": "قلم لمسی مدل 001 بسته 2 عددی | بنفش | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4685802,
              "link_to_product": "https://www.digikala.com/product/dkp-4685802?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDY4NTgwMiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.cs9DxTGaPgaT20PUfnT1yZ8BsoNOWujhsmcHaA9FZKQ",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/38db288aff0b23f5ab65fc518df3dfd3fcfe96ac_1615470113.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 11,
              "allowed_count_consignment": 5
            },
            {
              "product_variant_id": 20467715,
              "product_variant_title": "قلم لمسی مدل 001 بسته 2 عددی | نقره ای | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4685802,
              "link_to_product": "https://www.digikala.com/product/dkp-4685802?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDY4NTgwMiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.cs9DxTGaPgaT20PUfnT1yZ8BsoNOWujhsmcHaA9FZKQ",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/38db288aff0b23f5ab65fc518df3dfd3fcfe96ac_1615470113.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 7,
              "allowed_count_consignment": 50
            },
            {
              "product_variant_id": 20467714,
              "product_variant_title": "قلم لمسی مدل 001 بسته 2 عددی | طلایی | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4685802,
              "link_to_product": "https://www.digikala.com/product/dkp-4685802?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDY4NTgwMiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.cs9DxTGaPgaT20PUfnT1yZ8BsoNOWujhsmcHaA9FZKQ",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/38db288aff0b23f5ab65fc518df3dfd3fcfe96ac_1615470113.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 9,
              "allowed_count_consignment": 40
            },
            {
              "product_variant_id": 20467713,
              "product_variant_title": "قلم لمسی مدل 001 بسته 2 عددی | سبز | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4685802,
              "link_to_product": "https://www.digikala.com/product/dkp-4685802?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDY4NTgwMiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.cs9DxTGaPgaT20PUfnT1yZ8BsoNOWujhsmcHaA9FZKQ",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/38db288aff0b23f5ab65fc518df3dfd3fcfe96ac_1615470113.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 1,
              "allowed_count_consignment": 20
            },
            {
              "product_variant_id": 20467712,
              "product_variant_title": "قلم لمسی مدل 001 بسته 2 عددی | قرمز | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4685802,
              "link_to_product": "https://www.digikala.com/product/dkp-4685802?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDY4NTgwMiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.cs9DxTGaPgaT20PUfnT1yZ8BsoNOWujhsmcHaA9FZKQ",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/38db288aff0b23f5ab65fc518df3dfd3fcfe96ac_1615470113.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 2,
              "allowed_count_consignment": 10
            },
            {
              "product_variant_id": 20467471,
              "product_variant_title": "قلم لمسی مدل Bi | طلایی | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 6169698,
              "link_to_product": "https://www.digikala.com/product/dkp-6169698?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NjE2OTY5OCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.fneiKZyhBswRgbRRmpDTn1PCIQQ67HtO3UUHsR_J42Q",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/a662f76f34d67794af4001fd46ef5e33e747807f_1629462558.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 9,
              "allowed_count_consignment": 20
            },
            {
              "product_variant_id": 20467470,
              "product_variant_title": "قلم لمسی مدل Bi | بنفش | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 6169698,
              "link_to_product": "https://www.digikala.com/product/dkp-6169698?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NjE2OTY5OCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.fneiKZyhBswRgbRRmpDTn1PCIQQ67HtO3UUHsR_J42Q",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/a662f76f34d67794af4001fd46ef5e33e747807f_1629462558.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 15,
              "allowed_count_consignment": 50
            },
            {
              "product_variant_id": 20467469,
              "product_variant_title": "قلم لمسی مدل Bi | سبز | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 6169698,
              "link_to_product": "https://www.digikala.com/product/dkp-6169698?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NjE2OTY5OCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.fneiKZyhBswRgbRRmpDTn1PCIQQ67HtO3UUHsR_J42Q",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/a662f76f34d67794af4001fd46ef5e33e747807f_1629462558.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 10,
              "allowed_count_consignment": 50
            },
            {
              "product_variant_id": 20467468,
              "product_variant_title": "قلم لمسی مدل Bi | فیروزه ای | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 6169698,
              "link_to_product": "https://www.digikala.com/product/dkp-6169698?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NjE2OTY5OCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.fneiKZyhBswRgbRRmpDTn1PCIQQ67HtO3UUHsR_J42Q",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/a662f76f34d67794af4001fd46ef5e33e747807f_1629462558.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 20,
              "allowed_count_consignment": 37
            },
            {
              "product_variant_id": 20467467,
              "product_variant_title": "قلم لمسی مدل Bi | نقره ای | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 6169698,
              "link_to_product": "https://www.digikala.com/product/dkp-6169698?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NjE2OTY5OCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.fneiKZyhBswRgbRRmpDTn1PCIQQ67HtO3UUHsR_J42Q",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/a662f76f34d67794af4001fd46ef5e33e747807f_1629462558.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 13,
              "allowed_count_consignment": 50
            },
            {
              "product_variant_id": 20467466,
              "product_variant_title": "قلم لمسی مدل Bi | قرمز | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 6169698,
              "link_to_product": "https://www.digikala.com/product/dkp-6169698?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NjE2OTY5OCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.fneiKZyhBswRgbRRmpDTn1PCIQQ67HtO3UUHsR_J42Q",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/a662f76f34d67794af4001fd46ef5e33e747807f_1629462558.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 8,
              "allowed_count_consignment": 20
            },
            {
              "product_variant_id": 20240931,
              "product_variant_title": "شارژر دیواری مدل EP-TA20UWE همراه با کابل microUSB | سفید | گارانتی سلامت فیزیکی کالا",
              "product_id": 361387,
              "link_to_product": "https://www.digikala.com/product/dkp-361387?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MzYxMzg3LCJleHBpcmVfdGltZSI6IjIwMjQtMDgtMDEgMTk6NTQ6NDUifQ.7f70XZ_oOWWMLQr2esIwvAm88X2_NAGNHzoycSRnSyw",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/1719907.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 28
            },
            {
              "product_variant_id": 19458489,
              "product_variant_title": "محافظ لنز دوربین مدل ATHENE مناسب برای گوشی موبایل اپل iPhone 7 | قرمز | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 1020995,
              "link_to_product": "https://www.digikala.com/product/dkp-1020995?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MTAyMDk5NSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.40yxpH8df51qZHaU-t32manJLeauNj-HjgBRlcloOQQ",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/4940124.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 1,
              "allowed_count_consignment": 10
            },
            {
              "product_variant_id": 18656598,
              "product_variant_title": "بند مدل BRG - NRNJi مناسب برای مچ بند هوشمند شیائومی Mi band 5 / 6  | سفید | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 5767347,
              "link_to_product": "https://www.digikala.com/product/dkp-5767347?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NTc2NzM0NywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.scr40wV-NX-KpEwgiNAsfoa5vdVi4xcfQ7oJey2WLRQ",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/068e5acba1f3a37bfc297d0f9e54c400556fcc4c_1626378818.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": "",
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 17
            },
            {
              "product_variant_id": 18656094,
              "product_variant_title": "بند مدل Ve  مناسب برای مچ بند هوشمند شیائومی Mi band 5 / 6 | سفید | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 5767238,
              "link_to_product": "https://www.digikala.com/product/dkp-5767238?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NTc2NzIzOCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.sIRpfJgYT0lbtu0hF5ZTUw0Z-7_H9NynPa8Vj6F9P4o",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/d77a7ce5de45b4ea0067376438f9ba6609a1653f_1626378066.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 11
            },
            {
              "product_variant_id": 18655907,
              "product_variant_title": "بند مدل QHVYi - GL مناسب برای مچ بند هوشمند شیائومی Mi band 5 / 6  | یشمی | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 5767194,
              "link_to_product": "https://www.digikala.com/product/dkp-5767194?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NTc2NzE5NCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.A4sB_fiJ3itUltfdK_IM2JZxCAauFtG4jtNZWuDzegM",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/c0bf7bbf62f0c0a81f75f8db0efe4a4f73c394a6_1626377674.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 11
            },
            {
              "product_variant_id": 18655861,
              "product_variant_title": "بند مدل SHKL- BBR مناسب برای مچ بند هوشمند شیائومی Mi band 5 / 6  | خاکستری | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 5767169,
              "link_to_product": "https://www.digikala.com/product/dkp-5767169?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NTc2NzE2OSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.KfIXlOI298H05dr7dVa_lkOE7FBpp4j2V6P8CL_lXBw",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/5c890f59a2faca26d5f0474a2fab35799ed3d5e1_1626377321.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 8
            },
            {
              "product_variant_id": 18655625,
              "product_variant_title": "بند مدل TRH - SNG مناسب برای مچ بند هوشمند شیائومی Mi band 5 / 6  | سفید | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 5767120,
              "link_to_product": "https://www.digikala.com/product/dkp-5767120?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NTc2NzEyMCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.Bi2jNtRZM6kYTQ8Me3NYSFFlPbwM6vr-1MVfIQyBgik",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/ae1b898300cf441b48cd57adc3ed79986eadf64e_1626377071.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 2
            },
            {
              "product_variant_id": 18655598,
              "product_variant_title": "بند مدل BRGSBZ مناسب برای مچ بند هوشمند شیائومی Mi band 5 / 6 | صورتی | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 5767116,
              "link_to_product": "https://www.digikala.com/product/dkp-5767116?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NTc2NzExNiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.NDstl1Xuytfue_n72FXor8VuOY2nSb2qgcONHqezGd0",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/b7562f5799123eccb466b3553b40264736c122f0_1626377019.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 8
            },
            {
              "product_variant_id": 18655202,
              "product_variant_title": "بند مدل LB - GHRMZ مناسب برای مچ بند هوشمند شیائومی Mi band 5 / 6  | سفید | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 5767098,
              "link_to_product": "https://www.digikala.com/product/dkp-5767098?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NTc2NzA5OCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.5H0qepJlNA-EzycVIBYWJpfuRss0FEkHgMfN2vSXnNs",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/f2c73081093d569955d8540d1b57d6fb3284dbc4_1626376888.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 3
            },
            {
              "product_variant_id": 16540773,
              "product_variant_title": "محافظ لنز دوربین مدل protect مناسب برای گوشی موبایل اپل آیفون 7 | قرمز | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 1005765,
              "link_to_product": "https://www.digikala.com/product/dkp-1005765?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MTAwNTc2NSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.h8LQH0_n1XcQFhHdUUG0mnu8DYa89lIyxTxqT-JkGnU",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/4723851.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 26
            },
            {
              "product_variant_id": 15972613,
              "product_variant_title": "شارژر دیواری مدل ETA-U90EBE | سفید | گارانتی سلامت فیزیکی کالا",
              "product_id": 4035443,
              "link_to_product": "https://www.digikala.com/product/dkp-4035443?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDAzNTQ0MywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.U-YWPHOjHT-hYPZoTj1MyqGmt8YqdISnOMp6AxzLsk0",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/221807ed6773732b5151acedf6d43c59fea47409_1608206165.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 10
            },
            {
              "product_variant_id": 15661846,
              "product_variant_title": "کاور مدل LEY - ZERi مناسب برای گوشی موبایل سامسونگ Galaxy S10 | طلایی | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4860281,
              "link_to_product": "https://www.digikala.com/product/dkp-4860281?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDg2MDI4MSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.jdsOA5nYWOfSby9NAMh-rrrLNi7os-LbixzqaxSQW4M",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/3bd05fa737a7b2396eb8a09bfc1a2d30faa93906_1617897795.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 1,
              "allowed_count_consignment": 2
            },
            {
              "product_variant_id": 15563296,
              "product_variant_title": "کیف کلاسوری کد Y - 3 مناسب برای تبلت 7 اینچ | سفید | گارانتی سلامت فیزیکی کالا",
              "product_id": 4744532,
              "link_to_product": "https://www.digikala.com/product/dkp-4744532?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDc0NDUzMiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.lNYeA2IO6hhOxBLwM2h13_AwqDOIjiOK5VmP0LdZYjs",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/e60817e6eab42a06ba86d4ecf788f6214e6315ef_1616004688.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 2
            },
            {
              "product_variant_id": 15563271,
              "product_variant_title": "کیف کلاسوری مدل KHRS - POU2 مناسب برای تبلت 7 اینچ | سفید | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4744634,
              "link_to_product": "https://www.digikala.com/product/dkp-4744634?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDc0NDYzNCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.PGcx5oMfaYdJLdU8HVDQUDx0o6rqOwbTBkSoBI3nHvc",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/1647b9cb0026f81a73787dc35f108a8e80cd029e_1616244785.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 8
            },
            {
              "product_variant_id": 15328688,
              "product_variant_title": "کیف کلاسوری مدل SPI-DER 1 مناسب برای تبلت 7 اینچ | چند رنگ | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4744709,
              "link_to_product": "https://www.digikala.com/product/dkp-4744709?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDc0NDcwOSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.1Dgt5_s3_xqt-0ua6G6cDVvq6S_q_S8kNsiTmLFIdn4",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/1066ec3c72046b16693520950da7a3dfdd73e877_1616006333.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 2
            },
            {
              "product_variant_id": 15328684,
              "product_variant_title": "کیف کلاسوری مدل ORDK-2NFR مناسب برای تبلت 7 اینچ | چند رنگ | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4744617,
              "link_to_product": "https://www.digikala.com/product/dkp-4744617?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDc0NDYxNywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.MZaqlfRZHtXgSLhk_75PiOkKnzjcE7IRv5dHj-7FJTo",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/483a1fca89f06c9598946ae0c7843bae9e5233cc_1616005502.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 11
            },
            {
              "product_variant_id": 15328675,
              "product_variant_title": "کیف کلاسوری مدل MICKY-MSE2 مناسب برای تبلت 7 اینچ | چند رنگ | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4744579,
              "link_to_product": "https://www.digikala.com/product/dkp-4744579?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDc0NDU3OSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.52c3ynFePakGPhXQ-v4ELLDeYpEd9FYMjT2PmnMjNm4",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/63c80aa0ff3f1d984011fcae2dee70049b077e6b_1616005089.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 1
            },
            {
              "product_variant_id": 15328649,
              "product_variant_title": "کیف کلاسوری مدل KHRS-POU مناسب برای تبلت 7 اینچ | چند رنگ | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4744473,
              "link_to_product": "https://www.digikala.com/product/dkp-4744473?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDc0NDQ3MywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.LUqu05JmJOvtyqeWWqKcVV7cGh4MXA4ayd4UTf0kvpA",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/21f1fc8a3e59462e43c614ea5c92e4deb7563154_1616004167.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 2
            },
            {
              "product_variant_id": 15328629,
              "product_variant_title": "کیف کلاسوری مدل BEN-TEN مناسب برای تبلت 7 اینچ | چند رنگ | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4744415,
              "link_to_product": "https://www.digikala.com/product/dkp-4744415?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDc0NDQxNSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.Rf7N4-1vCwzFQBfjt4KEy21bsyeGDhBfY2N4i7KQoOY",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/0f29769bfb80d0ed2a45e3634166bcc0a4f8411e_1616003662.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 13
            },
            {
              "product_variant_id": 15328622,
              "product_variant_title": "کیف کلاسوری مدل BAT-MAN مناسب برای تبلت 7 اینچ | چند رنگ | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4744393,
              "link_to_product": "https://www.digikala.com/product/dkp-4744393?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDc0NDM5MywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.uDm05b3Gqha2NeMD5kgyK_OpgbSYW3m2NFrd1hcPUvU",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/d574c530889ebe18fd867802f1736b37ddd9f7b1_1616003473.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 1,
              "allowed_count_consignment": 12
            },
            {
              "product_variant_id": 15282013,
              "product_variant_title": "باتری لیتیوم یون مدل LN601630 ظرفیت 260 میلی آمپر ساعت | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 2871878,
              "link_to_product": "https://www.digikala.com/product/dkp-2871878?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6Mjg3MTg3OCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.kUs1vsndnZBEgBIlkbxnJhB65fYOsHNt2h7o9CNNCNg",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/121369104.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 2,
              "allowed_count_consignment": 48
            },
            {
              "product_variant_id": 15271796,
              "product_variant_title": "کیف کلاسوری مدل SPER-MAN مناسب برای تبلت 7 اینچ | چند رنگ | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4744728,
              "link_to_product": "https://www.digikala.com/product/dkp-4744728?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDc0NDcyOCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.4Uj5fSHg_D1X5SVFvMGy0oTBhWv5jUWddDyH7j9T8tU",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/5997ca874999db1c39c01ced3f605dfe94fbb980_1616006482.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 1,
              "allowed_count_consignment": 7
            },
            {
              "product_variant_id": 14384056,
              "product_variant_title": "محافظ لنز دوربین مدل Pu-01 مناسب برای گوشی موبایل شیائومی REDMI 9A | بی رنگ شفاف | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4394836,
              "link_to_product": "https://www.digikala.com/product/dkp-4394836?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDM5NDgzNiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.cpbOm77yh3KIZLa1gwOfVpY3KMCV39pnLLnA6kt1NDE",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/8e80fb46f38404f6748b02896633b6660422974d_1612468296.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 11
            },
            {
              "product_variant_id": 14384055,
              "product_variant_title": "محافظ لنز دوربین مدل Pu-01 مناسب برای گوشی موبایل شیائومی REDMI 9A | مشکی | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4394836,
              "link_to_product": "https://www.digikala.com/product/dkp-4394836?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDM5NDgzNiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.cpbOm77yh3KIZLa1gwOfVpY3KMCV39pnLLnA6kt1NDE",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/8e80fb46f38404f6748b02896633b6660422974d_1612468296.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 27
            },
            {
              "product_variant_id": 14223134,
              "product_variant_title": "محافظ لنز دوربین مدل G-002 مناسب برای گوشی موبایل سامسونگ Galaxy M20 | بی رنگ شفاف | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 1590378,
              "link_to_product": "https://www.digikala.com/product/dkp-1590378?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MTU5MDM3OCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.-76xjXR6N_UEjic37aCeDCKq0cFtAhZIdc_kIItE1ko",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/111059130.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 1,
              "allowed_count_consignment": 2
            },
            {
              "product_variant_id": 14222331,
              "product_variant_title": "محافظ لنز دوربین مدل L026 مناسب برای گوشی موبایل سامسونگ Galaxy note8 | بی رنگ شفاف | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 2330732,
              "link_to_product": "https://www.digikala.com/product/dkp-2330732?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MjMzMDczMiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.inUD2E4utC1cpGIhOMjLyDLQyW8N-uJfoiLB6rVqfKk",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/115099203.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 10
            },
            {
              "product_variant_id": 13812668,
              "product_variant_title": "باتری لیتیوم یون مدل air-25 ظرفیت 25 میلی آمپر ساعت | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4204908,
              "link_to_product": "https://www.digikala.com/product/dkp-4204908?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDIwNDkwOCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.JxtKYmq1Il3d952FNNI2m3ir729HPgd_-Lte8oQvSjw",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/637f9656b4665c21fc8a936af4219247d0d9de50_1610281702.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 21,
              "allowed_count_consignment": 27
            },
            {
              "product_variant_id": 13812638,
              "product_variant_title": "باتری لیتیوم-یون کد 421015 ظرفیت 60 میلی آمپر ساعت  | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 2812407,
              "link_to_product": "https://www.digikala.com/product/dkp-2812407?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MjgxMjQwNywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.LoplZlmjQST5SwekgkV7URj3TDtck7pjTz2Mn45ljA0",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/121071424.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 49
            },
            {
              "product_variant_id": 13812616,
              "product_variant_title": "باتری لیتیوم-یون قابل شارژ کد ICR-6671 ظرفیت 40 میلی آمپرساعت مناسب برای هندزفری بلوتوث i12 tws | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 2452007,
              "link_to_product": "https://www.digikala.com/product/dkp-2452007?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MjQ1MjAwNywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.6dhrwwKKi800HrmOXkw-ZLZRCXpLLENGpTzOQjJbGJE",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/119207171.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 119,
              "allowed_count_consignment": 79
            },
            {
              "product_variant_id": 13500553,
              "product_variant_title": "کابل تبدیل USB به microUSB مدل J5-sm طول 1 متر | سفید | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4079739,
              "link_to_product": "https://www.digikala.com/product/dkp-4079739?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDA3OTczOSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.1eiSCLFppkrEBKxwpcfVsmmZzXrL1C8tYUXqvZwwSZc",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/4cfc748c721ad0f81159b6fc2dbb5cc2315b3b63_1609005721.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 2,
              "allowed_count_consignment": 41
            },
            {
              "product_variant_id": 13494608,
              "product_variant_title": " کابل تبدیل USB به microUSB مدل MA-C2 طول 0.3 متر | سفید | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 2823385,
              "link_to_product": "https://www.digikala.com/product/dkp-2823385?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MjgyMzM4NSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.dPnS6gXsVz2qaORP-j62YNjHnDneXjtprcd7cttIUp4",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/121146578.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 11
            },
            {
              "product_variant_id": 13382744,
              "product_variant_title": "کاور کد CH1 مناسب برای گوشی موبایل سامسونگ Galaxy S8  | رز گلد | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4135915,
              "link_to_product": "https://www.digikala.com/product/dkp-4135915?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDEzNTkxNSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.tVOBR3ej01SPZRUaB6P-amwn9ZSJu0PYCZBl8ld65Gc",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/b6a7bf0bd8223f84ab711c73e7e1c4d1b23dfd1e_1609484661.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 17
            },
            {
              "product_variant_id": 13382743,
              "product_variant_title": "کاور کد CH1 مناسب برای گوشی موبایل سامسونگ Galaxy S8  | قرمز | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4135915,
              "link_to_product": "https://www.digikala.com/product/dkp-4135915?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDEzNTkxNSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.tVOBR3ej01SPZRUaB6P-amwn9ZSJu0PYCZBl8ld65Gc",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/b6a7bf0bd8223f84ab711c73e7e1c4d1b23dfd1e_1609484661.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 15
            },
            {
              "product_variant_id": 13382741,
              "product_variant_title": "کاور کد CH1 مناسب برای گوشی موبایل سامسونگ Galaxy S8  | کرم | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4135915,
              "link_to_product": "https://www.digikala.com/product/dkp-4135915?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDEzNTkxNSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.tVOBR3ej01SPZRUaB6P-amwn9ZSJu0PYCZBl8ld65Gc",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/b6a7bf0bd8223f84ab711c73e7e1c4d1b23dfd1e_1609484661.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 3
            },
            {
              "product_variant_id": 13382723,
              "product_variant_title": "کاور کد CH2 مناسب برای گوشی موبایل سامسونگ Galaxy s8 plus | رز گلد | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4135923,
              "link_to_product": "https://www.digikala.com/product/dkp-4135923?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDEzNTkyMywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.isxdOEz8YsZHR44GhrMv1xQgpkJPJVxUuS6T9_hRGjU",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/b6a7bf0bd8223f84ab711c73e7e1c4d1b23dfd1e_1609484779.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 12
            },
            {
              "product_variant_id": 13382722,
              "product_variant_title": "کاور کد CH2 مناسب برای گوشی موبایل سامسونگ Galaxy s8 plus | آبی | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4135923,
              "link_to_product": "https://www.digikala.com/product/dkp-4135923?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDEzNTkyMywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.isxdOEz8YsZHR44GhrMv1xQgpkJPJVxUuS6T9_hRGjU",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/b6a7bf0bd8223f84ab711c73e7e1c4d1b23dfd1e_1609484779.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 13
            },
            {
              "product_variant_id": 13382721,
              "product_variant_title": "کاور کد CH2 مناسب برای گوشی موبایل سامسونگ Galaxy s8 plus | قرمز | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4135923,
              "link_to_product": "https://www.digikala.com/product/dkp-4135923?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDEzNTkyMywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.isxdOEz8YsZHR44GhrMv1xQgpkJPJVxUuS6T9_hRGjU",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/b6a7bf0bd8223f84ab711c73e7e1c4d1b23dfd1e_1609484779.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 23
            },
            {
              "product_variant_id": 13382719,
              "product_variant_title": "کاور کد CH2 مناسب برای گوشی موبایل سامسونگ Galaxy s8 plus | کرم | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4135923,
              "link_to_product": "https://www.digikala.com/product/dkp-4135923?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDEzNTkyMywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.isxdOEz8YsZHR44GhrMv1xQgpkJPJVxUuS6T9_hRGjU",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/b6a7bf0bd8223f84ab711c73e7e1c4d1b23dfd1e_1609484779.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 26
            },
            {
              "product_variant_id": 13382684,
              "product_variant_title": "کاور کد CH3 مناسب برای گوشی موبایل سامسونگ Galaxy Note 8 | کرم | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4135930,
              "link_to_product": "https://www.digikala.com/product/dkp-4135930?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDEzNTkzMCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.LZjlnJnFETw69GTf4Q4S2LDihW8Ba6SyhmNJc6zCpgc",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/be8f9c52f1b1ee3f85eefb5f8acf22798e42940b_1609484910.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 1,
              "allowed_count_consignment": 13
            },
            {
              "product_variant_id": 13346481,
              "product_variant_title": "کاور کد CH8 مناسب برای گوشی موبایل اپل Iphone 7 / 8 plus | کرم | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4136097,
              "link_to_product": "https://www.digikala.com/product/dkp-4136097?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDEzNjA5NywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.ZcMH3EVA9sLihUX2tx8WGijEksvK42bixuX8QOp4fso",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/11fe1b437e0fe9073e5f36397cc5afc9df8b4c21_1609488269.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 16
            },
            {
              "product_variant_id": 13346480,
              "product_variant_title": "کاور کد CH8 مناسب برای گوشی موبایل اپل Iphone 7 / 8 plus | رز گلد | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4136097,
              "link_to_product": "https://www.digikala.com/product/dkp-4136097?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDEzNjA5NywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.ZcMH3EVA9sLihUX2tx8WGijEksvK42bixuX8QOp4fso",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/11fe1b437e0fe9073e5f36397cc5afc9df8b4c21_1609488269.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 5
            },
            {
              "product_variant_id": 13344923,
              "product_variant_title": "کاور کد CH10 مناسب برای گوشی موبایل هوآوی P9 | طلایی | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4136227,
              "link_to_product": "https://www.digikala.com/product/dkp-4136227?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDEzNjIyNywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.VPouP7XqSwPt7bsprRN03b3tm5_WBIMHXGgMVnJRcAc",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/d2e7b96514ba89d86024db6c501dc9b758ca10cc_1609489237.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 12
            },
            {
              "product_variant_id": 13344921,
              "product_variant_title": "کاور کد CH10 مناسب برای گوشی موبایل هوآوی P9 | رز گلد | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 4136227,
              "link_to_product": "https://www.digikala.com/product/dkp-4136227?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6NDEzNjIyNywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.VPouP7XqSwPt7bsprRN03b3tm5_WBIMHXGgMVnJRcAc",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/d2e7b96514ba89d86024db6c501dc9b758ca10cc_1609489237.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 25
            },
            {
              "product_variant_id": 13343256,
              "product_variant_title": "باتری لیتیوم یون  مدل SD-123 ظرفیت 70 میلی آمپر ساعت | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 2716167,
              "link_to_product": "https://www.digikala.com/product/dkp-2716167?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MjcxNjE2NywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.3DFsNYBwk8Ilz7Eu-E4rEEw1AcZfba4TUCRFs48LcP0",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/120608755.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 17
            },
            {
              "product_variant_id": 13259636,
              "product_variant_title": "شارژر دیواری مدل MD814  | سفید | گارانتی سلامت فیزیکی کالا",
              "product_id": 2230969,
              "link_to_product": "https://www.digikala.com/product/dkp-2230969?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MjIzMDk2OSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.4WB4T2EejrV_rz2h1qDG4YOUtR2E34IotW9pa-0QJ7Q",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/114715551.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 10
            },
            {
              "product_variant_id": 13259516,
              "product_variant_title": "شارژر دیواری مدل A1385 ak | سفید | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 3362686,
              "link_to_product": "https://www.digikala.com/product/dkp-3362686?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MzM2MjY4NiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.VRSD2Nd2d9jFCwgnwa9hmAMde7wzBeZRGJmADN_BhdA",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/4e4fe219ebc503aa889a2decc7ae3a258d6ff6ad_1599555227.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 4
            },
            {
              "product_variant_id": 13230990,
              "product_variant_title": "شارژر دیواری مدل A1385 | سفید صدفی | گارانتی سلامت فیزیکی کالا",
              "product_id": 3337882,
              "link_to_product": "https://www.digikala.com/product/dkp-3337882?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MzMzNzg4MiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.ggagqjG3ArOzu7rqQvRo00Gl0lA4i1P2rXBnzyrTIHQ",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/739c1b0cb0b9ce8f86340c3f426d0ead52eee150_1599153896.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 5
            },
            {
              "product_variant_id": 13230989,
              "product_variant_title": "شارژر دیواری مدل A1385 | سفید | گارانتی سلامت فیزیکی کالا",
              "product_id": 3337882,
              "link_to_product": "https://www.digikala.com/product/dkp-3337882?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MzMzNzg4MiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.ggagqjG3ArOzu7rqQvRo00Gl0lA4i1P2rXBnzyrTIHQ",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/739c1b0cb0b9ce8f86340c3f426d0ead52eee150_1599153896.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 6
            },
            {
              "product_variant_id": 12925441,
              "product_variant_title": "باتری لیتیومی کد 401119 ظرفیت 50 میلی آمپر ساعت | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 2199672,
              "link_to_product": "https://www.digikala.com/product/dkp-2199672?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MjE5OTY3MiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.vkyTk9gavEaX4jf8Mxq5gVOd6Cg-oae0bc_-XehGzYc",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/114293577.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 7,
              "allowed_count_consignment": 43
            },
            {
              "product_variant_id": 12882750,
              "product_variant_title": "شارژر دیواری مدل G780 به همراه کابل تبدیل microUSB | سفید | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 3936903,
              "link_to_product": "https://www.digikala.com/product/dkp-3936903?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MzkzNjkwMywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.SxwIO8ShdVq72peyTyDk_TwZX4uV8D9P5cxdco7A_jA",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/5b7a20f7a871b2711fba1a2c255970ec835463e3_1607361501.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 4
            },
            {
              "product_variant_id": 12689424,
              "product_variant_title": "باتری لیتیوم یون قابل شارژ مدل TNS-999ظرفیت 250 میلی آمپرساعت | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 3073354,
              "link_to_product": "https://www.digikala.com/product/dkp-3073354?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MzA3MzM1NCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.JZmsjmpRBwCbUpvojP8_FImvFyHavrVxOnR4a3InN2k",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/4fb103a6dfaff424b7c2e166751e77fdeb90fe1f_1594528287.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 4,
              "allowed_count_consignment": 43
            },
            {
              "product_variant_id": 12688709,
              "product_variant_title": "باتری لیتیوم یون قابل شارژ مدل TND-992ظرفیت 120 میلی آمپرساعت | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 3073318,
              "link_to_product": "https://www.digikala.com/product/dkp-3073318?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MzA3MzMxOCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.YPdmgJzIXk8ogmABckH2Oul8Ordl9BQlvn6rNjz4BBA",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/ec9edd64c97034c51ed10319598abd8b549a8fb0_1594525842.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 9,
              "allowed_count_consignment": 40
            },
            {
              "product_variant_id": 12563272,
              "product_variant_title": " باتری لیتیوم یون قابل شارژ مدل Head-01 ظرفیت200میلی آمپر ساعت  | سرویس ویژه دیجی کالا: 7 روز تضمین بازگشت کالا",
              "product_id": 2726355,
              "link_to_product": "https://www.digikala.com/product/dkp-2726355?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MjcyNjM1NSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.CC9BpF6Nug_bICkv30sEkU_cxysQpxa4vjtBR0ClHEg",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/120655505.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 20,
              "allowed_count_consignment": 48
            },
            {
              "product_variant_id": 12533918,
              "product_variant_title": "محافظ لنز دوربین مدل RO_44 مناسب برای گوشی موبایل سامسونگ Galaxy Note10 | بی رنگ | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 2878515,
              "link_to_product": "https://www.digikala.com/product/dkp-2878515?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6Mjg3ODUxNSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.Fd0UroYKwcHKlymW8J9l5qgQRZUtCdiYsSjPKPQEZhA",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/121447401.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 15
            },
            {
              "product_variant_id": 12533383,
              "product_variant_title": "محافظ لنز دوربین مدل L009 مناسب برای گوشی موبایل سامسونگ Note10 plus | بی رنگ شفاف | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 2329010,
              "link_to_product": "https://www.digikala.com/product/dkp-2329010?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MjMyOTAxMCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.YGMmmRpm9pDm48pdNvQUw-CD-ekRm-DO4mCkmVEwNLc",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/115070285.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 13
            },
            {
              "product_variant_id": 12531962,
              "product_variant_title": "محافظ لنز دوربین مدل MATTE مناسب برای آیفون 7 | قرمز | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 991092,
              "link_to_product": "https://www.digikala.com/product/dkp-991092?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6OTkxMDkyLCJleHBpcmVfdGltZSI6IjIwMjQtMDgtMDEgMTk6NTQ6NDUifQ.qQPVVezohsRshDWfaUrReoSu0LQIDb3D-hieJ3vPjP8",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/4946043.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": "",
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 44
            },
            {
              "product_variant_id": 12518491,
              "product_variant_title": "شارژر دیواری مدل G78 به همراه کابل تبدیل microUSB | سفید صدفی | گارانتی سلامت فیزیکی کالا",
              "product_id": 3593895,
              "link_to_product": "https://www.digikala.com/product/dkp-3593895?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjM4NDc5MCwicHJvZHVjdF9pZCI6MzU5Mzg5NSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjQ1In0.RKfiKrIsTRiPoos8XNfQzVuWaVnIMNeUOn6wmjCb9-k",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/3ecdef262c9b7365a8cbb2fa9de4a7c2409d32fb_1603284621.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": null,
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 5
            }
          ],
          "meta_data": {
            "filters": {
              "shipping_natures": {
                "1": "کوچک",
                "3": "متوسط",
                "2": "بزرگ"
              }
            }
          }
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "sort_data": {
            "sort_column": "_id",
            "sort_order": "desc",
            "sort_columns": ["_id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 10,
            "total_pages": 1,
            "total_rows": 5
          },
          "form_data": [],
          "items": [
            {
              "product_variant_id": 55380905,
              "product_variant_title": "گن لاغری مردانه آرتان مدل 2070  | XXL | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 1112626,
              "link_to_product": "https://www.digikala.com/product/dkp-1112626?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjgyNTcwNSwicHJvZHVjdF9pZCI6MTExMjYyNiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjI1In0.ysUUK-WzOojKt39ldIlGW5sm3l6Icph8PQW7y44eaJM",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/5294769.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": "2070 سفید ",
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 10
            },
            {
              "product_variant_id": 30682867,
              "product_variant_title": "گن لاغری مردانه آرتان مدل 2070  | XL | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 1112626,
              "link_to_product": "https://www.digikala.com/product/dkp-1112626?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjgyNTcwNSwicHJvZHVjdF9pZCI6MTExMjYyNiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjI1In0.ysUUK-WzOojKt39ldIlGW5sm3l6Icph8PQW7y44eaJM",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/5294769.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": "گن مردانه ارتان 2070:سفید",
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 5
            },
            {
              "product_variant_id": 30682832,
              "product_variant_title": "گن لاغری مردانه آرتان مدل 2070  | M | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 1112626,
              "link_to_product": "https://www.digikala.com/product/dkp-1112626?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjgyNTcwNSwicHJvZHVjdF9pZCI6MTExMjYyNiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjI1In0.ysUUK-WzOojKt39ldIlGW5sm3l6Icph8PQW7y44eaJM",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/5294769.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": "گن مردانه ارتان 2070:سفید",
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 5
            },
            {
              "product_variant_id": 30682820,
              "product_variant_title": "گن لاغری مردانه آرتان مدل 2070  | L | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 1112626,
              "link_to_product": "https://www.digikala.com/product/dkp-1112626?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjgyNTcwNSwicHJvZHVjdF9pZCI6MTExMjYyNiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjI1In0.ysUUK-WzOojKt39ldIlGW5sm3l6Icph8PQW7y44eaJM",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/5294769.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": "گن مردانه ارتان 2070:سفید",
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 9
            },
            {
              "product_variant_id": 30682813,
              "product_variant_title": "گن لاغری مردانه آرتان مدل 2070  | 3XL | گارانتی اصالت و سلامت فیزیکی کالا",
              "product_id": 1112626,
              "link_to_product": "https://www.digikala.com/product/dkp-1112626?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjgyNTcwNSwicHJvZHVjdF9pZCI6MTExMjYyNiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDE5OjU0OjI1In0.ysUUK-WzOojKt39ldIlGW5sm3l6Icph8PQW7y44eaJM",
              "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/5294769.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "supplier_code": "گن مردانه ارتان 2070:سفید",
              "on_the_Way_stock": 0,
              "dk_inventory": 0,
              "allowed_count_consignment": 8
            }
          ],
          "meta_data": {
            "filters": {
              "shipping_natures": {
                "1": "کوچک",
                "3": "متوسط",
                "2": "بزرگ"
              }
            }
          }
        }
      }';
    }
}