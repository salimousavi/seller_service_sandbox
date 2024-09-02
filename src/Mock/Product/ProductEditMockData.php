<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class ProductEditMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "product_data": {
            "id": 16248946,
            "marketplace_seller_id": 1229560,
            "category_id": 9381,
            "division_id": 70,
            "model": "آبنوش",
            "brand_id": 719,
            "product_type_ids": [13373, 22812, 22811, 22813, 22814],
            "product_type": null,
            "show_colors": false,
            "is_iranian": true,
            "product_classes": ["2"],
            "fake": true,
            "general_mefa_id": 8130,
            "package_width": null,
            "package_height": null,
            "package_length": null,
            "package_weight": null,
            "platforms": null,
            "description": "کیف مجلسی تمام دستدوز استفاده شده با مخمل سوییت امریکایی و یراق الات ترک زنجیر دار جهت استفاده رودوشی و دسته برنزی برای استفاده در ست مجالس و  مهمانی و دورهمی ها",
            "advantages": [],
            "disadvantages": [],
            "title_fa": "کیف مجلسی زنانه مدل آبنوش",
            "suggested_title_fa": "کیف مجلسی زنانه مدل آبنوش",
            "attributes": {
              "9381": {
                "52": [150, 153],
                "88": [355],
                "196": [1282],
                "204": [1370],
                "244": "30 در 20",
                "8723": [43909, 43913, 43919, 43923],
                "26": [0],
                "155": [0],
                "87": null,
                "209": null,
                "171": null,
                "174": [0],
                "173": [0]
              }
            },
            "width": 0,
            "height": 0,
            "length": 0,
            "weight": 0,
            "brand_name": "متفرقه",
            "moderation_status": "waiting_for_confirm",
            "images": [
              {
                "encrypted_id": "Yit1WnIvcUpCU0VuVGZ2emZKb0w4SzRSdGRJazN3akwwR0NkOTZTOW1vaUc5WnN2ZExQeWU3OFZsMlBITEJEUEc4UW8xRWRoOUdKR2JPZ2pETm5nN3c9PQ==",
                "image_url": "https://dkstatics-public.digikala.com/digikala-products/bb865941033d626e4e2d05b5d944958607cedb26_1722463724.jpg?x-oss-process=image/resize,m_fill,h_90,w_90",
                "image_max_url": "https://dkstatics-public.digikala.com/digikala-products/bb865941033d626e4e2d05b5d944958607cedb26_1722463724.jpg",
                "is_main": true,
                "options": [],
                "order": 1
              },
              {
                "encrypted_id": "VXhCS2JDR1BoZDhoeVRrZzE5N2JKOGtjYlI5OGVKc2V1clJIZm1tZnU4MHdGaWg4QlBTMFB4eWhvdk03bElzUjl1b2JFZjg5OXY2UUc2OWpwOXQ4VHc9PQ==",
                "image_url": "https://dkstatics-public.digikala.com/digikala-products/827adf18c6dd9d143adb16024b1cad92ed5b8c9a_1722463849.jpg?x-oss-process=image/resize,m_fill,h_90,w_90",
                "image_max_url": "https://dkstatics-public.digikala.com/digikala-products/827adf18c6dd9d143adb16024b1cad92ed5b8c9a_1722463849.jpg",
                "is_main": false,
                "options": {
                  "type": null,
                  "watermark": true,
                  "copyright": false,
                  "is_active": true,
                  "sort": 1
                },
                "order": 1
              },
              {
                "encrypted_id": "TmY5anExL1ZOZ1hpRG0rU0pENmdGd1dJRGYrMzkrck45TWtxL2tZeWdrMkNwZ0ZEeGFXeVl4S0ZNVWJZOExtcVI1MTY5Q0dDWU81dFc3eTBZTUtPV3c9PQ==",
                "image_url": "https://dkstatics-public.digikala.com/digikala-products/47ab430e2ae7490bbb7292351b37be85d25024b3_1722463939.jpg?x-oss-process=image/resize,m_fill,h_90,w_90",
                "image_max_url": "https://dkstatics-public.digikala.com/digikala-products/47ab430e2ae7490bbb7292351b37be85d25024b3_1722463939.jpg",
                "is_main": false,
                "options": {
                  "type": null,
                  "watermark": true,
                  "copyright": false,
                  "is_active": true,
                  "sort": 2
                },
                "order": 2
              },
              {
                "encrypted_id": "RFpva1lYWWR1V1Nhd2g5Q04xWHIrcFp6NDhHaXhScVJOT2xaaVp0Z0ExT1N0bFVhbUpmNFpXTFlhaTJ6NkdNbklhSXFBWnE3cXR2Q0FDNFRlbGpZWWc9PQ==",
                "image_url": "https://dkstatics-public.digikala.com/digikala-products/81cd0cb97799b22151ecd9caa6e6da41479c9eee_1722464022.jpg?x-oss-process=image/resize,m_fill,h_90,w_90",
                "image_max_url": "https://dkstatics-public.digikala.com/digikala-products/81cd0cb97799b22151ecd9caa6e6da41479c9eee_1722464022.jpg",
                "is_main": false,
                "options": {
                  "type": null,
                  "watermark": true,
                  "copyright": false,
                  "is_active": true,
                  "sort": 3
                },
                "order": 3
              },
              {
                "encrypted_id": "UWErWUEvY1lrN2ZiRG9Rc0xJd2V2a2dPY2Z6Q3lsQTVVbEUrdGtJWHZGaE9VdVd1d0RRWlJ6MnVzdEpmZjVxYVVxeU1nK1NFOFRha0Fqa21SdU1TclE9PQ==",
                "image_url": "https://dkstatics-public.digikala.com/digikala-products/8581e7b6ae8d0f460f67484ff2c3b9b9d50ab3db_1722464074.jpg?x-oss-process=image/resize,m_fill,h_90,w_90",
                "image_max_url": "https://dkstatics-public.digikala.com/digikala-products/8581e7b6ae8d0f460f67484ff2c3b9b9d50ab3db_1722464074.jpg",
                "is_main": false,
                "options": {
                  "type": null,
                  "watermark": true,
                  "copyright": false,
                  "is_active": true,
                  "sort": 4
                },
                "order": 4
              }
            ]
          },
          "moderation_response": {
            "images": []
          },
          "enabled_fields": ["ALL"],
          "steps_moderation_status": null,
          "locked_for_moderation": false,
          "multi_seller_product": false,
          "edit_status": "waiting_for_confirm"
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "product_data": {
            "id": 14066361,
            "marketplace_seller_id": 1229560,
            "category_id": 9381,
            "division_id": 66,
            "model": "مجلسی",
            "brand_id": 719,
            "product_type_ids": [22814],
            "product_type": null,
            "show_colors": false,
            "is_iranian": true,
            "product_classes": ["2"],
            "fake": true,
            "general_mefa_id": 8130,
            "package_width": null,
            "package_height": null,
            "package_length": null,
            "package_weight": null,
            "platforms": null,
            "description": "کیف های تمام دستدوز مجلسی روبان گلدوزی جواهردوزی حاصل دسترنج هنرمندان خوش سلیقه شیک و مجلسی استفاده شده با بهتربن متریال ترک یراق الات و مخمل سوویت وارداتی ",
            "title_fa": "کیف زنانه مدل مجلسی",
            "suggested_title_fa": "کیف زنانه مدل مجلسی",
            "attributes": {
              "9381": {
                "88": [355],
                "26": [33319],
                "52": [150, 153],
                "204": [1363],
                "244": "20",
                "196": [1282],
                "87": "",
                "209": "",
                "171": "",
                "155": [0],
                "174": [0],
                "173": [0]
              }
            },
            "width": 0,
            "height": 0,
            "length": 0,
            "weight": 0,
            "brand_name": "متفرقه",
            "moderation_status": "in_review",
            "images": [
              {
                "encrypted_id": "U0k5RlA3bGtzNmg3aUt4bDd3YnZsNlBoK0NNN1dCTzE1OENOL01WT3FtSU9UVFBaN3dCektlS1VDQXh6cXhjcG0vRm1VMTlOR2ZKTWhBTUk0WWJ2M2c9PQ==",
                "image_url": "https://dkstatics-public.digikala.com/digikala-products/6c9b28a3ef5800adc963fc33720e35490e0e75e0_1705065049.jpg?x-oss-process=image/resize,m_fill,h_90,w_90",
                "image_max_url": "https://dkstatics-public.digikala.com/digikala-products/6c9b28a3ef5800adc963fc33720e35490e0e75e0_1705065049.jpg",
                "is_main": true,
                "options": [],
                "order": 1
              },
              {
                "encrypted_id": "RmovUzFuQUhxZnM1TURwOXhGSUpGYlFycnhxSmVnMTZJOENGTlNQMEZ4TkdsY3VGTk9yQ25xRXRPREhQNTlsbjZDWEV3ZGJyZUVmdkFlSjg5dmRsQmc9PQ==",
                "image_url": "https://dkstatics-public.digikala.com/digikala-products/eff3019c1e9a4afa89cea3c5d114a5c23fd0d9c8_1705065040.jpg?x-oss-process=image/resize,m_fill,h_90,w_90",
                "image_max_url": "https://dkstatics-public.digikala.com/digikala-products/eff3019c1e9a4afa89cea3c5d114a5c23fd0d9c8_1705065040.jpg",
                "is_main": false,
                "options": {
                  "type": null,
                  "watermark": true,
                  "copyright": false,
                  "is_active": true,
                  "sort": 2
                },
                "order": 2
              },
              {
                "encrypted_id": "ZjI2RHJFL1FnVG1qODQ3VU9XUVYySlRCbXZZeDlMSFEvck1iTFczdEZyNTZ2UUkweEhJN2dnYkhaUmpJd0ZsQzIxZnh2ODdRWTgzV3hVVHZTbzZGYmc9PQ==",
                "image_url": "https://dkstatics-public.digikala.com/digikala-products/a58af677042974046527904e528f0c39a2f3a597_1705065041.jpg?x-oss-process=image/resize,m_fill,h_90,w_90",
                "image_max_url": "https://dkstatics-public.digikala.com/digikala-products/a58af677042974046527904e528f0c39a2f3a597_1705065041.jpg",
                "is_main": false,
                "options": {
                  "type": null,
                  "watermark": true,
                  "copyright": false,
                  "is_active": true,
                  "sort": 3
                },
                "order": 3
              },
              {
                "encrypted_id": "N2F0UlFTdm5RZnppTHdlVWRNVEJtL0xnUWF1VDNsdDUra3hVbjJYemxJUHVMS25jQVhMUTFrb0VpZUM0QlNGMVhJelQ2TjNVUzhvRDVGZHM0aFJkOVE9PQ==",
                "image_url": "https://dkstatics-public.digikala.com/digikala-products/d66e8105d0f5ec55e477fb6fbedd3c235213773a_1705065043.jpg?x-oss-process=image/resize,m_fill,h_90,w_90",
                "image_max_url": "https://dkstatics-public.digikala.com/digikala-products/d66e8105d0f5ec55e477fb6fbedd3c235213773a_1705065043.jpg",
                "is_main": false,
                "options": {
                  "type": null,
                  "watermark": true,
                  "copyright": false,
                  "is_active": true,
                  "sort": 4
                },
                "order": 4
              },
              {
                "encrypted_id": "bDNrYTk1ZnU3b2cvS1N3OEk1UlAyV3YxMUNiUnR2aE5laXRtRUtqZG8rZTZGMTZJa0RVWHBMU01OQURSUVNnVnRqakRXeExIRjhWeXErSlBBRlhHOFE9PQ==",
                "image_url": "https://dkstatics-public.digikala.com/digikala-products/11b6d259ca4b4760deaa90e18b70566522cc8f73_1705065045.jpg?x-oss-process=image/resize,m_fill,h_90,w_90",
                "image_max_url": "https://dkstatics-public.digikala.com/digikala-products/11b6d259ca4b4760deaa90e18b70566522cc8f73_1705065045.jpg",
                "is_main": false,
                "options": {
                  "type": null,
                  "watermark": true,
                  "copyright": false,
                  "is_active": true,
                  "sort": 5
                },
                "order": 5
              },
              {
                "encrypted_id": "WEJUNEJmeVBaVlVNb21JQ0taOVhUUjUxMkpOd1BmTWJoTkhhZ1FwMTl0UnhadGhMWmJPdGFDVFh1WXBoeVVyWEEwanBpVEh2TXdPb3hvMnpuU1g5S1E9PQ==",
                "image_url": "https://dkstatics-public.digikala.com/digikala-products/54b54f44414e94c8ffaa51f1bdf638b61eb8ffcf_1705065047.jpg?x-oss-process=image/resize,m_fill,h_90,w_90",
                "image_max_url": "https://dkstatics-public.digikala.com/digikala-products/54b54f44414e94c8ffaa51f1bdf638b61eb8ffcf_1705065047.jpg",
                "is_main": false,
                "options": {
                  "type": null,
                  "watermark": true,
                  "copyright": false,
                  "is_active": true,
                  "sort": 6
                },
                "order": 6
              },
              {
                "encrypted_id": "cFdVekhwZ2xyS3A5ZUYvOUZ5T0pqSWhvcXo1UnFCaDlvY1lITmNHMFFXaHc2Y1U4enNsSzVIcGRQeXc0bWo2R1VZcEpBU2loSXFFYnBrcjVrNmkrNFE9PQ==",
                "image_url": "https://dkstatics-public.digikala.com/digikala-products/dcc4610cd494f4595703909ad2e353f2f3526fa6_1705065051.jpg?x-oss-process=image/resize,m_fill,h_90,w_90",
                "image_max_url": "https://dkstatics-public.digikala.com/digikala-products/dcc4610cd494f4595703909ad2e353f2f3526fa6_1705065051.jpg",
                "is_main": false,
                "options": {
                  "type": null,
                  "watermark": true,
                  "copyright": false,
                  "is_active": true,
                  "sort": 7
                },
                "order": 7
              },
              {
                "encrypted_id": "V05sdUt5cE9QQWM3RTRaM29KdGdlcW1FSG9TS2duT0MvZnYxV3I5SEVHTTY3Tm5NQzVKVjl2Q29EUElaTStKSHFmK1FBZGsrdW1nYnROaW9QUnFJMHc9PQ==",
                "image_url": "https://dkstatics-public.digikala.com/digikala-products/83f366002e8068b56478ba830543c9c3059fa46e_1705065052.jpg?x-oss-process=image/resize,m_fill,h_90,w_90",
                "image_max_url": "https://dkstatics-public.digikala.com/digikala-products/83f366002e8068b56478ba830543c9c3059fa46e_1705065052.jpg",
                "is_main": false,
                "options": {
                  "type": null,
                  "watermark": true,
                  "copyright": false,
                  "is_active": true,
                  "sort": 8
                },
                "order": 8
              }
            ]
          },
          "moderation_response": {
            "title_fa": {
              "reasons": ["روی کالا لوگو یا نام برند مشهور دیده نمیشود. بنابراین لطفا بج غیراصل را غیرفعال نمایید."]
            },
            "images": [
              {
                "id": "U0k5RlA3bGtzNmg3aUt4bDd3YnZsNlBoK0NNN1dCTzE1OENOL01WT3FtSU9UVFBaN3dCektlS1VDQXh6cXhjcG0vRm1VMTlOR2ZKTWhBTUk0WWJ2M2c9PQ==",
                "isRemoved": false,
                "moderationReasons": {
                  "4": "بخشی از کالای شما در تصویر دیده نمی شود /بریده یا از کادر اصلی خارج شده است /دور کالا دندانه دندانه شده است",
                  "9": "کالا در عکس اصلی کوچک تر از ابعاد قالب تصویر است. لطفا عکس بزرگتری از کالا در عکس اصلی قرار دهید.",
                  "73": "عکس کالا کیفیت مناسبی ندارد و یا مات شده است، تصویر به گونه ای باشد که اجزای کالا بطور واضح و شفاف مشخص باشد."
                }
              },
              {
                "id": "RmovUzFuQUhxZnM1TURwOXhGSUpGYlFycnhxSmVnMTZJOENGTlNQMEZ4TkdsY3VGTk9yQ25xRXRPREhQNTlsbjZDWEV3ZGJyZUVmdkFlSjg5dmRsQmc9PQ==",
                "isRemoved": false,
                "moderationReasons": {
                  "8": "کالا در آلبوم با عکس اصلی متفاوت است. مغایرت اصلاح شود."
                }
              },
              {
                "id": "ZjI2RHJFL1FnVG1qODQ3VU9XUVYySlRCbXZZeDlMSFEvck1iTFczdEZyNTZ2UUkweEhJN2dnYkhaUmpJd0ZsQzIxZnh2ODdRWTgzV3hVVHZTbzZGYmc9PQ==",
                "isRemoved": false,
                "moderationReasons": {
                  "8": "کالا در آلبوم با عکس اصلی متفاوت است. مغایرت اصلاح شود."
                }
              },
              {
                "id": "N2F0UlFTdm5RZnppTHdlVWRNVEJtL0xnUWF1VDNsdDUra3hVbjJYemxJUHVMS25jQVhMUTFrb0VpZUM0QlNGMVhJelQ2TjNVUzhvRDVGZHM0aFJkOVE9PQ==",
                "isRemoved": false,
                "moderationReasons": {
                  "8": "کالا در آلبوم با عکس اصلی متفاوت است. مغایرت اصلاح شود."
                }
              },
              {
                "id": "bDNrYTk1ZnU3b2cvS1N3OEk1UlAyV3YxMUNiUnR2aE5laXRtRUtqZG8rZTZGMTZJa0RVWHBMU01OQURSUVNnVnRqakRXeExIRjhWeXErSlBBRlhHOFE9PQ==",
                "isRemoved": false,
                "moderationReasons": {
                  "8": "کالا در آلبوم با عکس اصلی متفاوت است. مغایرت اصلاح شود."
                }
              },
              {
                "id": "WEJUNEJmeVBaVlVNb21JQ0taOVhUUjUxMkpOd1BmTWJoTkhhZ1FwMTl0UnhadGhMWmJPdGFDVFh1WXBoeVVyWEEwanBpVEh2TXdPb3hvMnpuU1g5S1E9PQ==",
                "isRemoved": false,
                "moderationReasons": {
                  "8": "کالا در آلبوم با عکس اصلی متفاوت است. مغایرت اصلاح شود."
                }
              },
              {
                "id": "cFdVekhwZ2xyS3A5ZUYvOUZ5T0pqSWhvcXo1UnFCaDlvY1lITmNHMFFXaHc2Y1U4enNsSzVIcGRQeXc0bWo2R1VZcEpBU2loSXFFYnBrcjVrNmkrNFE9PQ==",
                "isRemoved": false,
                "moderationReasons": {
                  "8": "کالا در آلبوم با عکس اصلی متفاوت است. مغایرت اصلاح شود."
                }
              },
              {
                "id": "V05sdUt5cE9QQWM3RTRaM29KdGdlcW1FSG9TS2duT0MvZnYxV3I5SEVHTTY3Tm5NQzVKVjl2Q29EUElaTStKSHFmK1FBZGsrdW1nYnROaW9QUnFJMHc9PQ==",
                "isRemoved": false,
                "moderationReasons": {
                  "8": "کالا در آلبوم با عکس اصلی متفاوت است. مغایرت اصلاح شود."
                }
              }
            ]
          },
          "enabled_fields": ["ALL"],
          "steps_moderation_status": {
            "step_title": true,
            "step_category": false,
            "step_basic_info": false,
            "step_attribute": false,
            "step_image": true
          },
          "locked_for_moderation": false,
          "multi_seller_product": false,
          "edit_status": "in_review"
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '';
    }
}