<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class ProductSearchV2MockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "sort_data": {
            "sort_column": "id",
            "sort_order": "asc",
            "sort_columns": ["id"]
          },
          "pager": {
            "page": 7,
            "item_per_page": 10,
            "total_pages": 35,
            "total_rows": 342
          },
          "form_data": {
            "keyword": "کدکس",
            "categories": "6960"
          },
          "items": [
            {
              "id": 3827662,
              "title": "کاندوم گودلایف سری ایموجی مدل Super Delay بسته 6 عددی به همراه کاندوم ناچ کدکس مدل Double Delay بسته 10 عددی",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.19
              },
              "market_price": 380714,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/4d9258246886f3187d3a28a10b12a96286faed35_1606067902.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "no_color_no_size",
              "number_of_sellers": 5,
              "is_selling": false
            },
            {
              "id": 3827968,
              "title": "کاندوم لمورکس کد 088 مجموعه 3 عددی به همراه کاندوم ناچ کدکس مدل BIG DOTS بسته 10 عددی",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.19
              },
              "market_price": 440000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/5e17faec662f890efde0983d1e20768fdd13e52a_1606069423.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "no_color_no_size",
              "number_of_sellers": 2,
              "is_selling": false
            },
            {
              "id": 3254341,
              "title": "کاندوم ناچ کدکس\r\nمدل Zero Invisible بسته 12 عددی به همراه کاندوم مدل Classic Aloe Vera",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.19
              },
              "market_price": 1000000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/d520f28a44cf39b2b51bd1bd222d56acdbc3664c_1597664867.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "no_color_no_size",
              "number_of_sellers": 14,
              "is_selling": false
            },
            {
              "id": 2332775,
              "title": "کاندوم ناچ کدکس مدل warm مجموعه 12 عددی",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.19
              },
              "market_price": 1000000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/115020043.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "regulated": "مصوّب"
              },
              "color_type": "no_color_no_size",
              "number_of_sellers": 14,
              "is_selling": false
            },
            {
              "id": 2332830,
              "title": "کاندوم ناچ کدکس مدل fruity delay مجموعه 12 عددی",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.19
              },
              "market_price": 8500000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/115020343.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "no_color_no_size",
              "number_of_sellers": 4,
              "is_selling": false
            },
            {
              "id": 2332881,
              "title": "کاندوم ناچ کدکس مدل zero مجموعه 12 عددی",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.19
              },
              "market_price": 3649777,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/115020655.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "no_color_no_size",
              "number_of_sellers": 23,
              "is_selling": false
            },
            {
              "id": 2332891,
              "title": "کاندوم ناچ کدکس مدل super مجموعه 12 عددی",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.19
              },
              "market_price": 1536000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/115020690.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "no_color_no_size",
              "number_of_sellers": 6,
              "is_selling": false
            },
            {
              "id": 3126223,
              "title": "کاندوم ناچ کدکس مدل Double Delay بسته 10 عددی به همراه کاندوم ردلایت مدل فویل مجموعه 4 عددی",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.19
              },
              "market_price": 143014,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/1fb2dcb23ee97580c8182c972a4f8c95759c904e_1595394263.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "no_color_no_size",
              "number_of_sellers": 1,
              "is_selling": false
            },
            {
              "id": 3901299,
              "title": "کاندوم گود لایف مدل super Delay به همراه کاندوم ناچ کدکس مدل 0.03 بسته 3 عددی",
              "status": "marketable",
              "min_price": 600000,
              "commission": {
                "canSell": true,
                "commission": 0.19
              },
              "market_price": 600000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/d76e2382580aecc83d28a24549e5df018cbe946e_1607152857.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "no_color_no_size",
              "number_of_sellers": 5,
              "is_selling": false
            },
            {
              "id": 4050407,
              "title": "کاندوم ناچ کدکس مدل Matador بسته 12 عددی به همراه کاندوم اورز مدل Delay بسته 12 عددی",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.19
              },
              "market_price": 450000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/c9948c52db5e2e6a99c144866ae93555e712616e_1608629606.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "no_color_no_size",
              "number_of_sellers": 3,
              "is_selling": false
            }
          ],
          "meta_data": {
            "filters": [
              [
                {
                  "name": "keyword",
                  "type": "string",
                  "required": "true"
                }
              ],
              [
                {
                  "name": "categories",
                  "type": "option",
                  "label": "گروه اصلی",
                  "dynamic": true,
                  "db_name": "category",
                  "values": [
                    {
                      "6960": "کاندوم"
                    }
                  ]
                }
              ],
              [
                {
                  "name": "brands",
                  "type": "option",
                  "label": "برند کالا",
                  "dynamic": true,
                  "db_name": "brand",
                  "values": {
                    "719": "متفرقه",
                    "2548": "کاپوت",
                    "4357": "ناچ کدکس",
                    "5662": "گودلایف",
                    "5739": "آگرادو",
                    "5954": "کاندوم",
                    "13406": "ایکس دریم",
                    "15349": "چرچیلز",
                    "18280": "سوئیس کر"
                  }
                }
              ],
              [
                {
                  "name": "types",
                  "type": "option",
                  "label": "نوع کالا",
                  "dynamic": true,
                  "db_name": "category_product_type",
                  "values": {
                    "10622": {
                      "id": 10622,
                      "title_fa": "کاندوم",
                      "title_en": "condom"
                    },
                    "18858": {
                      "id": 18858,
                      "title_fa": "روغن",
                      "title_en": "Oil"
                    },
                    "21500": {
                      "id": 21500,
                      "title_fa": "اسپری تاخیری",
                      "title_en": "Delay-spray"
                    },
                    "10623": {
                      "id": 10623,
                      "title_fa": "روان کننده",
                      "title_en": "Lubricant"
                    },
                    "21501": {
                      "id": 21501,
                      "title_fa": "ژل تاخیری",
                      "title_en": "Delay-gel"
                    }
                  }
                }
              ],
              [
                {
                  "name": "colorPalettes",
                  "type": "option",
                  "label": "رنگ",
                  "dynamic": false,
                  "values": {
                    "1": [],
                    "2": [],
                    "3": [],
                    "4": [],
                    "5": [],
                    "6": [],
                    "7": [],
                    "8": [],
                    "9": [],
                    "10": [],
                    "11": [],
                    "12": []
                  }
                }
              ],
              [
                {
                  "name": "statuses",
                  "type": "option",
                  "label": "وضعیت",
                  "dynamic": false,
                  "values": {
                    "marketable": "قابل فروش",
                    "coming_soon": "به\u200Cزودی",
                    "stop_production": "توقف تولید"
                  }
                }
              ],
              [
                {
                  "name": "fake",
                  "type": "bool",
                  "label": "اصالت کالا",
                  "dynamic": false
                }
              ]
            ],
            "filtered": {
              "keyword": [
                [
                  {
                    "name": "keyword",
                    "type": "string",
                    "required": "true"
                  }
                ]
              ],
              "categories": {
                "1": [
                  {
                    "name": "categories",
                    "type": "option",
                    "label": "گروه اصلی",
                    "dynamic": true,
                    "db_name": "category"
                  }
                ],
                "data": {
                  "6960": "کاندوم"
                }
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
            "sort_column": "id",
            "sort_order": "asc",
            "sort_columns": ["id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 10,
            "total_pages": 6,
            "total_rows": 54
          },
          "form_data": {
            "keyword": "cb230"
          },
          "items": [
            {
              "id": 7550949,
              "title": "کاور مدل CB230 مناسب برای گوشی موبایل اپل Iphone5 / 5S",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.09
              },
              "market_price": 300000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/52bc11ef0500a92446175d867cc2870fd80f2c0f_1642072457.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "colored",
              "number_of_sellers": 1,
              "is_selling": false
            },
            {
              "id": 1919830,
              "title": "چرخ ماهیگیری هان لانگ کد CB240",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.09
              },
              "market_price": 4000000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/112784025.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "no_color_no_size",
              "number_of_sellers": 6,
              "is_selling": false
            },
            {
              "id": 2803246,
              "title": "دمپایی زنانه کد CB23H",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.16
              },
              "market_price": 650000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/121028068.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_palette": 5,
              "color_type": "sized",
              "number_of_sellers": 1,
              "is_selling": false
            },
            {
              "id": 2653838,
              "title": "پمپ آب پنتاکس مدل CB210-01-IR",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": false,
                "type": "limitation",
                "commission": null,
                "message": ["فروش این کالا به یکی از دلایل زیر برای شما محدود شده است:</br>این کالا نیاز به <a href=\"https://selleracademy.digikala.com/%da%af%d8%b1%d9%88%d9%87-%d9%87%d8%a7%db%8c-%da%a9%d8%a7%d9%84%d8%a7%db%8c%db%8c-%da%a9%d9%87-%d8%a8%d8%b1%d8%a7%db%8c-%d9%81%d8%b1%d9%88%d8%b4-%d9%86%db%8c%d8%a7%d8%b2-%d8%a8%d9%87-%d9%85%d8%af%d8%b1/\">مجوز</a> دارد، این کالا به دلایل <a href=\"https://selleracademy.digikala.com/%D8%A7%D9%82%D9%84%D8%A7%D9%85-%D9%85%D9%85%D9%86%D9%88%D8%B9%D9%87/\">دیگری</a> محدود شده است."]
              },
              "market_price": 52225000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/120297468.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "no_color_no_size",
              "number_of_sellers": 19,
              "is_selling": false
            },
            {
              "id": 1765193,
              "title": "پمپ آب پنتاکس مدل CB210-01",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": false,
                "type": "limitation",
                "commission": null,
                "message": ["فروش این کالا به یکی از دلایل زیر برای شما محدود شده است:</br>این کالا نیاز به <a href=\"https://selleracademy.digikala.com/%da%af%d8%b1%d9%88%d9%87-%d9%87%d8%a7%db%8c-%da%a9%d8%a7%d9%84%d8%a7%db%8c%db%8c-%da%a9%d9%87-%d8%a8%d8%b1%d8%a7%db%8c-%d9%81%d8%b1%d9%88%d8%b4-%d9%86%db%8c%d8%a7%d8%b2-%d8%a8%d9%87-%d9%85%d8%af%d8%b1/\">مجوز</a> دارد، این کالا به دلایل <a href=\"https://selleracademy.digikala.com/%D8%A7%D9%82%D9%84%D8%A7%D9%85-%D9%85%D9%85%D9%86%D9%88%D8%B9%D9%87/\">دیگری</a> محدود شده است."]
              },
              "market_price": 45000000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/111954628.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "no_color_no_size",
              "number_of_sellers": 20,
              "is_selling": false
            },
            {
              "id": 4201972,
              "title": "پمپ آب الکتروژن مدل CB210",
              "status": "marketable",
              "min_price": 116400000,
              "commission": {
                "canSell": true,
                "commission": 0.06
              },
              "market_price": 116400000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/f4eaffa52b785fa2f23ba3b6fcc6c6740908c768_1610268749.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "no_color_no_size",
              "number_of_sellers": 16,
              "is_selling": false
            },
            {
              "id": 9390319,
              "title": "پمپ آب مارکرز مدل  01/CB210",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.06
              },
              "market_price": 47000000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/d8816ec3a414ebc3a6bf84c88043d674ddb7bc29_1662452582.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "no_color_no_size",
              "number_of_sellers": 1,
              "is_selling": false
            },
            {
              "id": 1651116,
              "title": "پمپ فشار آب پنتاکس مدل CB210-00",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": false,
                "type": "limitation",
                "commission": null,
                "message": ["فروش این کالا به یکی از دلایل زیر برای شما محدود شده است:</br>این کالا نیاز به <a href=\"https://selleracademy.digikala.com/%da%af%d8%b1%d9%88%d9%87-%d9%87%d8%a7%db%8c-%da%a9%d8%a7%d9%84%d8%a7%db%8c%db%8c-%da%a9%d9%87-%d8%a8%d8%b1%d8%a7%db%8c-%d9%81%d8%b1%d9%88%d8%b4-%d9%86%db%8c%d8%a7%d8%b2-%d8%a8%d9%87-%d9%85%d8%af%d8%b1/\">مجوز</a> دارد، این کالا به دلایل <a href=\"https://selleracademy.digikala.com/%D8%A7%D9%82%D9%84%D8%A7%D9%85-%D9%85%D9%85%D9%86%D9%88%D8%B9%D9%87/\">دیگری</a> محدود شده است."]
              },
              "market_price": 31470000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/111336965.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "no_color_no_size",
              "number_of_sellers": 15,
              "is_selling": false
            },
            {
              "id": 11198415,
              "title": "پمپ آب ورتکس مدل CB210 ",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.07
              },
              "market_price": 72000000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/703d94fab3048e71b420146b50139256816f4340_1682782560.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "no_color_no_size",
              "number_of_sellers": 1,
              "is_selling": false
            },
            {
              "id": 12412935,
              "title": "پمپ آب مدل CB210/00",
              "status": "marketable",
              "min_price": 104000000,
              "commission": {
                "canSell": true,
                "commission": 0.07
              },
              "market_price": 102000000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/e9555b713c38e2a17a9128dabbc221f66e2ac8b4_1692256554.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "no_color_no_size",
              "number_of_sellers": 2,
              "is_selling": false
            }
          ],
          "meta_data": {
            "filters": [
              [
                {
                  "name": "keyword",
                  "type": "string",
                  "required": "true"
                }
              ],
              [
                {
                  "name": "categories",
                  "type": "option",
                  "label": "گروه اصلی",
                  "dynamic": true,
                  "db_name": "category",
                  "values": [
                    {
                      "77": "کیف و کاور گوشی"
                    },
                    {
                      "80": "کابل شارژ و مبدل"
                    },
                    {
                      "110": "کیف دوربین"
                    },
                    {
                      "156": "ساعت دیواری و ایستاده"
                    },
                    {
                      "1271": "شارژر تبلت و موبایل"
                    },
                    {
                      "6243": "پمپ سیالات"
                    },
                    {
                      "6322": "تخته گوشت"
                    },
                    {
                      "6395": "لامپ و چراغ"
                    },
                    {
                      "6613": "پاکت هدیه و ساک خرید"
                    },
                    {
                      "6623": "نشانگر کتاب"
                    },
                    {
                      "6823": "خراطی"
                    },
                    {
                      "6961": "چراغ تزئینی"
                    },
                    {
                      "8996": "چرخ خیاطی دستی و ملزومات خیاطی"
                    },
                    {
                      "9007": "لوازم یدکی ابزار برقی"
                    },
                    {
                      "9083": "لوازم ماهیگیری"
                    },
                    {
                      "9376": "دمپایی زنانه"
                    },
                    {
                      "9448": "ژاکت و پلیور مردانه"
                    },
                    {
                      "9546": "ملزومات زیورآلات"
                    },
                    {
                      "9623": "سرپوش نوزاد"
                    },
                    {
                      "10704": "آرم و برچسب خودرو"
                    }
                  ]
                }
              ],
              [
                {
                  "name": "brands",
                  "type": "option",
                  "label": "برند کالا",
                  "dynamic": true,
                  "db_name": "brand",
                  "values": {
                    "19": "پنتاکس",
                    "719": "متفرقه",
                    "1339": "روموس",
                    "1377": "رونیکس",
                    "3184": "کملینک",
                    "4361": "هالی استار",
                    "6308": "وندا وود",
                    "9259": "پلاس ناینتی",
                    "11468": "موکسوم",
                    "16495": "ولکانو",
                    "17671": "الکتروژن",
                    "21119": "ویتو",
                    "22824": "اسکواردی",
                    "29657": "الکتروپمپ اسپادان",
                    "31422": "دکورابو",
                    "34967": "مارکرز",
                    "36615": "فلوران الکترو پمپ",
                    "42303": "اسپیتال"
                  }
                }
              ],
              [
                {
                  "name": "types",
                  "type": "option",
                  "label": "نوع کالا",
                  "dynamic": true,
                  "db_name": "category_product_type",
                  "values": {
                    "9334": {
                      "id": 9334,
                      "title_fa": "خانگی",
                      "title_en": "Home-use"
                    },
                    "4804": {
                      "id": 4804,
                      "title_fa": "کابل شارژ",
                      "title_en": "Charging-cable"
                    },
                    "9335": {
                      "id": 9335,
                      "title_fa": "سانتریفیوژ زمینی",
                      "title_en": "Ground-centrifuge"
                    },
                    "4808": {
                      "id": 4808,
                      "title_fa": "مبدل ها",
                      "title_en": "Converters"
                    },
                    "6346": {
                      "id": 6346,
                      "title_fa": "فانتزی",
                      "title_en": "Fantasy"
                    },
                    "6532": {
                      "id": 6532,
                      "title_fa": "چوب",
                      "title_en": "Wood"
                    },
                    "7166": {
                      "id": 7166,
                      "title_fa": "پاکت هدیه",
                      "title_en": "gift-pocket"
                    },
                    "9331": {
                      "id": 9331,
                      "title_fa": "مکش",
                      "title_en": "suction"
                    },
                    "11328": {
                      "id": 11328,
                      "title_fa": "ذغال",
                      "title_en": "Coal"
                    },
                    "11412": {
                      "id": 11412,
                      "title_fa": "چرخ",
                      "title_en": "Reel"
                    },
                    "21642": {
                      "id": 21642,
                      "title_fa": "برچسب تزئینی",
                      "title_en": "car logo stickers"
                    },
                    "1463": {
                      "id": 1463,
                      "title_fa": "کیف دوربین های DSLR",
                      "title_en": "DSLR-camera-bag"
                    },
                    "1464": {
                      "id": 1464,
                      "title_fa": "کوله پشتی تجهیزات عکاسی",
                      "title_en": "Photography-equipment-backpack"
                    },
                    "3540": {
                      "id": 3540,
                      "title_fa": "کاور",
                      "title_en": "cover"
                    },
                    "4753": {
                      "id": 4753,
                      "title_fa": "ساعت دیواری",
                      "title_en": "wall-clock"
                    },
                    "4805": {
                      "id": 4805,
                      "title_fa": "کابل OTG",
                      "title_en": "OTG-cable"
                    },
                    "7365": {
                      "id": 7365,
                      "title_fa": "LED",
                      "title_en": "LED"
                    },
                    "8776": {
                      "id": 8776,
                      "title_fa": "شارژر باتری موبایل",
                      "title_en": "Mobile-Battery-Charger"
                    },
                    "9332": {
                      "id": 9332,
                      "title_fa": "کف کش",
                      "title_en": "Flooring-suction"
                    },
                    "9336": {
                      "id": 9336,
                      "title_fa": "خود مکش",
                      "title_en": "Self-suction"
                    },
                    "10981": {
                      "id": 10981,
                      "title_fa": "جام",
                      "title_en": "Wine-glass"
                    },
                    "11262": {
                      "id": 11262,
                      "title_fa": "نخ",
                      "title_en": "Thread"
                    },
                    "12528": {
                      "id": 12528,
                      "title_fa": "ژاکت",
                      "title_en": "Jacket"
                    },
                    "14633": {
                      "id": 14633,
                      "title_fa": "ست",
                      "title_en": "set"
                    },
                    "15378": {
                      "id": 15378,
                      "title_fa": "دمپایی تخت",
                      "title_en": "Flat-Slippers"
                    },
                    "16565": {
                      "id": 16565,
                      "title_fa": "مهره",
                      "title_en": "bead"
                    },
                    "19879": {
                      "id": 19879,
                      "title_fa": "کنترلر",
                      "title_en": "controller"
                    },
                    "22501": {
                      "id": 22501,
                      "title_fa": "چراغ آویز",
                      "title_en": "Pendant-light"
                    }
                  }
                }
              ],
              [
                {
                  "name": "colorPalettes",
                  "type": "option",
                  "label": "رنگ",
                  "dynamic": false,
                  "values": {
                    "1": [],
                    "2": [],
                    "3": [],
                    "4": [],
                    "5": [],
                    "6": [],
                    "7": [],
                    "8": [],
                    "9": [],
                    "10": [],
                    "11": [],
                    "12": []
                  }
                }
              ],
              [
                {
                  "name": "statuses",
                  "type": "option",
                  "label": "وضعیت",
                  "dynamic": false,
                  "values": {
                    "marketable": "قابل فروش",
                    "coming_soon": "به\u200Cزودی",
                    "stop_production": "توقف تولید"
                  }
                }
              ],
              [
                {
                  "name": "fake",
                  "type": "bool",
                  "label": "اصالت کالا",
                  "dynamic": false
                }
              ]
            ],
            "filtered": {
              "keyword": [
                [
                  {
                    "name": "keyword",
                    "type": "string",
                    "required": "true"
                  }
                ]
              ]
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
            "sort_column": "id",
            "sort_order": "asc",
            "sort_columns": ["id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 10,
            "total_pages": 324,
            "total_rows": 3237
          },
          "form_data": {
            "categories": "9455"
          },
          "items": [
            {
              "id": 735568,
              "title": "شلوارک مردانه مدل FOGO RX",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.17
              },
              "market_price": 650000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/116766159.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "sized",
              "number_of_sellers": 1,
              "is_selling": false
            },
            {
              "id": 672829,
              "title": "شلوارک مردانه سولز مدل 319-01660",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.17
              },
              "market_price": 1200000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/116742305.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_palette": 12,
              "color_type": "sized",
              "number_of_sellers": 1,
              "is_selling": false
            },
            {
              "id": 675542,
              "title": "شلوارک مردانه جی پی ای مدل 6417-5",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.17
              },
              "market_price": 699000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/116740482.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "sized",
              "number_of_sellers": 1,
              "is_selling": false
            },
            {
              "id": 675595,
              "title": "شلوارک مردانه جی پی ای مدل 6411-5",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.17
              },
              "market_price": 620000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/116743478.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "sized",
              "number_of_sellers": 1,
              "is_selling": false
            },
            {
              "id": 694658,
              "title": "شلوارک مردانه مدل 2 CHIPA",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.17
              },
              "market_price": 280000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/116749063.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "sized",
              "number_of_sellers": 1,
              "is_selling": false
            },
            {
              "id": 694768,
              "title": "شلوارک مردانه آپارل مدل A120",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.17
              },
              "market_price": 1200000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/116749242.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "sized",
              "number_of_sellers": 1,
              "is_selling": false
            },
            {
              "id": 1124187,
              "title": "شلوارک مردانه کد 666",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.17
              },
              "market_price": 966666,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/116929223.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "sized",
              "number_of_sellers": 1,
              "is_selling": false
            },
            {
              "id": 1131547,
              "title": "شلوارک مردانه مدل SHCH02",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.17
              },
              "market_price": 195000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/116931917.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "sized",
              "number_of_sellers": 2,
              "is_selling": false
            },
            {
              "id": 1004615,
              "title": "شلوارک مردانه رمضانی مدل SH003",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.17
              },
              "market_price": 335000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/4741309.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "sized",
              "number_of_sellers": 1,
              "is_selling": false
            },
            {
              "id": 1004729,
              "title": "شلوارک مردانه رمضانی مدل SH004",
              "status": "marketable",
              "min_price": 0,
              "commission": {
                "canSell": true,
                "commission": 0.17
              },
              "market_price": 305000,
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/4731450.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price_type": {
                "recommended": "پیشنهادی"
              },
              "color_type": "sized",
              "number_of_sellers": 1,
              "is_selling": false
            }
          ],
          "meta_data": {
            "filters": [
              [
                {
                  "name": "keyword",
                  "type": "string",
                  "required": "true"
                }
              ],
              [
                {
                  "name": "categories",
                  "type": "option",
                  "label": "گروه اصلی",
                  "dynamic": true,
                  "db_name": "category",
                  "values": [
                    {
                      "9455": "شلوارک مردانه"
                    }
                  ]
                }
              ],
              [
                {
                  "name": "brands",
                  "type": "option",
                  "label": "برند کالا",
                  "dynamic": true,
                  "db_name": "brand",
                  "values": {
                    "462": "اسپریت",
                    "719": "متفرقه",
                    "1075": "کاترپیلار",
                    "1304": "اسپیدو",
                    "1417": "لوچیانو",
                    "1448": "دیزل",
                    "1814": "باس",
                    "1934": "دیادورا",
                    "1953": "سالومون",
                    "2085": "تامی",
                    "2101": "آندر آرمور",
                    "2102": "کلمبیا",
                    "2428": "رنگلر",
                    "2638": "اس.اولیور",
                    "2768": "تیمبرلند",
                    "2933": "361 درجه",
                    "4055": "ال سی وایکیکی",
                    "4121": "مل اند موژ",
                    "4821": "آلپاین پرو",
                    "4976": "کوئیک سیلور",
                    "5301": "سی ام پی",
                    "5513": "تارکان",
                    "6001": "کریویت",
                    "6020": "فیلیپ پلین",
                    "6064": "فرانکلین مارشال",
                    "6337": "گیادا",
                    "6551": "کوتون",
                    "6664": "نکست",
                    "6721": "وین اند وین",
                    "6753": "اسپرینگ فیلد",
                    "6875": "ساروک",
                    "7005": "باینت",
                    "7033": "درسمن",
                    "7149": "چیبو",
                    "7152": "لیورجی",
                    "7260": "سیاوود",
                    "7468": "دثار",
                    "7534": "پونتو بلانکو",
                    "7561": "یو اس پولو",
                    "7663": "اچ اند ام",
                    "7706": "ارئا",
                    "7716": "واتسون",
                    "7838": "آریان نخ باف",
                    "7845": "کی وان ایکس",
                    "7859": "موکارلو",
                    "8102": "برکس",
                    "8310": "امپریو آرمانی",
                    "8335": "لیوایز",
                    "8403": "آر اِن اِس",
                    "8555": "پول اند بیر",
                    "8629": "تچر",
                    "8802": "زی سا",
                    "9217": "جیمو",
                    "9500": "مارکس اند اسپنسر",
                    "9535": "گارودی",
                    "9892": "پاتن جامه",
                    "9985": "تامی هیلفیگر",
                    "10022": "پپه جینز",
                    "10265": "نامدارز",
                    "10400": "دیوایدد",
                    "10515": "آنکل سم",
                    "10625": "دبنهامز",
                    "10626": "سوپردرای",
                    "10630": "مانگو",
                    "10631": "جک اند جونز",
                    "10632": "سلکتد",
                    "10634": "نیو لوک",
                    "10640": "دفکتو",
                    "10648": "سلیو",
                    "10653": "تیفوسی",
                    "10704": "یونیتی",
                    "10747": "پاول اند شارک",
                    "10748": "بادی اسپینر",
                    "10752": "اونلی اند سانز",
                    "10776": "یوپیم",
                    "10783": "مینیموم",
                    "10811": "جامه پوش آرا",
                    "10973": "کروم",
                    "11051": "کیابی",
                    "12622": "دنیم",
                    "12933": "شرافیت",
                    "13005": "تونی مونتانا",
                    "13287": "کالینز",
                    "13731": "کوبوس",
                    "13778": "او وی اس",
                    "13821": "الایو",
                    "14059": "ریزرود",
                    "14118": "واتسونز",
                    "14473": "کورتفیل",
                    "14883": "جندقی",
                    "14887": "نرگس طافی",
                    "14891": "سی اند ای",
                    "15244": "مَک",
                    "15794": "جی ووا",
                    "15805": "آرمانی اکسچنج",
                    "16091": "نکست",
                    "17161": "آی ان سی",
                    "17199": "جی بی سی",
                    "17292": "سون فارست",
                    "17306": "آرمانی جینز",
                    "17527": "تکنیک+07",
                    "17547": "مساوات",
                    "17852": "استارت",
                    "18107": "لیلیان مد",
                    "18228": "کانی راش",
                    "18299": "بلو موشن",
                    "18526": "کالای ورزشی پروین",
                    "18573": "میس نگار",
                    "18631": "هومنیتی",
                    "20091": "نست کیدز",
                    "20397": "اینساید",
                    "20432": "ادورا",
                    "20764": "استریت آپ",
                    "20900": "کوی",
                    "21532": "جی تی هوگرو",
                    "21650": "سسیل",
                    "21665": "آرتنگو",
                    "21822": "سولا",
                    "21910": "سولوگناک",
                    "22009": "جورج",
                    "22307": "پیاتزا ایتالیا",
                    "22552": "جوتی جینز",
                    "23374": "ان سی نو",
                    "23478": "ایزی دو",
                    "23842": "بوهومن",
                    "24089": "چپس",
                    "29528": "اکستمپوری",
                    "30317": "والدشوتز",
                    "30393": "دانمور",
                    "30433": "رامکات",
                    "30551": "تام اند رز",
                    "30658": "پارکساید",
                    "30732": "یوکین",
                    "31063": "مالدینی",
                    "32487": "اورجینال مارینز",
                    "34694": "جاگو",
                    "34839": "یوکی",
                    "35040": "کیو اس",
                    "38675": "مامی دوز",
                    "40232": "ویکدی",
                    "45741": "بلونیل"
                  }
                }
              ],
              [
                {
                  "name": "types",
                  "type": "option",
                  "label": "نوع کالا",
                  "dynamic": true,
                  "db_name": "category_product_type",
                  "values": {
                    "22483": {
                      "id": 22483,
                      "title_fa": "شلوارک",
                      "title_en": "Shorts"
                    }
                  }
                }
              ],
              [
                {
                  "name": "colorPalettes",
                  "type": "option",
                  "label": "رنگ",
                  "dynamic": false,
                  "values": {
                    "1": [],
                    "2": [],
                    "3": [],
                    "4": [],
                    "5": [],
                    "6": [],
                    "7": [],
                    "8": [],
                    "9": [],
                    "10": [],
                    "11": [],
                    "12": []
                  }
                }
              ],
              [
                {
                  "name": "statuses",
                  "type": "option",
                  "label": "وضعیت",
                  "dynamic": false,
                  "values": {
                    "marketable": "قابل فروش",
                    "coming_soon": "به\u200Cزودی",
                    "stop_production": "توقف تولید"
                  }
                }
              ],
              [
                {
                  "name": "fake",
                  "type": "bool",
                  "label": "اصالت کالا",
                  "dynamic": false
                }
              ]
            ],
            "filtered": {
              "categories": {
                "1": [
                  {
                    "name": "categories",
                    "type": "option",
                    "label": "گروه اصلی",
                    "dynamic": true,
                    "db_name": "category"
                  }
                ],
                "data": {
                  "9455": "شلوارک مردانه"
                }
              }
            }
          }
        }
      }';
    }
}