<?php

namespace App\Mock\Package;

use App\Mock\AMockV2;

class PackageWarehousesMockData extends AMockV2
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
            "total_pages": 0,
            "total_rows": 0
          },
          "form_data": [],
          "items": {
            "1": {
              "id": 1,
              "title": "انبار دانش",
              "address": "انبار دانش دیجی کالا - جاده قدیم کرج-کیلومتر 16-چهارراه ایران خودرو-شهرک دانش-نبش خیابان سولیران و جهاد-درب طوسی رنگ- پلاک 2",
              "latitude": "35.6959850",
              "longitude": "51.1690574",
              "postal_code": "3754312557"
            },
            "41": {
              "id": 41,
              "title": "انبار شرق 1",
              "address": "آدرس: خیابان دماوند (شرق به غرب)، بلوار جشنواره (شهید ناهیدی)، خیابان سیری، انتهای بن بست صبوری، انبار دیجی کالا",
              "latitude": "35.726250",
              "longitude": "51.552472",
              "postal_code": null
            },
            "51": {
              "id": 51,
              "title": "انبار کرج",
              "address": "کرج – گلشهر – گلزار غربی – بلوار الغدیر به سمت پل سردخانه – کوکب غربی – روبروی مجتمع پاسارگاد و املاک کوکب",
              "latitude": "35.821953",
              "longitude": "50.926577",
              "postal_code": "3167654618"
            },
            "58": {
              "id": 58,
              "title": "انبار بادامک(کالاهای کوچک)",
              "address": "جاده قدیم فتح، سه راه شهریار، بعد از سعید آباد، کنار انبار کاله، زیر گذر پل بادامک (به سمت راست)، جاده ورامینک، پلاک 17، درب طوسی رنگ",
              "latitude": "35.6554132",
              "longitude": "51.1603549",
              "postal_code": null
            },
            "97": {
              "id": 97,
              "title": "انبار اصفهان جی",
              "address": "اصفهان،شهرک صنعتی جی، خیابان اول، فرعی چهارم، پلاک ۴۲",
              "latitude": "35.7663162",
              "longitude": "51.4204603",
              "postal_code": null
            },
            "106": {
              "id": 106,
              "title": "انبار  ارومیه",
              "address": "ارومیه، جاده دریا (چی چست)، کیلومتر ۸، ورودی روستا قلیلو، بعد از مدرسه، جنب دهیاری،\u200Cپلاک ۳۷",
              "latitude": "",
              "longitude": "",
              "postal_code": "5735۱۷۵۱۸۳"
            },
            "107": {
              "id": 107,
              "title": "انبار  قزوین",
              "address": "قزوین،بلوار صنعت به سمت شهرک صنعتی، مجتمع آپادانا (ساختمان پشت نمایشگاه عرش فرش)، انبار دیجی\u200Cکالا",
              "latitude": "",
              "longitude": "",
              "postal_code": null
            },
            "133": {
              "id": 133,
              "title": "انبار تبریز غرب",
              "address": "تبریز - خیابان ملت_روبه روی مسجد طفلان مسلم_جنب تشخیص رنگ رضا پلاک ۷۳",
              "latitude": "",
              "longitude": "",
              "postal_code": "5175745747"
            },
            "52": {
              "id": 52,
              "title": "انبار مشهد",
              "address": "مشهد، میدان سپاد، بلوار بهارستان، بهارستان 9، مجتمع انبارهای سپاد، سوله دو، درب آ",
              "latitude": "36.341556",
              "longitude": "59.607083",
              "postal_code": "9199694821"
            }
          },
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
            "total_pages": 0,
            "total_rows": 0
          },
          "form_data": [],
          "items": {
            "1": {
              "id": 1,
              "title": "انبار دانش",
              "address": "انبار دانش دیجی کالا - جاده قدیم کرج-کیلومتر 16-چهارراه ایران خودرو-شهرک دانش-نبش خیابان سولیران و جهاد-درب طوسی رنگ- پلاک 2",
              "latitude": "35.6959850",
              "longitude": "51.1690574",
              "postal_code": "3754312557"
            },
            "41": {
              "id": 41,
              "title": "انبار شرق 1",
              "address": "آدرس: خیابان دماوند (شرق به غرب)، بلوار جشنواره (شهید ناهیدی)، خیابان سیری، انتهای بن بست صبوری، انبار دیجی کالا",
              "latitude": "35.726250",
              "longitude": "51.552472",
              "postal_code": null
            },
            "51": {
              "id": 51,
              "title": "انبار کرج",
              "address": "کرج – گلشهر – گلزار غربی – بلوار الغدیر به سمت پل سردخانه – کوکب غربی – روبروی مجتمع پاسارگاد و املاک کوکب",
              "latitude": "35.821953",
              "longitude": "50.926577",
              "postal_code": "3167654618"
            },
            "58": {
              "id": 58,
              "title": "انبار بادامک(کالاهای کوچک)",
              "address": "جاده قدیم فتح، سه راه شهریار، بعد از سعید آباد، کنار انبار کاله، زیر گذر پل بادامک (به سمت راست)، جاده ورامینک، پلاک 17، درب طوسی رنگ",
              "latitude": "35.6554132",
              "longitude": "51.1603549",
              "postal_code": null
            },
            "97": {
              "id": 97,
              "title": "انبار اصفهان جی",
              "address": "اصفهان،شهرک صنعتی جی، خیابان اول، فرعی چهارم، پلاک ۴۲",
              "latitude": "35.7663162",
              "longitude": "51.4204603",
              "postal_code": null
            },
            "106": {
              "id": 106,
              "title": "انبار  ارومیه",
              "address": "ارومیه، جاده دریا (چی چست)، کیلومتر ۸، ورودی روستا قلیلو، بعد از مدرسه، جنب دهیاری،\u200Cپلاک ۳۷",
              "latitude": "",
              "longitude": "",
              "postal_code": "5735۱۷۵۱۸۳"
            },
            "107": {
              "id": 107,
              "title": "انبار  قزوین",
              "address": "قزوین،بلوار صنعت به سمت شهرک صنعتی، مجتمع آپادانا (ساختمان پشت نمایشگاه عرش فرش)، انبار دیجی\u200Cکالا",
              "latitude": "",
              "longitude": "",
              "postal_code": null
            },
            "133": {
              "id": 133,
              "title": "انبار تبریز غرب",
              "address": "تبریز - خیابان ملت_روبه روی مسجد طفلان مسلم_جنب تشخیص رنگ رضا پلاک ۷۳",
              "latitude": "",
              "longitude": "",
              "postal_code": "5175745747"
            }
          },
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
            "total_pages": 0,
            "total_rows": 0
          },
          "form_data": [],
          "items": {
            "1": {
              "id": 1,
              "title": "انبار دانش",
              "address": "انبار دانش دیجی کالا - جاده قدیم کرج-کیلومتر 16-چهارراه ایران خودرو-شهرک دانش-نبش خیابان سولیران و جهاد-درب طوسی رنگ- پلاک 2",
              "latitude": "35.6959850",
              "longitude": "51.1690574",
              "postal_code": "3754312557"
            },
            "41": {
              "id": 41,
              "title": "انبار شرق 1",
              "address": "آدرس: خیابان دماوند (شرق به غرب)، بلوار جشنواره (شهید ناهیدی)، خیابان سیری، انتهای بن بست صبوری، انبار دیجی کالا",
              "latitude": "35.726250",
              "longitude": "51.552472",
              "postal_code": null
            },
            "51": {
              "id": 51,
              "title": "انبار کرج",
              "address": "کرج – گلشهر – گلزار غربی – بلوار الغدیر به سمت پل سردخانه – کوکب غربی – روبروی مجتمع پاسارگاد و املاک کوکب",
              "latitude": "35.821953",
              "longitude": "50.926577",
              "postal_code": "3167654618"
            },
            "58": {
              "id": 58,
              "title": "انبار بادامک(کالاهای کوچک)",
              "address": "جاده قدیم فتح، سه راه شهریار، بعد از سعید آباد، کنار انبار کاله، زیر گذر پل بادامک (به سمت راست)، جاده ورامینک، پلاک 17، درب طوسی رنگ",
              "latitude": "35.6554132",
              "longitude": "51.1603549",
              "postal_code": null
            },
            "97": {
              "id": 97,
              "title": "انبار اصفهان جی",
              "address": "اصفهان،شهرک صنعتی جی، خیابان اول، فرعی چهارم، پلاک ۴۲",
              "latitude": "35.7663162",
              "longitude": "51.4204603",
              "postal_code": null
            },
            "106": {
              "id": 106,
              "title": "انبار  ارومیه",
              "address": "ارومیه، جاده دریا (چی چست)، کیلومتر ۸، ورودی روستا قلیلو، بعد از مدرسه، جنب دهیاری،\u200Cپلاک ۳۷",
              "latitude": "",
              "longitude": "",
              "postal_code": "5735۱۷۵۱۸۳"
            },
            "107": {
              "id": 107,
              "title": "انبار  قزوین",
              "address": "قزوین،بلوار صنعت به سمت شهرک صنعتی، مجتمع آپادانا (ساختمان پشت نمایشگاه عرش فرش)، انبار دیجی\u200Cکالا",
              "latitude": "",
              "longitude": "",
              "postal_code": null
            },
            "133": {
              "id": 133,
              "title": "انبار تبریز غرب",
              "address": "تبریز - خیابان ملت_روبه روی مسجد طفلان مسلم_جنب تشخیص رنگ رضا پلاک ۷۳",
              "latitude": "",
              "longitude": "",
              "postal_code": "5175745747"
            },
            "53": {
              "id": 53,
              "title": "انبار اصفهان خمینی شهر",
              "address": "بزرگراه سردار سلیمانی، خیابان حکیم فرزانه، خیابان شهدای دستگرد، کوچه سنگبری زحل، انبار دیجیکالا",
              "latitude": "32.733969",
              "longitude": "51.468631",
              "postal_code": "8418148669"
            },
            "57": {
              "id": 57,
              "title": "انبار اهواز",
              "address": "اهواز -اتوبان آیت الله بهبهانی بعد از میدان جمهوری لاین کند رو  نبش خ ابراهیمی (چهارراه فاطمی) شرکت تعاونی صنف خواروبار فروشان",
              "latitude": "31.295528",
              "longitude": "48.681139",
              "postal_code": "6198694686"
            }
          },
          "meta_data": []
        }
      }';
    }
}