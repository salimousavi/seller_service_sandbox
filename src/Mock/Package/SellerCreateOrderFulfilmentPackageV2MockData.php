<?php

namespace App\Mock\Package;

use App\Mock\AMockV2;

class SellerCreateOrderFulfilmentPackageV2MockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "sort_data": {
            "sort_column": "commitment_date",
            "sort_order": "asc",
            "sort_columns": ["commitment_date"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 50,
            "total_pages": 1,
            "total_rows": 4
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
                  "variant_id": 48011552,
                  "product_variant_title": "کاور قاب گارد طرح  خرس بییر کد  FF829 مناسب برای گوشی موبایل شیائومی   Redmi Note 12s | مشکی | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 13948807,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/86f8cc41d6ab43284d0c488b83a0438113c676b1_1704015239.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-13948807?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjEyNTMyODgsInByb2R1Y3RfaWQiOjEzOTQ4ODA3LCJleHBpcmVfdGltZSI6IjIwMjQtMDgtMDEgMjA6MTg6MzkifQ.0INmG3LIyfUfs_-3n7zTPiX2dw-Q0n_GV8h2oSDO7-k",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 1,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 1,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 48011645,
                  "product_variant_title": "کاور قاب گارد طرح  گل بابونه کد  FF936 مناسب برای گوشی موبایل شیائومی Mi 11lite | مشکی | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 13952408,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/12c955d5765cc0e4f8a6c032a1284603c61ee9cb_1704036738.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-13952408?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjEyNTMyODgsInByb2R1Y3RfaWQiOjEzOTUyNDA4LCJleHBpcmVfdGltZSI6IjIwMjQtMDgtMDEgMjA6MTg6MzkifQ.d8Ei5_W6kKAfqIpb06x5jNKFw8T2mOvWaXq85pnKwbg",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 1,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 1,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 48156218,
                  "product_variant_title": "کاور قاب گارد طرح فضانورد  کد  FF1081 مناسب برای گوشی موبایل شیائومی Poco x3 / Poco x3 pro | مشکی | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 13982564,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/b6beb4efb435d0797f446c93c1df8dd85c31e9ba_1704272788.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-13982564?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjEyNTMyODgsInByb2R1Y3RfaWQiOjEzOTgyNTY0LCJleHBpcmVfdGltZSI6IjIwMjQtMDgtMDEgMjA6MTg6MzkifQ.vDHLRr1EuiV0LqjDTBLd5fwzdWLnKUHJ6eElvke1WN8",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 1,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 1,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 49472974,
                  "product_variant_title": "کاور قاب گارد طرح  قلب کد FF2532  مناسب برای گوشی موبایل  سامسونگ  Galaxy  S23 Ultra  | مشکی | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 14253223,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/8941cac0a93ea8190f9438fc7251b68dcca41122_1706517802.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-14253223?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjEyNTMyODgsInByb2R1Y3RfaWQiOjE0MjUzMjIzLCJleHBpcmVfdGltZSI6IjIwMjQtMDgtMDEgMjA6MTg6MzkifQ.-R8GQvlV4hVcmv1DzdLIipDv7VC9_W-eK8Z6RblxH4Q",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 1,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 1,
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
            "sort_column": "commitment_date",
            "sort_order": "asc",
            "sort_columns": ["commitment_date"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 50,
            "total_pages": 1,
            "total_rows": 1
          },
          "form_data": [],
          "items": {
            "2": {
              "shipping_nature": {
                "key": "medium",
                "title": "متوسط"
              },
              "shipping_nature_id": 2,
              "variants": [
                {
                  "variant_id": 45977103,
                  "product_variant_title": "فن هیتر دوکاره تکنو مدل Te-9600 | مشکی | گارانتی 12 ماهه تکنو",
                  "product_id": 12958403,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/7d7b20ddb9ea847e3bb5c37df0afe394f1eb1a88_1697033934.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-12958403?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjgyNDc0LCJwcm9kdWN0X2lkIjoxMjk1ODQwMywiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjE4OjMxIn0.f-akAlP98_yC6hOjnk90bZXVBoMxdwlZru9sfs-hJuU",
                  "supplier_code": "9160",
                  "shipping_nature_id": 3,
                  "shipping_nature": {
                    "key": "medium",
                    "title": "متوسط"
                  },
                  "quantity": 1,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 1,
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
            "sort_column": "commitment_date",
            "sort_order": "asc",
            "sort_columns": ["commitment_date"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 50,
            "total_pages": 1,
            "total_rows": 5
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
                  "variant_id": 22279276,
                  "product_variant_title": "دمپایی مردانه مدل MOM538 | 38 | گارانتی اصالت و سلامت فیزیکی کالا",
                  "product_id": 6604076,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/a2a047cf0ac7e570126a4be96ebdba1a5a77033f_1633157656.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-6604076?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjIzMTUxNywicHJvZHVjdF9pZCI6NjYwNDA3NiwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjE2OjQ1In0.a8XFg7XhQi4veYGuWg9Hd9COwQbymvlNrzSExcST-Es",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 2,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 2,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 39274158,
                  "product_variant_title": "دمپایی مردانه مدل MOM508 | 37 | گارانتی سلامت فیزیکی کالا",
                  "product_id": 5851155,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/20230fa1b729c754d2ca22994c61877f675f47a4_1627067897.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-5851155?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjIzMTUxNywicHJvZHVjdF9pZCI6NTg1MTE1NSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjE2OjQ1In0.iXUsSPwUzdF2Tv7DXsxti9LKmA9EiR5mBWLNE_dcbiQ",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 3,
                  "available_stock": {
                    "on_the_way_stock": 1,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 2,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 39274172,
                  "product_variant_title": "دمپایی مردانه مدل MOM508 | 38 | گارانتی سلامت فیزیکی کالا",
                  "product_id": 5851155,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/20230fa1b729c754d2ca22994c61877f675f47a4_1627067897.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-5851155?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjIzMTUxNywicHJvZHVjdF9pZCI6NTg1MTE1NSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjE2OjQ1In0.iXUsSPwUzdF2Tv7DXsxti9LKmA9EiR5mBWLNE_dcbiQ",
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
                  "sent_optimal": 1,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 39274175,
                  "product_variant_title": "دمپایی مردانه مدل MOM508 | 39 | گارانتی سلامت فیزیکی کالا",
                  "product_id": 5851155,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/20230fa1b729c754d2ca22994c61877f675f47a4_1627067897.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-5851155?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjIzMTUxNywicHJvZHVjdF9pZCI6NTg1MTE1NSwiZXhwaXJlX3RpbWUiOiIyMDI0LTA4LTAxIDIwOjE2OjQ1In0.iXUsSPwUzdF2Tv7DXsxti9LKmA9EiR5mBWLNE_dcbiQ",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 3,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 1
                  },
                  "sent_optimal": 2,
                  "has_IMEI": false,
                  "has_expiry_date": false
                },
                {
                  "variant_id": 40684739,
                  "product_variant_title": "دمپایی پسرانه مدل MOM612 | 38 | گارانتی سلامت فیزیکی کالا",
                  "product_id": 10724562,
                  "product_image_url": "https://dkstatics-public.digikala.com/digikala-products/fcf135b96c69e77a6bb11d4a3681f89c01f181ee_1676919700.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                  "product_url_on_dk_site": "https://www.digikala.com/product/dkp-10724562?seller-view-token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzZWxsZXJfaWQiOjIzMTUxNywicHJvZHVjdF9pZCI6MTA3MjQ1NjIsImV4cGlyZV90aW1lIjoiMjAyNC0wOC0wMSAyMDoxNjo0NSJ9.iqGMSusU6y2MRASa-eMXRupgZzDmG6x2pO95Etrpi34",
                  "supplier_code": null,
                  "shipping_nature_id": 1,
                  "shipping_nature": {
                    "key": "small",
                    "title": "کوچک"
                  },
                  "quantity": 1,
                  "available_stock": {
                    "on_the_way_stock": 0,
                    "warehouse_stock": 0
                  },
                  "sent_optimal": 1,
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