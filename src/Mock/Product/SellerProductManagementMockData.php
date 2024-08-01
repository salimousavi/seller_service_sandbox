<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class SellerProductManagementMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "sort_data": {
            "sort_column": "id",
            "sort_order": "desc",
            "sort_columns": ["id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 10,
            "total_pages": 74,
            "total_rows": 731
          },
          "form_data": [],
          "items": [
            {
              "variants_count": 0,
              "site": "digikala",
              "title": "تی شرت آستین کوتاه زنانه مدل دانتل رنگ مشکی",
              "status": "marketable",
              "product_id": 16248503,
              "fake": false,
              "status_data": "waiting_for_confirm",
              "is_owner": true,
              "main_category_title": {
                "9347": "تی شرت زنانه"
              },
              "active": true,
              "title_fa": "تی شرت آستین کوتاه زنانه مدل دانتل رنگ مشکی",
              "title_en": "",
              "brand_id": 719,
              "brand_title_en": "Miscellaneous",
              "brand_title_fa": "متفرقه",
              "product_url": "https://www.digikala.com/product/dkp-16248503/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/3da088eb50d865e1483800eac5d10cb8ba955b26_1722456866.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "متفرقه - Miscellaneous",
              "moderation_status": {
                "title": "waiting_for_confirm",
                "status": "waiting_for_confirm",
                "duplicate": null,
                "link": null
              },
              "adverge_url": null
            },
            {
              "variants_count": 0,
              "site": "digikala",
              "title": "مانتو کتی زنانه مدل 640",
              "status": "marketable",
              "product_id": 16239315,
              "fake": false,
              "status_data": "waiting_for_confirm",
              "is_owner": true,
              "main_category_title": {
                "10995": "مانتو کتی زنانه"
              },
              "active": true,
              "title_fa": "مانتو کتی زنانه مدل 640",
              "title_en": "",
              "brand_id": 719,
              "brand_title_en": "Miscellaneous",
              "brand_title_fa": "متفرقه",
              "product_url": "https://www.digikala.com/product/dkp-16239315/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/953b44a3dda3d9b06af92cc33c8977adc9a026ac_1722376377.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "متفرقه - Miscellaneous",
              "moderation_status": {
                "title": "waiting_for_confirm",
                "status": "waiting_for_confirm",
                "duplicate": null,
                "link": null
              },
              "adverge_url": null
            },
            {
              "variants_count": 0,
              "site": "digikala",
              "title": "مانتو زنانه کتی مدل 88601",
              "status": "marketable",
              "product_id": 16238965,
              "fake": false,
              "status_data": "waiting_for_confirm",
              "is_owner": true,
              "main_category_title": {
                "10995": "مانتو کتی زنانه"
              },
              "active": true,
              "title_fa": "مانتو زنانه کتی مدل 88601",
              "title_en": "",
              "brand_id": 719,
              "brand_title_en": "Miscellaneous",
              "brand_title_fa": "متفرقه",
              "product_url": "https://www.digikala.com/product/dkp-16238965/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/9d650f585c08bf69cbf0020a5395d448abb32196_1722372622.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "متفرقه - Miscellaneous",
              "moderation_status": {
                "title": "waiting_for_confirm",
                "status": "waiting_for_confirm",
                "duplicate": null,
                "link": null
              },
              "adverge_url": null
            },
            {
              "variants_count": 0,
              "site": "digikala",
              "title": "تونیک زنانه مدل 86994",
              "status": "marketable",
              "product_id": 16232251,
              "fake": false,
              "status_data": "edit_after_approved",
              "is_owner": true,
              "main_category_title": {
                "10287": "تونیک زنانه"
              },
              "active": true,
              "title_fa": "تونیک زنانه مدل 86994",
              "title_en": "",
              "brand_id": 719,
              "brand_title_en": "Miscellaneous",
              "brand_title_fa": "متفرقه",
              "product_url": "https://www.digikala.com/product/dkp-16232251/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/75cecc3d59aca4bcc463d857cbd66de2eadaee15_1722333560.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "متفرقه - Miscellaneous",
              "moderation_status": {
                "title": "edit_after_approved",
                "status": "edit_after_approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": null
            },
            {
              "variants_count": 0,
              "site": "digikala",
              "title": "تونیک زنانه مدل 93690",
              "status": "marketable",
              "product_id": 16229139,
              "fake": false,
              "status_data": "waiting_for_confirm",
              "is_owner": true,
              "main_category_title": {
                "10287": "تونیک زنانه"
              },
              "active": true,
              "title_fa": "تونیک زنانه مدل 93690",
              "title_en": "",
              "brand_id": 719,
              "brand_title_en": "Miscellaneous",
              "brand_title_fa": "متفرقه",
              "product_url": "https://www.digikala.com/product/dkp-16229139/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/1dc04fa09fa22c1f34abf9b8f2d608f5614e040b_1722437044.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "متفرقه - Miscellaneous",
              "moderation_status": {
                "title": "waiting_for_confirm",
                "status": "waiting_for_confirm",
                "duplicate": null,
                "link": null
              },
              "adverge_url": null
            },
            {
              "variants_count": 0,
              "site": "digikala",
              "title": "تونیک زنانه مدل طرح بالون 87",
              "status": "marketable",
              "product_id": 16226805,
              "fake": false,
              "status_data": "waiting_for_confirm",
              "is_owner": true,
              "main_category_title": {
                "10287": "تونیک زنانه"
              },
              "active": true,
              "title_fa": "تونیک زنانه مدل طرح بالون 87",
              "title_en": "",
              "brand_id": 719,
              "brand_title_en": "Miscellaneous",
              "brand_title_fa": "متفرقه",
              "product_url": "https://www.digikala.com/product/dkp-16226805/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/660ba03116e1deab718b2f64246b4fec6fa669ed_1722407859.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "متفرقه - Miscellaneous",
              "moderation_status": {
                "title": "waiting_for_confirm",
                "status": "waiting_for_confirm",
                "duplicate": null,
                "link": null
              },
              "adverge_url": null
            },
            {
              "variants_count": 0,
              "site": "digikala",
              "title": "تونیک زنانه مدل 9777",
              "status": "marketable",
              "product_id": 16216622,
              "fake": false,
              "status_data": "removed",
              "is_owner": true,
              "main_category_title": {
                "10287": "تونیک زنانه"
              },
              "active": true,
              "title_fa": "تونیک زنانه مدل 9777",
              "title_en": "",
              "brand_id": 719,
              "brand_title_en": "Miscellaneous",
              "brand_title_fa": "متفرقه",
              "product_url": "https://www.digikala.com/product/dkp-16216622/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/de676b4d08effdd9d6986765b1001a843ff3a67a_1722190825.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "متفرقه - Miscellaneous",
              "moderation_status": {
                "title": "removed",
                "status": "removed",
                "duplicate": null,
                "link": null
              },
              "adverge_url": null
            },
            {
              "variants_count": 1,
              "site": "digikala",
              "title": "تونیک زنانه مدل 233",
              "status": "marketable",
              "product_id": 16208770,
              "fake": false,
              "status_data": "approved",
              "is_owner": true,
              "main_category_title": {
                "10287": "تونیک زنانه"
              },
              "active": true,
              "title_fa": "تونیک زنانه مدل 233",
              "title_en": "",
              "brand_id": 719,
              "brand_title_en": "Miscellaneous",
              "brand_title_fa": "متفرقه",
              "product_url": "https://www.digikala.com/product/dkp-16208770/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/74233296044accbba10bba60530eb8d955a22084_1722161684.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "متفرقه - Miscellaneous",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": "https://seller.digikala.com/third-party/adverge/redirect-to-panel/?page=DISPLAY_SEARCH_ADS_PRODUCT&product_id=16208770&utm_source=adverg-product-mng&utm_medium=refferal&utm_compaign=adverg-product-mng&utm_id=adverg-product-mng"
            },
            {
              "variants_count": 0,
              "site": "digikala",
              "title": "تونیک زنانه مدل 211",
              "status": "marketable",
              "product_id": 16208670,
              "fake": false,
              "status_data": "waiting_for_confirm",
              "is_owner": true,
              "main_category_title": {
                "10287": "تونیک زنانه"
              },
              "active": true,
              "title_fa": "تونیک زنانه مدل 211",
              "title_en": "",
              "brand_id": 719,
              "brand_title_en": "Miscellaneous",
              "brand_title_fa": "متفرقه",
              "product_url": "https://www.digikala.com/product/dkp-16208670/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/d7cb8fc062e930de3c45bc15b83aeccd9b2b5b14_1722413851.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "متفرقه - Miscellaneous",
              "moderation_status": {
                "title": "waiting_for_confirm",
                "status": "waiting_for_confirm",
                "duplicate": null,
                "link": null
              },
              "adverge_url": null
            },
            {
              "variants_count": 1,
              "site": "digikala",
              "title": "شلوار زنانه مدل گیاهی رنگ بنفش",
              "status": "marketable",
              "product_id": 16207245,
              "fake": false,
              "status_data": "approved",
              "is_owner": true,
              "main_category_title": {
                "9299": "شلوار راحتی زنانه"
              },
              "active": true,
              "title_fa": "شلوار زنانه مدل گیاهی رنگ بنفش",
              "title_en": "",
              "brand_id": 719,
              "brand_title_en": "Miscellaneous",
              "brand_title_fa": "متفرقه",
              "product_url": "https://www.digikala.com/product/dkp-16207245/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/cf9e42b56aa3727617a3df1cba5d9766d46d4507_1722156704.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "متفرقه - Miscellaneous",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": "https://seller.digikala.com/third-party/adverge/redirect-to-panel/?page=DISPLAY_SEARCH_ADS_PRODUCT&product_id=16207245&utm_source=adverg-product-mng&utm_medium=refferal&utm_compaign=adverg-product-mng&utm_id=adverg-product-mng"
            }
          ],
          "meta_data": {
            "filters": [
              [
                {
                  "name": "multi_search",
                  "type": "search box",
                  "label": "جست و جو"
                }
              ],
              [
                {
                  "name": "category_id",
                  "type": "option",
                  "label": "گروه اصلی",
                  "dynamic": true,
                  "db_name": "category",
                  "data": {
                    "9347": "تی شرت زنانه",
                    "9284": "مانتو، پانچو و رویه",
                    "9299": "شلوار راحتی زنانه",
                    "9297": "ست لباس راحتی زنانه",
                    "10287": "تونیک زنانه",
                    "9323": "بلوز زنانه",
                    "9326": "تاپ و نیم تنه زنانه",
                    "9325": "شومیز زنانه",
                    "9345": "شورت زنانه",
                    "9340": "سوتین زنانه",
                    "9398": "اکسسوری مو زنانه",
                    "9346": "شلوار و سرهمی زنانه",
                    "9342": "گن زنانه",
                    "9316": "پالتو زنانه",
                    "9841": "جوراب زنانه",
                    "9294": "پیراهن و لباس مجلسی زنانه",
                    "9303": "شلوار جین زنانه",
                    "9330": "دامن زنانه",
                    "9298": "تاپ و تی\u200Cشرت راحتی زنانه",
                    "9304": "ژاکت و پلیور زنانه",
                    "9415": "شال و روسری زنانه",
                    "9496": "لباس خواب زنانه",
                    "9324": "ست لباس زیر زنانه",
                    "6042": "عروسک",
                    "9711": "زیور آلات مو دخترانه",
                    "10097": "لگینگ زنانه",
                    "10306": "سویشرت زنانه",
                    "10995": "مانتو کتی زنانه",
                    "9335": "هودی زنانه",
                    "9378": "کفش ورزشی زنانه",
                    "9381": "کیف زنانه",
                    "9409": "گردنبند زنانه",
                    "11236": "ست لباس روزمره زنانه"
                  }
                }
              ],
              [
                {
                  "name": "brand_id",
                  "type": "option",
                  "label": "برند کالا",
                  "dynamic": true,
                  "db_name": "brand",
                  "data": {
                    "719": "متفرقه",
                    "6551": "کوتون",
                    "4055": "ال سی وایکیکی",
                    "6753": "اسپرینگ فیلد",
                    "7510": "تکنور",
                    "10625": "دبنهامز",
                    "10633": "اونلی",
                    "23756": "سکسان"
                  }
                }
              ],
              [
                {
                  "name": "moderation_status",
                  "type": "option",
                  "data": {
                    "draft": "آماده انتشار",
                    "in_review": "نیاز به ویرایش",
                    "waiting_for_confirm": "در حال بررسی",
                    "edit_after_approved": "در حال بررسی تغییرات",
                    "approved": "تایید شده",
                    "in_review_after_approved": "نیاز به ویرایش مجدد",
                    "removed": "حذف شده",
                    "duplicate": "کالای تکراری"
                  },
                  "label": "وضعیت تایید"
                }
              ],
              [
                {
                  "name": "fake_status",
                  "type": "radio",
                  "label": "اصالت کالا",
                  "data": {
                    "fake": "غیراصل",
                    "real": "اصل"
                  }
                }
              ]
            ],
            "filtered": []
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
            "sort_order": "desc",
            "sort_columns": ["id"]
          },
          "pager": {
            "page": 15,
            "item_per_page": 10,
            "total_pages": 24,
            "total_rows": 240
          },
          "form_data": [],
          "items": [
            {
              "variants_count": 1,
              "site": "both",
              "title": "اسپری بدن زنانه بیو استار مدل ورساچ حجم 200 میلی لیتر",
              "status": "marketable",
              "product_id": 5405716,
              "fake": false,
              "status_data": "approved",
              "is_owner": false,
              "main_category_title": {
                "6048": "اسپری"
              },
              "active": true,
              "title_fa": "اسپری بدن زنانه بیو استار مدل ورساچ حجم 200 میلی لیتر",
              "title_en": "",
              "brand_id": 19305,
              "brand_title_en": "bio star",
              "brand_title_fa": "بیو استار",
              "product_url": "https://www.digikala.com/product/dkp-5405716/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/68278c1a49bc2c494969ba7dc224bc0cee80c44c_1623151577.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "بیو استار - bio star",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": null
            },
            {
              "variants_count": 0,
              "site": "digikala",
              "title": "اکسیدان آرتین مدل 20V شش درصدی حجم 100 میلی لیتر",
              "status": "marketable",
              "product_id": 5292474,
              "fake": false,
              "status_data": "approved",
              "is_owner": false,
              "main_category_title": {
                "8257": "اکسیدان"
              },
              "active": true,
              "title_fa": "اکسیدان آرتین مدل 20V شش درصدی حجم 100 میلی لیتر",
              "title_en": "",
              "brand_id": 719,
              "brand_title_en": "Miscellaneous",
              "brand_title_fa": "متفرقه",
              "product_url": "https://www.digikala.com/product/dkp-5292474/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/144bd62f52c7865fb00a80b2c3dd14ebe4ce15fd_1622288382.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "متفرقه - Miscellaneous",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": null
            },
            {
              "variants_count": 1,
              "site": "digikala",
              "title": "اسپری دو فاز مو پادینا مدل 001 حجم 250 میلی لیتر",
              "status": "marketable",
              "product_id": 5250036,
              "fake": false,
              "status_data": "approved",
              "is_owner": false,
              "main_category_title": {
                "6656": "سرم و اسپری مو"
              },
              "active": true,
              "title_fa": "اسپری دو فاز مو پادینا مدل 001 حجم 250 میلی لیتر",
              "title_en": "",
              "brand_id": 719,
              "brand_title_en": "Miscellaneous",
              "brand_title_fa": "متفرقه",
              "product_url": "https://www.digikala.com/product/dkp-5250036/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/6bf4ed3421da0e3bccdc93611457bd8606047b61_1621753473.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "متفرقه - Miscellaneous",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": "https://seller.digikala.com/third-party/adverge/redirect-to-panel/?page=DISPLAY_SEARCH_ADS_PRODUCT&product_id=5250036&utm_source=adverg-product-mng&utm_medium=refferal&utm_compaign=adverg-product-mng&utm_id=adverg-product-mng"
            },
            {
              "variants_count": 1,
              "site": "digikala",
              "title": "کرم مرطوب کننده دلبان مدل 001 حجم 120ميلی ليتر مجموعه 12 عددی",
              "status": "marketable",
              "product_id": 5179114,
              "fake": false,
              "status_data": "approved",
              "is_owner": false,
              "main_category_title": {
                "6489": "کرم مرطوب کننده و نرم کننده"
              },
              "active": true,
              "title_fa": "کرم مرطوب کننده دلبان مدل 001 حجم 120ميلی ليتر مجموعه 12 عددی",
              "title_en": "",
              "brand_id": 12865,
              "brand_title_en": "Delban",
              "brand_title_fa": "دلبان",
              "product_url": "https://www.digikala.com/product/dkp-5179114/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/4beec76c9a64d7d145d8d8d7ab0ae6f4e16f5e77_1621145874.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "دلبان - Delban",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": "https://seller.digikala.com/third-party/adverge/redirect-to-panel/?page=DISPLAY_SEARCH_ADS_PRODUCT&product_id=5179114&utm_source=adverg-product-mng&utm_medium=refferal&utm_compaign=adverg-product-mng&utm_id=adverg-product-mng"
            },
            {
              "variants_count": 1,
              "site": "both",
              "title": "اسپری مو کاسپین مدل san942 حجم 500 میلی لیتر",
              "status": "marketable",
              "product_id": 5020220,
              "fake": false,
              "status_data": "approved",
              "is_owner": false,
              "main_category_title": {
                "6621": "اسپری مو"
              },
              "active": true,
              "title_fa": "اسپری مو کاسپین مدل san942 حجم 500 میلی لیتر",
              "title_en": "",
              "brand_id": 31246,
              "brand_title_en": "Caspian",
              "brand_title_fa": "کاسپین",
              "product_url": "https://www.digikala.com/product/dkp-5020220/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/36ab50148b3f71055270654c0e64dce30701ad2b_1619514222.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "کاسپین - Caspian",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": "https://seller.digikala.com/third-party/adverge/redirect-to-panel/?page=DISPLAY_SEARCH_ADS_PRODUCT&product_id=5020220&utm_source=adverg-product-mng&utm_medium=refferal&utm_compaign=adverg-product-mng&utm_id=adverg-product-mng"
            },
            {
              "variants_count": 0,
              "site": "digikala",
              "title": "خوشبوکننده هوا جی ام مدل مدل 106 به همراه اسپری خوشبو کننده هوا",
              "status": "marketable",
              "product_id": 4853585,
              "fake": false,
              "status_data": "approved",
              "is_owner": false,
              "main_category_title": {
                "6534": "بوگیر و خوشبو کننده هوا"
              },
              "active": true,
              "title_fa": "خوشبوکننده هوا جی ام مدل مدل 106 به همراه اسپری خوشبو کننده هوا",
              "title_en": "",
              "brand_id": 4597,
              "brand_title_en": "Jm",
              "brand_title_fa": "جی ام",
              "product_url": "https://www.digikala.com/product/dkp-4853585/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/9295a596f9144dedccadf6e3721d02e9d0bd1a1c_1617810335.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "جی ام - Jm",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": null
            },
            {
              "variants_count": 1,
              "site": "digikala",
              "title": "اسکراب لایه بردار پوست مکس لیدی مدل Pomegranate حجم 300 میلی لیتر",
              "status": "marketable",
              "product_id": 4822980,
              "fake": false,
              "status_data": "approved",
              "is_owner": false,
              "main_category_title": {
                "6556": "لایه بردار پوست"
              },
              "active": true,
              "title_fa": "اسکراب لایه بردار پوست مکس لیدی مدل Pomegranate حجم 300 میلی لیتر",
              "title_en": "",
              "brand_id": 34836,
              "brand_title_en": "max lady",
              "brand_title_fa": "مکس لیدی",
              "product_url": "https://www.digikala.com/product/dkp-4822980/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/49af803e1e4f8813e644c2823ba5b0dd69990ff1_1617464441.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "مکس لیدی - max lady",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": "https://seller.digikala.com/third-party/adverge/redirect-to-panel/?page=DISPLAY_SEARCH_ADS_PRODUCT&product_id=4822980&utm_source=adverg-product-mng&utm_medium=refferal&utm_compaign=adverg-product-mng&utm_id=adverg-product-mng"
            },
            {
              "variants_count": 1,
              "site": "both",
              "title": "کرم روشن کننده چگین کد 001 حجم 30 میلی لیتر",
              "status": "marketable",
              "product_id": 4550180,
              "fake": false,
              "status_data": "approved",
              "is_owner": false,
              "main_category_title": {
                "6545": "کرم روشن کننده"
              },
              "active": true,
              "title_fa": "کرم روشن کننده چگین کد 001 حجم 30 میلی لیتر",
              "title_en": "",
              "brand_id": 719,
              "brand_title_en": "Miscellaneous",
              "brand_title_fa": "متفرقه",
              "product_url": "https://www.digikala.com/product/dkp-4550180/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/636ec13528f79da9bfaccfda7064594da2624317_1614207589.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "متفرقه - Miscellaneous",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": "https://seller.digikala.com/third-party/adverge/redirect-to-panel/?page=DISPLAY_SEARCH_ADS_PRODUCT&product_id=4550180&utm_source=adverg-product-mng&utm_medium=refferal&utm_compaign=adverg-product-mng&utm_id=adverg-product-mng"
            },
            {
              "variants_count": 1,
              "site": "digikala",
              "title": "سرم مو آرتین مدل Macadamia oil حجم 100 میلی لیتر",
              "status": "marketable",
              "product_id": 4512108,
              "fake": false,
              "status_data": "approved",
              "is_owner": false,
              "main_category_title": {
                "6656": "سرم و اسپری مو"
              },
              "active": true,
              "title_fa": "سرم مو آرتین مدل Macadamia oil حجم 100 میلی لیتر",
              "title_en": "",
              "brand_id": 719,
              "brand_title_en": "Miscellaneous",
              "brand_title_fa": "متفرقه",
              "product_url": "https://www.digikala.com/product/dkp-4512108/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/fcfbfb04f9df4ffcefe82d0327624611f289a02e_1613848318.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "متفرقه - Miscellaneous",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": "https://seller.digikala.com/third-party/adverge/redirect-to-panel/?page=DISPLAY_SEARCH_ADS_PRODUCT&product_id=4512108&utm_source=adverg-product-mng&utm_medium=refferal&utm_compaign=adverg-product-mng&utm_id=adverg-product-mng"
            },
            {
              "variants_count": 0,
              "site": "digikala",
              "title": "کرم مرطوب کننده پاییزان مدل ویتامینه حجم 140 میلی لیتر",
              "status": "marketable",
              "product_id": 4430694,
              "fake": false,
              "status_data": "approved",
              "is_owner": false,
              "main_category_title": {
                "6489": "کرم مرطوب کننده و نرم کننده"
              },
              "active": true,
              "title_fa": "کرم مرطوب کننده پاییزان مدل ویتامینه حجم 140 میلی لیتر",
              "title_en": "",
              "brand_id": 40525,
              "brand_title_en": "Paeizan",
              "brand_title_fa": "پاییزان",
              "product_url": "https://www.digikala.com/product/dkp-4430694/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/3e3dea669135c591a5bb1b234ecd7a93a64fa8c4_1612876207.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "پاییزان - Paeizan",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": null
            }
          ],
          "meta_data": {
            "filters": [
              [
                {
                  "name": "multi_search",
                  "type": "search box",
                  "label": "جست و جو"
                }
              ],
              [
                {
                  "name": "category_id",
                  "type": "option",
                  "label": "گروه اصلی",
                  "dynamic": true,
                  "db_name": "category",
                  "data": {
                    "6489": "کرم مرطوب کننده و نرم کننده",
                    "6621": "اسپری مو",
                    "6656": "سرم و اسپری مو",
                    "6487": "کرم ضد آفتاب",
                    "6960": "کاندوم",
                    "6130": "اصلاح موی بدن بانوان",
                    "6518": "شامپو مو",
                    "6534": "بوگیر و خوشبو کننده هوا",
                    "8257": "اکسیدان",
                    "2400": "برس مو",
                    "6048": "اسپری",
                    "6462": "کرم پودر",
                    "6807": "گوش پاک کن",
                    "8449": "بی رنگ کننده مو",
                    "6556": "لایه بردار پوست",
                    "6484": "برس ها و تجهیزات آرایشی صورت",
                    "6494": "کرم موبر",
                    "6516": "خمیر دندان",
                    "6535": "ژل مو",
                    "6595": "ماسک و مراقبت مو",
                    "6670": "عطر جیبی",
                    "6512": "رنگ مو",
                    "6532": "رول صابونی",
                    "6545": "کرم روشن کننده",
                    "6599": "لاک پاک کن",
                    "6631": "روغن مو",
                    "8996": "چرخ خیاطی دستی و ملزومات خیاطی",
                    "9841": "جوراب زنانه",
                    "10188": "لنز چشم",
                    "10925": "محصولات آرایشگاهی",
                    "10926": "شانه مو",
                    "6148": "چسب صنعتی",
                    "6420": "دستکش نظافت",
                    "6517": "نخ دندان",
                    "6617": "ماسک صورت و بدن",
                    "6895": "واکس مو",
                    "6924": "شوینده سطوح",
                    "9237": "لوازم جانبی اصلاح",
                    "9533": "مراقبت کفش و لوازم جانبی",
                    "10929": "تیغ ابرو",
                    "10933": "کرم ترک پا",
                    "2397": "اتو و حالت دهنده ی مو",
                    "2404": "دستگاه بخور و رطوبت ساز",
                    "5865": "سایر تجهیزات زیبایی",
                    "6085": "اصلاح موی صورت",
                    "6108": "عینک شنا",
                    "6269": "حوله",
                    "6426": "اسکاچ و سیم ظرفشویی",
                    "6515": "مسواک",
                    "6523": "رول ضد تعریق",
                    "6529": "اسپری ضد تعریق",
                    "6537": "لوسیون و روغن بدن",
                    "6590": "کرم و روغن رفع ترک بدن",
                    "6745": "شیشه شیر، سرلاک و داروخوری",
                    "6928": "پودر و ژل سفید کننده",
                    "6932": "شوینده لباس",
                    "8358": "حشره کش و سوسک کش",
                    "9925": "جوراب زنانه و مردانه",
                    "10968": "دستکش\u200Cهای طبی"
                  }
                }
              ],
              [
                {
                  "name": "brand_id",
                  "type": "option",
                  "label": "برند کالا",
                  "dynamic": true,
                  "db_name": "brand",
                  "data": {
                    "719": "متفرقه",
                    "11204": "انس",
                    "20074": "پادینا",
                    "4357": "ناچ کدکس",
                    "15013": "آی کارلی",
                    "4644": "ساج",
                    "31246": "کاسپین",
                    "11335": "دکتر ژیلا",
                    "19305": "بیو استار",
                    "32658": "شمیم پایتخت",
                    "20493": "آرتین",
                    "1167": "بیک",
                    "15430": "سوپکس",
                    "34836": "مکس لیدی",
                    "12865": "دلبان",
                    "13723": "ایوان",
                    "22344": "دیپ سنس",
                    "1866": "آردن",
                    "2419": "سی گل",
                    "3680": "دورکو",
                    "3868": "سودا",
                    "4597": "جی ام",
                    "7057": "هربکس",
                    "8840": "ساتل",
                    "40359": "گل پسند",
                    "40525": "پاییزان",
                    "1931": "لکسی",
                    "2015": "رینبو",
                    "2397": "وی وان",
                    "2548": "کاپوت",
                    "3272": "آرکو کلاسیک",
                    "3504": "ساویز",
                    "4832": "کیمی",
                    "5393": "سورینت",
                    "6432": "دکتر مورنینگ",
                    "8313": "عطرآگین",
                    "8673": "کونسانگ",
                    "10896": "پارس پلادیس",
                    "10958": "جی",
                    "15599": "مکس لیدی",
                    "18764": "الاتوم",
                    "20317": "های دنت",
                    "21374": "وکالی",
                    "38567": "ایباگ",
                    "39757": "گلمیس",
                    "40016": "هایدنت"
                  }
                }
              ],
              [
                {
                  "name": "moderation_status",
                  "type": "option",
                  "data": {
                    "draft": "آماده انتشار",
                    "in_review": "نیاز به ویرایش",
                    "waiting_for_confirm": "در حال بررسی",
                    "edit_after_approved": "در حال بررسی تغییرات",
                    "approved": "تایید شده",
                    "in_review_after_approved": "نیاز به ویرایش مجدد",
                    "removed": "حذف شده",
                    "duplicate": "کالای تکراری"
                  },
                  "label": "وضعیت تایید"
                }
              ],
              [
                {
                  "name": "fake_status",
                  "type": "radio",
                  "label": "اصالت کالا",
                  "data": {
                    "fake": "غیراصل",
                    "real": "اصل"
                  }
                }
              ]
            ],
            "filtered": []
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
            "sort_order": "desc",
            "sort_columns": ["id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 10,
            "total_pages": 69,
            "total_rows": 683
          },
          "form_data": [],
          "items": [
            {
              "variants_count": 1,
              "site": "digikala",
              "title": "دیس شرکت صنایع چینی تقدیس مدل لوییز خط طلا بسته 2 عددی",
              "status": "marketable",
              "product_id": 15931176,
              "fake": false,
              "status_data": "approved",
              "is_owner": false,
              "main_category_title": {
                "6336": "ظروف سرو و پذیرایی"
              },
              "active": true,
              "title_fa": "دیس شرکت صنایع چینی تقدیس مدل لوییز خط طلا بسته 2 عددی",
              "title_en": "",
              "brand_id": 16718,
              "brand_title_en": "Taghdis porcelain co",
              "brand_title_fa": "شرکت صنایع چینی تقدیس",
              "product_url": "https://www.digikala.com/product/dkp-15931176/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/6c772a69e82ac06bd567059ddf34a4007ea40d85_1719670038.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "item",
              "brand_title": "شرکت صنایع چینی تقدیس - Taghdis porcelain co",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": "https://seller.digikala.com/third-party/adverge/redirect-to-panel/?page=DISPLAY_SEARCH_ADS_PRODUCT&product_id=15931176&utm_source=adverg-product-mng&utm_medium=refferal&utm_compaign=adverg-product-mng&utm_id=adverg-product-mng"
            },
            {
              "variants_count": 1,
              "site": "digikala",
              "title": "دیس شرکت صنایع چینی تقدیس مدل لوییز خط طلا",
              "status": "marketable",
              "product_id": 15931087,
              "fake": false,
              "status_data": "approved",
              "is_owner": false,
              "main_category_title": {
                "6336": "ظروف سرو و پذیرایی"
              },
              "active": true,
              "title_fa": "دیس شرکت صنایع چینی تقدیس مدل لوییز خط طلا",
              "title_en": "",
              "brand_id": 16718,
              "brand_title_en": "Taghdis porcelain co",
              "brand_title_fa": "شرکت صنایع چینی تقدیس",
              "product_url": "https://www.digikala.com/product/dkp-15931087/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/1fcf0c80348d3a447f67c225db75d9638bac5588_1719601452.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "item",
              "brand_title": "شرکت صنایع چینی تقدیس - Taghdis porcelain co",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": "https://seller.digikala.com/third-party/adverge/redirect-to-panel/?page=DISPLAY_SEARCH_ADS_PRODUCT&product_id=15931087&utm_source=adverg-product-mng&utm_medium=refferal&utm_compaign=adverg-product-mng&utm_id=adverg-product-mng"
            },
            {
              "variants_count": 1,
              "site": "digikala",
              "title": "بشقاب غذاخوری شرکت صنایع چینی تقدیس مدل لوییز بسته 6 عددی",
              "status": "marketable",
              "product_id": 15866353,
              "fake": false,
              "status_data": "approved",
              "is_owner": false,
              "main_category_title": {
                "6302": "بشقاب"
              },
              "active": true,
              "title_fa": "بشقاب غذاخوری شرکت صنایع چینی تقدیس مدل لوییز بسته 6 عددی",
              "title_en": "",
              "brand_id": 16718,
              "brand_title_en": "Taghdis porcelain co",
              "brand_title_fa": "شرکت صنایع چینی تقدیس",
              "product_url": "https://www.digikala.com/product/dkp-15866353/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/d9a1f051e33ece309f38adb1cc73bc7d2f33e068_1719174296.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "شرکت صنایع چینی تقدیس - Taghdis porcelain co",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": "https://seller.digikala.com/third-party/adverge/redirect-to-panel/?page=DISPLAY_SEARCH_ADS_PRODUCT&product_id=15866353&utm_source=adverg-product-mng&utm_medium=refferal&utm_compaign=adverg-product-mng&utm_id=adverg-product-mng"
            },
            {
              "variants_count": 1,
              "site": "digikala",
              "title": "سرویس غذا خوری  18 پارچه شرکت صنایع چینی تقدیس مدل لوییز خط طلا",
              "status": "marketable",
              "product_id": 15866204,
              "fake": false,
              "status_data": "approved",
              "is_owner": false,
              "main_category_title": {
                "6302": "بشقاب"
              },
              "active": true,
              "title_fa": "سرویس غذا خوری  18 پارچه شرکت صنایع چینی تقدیس مدل لوییز خط طلا",
              "title_en": "",
              "brand_id": 16718,
              "brand_title_en": "Taghdis porcelain co",
              "brand_title_fa": "شرکت صنایع چینی تقدیس",
              "product_url": "https://www.digikala.com/product/dkp-15866204/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/33c719dbe15c5a4db96245646fd86394dcfd6152_1719174264.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "شرکت صنایع چینی تقدیس - Taghdis porcelain co",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": "https://seller.digikala.com/third-party/adverge/redirect-to-panel/?page=DISPLAY_SEARCH_ADS_PRODUCT&product_id=15866204&utm_source=adverg-product-mng&utm_medium=refferal&utm_compaign=adverg-product-mng&utm_id=adverg-product-mng"
            },
            {
              "variants_count": 1,
              "site": "digikala",
              "title": "قوری طرح کاملیا",
              "status": "marketable",
              "product_id": 15370860,
              "fake": false,
              "status_data": "approved",
              "is_owner": true,
              "main_category_title": {
                "6261": "قوری"
              },
              "active": true,
              "title_fa": "قوری طرح کاملیا",
              "title_en": "",
              "brand_id": 719,
              "brand_title_en": "Miscellaneous",
              "brand_title_fa": "متفرقه",
              "product_url": "https://www.digikala.com/product/dkp-15370860/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/99d403c5bff09815dec314b449488c6c6182deff_1714921668.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "متفرقه - Miscellaneous",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": "https://seller.digikala.com/third-party/adverge/redirect-to-panel/?page=DISPLAY_SEARCH_ADS_PRODUCT&product_id=15370860&utm_source=adverg-product-mng&utm_medium=refferal&utm_compaign=adverg-product-mng&utm_id=adverg-product-mng"
            },
            {
              "variants_count": 1,
              "site": "digikala",
              "title": "سرویس پخت و پز 4 پارچه مدل یاراشیق",
              "status": "marketable",
              "product_id": 14665404,
              "fake": false,
              "status_data": "approved",
              "is_owner": false,
              "main_category_title": {
                "6255": "سرویس پخت و پز"
              },
              "active": true,
              "title_fa": "سرویس پخت و پز 4 پارچه مدل یاراشیق",
              "title_en": "",
              "brand_id": 719,
              "brand_title_en": "Miscellaneous",
              "brand_title_fa": "متفرقه",
              "product_url": "https://www.digikala.com/product/dkp-14665404/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/cf0e81a445d9d4eef861c4be66047254caf64296_1709412404.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "item",
              "brand_title": "متفرقه - Miscellaneous",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": "https://seller.digikala.com/third-party/adverge/redirect-to-panel/?page=DISPLAY_SEARCH_ADS_PRODUCT&product_id=14665404&utm_source=adverg-product-mng&utm_medium=refferal&utm_compaign=adverg-product-mng&utm_id=adverg-product-mng"
            },
            {
              "variants_count": 1,
              "site": "digikala",
              "title": "کلمن پاشاسازه مدل شیشه ای کد 2313 گنجایش 5 لیتر",
              "status": "marketable",
              "product_id": 14633502,
              "fake": false,
              "status_data": "approved",
              "is_owner": false,
              "main_category_title": {
                "6459": "کلمن و فلاسک"
              },
              "active": true,
              "title_fa": "کلمن پاشاسازه مدل شیشه ای کد 2313 گنجایش 5 لیتر",
              "title_en": "",
              "brand_id": 719,
              "brand_title_en": "Miscellaneous",
              "brand_title_fa": "متفرقه",
              "product_url": "https://www.digikala.com/product/dkp-14633502/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/2569a658ac7fe9e696dd12cb29a69989b7645ee6_1709244361.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "متفرقه - Miscellaneous",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": null
            },
            {
              "variants_count": 0,
              "site": "digikala",
              "title": "روبالشتی کد 0075 بسته 2 عددی",
              "status": "marketable",
              "product_id": 14579741,
              "fake": false,
              "status_data": "approved",
              "is_owner": false,
              "main_category_title": {
                "6335": "رو بالشی"
              },
              "active": true,
              "title_fa": "روبالشتی کد 0075 بسته 2 عددی",
              "title_en": "",
              "brand_id": 719,
              "brand_title_en": "Miscellaneous",
              "brand_title_fa": "متفرقه",
              "product_url": "https://www.digikala.com/product/dkp-14579741/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/edabbba6aa4e7a2ea9429bc430682f82fdd8432c_1708934672.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "متفرقه - Miscellaneous",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": null
            },
            {
              "variants_count": 1,
              "site": "digikala",
              "title": "پارچ شرکت صنایع چینی تقدیس مدل لب طلا",
              "status": "marketable",
              "product_id": 14458123,
              "fake": false,
              "status_data": "approved",
              "is_owner": false,
              "main_category_title": {
                "6287": "پارچ و بطری"
              },
              "active": true,
              "title_fa": "پارچ شرکت صنایع چینی تقدیس مدل لب طلا",
              "title_en": "",
              "brand_id": 16718,
              "brand_title_en": "Taghdis porcelain co",
              "brand_title_fa": "شرکت صنایع چینی تقدیس",
              "product_url": "https://www.digikala.com/product/dkp-14458123/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/93e1eea0830e2d7432cd80d49c39c09da4845b31_1708103752.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "شرکت صنایع چینی تقدیس - Taghdis porcelain co",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": "https://seller.digikala.com/third-party/adverge/redirect-to-panel/?page=DISPLAY_SEARCH_ADS_PRODUCT&product_id=14458123&utm_source=adverg-product-mng&utm_medium=refferal&utm_compaign=adverg-product-mng&utm_id=adverg-product-mng"
            },
            {
              "variants_count": 1,
              "site": "digikala",
              "title": "کلمن پاشاسازه مدل شیشه ای کد 2328 گنجایش 5 لیتر",
              "status": "marketable",
              "product_id": 14201746,
              "fake": false,
              "status_data": "approved",
              "is_owner": false,
              "main_category_title": {
                "6459": "کلمن و فلاسک"
              },
              "active": true,
              "title_fa": "کلمن پاشاسازه مدل شیشه ای کد 2328 گنجایش 5 لیتر",
              "title_en": "",
              "brand_id": 719,
              "brand_title_en": "Miscellaneous",
              "brand_title_fa": "متفرقه",
              "product_url": "https://www.digikala.com/product/dkp-14201746/",
              "image_src": "https://dkstatics-public.digikala.com/digikala-products/a53edb1fe29c998301f163418cbe0d6be929ca0e_1706040353.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "dimension_level": "product",
              "brand_title": "متفرقه - Miscellaneous",
              "moderation_status": {
                "title": "approved",
                "status": "approved",
                "duplicate": null,
                "link": null
              },
              "adverge_url": null
            }
          ],
          "meta_data": {
            "filters": [
              [
                {
                  "name": "multi_search",
                  "type": "search box",
                  "label": "جست و جو"
                }
              ],
              [
                {
                  "name": "category_id",
                  "type": "option",
                  "label": "گروه اصلی",
                  "dynamic": true,
                  "db_name": "category",
                  "data": {
                    "6336": "ظروف سرو و پذیرایی",
                    "6261": "قوری",
                    "6247": "ابزار آشپزی",
                    "6302": "بشقاب",
                    "6329": "سرویس غذاخوری",
                    "6410": "قندان",
                    "9490": "کمربند و ساسبند مردانه",
                    "6268": "سینی",
                    "6305": "کاسه و پیاله",
                    "6289": "لیوان و فنجان",
                    "6258": "سرویس چای خوری",
                    "6313": "شکر پاش و نمک پاش",
                    "6750": "قاشق، چنگال و ظروف کودک و نوزاد",
                    "9382": "کمربند زنانه",
                    "6272": "قاشق، چنگال و کارد",
                    "6359": "سایر ظروف",
                    "6367": "ارگانایزر آشپزخانه",
                    "6426": "اسکاچ و سیم ظرفشویی",
                    "8996": "چرخ خیاطی دستی و ملزومات خیاطی",
                    "6301": "ظرف نگهدارنده",
                    "6459": "کلمن و فلاسک",
                    "6287": "پارچ و بطری",
                    "6319": "جای ادویه",
                    "6341": "جارو و خاک\u200Cانداز",
                    "6422": "گیره لباس",
                    "6610": "لوازم یکبار مصرف آشپزخانه",
                    "8748": "سایر لوازم اداری",
                    "6321": "سس خوری و آبلیمو خوری",
                    "6343": "فرچه",
                    "6424": "لیف",
                    "5987": "پاک کن و غلط گیر",
                    "6029": "بازی فکری",
                    "6270": "کتری و قوری",
                    "6790": "چراغ خواب کودک و نوزاد",
                    "8686": "نگهدارنده و جای دستمال کاغذی",
                    "8733": "جالباسی",
                    "6044": "آشنایی با فنون",
                    "6283": "ابزار تهیه کیک و دسر",
                    "6413": "سایر لوازم تزئینی",
                    "6625": "کمد لباس و ارگانایزر",
                    "10707": "ماگ",
                    "6255": "سرویس پخت و پز",
                    "6299": "زیر قابلمه\u200Cای و زیربشقابی",
                    "6311": "شمع",
                    "6316": "بانکه و ظروف بنشن",
                    "6317": "صافی",
                    "6340": "زمین شوی",
                    "6870": "تزئینات اتاق کودک",
                    "9068": "کف شور",
                    "10068": "سفره یکبار مصرف",
                    "156": "ساعت دیواری و ایستاده",
                    "5832": "مکمل تجهیزات پزشکی",
                    "5988": "چسب",
                    "5993": "خط کش",
                    "6000": "جامدادی",
                    "6129": "تجهیزات جانبی سفر و کمپینگ",
                    "6148": "چسب صنعتی",
                    "6216": "جوهر و سایر لوازم",
                    "6294": "دستمال نظافت یکبار مصرف",
                    "6295": "پادری",
                    "6306": "بستنی خوری",
                    "6331": "زیر سیگاری",
                    "6335": "رو بالشی",
                    "6355": "ظرف پودر رختشویی",
                    "6361": "ناخن گیر",
                    "6390": "سرویس قاشق، کارد و چنگال",
                    "6420": "دستکش نظافت",
                    "6528": "نوار بهداشتی",
                    "6596": "ابزار حمام",
                    "6748": "لوازم آبیاری",
                    "6759": "ابزار ایمنی کودک و نوزاد",
                    "6935": "کتری و سماور",
                    "9299": "شلوار راحتی زنانه",
                    "9398": "اکسسوری مو زنانه",
                    "9543": "جاکلیدی زنانه و مردانه",
                    "10638": "قابلمه و تابه"
                  }
                }
              ],
              [
                {
                  "name": "brand_id",
                  "type": "option",
                  "label": "برند کالا",
                  "dynamic": true,
                  "db_name": "brand",
                  "data": {
                    "719": "متفرقه",
                    "16718": "شرکت صنایع چینی تقدیس",
                    "14720": "تقدیس",
                    "2626": "مقصود",
                    "1575": "چینی زرین ایران",
                    "2745": "لمونژ",
                    "3972": "هوم کت",
                    "4478": "بلور کاوه",
                    "5545": "نوری تازه",
                    "6782": "کاراجا",
                    "13917": "چینی پردیس کاشان",
                    "5779": "سان کوک",
                    "1577": "زیبا سازان",
                    "6513": "انگلیش هوم",
                    "9046": "بازن",
                    "13062": "الماس",
                    "21117": "ساکورا",
                    "2072": "بی.وی.کی",
                    "3521": "ساکورا",
                    "6125": "دلسا",
                    "14148": "نسترن",
                    "30652": "آیروپال",
                    "2647": "دسینی",
                    "2755": "مای لیدی",
                    "3794": "کاوه",
                    "3842": "هاوس هولد",
                    "4614": "ایرسا",
                    "5262": "زیبا",
                    "6404": "ارج پلاستیک",
                    "8856": "دینو"
                  }
                }
              ],
              [
                {
                  "name": "moderation_status",
                  "type": "option",
                  "data": {
                    "draft": "آماده انتشار",
                    "in_review": "نیاز به ویرایش",
                    "waiting_for_confirm": "در حال بررسی",
                    "edit_after_approved": "در حال بررسی تغییرات",
                    "approved": "تایید شده",
                    "in_review_after_approved": "نیاز به ویرایش مجدد",
                    "removed": "حذف شده",
                    "duplicate": "کالای تکراری"
                  },
                  "label": "وضعیت تایید"
                }
              ],
              [
                {
                  "name": "fake_status",
                  "type": "radio",
                  "label": "اصالت کالا",
                  "data": {
                    "fake": "غیراصل",
                    "real": "اصل"
                  }
                }
              ]
            ],
            "filtered": []
          }
        }
      }';
    }
}