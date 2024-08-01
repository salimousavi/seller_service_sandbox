<?php

namespace App\Mock\Product;

use App\Mock\AMock;
use App\Mock\AMockV2;

class ProductCategorySearchV2MockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "sort_data": {
            "sort_column": "id",
            "sort_order": "asc",
            "sort_columns": ["id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 50,
            "total_pages": 1,
            "total_rows": 4
          },
          "form_data": [],
          "items": [
            {
              "id": 77,
              "text": "کیف و کاور گوشی",
              "leaf": true
            },
            {
              "id": 87,
              "text": "کیف و کاور تبلت",
              "leaf": true
            },
            {
              "id": 97,
              "text": "کیف و کاور لپ تاپ",
              "leaf": true
            },
            {
              "id": 110,
              "text": "کیف دوربین",
              "leaf": true
            }
          ],
          "meta_data": []
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "sort_data": {
            "sort_column": "id",
            "sort_order": "asc",
            "sort_columns": ["id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 50,
            "total_pages": 1,
            "total_rows": 11
          },
          "form_data": [],
          "items": [
            {
              "id": 14,
              "text": "کتاب\u200Cخوان و کاغذ دیجیتالی",
              "leaf": true
            },
            {
              "id": 44,
              "text": "کاغذ خردکن",
              "leaf": true
            },
            {
              "id": 46,
              "text": "بارکد خوان",
              "leaf": true
            },
            {
              "id": 53,
              "text": "سینمای خانگی",
              "leaf": true
            },
            {
              "id": 54,
              "text": "سیستم صوتی خانگی",
              "leaf": true
            },
            {
              "id": 55,
              "text": "پخش کننده DVD",
              "leaf": true
            },
            {
              "id": 56,
              "text": "پخش کننده Blu-Ray",
              "leaf": true
            },
            {
              "id": 58,
              "text": "پخش کننده خانگی",
              "leaf": true
            }
          ],
          "meta_data": []
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "sort_data": {
            "sort_column": "id",
            "sort_order": "asc",
            "sort_columns": ["id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 50,
            "total_pages": 1,
            "total_rows": 11
          },
          "form_data": [],
          "items": [
            {
              "id": 14,
              "text": "کتاب\u200Cخوان و کاغذ دیجیتالی",
              "leaf": true
            },
            {
              "id": 18,
              "text": "لپ تاپ و الترابوک",
              "leaf": true
            },
            {
              "id": 20,
              "text": "کامپیوترهای All-in-One",
              "leaf": true
            },
            {
              "id": 23,
              "text": "کامپیوتر سرور",
              "leaf": true
            },
            {
              "id": 25,
              "text": "اسپیکر (بلندگو)",
              "leaf": true
            },
            {
              "id": 27,
              "text": "کیبورد (صفحه کلید)",
              "leaf": true
            },
            {
              "id": 29,
              "text": "وب\u200Cکم",
              "leaf": true
            }
          ],
          "meta_data": []
        }
      }';
    }
}