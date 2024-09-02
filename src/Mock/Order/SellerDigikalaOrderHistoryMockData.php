<?php

namespace App\Mock\Order;

use App\Mock\AMockV2;

class SellerDigikalaOrderHistoryMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
          "status": "ok",
          "data": {
            "sort_data": {
              "sort_column": "id",
              "sort_order": "asc",
              "sort_columns": [
                "id"
              ]
            },
            "pager": {
              "page": 1,
              "item_per_page": 50,
              "total_pages": 0,
              "total_rows": 0
            },
            "form_data": [
              null
            ],
            "items": [
              {
                "product_variant_title": "کامپیوتر همه کاره 24 اینچی مایا مدل MA24D 12M - i7 16GB 500SSD | مشکی | گارانتی 12 ماهه ماتریس",
                "product_id": 1234,
                "product_variant_id": 5443121,
                "order_id": 112736712,
                "shipment_id": 1231218721,
                "order_created_at": "2024-08-07T13:01:10+03:30",
                "order_status": {
                  "key": "confirmed",
                  "title": "نهایی شده"
                },
                "category": "کامپیوترهای All-in-One",
                "product_supplier_code": "123213",
                "product_url": "https://www.digikala.com/product/dkp-16006355/",
                "image_src": "https://dkstatics-public.digikala.com/digikala-products/01110fb7b45ba0b6313f9deaadea30767dc75547_1720431657.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                "payment_type": {
                  "key": "cash",
                  "title": "نقدی"
                },
                "sell_type": {
                  "key": "b2b",
                  "title": "سازمانی"
                },
                "shipping_type": {
                  "key": "seller",
                  "title": "فروشنده"
                },
                "unit_discount": 100000,
                "unit_price": 120000000,
                "lead_time": 3,
                "serials": {
                  "serial": "A2134324",
                  "order_shipped_at": "2024-08-07T13:01:10+03:30",
                  "return_to_warehouse_at": "2024-08-07T13:01:10+03:30",
                  "warehouse_title": "انبار دانش",
                  "serial_status": "processed",
                  "return_reason": "خرابی کالا"
                },
                "quantity": 5,
                "discount_type": "gift",
                "total_price": 30000000000
              }
            ],
            "meta_data": {
              "all_categories": {
                "123": "موبایل"
              },
              "b2b_active": true
            }
          }
        }';
    }
}