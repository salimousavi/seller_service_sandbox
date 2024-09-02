<?php

namespace App\Mock\LighteningDeal;

use App\Mock\AMockV2;

class LighteningDealProductVariantMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "sort_data": {
            "sort_column": "id",
            "sort_order": "desc",
            "sort_columns": ["id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 10,
            "total_pages": 1,
            "total_rows": 1
          },
          "form_data": [],
          "items": [
            {
              "id": 56244906,
              "product_id": 13836716,
              "category_id": 6311,
              "title": "شمع دست ساز مدل روبیک زویی | صورتی | گارانتی 18 ماهه آرین سرویس",
              "image": "https://dkstatics-public.digikala.com/digikala-products/e6d895cdff716dcd4c582dd19a309f7b6434d6c6_1703486626.jpg?x-oss-process=image/resize,m_lfit,h_240,w_240/quality,q_80",
              "stock": 10,
              "has_stock": true,
              "max_send_to_warehouse": 5,
              "min_discount": 20,
              "max_allowable_price": 400000,
              "price": 500000,
              "views": 0,
              "orders": 0
            }
          ],
          "meta_data": []
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "sort_data": {
            "sort_column": "id",
            "sort_order": "desc",
            "sort_columns": ["id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 10,
            "total_pages": 1,
            "total_rows": 1
          },
          "form_data": [],
          "items": [
            {
              "id": 56243153,
              "product_id": 8528266,
              "category_id": 6311,
              "title": "شمع دست\u200Cساز مدل روبیک نقره\u200Cکوب | سفید | گارانتی 18 ماهه آرین سرویس",
              "image": "https://dkstatics-public.digikala.com/digikala-products/a5710a643b5674de9317fc01065f55cf6a9df83f_1653334764.jpg?x-oss-process=image/resize,m_lfit,h_240,w_240/quality,q_80",
              "stock": 30,
              "has_stock": true,
              "max_send_to_warehouse": 15,
              "min_discount": 20,
              "max_allowable_price": 320000,
              "price": 400000,
              "views": 0,
              "orders": 0
            }
          ],
          "meta_data": []
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "sort_data": {
            "sort_column": "id",
            "sort_order": "desc",
            "sort_columns": ["id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 10,
            "total_pages": 1,
            "total_rows": 1
          },
          "form_data": [],
          "items": [
            {
              "id": 56244906,
              "product_id": 13836716,
              "category_id": 6311,
              "title": "شمع دست ساز مدل روبیک زویی | صورتی | گارانتی 18 ماهه آرین سرویس",
              "image": "https://dkstatics-public.digikala.com/digikala-products/e6d895cdff716dcd4c582dd19a309f7b6434d6c6_1703486626.jpg?x-oss-process=image/resize,m_lfit,h_240,w_240/quality,q_80",
              "stock": 10,
              "has_stock": true,
              "max_send_to_warehouse": 5,
              "min_discount": 20,
              "max_allowable_price": 400000,
              "price": 500000,
              "views": 0,
              "orders": 0
            }
          ],
          "meta_data": []
        }
      }';
    }
}