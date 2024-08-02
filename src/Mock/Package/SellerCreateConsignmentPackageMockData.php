<?php

namespace App\Mock\Package;

use App\Mock\AMockV2;

class SellerCreateConsignmentPackageMockData extends AMockV2
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
            "total_rows": 3
          },
          "form_data": [],
          "items": {
            "1": {
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "shipping_nature_id": 1,
              "variants": [
                {
                  "variant_id": 48077087,
                  "product_variant_title": "تتو موقت طرح قلب و نوشته و عشق کد 1000 | مشکی | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 13983567,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/68340e0c1d9852a3dfb051b13b5b31ba621c3254_1704276773.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-13983567?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjEyNjcwOSwicHJvZHVjdF9pZCI6MTM5ODM1NjcsImV4cGlyZV90aW1lIjoiMjAyNC0wOC0wMSAyMTowNDo1NCJ9.To2NcVZ4KWsciN9Lu5ZapsBGP2pPf0yXKETk5lxk-lc",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 4,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 3
                  },
                  "sent_optimal": 32,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 52588615,
                  "product_variant_title": "آینه سرویس بهداشتی مدل گل پیچک کد 1004 | سفید | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 15263871,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/e187f4404d7b583a5089066683e872ee91d51af7_1714074215.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-15263871?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjEyNjcwOSwicHJvZHVjdF9pZCI6MTUyNjM4NzEsImV4cGlyZV90aW1lIjoiMjAyNC0wOC0wMSAyMTowNDo1NCJ9.BVmT2ORDYyeWbo66LZMnEnfhJGF_naMSpUzVOJfhHmo",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 2,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 1
                  },
                  "sent_optimal": 10,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 53147409,
                  "product_variant_title": "تتو موقت مدل جای بخیه طرح گل کد 16 | چند رنگ | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 15476022,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/e881eebc4bc83dce6628467507bfd4ce747fc810_1715884723.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-15476022?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjEyNjcwOSwicHJvZHVjdF9pZCI6MTU0NzYwMjIsImV4cGlyZV90aW1lIjoiMjAyNC0wOC0wMSAyMTowNDo1NSJ9.amuiKbs-c-4ARrB6fsGaz40wu8DqIK2xXVFbGbRfGko",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 4,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 2
                  },
                  "sent_optimal": 26,
                  "has_IMEI": false,
                  "has_expiry_date": false
                }
              ]
            }
          },
          "meta_data": {
            "package_infos": {
              "shipment_abilities": [
                {
                  "key": "seller",
                  "title": "توسط فروشنده"
                },
                {
                  "key": "mobile_hub",
                  "title": "تحویل به انبار سیار"
                },
                {
                  "key": "post",
                  "title": "توسط پست"
                }
              ]
            }
          }
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
            "total_rows": 12
          },
          "form_data": [],
          "items": {
            "1": {
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "shipping_nature_id": 1,
              "variants": [
                {
                  "variant_id": 51220471,
                  "product_variant_title": "ساعت مچی عقربه\u200Cای مردانه کیو اند کیو مدل C10A-0026PY | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 15009594,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/6c3a47bbe41da74102829b110468c852d1bb76ac_1712303933.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-15009594?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjkzNTU5LCJwcm9kdWN0X2lkIjoxNTAwOTU5NCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjU0OjQ2In0.7BVVfWr7hbdg1ruXOhEhpLUEzCn7V5qdSP54oRqVoB4",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 0,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 0,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 50156270,
                  "product_variant_title": "ساعت مچی عقربه ای زنانه کیو اند کیو مدل A04A-002pY | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 14564706,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/73a1bedd4dea2d7f64848eba833dfb05918d7671_1708769066.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-14564706?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjkzNTU5LCJwcm9kdWN0X2lkIjoxNDU2NDcwNiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjU0OjQ2In0.jb6jN7jtvb0DTrZqJs6k6Vpo6lKwmqmR1yObs96kIMU",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 0,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 0,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 44600232,
                  "product_variant_title": "ساعت مچی دیجیتال کیو اند کیو مدل M208J002Y | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 12871536,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/d4abc78e138c61ab61beacfae32af0c29d8b64dc_1696255849.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-12871536?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjkzNTU5LCJwcm9kdWN0X2lkIjoxMjg3MTUzNiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjU0OjQ2In0.tivQB8nmWK_Vo04twpoTo7PtS9ug1XAUmlAlOxObIUY",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 0,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 0,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 45044337,
                  "product_variant_title": "ساعت مچی عقربه ای زنانه کیو اند کیو مدل q27b-009py | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 13006968,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/36e02f48bb69fd4e5424b02dffc62356367a189c_1697476735.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-13006968?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjkzNTU5LCJwcm9kdWN0X2lkIjoxMzAwNjk2OCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjU0OjQ2In0.UJeaZqX-k7JAF9pIf9nqBs-WrddIeolXsCnJkhcrF6w",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 0,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 0,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 41559007,
                  "product_variant_title": "ساعت مچی عقربه ای زنانه کیو اند کیو مدل qz81j201y | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 11949012,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/cdfdc5a2b6f97cd7828ae0f3904f4dd404709a16_1688756240.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-11949012?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjkzNTU5LCJwcm9kdWN0X2lkIjoxMTk0OTAxMiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjU0OjQ2In0.E6nDQMARKuUnLHE5m26IMObhnJe8k3lx-xRebiQKZNY",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 0,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 0,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 46834335,
                  "product_variant_title": "ساعت مچی عقربه ای زنانه کیو اند کیو مدل Q969J22Y | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 13569730,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/285178447288a5826d8d2e9f1964387c970e4347_1701445861.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-13569730?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjkzNTU5LCJwcm9kdWN0X2lkIjoxMzU2OTczMCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjU0OjQ2In0.ihcA4sJ-2xMH7GUAARC_SGkTLNiMsTmimWTA2GJI8iI",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 0,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 0,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 47015166,
                  "product_variant_title": "ساعت مچی دیجیتال مردانه کیو اند کیو مدل GW87J010Y | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 5893951,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/db19973c52036dcda9b2624b629ea7aa2ac5af3f_1627391857.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-5893951?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjkzNTU5LCJwcm9kdWN0X2lkIjo1ODkzOTUxLCJleHBpcmVfdGltZSI6IjIwMjQtMDgtMDEgMjA6NTQ6NDYifQ.59h8DMcaEbis5UTJGdqX7tMQCyIljGu0_UlmfM0kyGs",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 0,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 0,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 47058472,
                  "product_variant_title": "ساعت مچی عقربه\u200Cای مردانه کیو اند کیو مدل QZ94J202Y | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 13583370,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/8d208a81d7c358f84c96671714429043795d0b00_1701543919.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-13583370?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjkzNTU5LCJwcm9kdWN0X2lkIjoxMzU4MzM3MCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjU0OjQ2In0.-SbTursszvi-a9xhv1uv7ZYc0t4QoczPaD1rbM8srHg",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 0,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 1
                  },
                  "sent_optimal": 0,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 52883664,
                  "product_variant_title": "ساعت مچی عقربه\u200Cای مردانه کیو اند کیو مدل QA36A-003PY | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 15405714,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/84e8ec4a7f4677a8a55c253213272394b3a1a8c3_1715331133.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-15405714?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjkzNTU5LCJwcm9kdWN0X2lkIjoxNTQwNTcxNCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjU0OjQ2In0.ETYvmFhteQYednKKo2q31rJYx6a42alX2WCED4L_VDU",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 0,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 0,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 53881688,
                  "product_variant_title": "ساعت مچی عقربه\u200Cای مردانه کیو اند کیو مدل S08A-08VY | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 15631508,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/4aa2a6c103db908d4346071282dbcfac74cf656d_1717276774.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-15631508?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjkzNTU5LCJwcm9kdWN0X2lkIjoxNTYzMTUwOCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjU0OjQ2In0.V5Cc6CLvdKl3JwcwmLaY7KpHAPXYp8HUrckdcs62M0E",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 0,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 0,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 54024339,
                  "product_variant_title": "ساعت مچی عقربه ای زنانه کیو اند کیو مدل Q969J242Y | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 15699756,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/d55bdc8a49e15fca8afc47bde90b06a77f2de0ab_1717799428.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-15699756?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjkzNTU5LCJwcm9kdWN0X2lkIjoxNTY5OTc1NiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjU0OjQ2In0.F0AZBZMpmReJWhYLFdwgjji8ms8lGnvB07M6vmKuiBg",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 0,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 0,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 55507491,
                  "product_variant_title": "ساعت مچی عقربه ای زنانه کیو اند کیو مدل Q27D-010PY | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 16046850,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/adcdefde0c82fa2e34cb051713eb87b5137ea331_1720799693.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-16046850?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjkzNTU5LCJwcm9kdWN0X2lkIjoxNjA0Njg1MCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjU0OjQ2In0.hw2mbo2InUHnfhp_SCOIjsWzOdz7k6RrxDxs_ygiMAo",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 0,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 0,
                  "has_IMEI": false,
                  "has_expiry_date": false
                }
              ]
            }
          },
          "meta_data": {
            "package_infos": {
              "shipment_abilities": [
                {
                  "key": "seller",
                  "title": "توسط فروشنده"
                },
                {
                  "key": "mobile_hub",
                  "title": "تحویل به انبار سیار"
                },
                {
                  "key": "post",
                  "title": "توسط پست"
                }
              ]
            }
          }
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
            "total_rows": 8
          },
          "form_data": [],
          "items": {
            "1": {
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "shipping_nature_id": 1,
              "variants": [
                {
                  "variant_id": 55033523,
                  "product_variant_title": "اکستنشن مو زنانه مدل چتری تل دار کد HRBNGS-TL-SNSTC | قهوه ای تیره | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 15751165,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/cfb7dd67cf3e74ee2fd6dc3ac517661558472baa_1718046276.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-15751165?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjYwOTUyLCJwcm9kdWN0X2lkIjoxNTc1MTE2NSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjUzOjIwIn0.di3H_RAr5wvb-APVFSqH9L8YnabeLpRQw0hKi3RKJgc",
                  "supplier_code": "چتری تلی کوتاه 5-6",
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 3,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 16
                  },
                  "sent_optimal": 4,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 54531176,
                  "product_variant_title": "اکستنشن مو زنانه تیناویگ مدل چتری بغل دار تلی کد HB-TL-BGH50SC | مشکی | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 15874448,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/482afe35788cf7583050da756b020a910183d230_1718890645.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-15874448?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjYwOTUyLCJwcm9kdWN0X2lkIjoxNTg3NDQ0OCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjUzOjIwIn0.xyZ2LYQUpjw1sTriBwJa6vY_xFjlakKYlO9Chayw2wE",
                  "supplier_code": "1B",
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 0,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 10
                  },
                  "sent_optimal": 1,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 54145975,
                  "product_variant_title": "اکستنشن مو زنانه مدل چتری تل دار کد HRBNGS-TL-SNSTC | مشکی | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 15751165,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/cfb7dd67cf3e74ee2fd6dc3ac517661558472baa_1718046276.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-15751165?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjYwOTUyLCJwcm9kdWN0X2lkIjoxNTc1MTE2NSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjUzOjIwIn0.di3H_RAr5wvb-APVFSqH9L8YnabeLpRQw0hKi3RKJgc",
                  "supplier_code": "چتری تلی کوتاه 1B",
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 1,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 10
                  },
                  "sent_optimal": 1,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 54012875,
                  "product_variant_title": "مانکن شینیون و بافت مو تیناویگ کد MM-80CM-OMBR به همراه پایه | چند رنگ | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 15711082,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/01efbd8c199a51bfacbdd0bac47f665eda0fe05b_1717869440.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-15711082?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjYwOTUyLCJwcm9kdWN0X2lkIjoxNTcxMTA4MiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjUzOjIwIn0.z74mmQhZU7n6KZLMJERMyvML5uyZH8rfplr_Usupojg",
                  "supplier_code": "چندرنگ",
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 3,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 11
                  },
                  "sent_optimal": 6,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 54012775,
                  "product_variant_title": "مانکن شینیون و بافت مو تیناویگ کد MM-80CM-OMBR به همراه پایه | زیتونی | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 15711082,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/01efbd8c199a51bfacbdd0bac47f665eda0fe05b_1717869440.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-15711082?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjYwOTUyLCJwcm9kdWN0X2lkIjoxNTcxMTA4MiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjUzOjIwIn0.z74mmQhZU7n6KZLMJERMyvML5uyZH8rfplr_Usupojg",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 0,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 0,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 53397950,
                  "product_variant_title": "چسب کراتین اکستنشن مو مدل BEX02 بسته 500 عددی | بی رنگ | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 3824768,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/7e210d6b1c80402ed18047aac8fbfd201026db7a_1606050575.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-3824768?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjYwOTUyLCJwcm9kdWN0X2lkIjozODI0NzY4LCJleHBpcmVfdGltZSI6IjIwMjQtMDgtMDEgMjA6NTM6MjAifQ.Tzym6wES-AqAYqfkBV4_HQ0voHbKRO5obVCxmMDt5uo",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 1,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 2
                  },
                  "sent_optimal": 8,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 53283617,
                  "product_variant_title": "کلاه گیس زنانه تیناویگ مدل کرنلی کد TWWS105-Brn | قهوه ای تیره | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 15525998,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/30293c26b8eefc0ae85668429a6040f07102859b_1716646259.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-15525998?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjYwOTUyLCJwcm9kdWN0X2lkIjoxNTUyNTk5OCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjUzOjIwIn0.zPEwv7ngs1jZTZgyEugzXQykUs1NbmTP5nklJesZLf8",
                  "supplier_code": "105-3",
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 0,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 4
                  },
                  "sent_optimal": 10,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 53283616,
                  "product_variant_title": "کلاه گیس زنانه تیناویگ مدل کرنلی کد TWWS105-Brn | قهوه ای | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 15525998,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/30293c26b8eefc0ae85668429a6040f07102859b_1716646259.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-15525998?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjYwOTUyLCJwcm9kdWN0X2lkIjoxNTUyNTk5OCwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjUzOjIwIn0.zPEwv7ngs1jZTZgyEugzXQykUs1NbmTP5nklJesZLf8",
                  "supplier_code": "105-4",
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 1,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 14
                  },
                  "sent_optimal": 4,
                  "has_IMEI": false,
                  "has_expiry_date": false
                }
              ]
            }
          },
          "meta_data": {
            "package_infos": {
              "shipment_abilities": [
                {
                  "key": "seller",
                  "title": "توسط فروشنده"
                },
                {
                  "key": "mobile_hub",
                  "title": "تحویل به انبار سیار"
                },
                {
                  "key": "post",
                  "title": "توسط پست"
                }
              ]
            }
          }
        }
      }';
    }
}