<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class DraftProductMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "id": 653996,
          "category_id": 6004,
          "category_name": "دفتر",
          "division_id": null,
          "model": "F983",
          "brand_id": 30353,
          "brand_name": "خندالو",
          "product_type_ids": [5066],
          "is_iranian": true,
          "product_classes": ["5"],
          "fake": false,
          "general_mefa_id": 1059,
          "exclusive_mefa_id": "",
          "package_width": null,
          "package_height": null,
          "package_length": null,
          "package_weight": null,
          "platforms": null,
          "description": "برند خندالو در زمینه تولید انواع دفاتر فانتزی و تحصیلی فعالیت میکند که به دلیل جذابیت ظاهری و طرح های متنوع طرفداران زیادی دارد. دفتر مشق خندالو محصولی مناسب برای استفاده به عنوان دفتر ریاضی، فیزیک، شیمی و جزوات دروس دانشجویان رشته های مختلف است. در تولید این دفتر از نوع صحافی فنر مارپیچ استفاده شده که در این نوع صحافی برگه\u200Cها به راحتی چرخیده و یا بیرون آورده می شوند. دفتر های خندالو دارای جلد انعطاف پذیر از جنس مقوای گلاسه 250 گرم با روکش سلفون مات مخملی است که به شما امکان می\u200Cدهد از دفتر خود بدون اینکه نگرانی از شکستن یا خراب شدن جلد را داشته باشید استفاده کنید و همچنین در این دفاتر از کاغذ 80 گرم با کیفیت استفاده شده که باعث می\u200Cشود هنگام نوشتن به خوبی جوهر قلم بر روی صفحه نشسته و از خط خوردگی\u200Cها جلوگیری کند. این دفتر مشق با جنس و دوام مناسب، برگ\u200Cهای کاملاً سفید و خطوط طوسی دقیق را داراست که انسان را به نوشتن منظم و زیبا ترغیب می\u200Cکند. طراحی کاملاً مناسب این دفاتر، به همراه کیفیت بالا، از آن یک محصول مورد علاقه و قابل اعتماد برای همه مقاطع تحصیلی می\u200Cسازد. دفتر مشق خندالو انتخابی هوشمندانه و مناسب برای افرادی است که به دنبال دفتری با کیفیت و کاربرد عالی هستند. این دفتر، همراه خوبی برای شما در تمام مراحل تحصیل و کار خواهد بود و تجربه\u200Cای لذت\u200Cبخش از نوشتن و آموختن را به شما هدیه می\u200Cدهد.",
          "title_en": null,
          "title_fa": "دفتر مشق 50 برگ خندالو طرح گربه (Cat) کد F983",
          "suggested_title_fa": "",
          "suggested_title_en": "",
          "attributes": {
            "6004": {
              "1608": [7495],
              "1609": [8201],
              "1672": [35035],
              "1677": [8283],
              "1678": [7459],
              "1786": [8693],
              "1610": [0],
              "119": null,
              "1318": "23x16x1"
            }
          },
          "width": 160,
          "height": 10,
          "length": 230,
          "weight": 0,
          "remaining_day": 29,
          "marketplace_seller_id": 2711,
          "next_step": [],
          "step": "step_title",
          "score": {
            "score_details": {
              "category": {
                "max": 1,
                "current": 1
              },
              "brand": {
                "max": 1,
                "current": 1
              },
              "type": {
                "max": 1,
                "current": 1
              },
              "model": {
                "max": 1,
                "current": 1
              },
              "originality": {
                "max": 1,
                "current": 1
              },
              "division": {
                "max": 1,
                "current": 0
              },
              "mefa": {
                "max": 1,
                "current": 1
              },
              "description": {
                "max": 2,
                "current": 2
              },
              "advantage": {
                "max": 2,
                "current": 0
              },
              "disadvantage": {
                "max": 2,
                "current": 0
              },
              "attribute_1610": {
                "max": 2,
                "current": 0
              },
              "attribute_1677": {
                "max": 1,
                "current": 1
              },
              "attribute_1608": {
                "max": 1,
                "current": 1
              },
              "attribute_1609": {
                "max": 1,
                "current": 1
              },
              "attribute_1672": {
                "max": 1,
                "current": 1
              },
              "attribute_1678": {
                "max": 1,
                "current": 1
              },
              "attribute_1786": {
                "max": 1,
                "current": 1
              },
              "attribute_119": {
                "max": 2,
                "current": 0
              },
              "title_fa": {
                "max": 1,
                "current": 1
              },
              "title_en": {
                "max": 2,
                "current": 0
              },
              "photo": {
                "max": 6,
                "current": 0
              }
            },
            "total": 15,
            "max": 32,
            "percent": 46
          }
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "id": 653995,
          "category_id": 86,
          "category_name": "محافظ صفحه نمایش تبلت",
          "division_id": null,
          "model": "HyBLU",
          "brand_id": 242,
          "brand_name": "هوکو",
          "product_type_ids": [],
          "is_iranian": false,
          "product_classes": ["2"],
          "fake": false,
          "general_mefa_id": 15435,
          "package_width": 20,
          "package_height": 1,
          "package_length": 30,
          "package_weight": 50,
          "platforms": null,
          "description": "این محافظ ضد اشعه آبی بوده و به خوبی از صفحه نمایش دستگاه در برابر خط و خش و ضربه محافظت می\u200Cکند. مراقبت از چشم\u200Cها در برابر نور مضر آبی، جلوگیری از خستگی چشم، خودترمیم بودن، نصب آسان، برند معتبر هوکو و کیفیت بالا از ویژگی های این محافظ هیدروژلی می\u200Cباشد و هیچگونه خللی در عملکرد و سرعت تاچ ایجاد نمی\u200Cکند. این محافظ را برای افراد مسن، افراد دارای چشمان ضعیف، افرادی که خیلی به صفحه نگاه می\u200Cکنند و نیاز به مراقبت از چشم\u200Cها را دارند توصیه می\u200Cکنیم. قبل از نصب کلیپ آموزشی را در اینترنت مشاهده فرمایید.",
          "advantages": [],
          "disadvantages": [],
          "title_en": null,
          "title_fa": null,
          "attributes": {
            "86": {
              "2195": [32929],
              "2778": [22863, 22866, 22869, 22870],
              "2270": "برند معتبر هوکو – یکدست و بدون حاشیه رنگی - خودترمیم – محافظت از چشم ها در برابر نور مضر آبی – مناسب برای افرادی که خیلی به صفحه نگاه می\u200Cکنند – مناسب برای چشم\u200Cهای حساس - جلوگیری از خستگی چشم - سرعت تاچ بالا - نصب آسان - کیفیت بالا - قبل از نصب کلیپ آموزشی را در اینترنت مشاهده فرمایید."
            }
          },
          "width": 0,
          "height": 0,
          "length": 0,
          "weight": 0,
          "remaining_day": 29,
          "marketplace_seller_id": 58944,
          "next_step": [],
          "step": "step_attribute",
          "score": {
            "score_details": {
              "category": {
                "max": 1,
                "current": 1
              },
              "brand": {
                "max": 1,
                "current": 1
              },
              "type": {
                "max": 1,
                "current": 1
              },
              "model": {
                "max": 1,
                "current": 1
              },
              "originality": {
                "max": 1,
                "current": 1
              },
              "division": {
                "max": 1,
                "current": 0
              },
              "mefa": {
                "max": 1,
                "current": 1
              },
              "dimension": {
                "max": 1,
                "current": 1
              },
              "description": {
                "max": 2,
                "current": 2
              },
              "advantage": {
                "max": 2,
                "current": 0
              },
              "disadvantage": {
                "max": 2,
                "current": 0
              },
              "attribute_2195": {
                "max": 1,
                "current": 1
              },
              "attribute_2270": {
                "max": 2,
                "current": 2
              },
              "attribute_2778": {
                "max": 1,
                "current": 1
              },
              "title_fa": {
                "max": 1,
                "current": 0
              },
              "title_en": {
                "max": 2,
                "current": 0
              },
              "photo": {
                "max": 6,
                "current": 0
              }
            },
            "total": 13,
            "max": 27,
            "percent": 48
          }
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "id": 653992,
          "category_id": 77,
          "category_name": "کیف و کاور گوشی",
          "division_id": null,
          "model": "فانتزی",
          "brand_id": 719,
          "brand_name": "متفرقه",
          "product_type_ids": [3540],
          "is_iranian": true,
          "product_classes": ["2"],
          "fake": false,
          "general_mefa_id": 15432,
          "exclusive_mefa_id": "",
          "package_width": 10,
          "package_height": 3,
          "package_length": 20,
          "package_weight": 30,
          "platforms": null,
          "description": "قاب فوق محافظ بسیار خوبی برای موبایل شما می\u200Cباشد همچنین از ماندگاری رنگ بالایی برخوردار است پشت قاب از یک فلز استفاده شده که استحکام قاب را در ضربات سنگین بسیار بالا میبرد در کل استفاده از این قاب به دلیل استفاده از متریال خوب حس خوبی به شما انتقال میدهد .",
          "advantages": [],
          "disadvantages": [],
          "title_en": null,
          "title_fa": "کاور قاب گارد گوشی طرح مرد آهنی کد TPU-370 مناسب برای گوشی موبایل اپل iPhone 13 / 14",
          "suggested_title_fa": "",
          "suggested_title_en": "",
          "attributes": {
            "77": {
              "2183": 30,
              "6477": [31920, 34944],
              "6478": [22386],
              "6479": [22393, 22395, 22396, 22397, 22398, 22399],
              "7345": [32742, 32748, 32751],
              "9618": [49011],
              "6480": [22419, 22420],
              "7285": null,
              "2233": null
            }
          },
          "width": 0,
          "height": 0,
          "length": 0,
          "weight": 0,
          "remaining_day": 29,
          "marketplace_seller_id": 1405091,
          "next_step": [],
          "step": "step_title",
          "score": {
            "score_details": {
              "category": {
                "max": 1,
                "current": 1
              },
              "brand": {
                "max": 1,
                "current": 1
              },
              "type": {
                "max": 1,
                "current": 1
              },
              "model": {
                "max": 1,
                "current": 1
              },
              "originality": {
                "max": 1,
                "current": 1
              },
              "division": {
                "max": 1,
                "current": 0
              },
              "mefa": {
                "max": 1,
                "current": 1
              },
              "dimension": {
                "max": 1,
                "current": 1
              },
              "description": {
                "max": 2,
                "current": 2
              },
              "advantage": {
                "max": 2,
                "current": 0
              },
              "disadvantage": {
                "max": 2,
                "current": 0
              },
              "attribute_9618": {
                "max": 1,
                "current": 1
              },
              "attribute_7285": {
                "max": 2,
                "current": 0
              },
              "attribute_7345": {
                "max": 1,
                "current": 1
              },
              "attribute_2183": {
                "max": 1,
                "current": 1
              },
              "attribute_6477": {
                "max": 1,
                "current": 1
              },
              "attribute_6478": {
                "max": 1,
                "current": 1
              },
              "attribute_6479": {
                "max": 1,
                "current": 1
              },
              "attribute_6480": {
                "max": 2,
                "current": 2
              },
              "attribute_2233": {
                "max": 2,
                "current": 0
              },
              "title_fa": {
                "max": 1,
                "current": 1
              },
              "title_en": {
                "max": 2,
                "current": 0
              },
              "photo": {
                "max": 6,
                "current": 0
              }
            },
            "total": 18,
            "max": 35,
            "percent": 51
          }
        }
      }';
    }
}