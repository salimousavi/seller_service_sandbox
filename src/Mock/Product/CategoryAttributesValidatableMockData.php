<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class CategoryAttributesValidatableMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "category_group_attributes": {
            "178": {
              "group_title": "مشخصات",
              "attributes": {
                "8893": {
                  "id": 8893,
                  "title": "نوع شلوارک مردانه",
                  "code": null,
                  "postfix": null,
                  "unit": null,
                  "type": "checkbox",
                  "required": true,
                  "value": null,
                  "values": {
                    "44939": {
                      "text": "شلوارک",
                      "code": null,
                      "selected": false
                    }
                  },
                  "hint": null
                },
                "88": {
                  "id": 88,
                  "title": "جنس",
                  "code": null,
                  "postfix": null,
                  "unit": null,
                  "type": "checkbox",
                  "required": true,
                  "value": null,
                  "values": {
                    "206": {
                      "text": "استراپلس",
                      "code": null,
                      "selected": false
                    },
                    "207": {
                      "text": "استرچ",
                      "code": null,
                      "selected": false
                    },
                    "208": {
                      "text": "استیل",
                      "code": null,
                      "selected": false
                    },
                    "209": {
                      "text": "اسفنجی",
                      "code": null,
                      "selected": false
                    },
                    "210": {
                      "text": "اشبالت",
                      "code": null,
                      "selected": false
                    },
                    "211": {
                      "text": "اکریلیک",
                      "code": null,
                      "selected": false
                    },
                    "212": {
                      "text": "الاستین",
                      "code": null,
                      "selected": false
                    },
                    "213": {
                      "text": "آلومینیوم",
                      "code": null,
                      "selected": false
                    },
                    "214": {
                      "text": "آلیاژ روی",
                      "code": null,
                      "selected": false
                    },
                    "215": {
                      "text": "آلیاژ قلع",
                      "code": null,
                      "selected": false
                    },
                    "216": {
                      "text": "آلیاژ مس",
                      "code": null,
                      "selected": false
                    },
                    "217": {
                      "text": "الیاف طبیعی",
                      "code": null,
                      "selected": false
                    },
                    "218": {
                      "text": "الیاف فلزی",
                      "code": null,
                      "selected": false
                    },
                    "219": {
                      "text": "الیاف کاغذی",
                      "code": null,
                      "selected": false
                    },
                    "220": {
                      "text": "الیاف گیاهی",
                      "code": null,
                      "selected": false
                    },
                    "221": {
                      "text": "الیاف مصنوعی",
                      "code": null,
                      "selected": false
                    },
                    "222": {
                      "text": "الیاف نخی",
                      "code": null,
                      "selected": false
                    },
                    "223": {
                      "text": "آهک",
                      "code": null,
                      "selected": false
                    },
                    "224": {
                      "text": "آهن",
                      "code": null,
                      "selected": false
                    },
                    "225": {
                      "text": "بافت",
                      "code": null,
                      "selected": false
                    },
                    "226": {
                      "text": "بامبو",
                      "code": null,
                      "selected": false
                    },
                    "227": {
                      "text": "بتن",
                      "code": null,
                      "selected": false
                    },
                    "228": {
                      "text": "برزنت",
                      "code": null,
                      "selected": false
                    },
                    "229": {
                      "text": "برنج",
                      "code": null,
                      "selected": false
                    },
                    "230": {
                      "text": "برنز",
                      "code": null,
                      "selected": false
                    },
                    "231": {
                      "text": "بند",
                      "code": null,
                      "selected": false
                    },
                    "232": {
                      "text": "بند و طلا",
                      "code": null,
                      "selected": false
                    },
                    "233": {
                      "text": "بنگال",
                      "code": null,
                      "selected": false
                    },
                    "201": {
                      "text": "ارگانزا",
                      "code": null,
                      "selected": false
                    },
                    "234": {
                      "text": "پارچه",
                      "code": null,
                      "selected": false
                    },
                    "235": {
                      "text": "پارچه شنای کشی",
                      "code": null,
                      "selected": false
                    },
                    "236": {
                      "text": "پالادیوم",
                      "code": null,
                      "selected": false
                    },
                    "237": {
                      "text": "پاورنت",
                      "code": null,
                      "selected": false
                    },
                    "238": {
                      "text": "پر",
                      "code": null,
                      "selected": false
                    },
                    "239": {
                      "text": "پرادا",
                      "code": null,
                      "selected": false
                    },
                    "240": {
                      "text": "پشم",
                      "code": null,
                      "selected": false
                    },
                    "241": {
                      "text": "پشم آلپاکا",
                      "code": null,
                      "selected": false
                    },
                    "193": {
                      "text": "EVA (اتیلن-وینیل استات)",
                      "code": null,
                      "selected": false
                    },
                    "242": {
                      "text": "پلاتین",
                      "code": null,
                      "selected": false
                    },
                    "243": {
                      "text": "پلار",
                      "code": null,
                      "selected": false
                    },
                    "244": {
                      "text": "پلاستیک",
                      "code": null,
                      "selected": false
                    },
                    "245": {
                      "text": "پلاشی",
                      "code": null,
                      "selected": false
                    },
                    "246": {
                      "text": "پلکسی",
                      "code": null,
                      "selected": false
                    },
                    "247": {
                      "text": "پلی اتیلن",
                      "code": null,
                      "selected": false
                    },
                    "248": {
                      "text": "پلی استر",
                      "code": null,
                      "selected": false
                    },
                    "249": {
                      "text": "پلی اکریلیک",
                      "code": null,
                      "selected": false
                    },
                    "250": {
                      "text": "پلی آمید",
                      "code": null,
                      "selected": false
                    },
                    "251": {
                      "text": "پلی اورتان",
                      "code": null,
                      "selected": false
                    },
                    "252": {
                      "text": "پلی پروپیلن",
                      "code": null,
                      "selected": false
                    },
                    "253": {
                      "text": "پلی رزین",
                      "code": null,
                      "selected": false
                    },
                    "197": {
                      "text": "ابریشم توییل",
                      "code": null,
                      "selected": false
                    },
                    "254": {
                      "text": "پلی کربنات",
                      "code": null,
                      "selected": false
                    },
                    "255": {
                      "text": "پلی ویسکون",
                      "code": null,
                      "selected": false
                    },
                    "256": {
                      "text": "پلی وینیل",
                      "code": null,
                      "selected": false
                    },
                    "257": {
                      "text": "پنبه",
                      "code": null,
                      "selected": false
                    },
                    "258": {
                      "text": "پنبه تیپ لاکرا",
                      "code": null,
                      "selected": false
                    },
                    "259": {
                      "text": "پنبه دورو",
                      "code": null,
                      "selected": false
                    },
                    "260": {
                      "text": "پنبه یکرو",
                      "code": null,
                      "selected": false
                    },
                    "261": {
                      "text": "پوپلین",
                      "code": null,
                      "selected": false
                    },
                    "262": {
                      "text": "تترون",
                      "code": null,
                      "selected": false
                    },
                    "263": {
                      "text": "ترمو",
                      "code": null,
                      "selected": false
                    },
                    "264": {
                      "text": "ترموپلاستیک",
                      "code": null,
                      "selected": false
                    },
                    "265": {
                      "text": "ترمولایت",
                      "code": null,
                      "selected": false
                    },
                    "266": {
                      "text": "تریزا",
                      "code": null,
                      "selected": false
                    },
                    "267": {
                      "text": "تریکو",
                      "code": null,
                      "selected": false
                    },
                    "268": {
                      "text": "تنسل",
                      "code": null,
                      "selected": false
                    },
                    "269": {
                      "text": "تور",
                      "code": null,
                      "selected": false
                    },
                    "270": {
                      "text": "تویت",
                      "code": null,
                      "selected": false
                    },
                    "271": {
                      "text": "تیارا",
                      "code": null,
                      "selected": false
                    },
                    "272": {
                      "text": "تیتانیوم",
                      "code": null,
                      "selected": false
                    },
                    "273": {
                      "text": "جودون",
                      "code": null,
                      "selected": false
                    },
                    "202": {
                      "text": "اسپان",
                      "code": null,
                      "selected": false
                    },
                    "274": {
                      "text": "جیر",
                      "code": null,
                      "selected": false
                    },
                    "275": {
                      "text": "جیر مصنوعی",
                      "code": null,
                      "selected": false
                    },
                    "276": {
                      "text": "جین",
                      "code": null,
                      "selected": false
                    },
                    "277": {
                      "text": "چرم حصیری بافت",
                      "code": null,
                      "selected": false
                    },
                    "278": {
                      "text": "چرم طبیعی",
                      "code": null,
                      "selected": false
                    },
                    "279": {
                      "text": "چرم مصنوعی",
                      "code": null,
                      "selected": false
                    },
                    "280": {
                      "text": "چرم و طلا",
                      "code": null,
                      "selected": false
                    },
                    "281": {
                      "text": "چرم و نقره",
                      "code": null,
                      "selected": false
                    },
                    "282": {
                      "text": "چوب",
                      "code": null,
                      "selected": false
                    },
                    "283": {
                      "text": "چوب و رزین",
                      "code": null,
                      "selected": false
                    },
                    "284": {
                      "text": "چینی",
                      "code": null,
                      "selected": false
                    },
                    "285": {
                      "text": "حریر",
                      "code": null,
                      "selected": false
                    },
                    "286": {
                      "text": "حریر اسود (کرپ)",
                      "code": null,
                      "selected": false
                    },
                    "287": {
                      "text": "حریر ژرژت",
                      "code": null,
                      "selected": false
                    },
                    "288": {
                      "text": "حریر کش",
                      "code": null,
                      "selected": false
                    },
                    "289": {
                      "text": "حصیر",
                      "code": null,
                      "selected": false
                    },
                    "290": {
                      "text": "خز",
                      "code": null,
                      "selected": false
                    },
                    "291": {
                      "text": "خمیر پلیمری",
                      "code": null,
                      "selected": false
                    },
                    "292": {
                      "text": "خمیر مجسمه\u200Cسازی",
                      "code": null,
                      "selected": false
                    },
                    "293": {
                      "text": "دانتل",
                      "code": null,
                      "selected": false
                    },
                    "294": {
                      "text": "دورس",
                      "code": null,
                      "selected": false
                    },
                    "295": {
                      "text": "رامی",
                      "code": null,
                      "selected": false
                    },
                    "194": {
                      "text": "PVC (پلی وینیل کلراید)",
                      "code": null,
                      "selected": false
                    },
                    "296": {
                      "text": "رزین",
                      "code": null,
                      "selected": false
                    },
                    "297": {
                      "text": "روکش رزین",
                      "code": null,
                      "selected": false
                    },
                    "298": {
                      "text": "روکش رودیوم",
                      "code": null,
                      "selected": false
                    },
                    "299": {
                      "text": "روکش طلا",
                      "code": null,
                      "selected": false
                    },
                    "300": {
                      "text": "روکش نقره",
                      "code": null,
                      "selected": false
                    },
                    "198": {
                      "text": "آبکاری طلا",
                      "code": null,
                      "selected": false
                    },
                    "301": {
                      "text": "روی",
                      "code": null,
                      "selected": false
                    },
                    "302": {
                      "text": "ریون",
                      "code": null,
                      "selected": false
                    },
                    "303": {
                      "text": "زاماک",
                      "code": null,
                      "selected": false
                    },
                    "304": {
                      "text": "ژاکارد",
                      "code": null,
                      "selected": false
                    },
                    "305": {
                      "text": "ژرژت",
                      "code": null,
                      "selected": false
                    },
                    "306": {
                      "text": "ژرسه",
                      "code": null,
                      "selected": false
                    },
                    "307": {
                      "text": "ساتن",
                      "code": null,
                      "selected": false
                    },
                    "308": {
                      "text": "سرامیک",
                      "code": null,
                      "selected": false
                    },
                    "309": {
                      "text": "سفال",
                      "code": null,
                      "selected": false
                    },
                    "203": {
                      "text": "اسپان باند",
                      "code": null,
                      "selected": false
                    },
                    "310": {
                      "text": "سنگ",
                      "code": null,
                      "selected": false
                    },
                    "311": {
                      "text": "سنگ و استیل",
                      "code": null,
                      "selected": false
                    },
                    "312": {
                      "text": "سنگ و خمیر پلیمری",
                      "code": null,
                      "selected": false
                    },
                    "313": {
                      "text": "سنگ و طلا",
                      "code": null,
                      "selected": false
                    },
                    "314": {
                      "text": "سنگ و نقره",
                      "code": null,
                      "selected": false
                    },
                    "315": {
                      "text": "سوپر کن کن",
                      "code": null,
                      "selected": false
                    },
                    "316": {
                      "text": "سوییت",
                      "code": null,
                      "selected": false
                    },
                    "317": {
                      "text": "سیلیکون",
                      "code": null,
                      "selected": false
                    },
                    "318": {
                      "text": "شانتون",
                      "code": null,
                      "selected": false
                    },
                    "319": {
                      "text": "شیشه",
                      "code": null,
                      "selected": false
                    },
                    "320": {
                      "text": "صدف طبیعی",
                      "code": null,
                      "selected": false
                    },
                    "321": {
                      "text": "طلا",
                      "code": null,
                      "selected": false
                    },
                    "322": {
                      "text": "طلا و نقره",
                      "code": null,
                      "selected": false
                    },
                    "323": {
                      "text": "عقیق",
                      "code": null,
                      "selected": false
                    },
                    "324": {
                      "text": "عقیق یمنی",
                      "code": null,
                      "selected": false
                    },
                    "325": {
                      "text": "فایبرتک",
                      "code": null,
                      "selected": false
                    },
                    "326": {
                      "text": "فلامنت",
                      "code": null,
                      "selected": false
                    },
                    "327": {
                      "text": "فلز",
                      "code": null,
                      "selected": false
                    },
                    "328": {
                      "text": "فوتر",
                      "code": null,
                      "selected": false
                    },
                    "329": {
                      "text": "فوم",
                      "code": null,
                      "selected": false
                    },
                    "330": {
                      "text": "فیروزه",
                      "code": null,
                      "selected": false
                    },
                    "331": {
                      "text": "کاغذ",
                      "code": null,
                      "selected": false
                    },
                    "332": {
                      "text": "کتان",
                      "code": null,
                      "selected": false
                    },
                    "333": {
                      "text": "کچه",
                      "code": null,
                      "selected": false
                    },
                    "334": {
                      "text": "کرپ",
                      "code": null,
                      "selected": false
                    },
                    "335": {
                      "text": "کرپ حریر",
                      "code": null,
                      "selected": false
                    },
                    "336": {
                      "text": "کرپ کریستال",
                      "code": null,
                      "selected": false
                    },
                    "337": {
                      "text": "کرپ کن\u200Cکن",
                      "code": null,
                      "selected": false
                    },
                    "338": {
                      "text": "کروم",
                      "code": null,
                      "selected": false
                    },
                    "339": {
                      "text": "کریستال",
                      "code": null,
                      "selected": false
                    },
                    "340": {
                      "text": "کشبافت",
                      "code": null,
                      "selected": false
                    },
                    "341": {
                      "text": "کشمیر",
                      "code": null,
                      "selected": false
                    },
                    "342": {
                      "text": "کشی",
                      "code": null,
                      "selected": false
                    },
                    "199": {
                      "text": "اپوکسی",
                      "code": null,
                      "selected": false
                    },
                    "343": {
                      "text": "کن کن",
                      "code": null,
                      "selected": false
                    },
                    "344": {
                      "text": "کنف",
                      "code": null,
                      "selected": false
                    },
                    "204": {
                      "text": "اسپاندکس",
                      "code": null,
                      "selected": false
                    },
                    "345": {
                      "text": "گاباردین",
                      "code": null,
                      "selected": false
                    },
                    "346": {
                      "text": "گورتکس",
                      "code": null,
                      "selected": false
                    },
                    "347": {
                      "text": "گیپور",
                      "code": null,
                      "selected": false
                    },
                    "348": {
                      "text": "لاتکس",
                      "code": null,
                      "selected": false
                    },
                    "349": {
                      "text": "لاستیک",
                      "code": null,
                      "selected": false
                    },
                    "350": {
                      "text": "لاکرا",
                      "code": null,
                      "selected": false
                    },
                    "195": {
                      "text": "TPU (ترموپلاستیک پلی اورتان)",
                      "code": null,
                      "selected": false
                    },
                    "351": {
                      "text": "لایوسل",
                      "code": null,
                      "selected": false
                    },
                    "352": {
                      "text": "لمه",
                      "code": null,
                      "selected": false
                    },
                    "353": {
                      "text": "لورکس",
                      "code": null,
                      "selected": false
                    },
                    "354": {
                      "text": "لینن",
                      "code": null,
                      "selected": false
                    },
                    "355": {
                      "text": "مخمل",
                      "code": null,
                      "selected": false
                    },
                    "356": {
                      "text": "مداکریلیک",
                      "code": null,
                      "selected": false
                    },
                    "357": {
                      "text": "مدال",
                      "code": null,
                      "selected": false
                    },
                    "358": {
                      "text": "مس",
                      "code": null,
                      "selected": false
                    },
                    "359": {
                      "text": "مش",
                      "code": null,
                      "selected": false
                    },
                    "360": {
                      "text": "مقوا",
                      "code": null,
                      "selected": false
                    },
                    "361": {
                      "text": "ملانژ",
                      "code": null,
                      "selected": false
                    },
                    "362": {
                      "text": "مهره",
                      "code": null,
                      "selected": false
                    },
                    "363": {
                      "text": "مهره و خمیر پلیمری",
                      "code": null,
                      "selected": false
                    },
                    "364": {
                      "text": "مو طبیعی",
                      "code": null,
                      "selected": false
                    },
                    "365": {
                      "text": "مواد مصنوعی",
                      "code": null,
                      "selected": false
                    },
                    "366": {
                      "text": "مودال",
                      "code": null,
                      "selected": false
                    },
                    "368": {
                      "text": "موهر",
                      "code": null,
                      "selected": false
                    },
                    "369": {
                      "text": "میکرو",
                      "code": null,
                      "selected": false
                    },
                    "370": {
                      "text": "میکرو پلی اورتان",
                      "code": null,
                      "selected": false
                    },
                    "371": {
                      "text": "میکروفایبر",
                      "code": null,
                      "selected": false
                    },
                    "372": {
                      "text": "میکرولایت",
                      "code": null,
                      "selected": false
                    },
                    "374": {
                      "text": "نانو",
                      "code": null,
                      "selected": false
                    },
                    "375": {
                      "text": "نایلون",
                      "code": null,
                      "selected": false
                    },
                    "376": {
                      "text": "نبوک",
                      "code": null,
                      "selected": false
                    },
                    "377": {
                      "text": "نخ",
                      "code": null,
                      "selected": false
                    },
                    "378": {
                      "text": "نقره",
                      "code": null,
                      "selected": false
                    },
                    "379": {
                      "text": "نمد",
                      "code": null,
                      "selected": false
                    },
                    "205": {
                      "text": "استات",
                      "code": null,
                      "selected": false
                    },
                    "380": {
                      "text": "نیکل",
                      "code": null,
                      "selected": false
                    },
                    "381": {
                      "text": "نئوپرن",
                      "code": null,
                      "selected": false
                    },
                    "382": {
                      "text": "هورس",
                      "code": null,
                      "selected": false
                    },
                    "383": {
                      "text": "ورشو",
                      "code": null,
                      "selected": false
                    },
                    "384": {
                      "text": "ویسکوز",
                      "code": null,
                      "selected": false
                    },
                    "200": {
                      "text": "اتیلن وینیل استات",
                      "code": null,
                      "selected": false
                    },
                    "1565": {
                      "text": "ویسکون",
                      "code": null,
                      "selected": false
                    },
                    "1566": {
                      "text": "ترزا",
                      "code": null,
                      "selected": false
                    },
                    "1567": {
                      "text": "لیندور",
                      "code": null,
                      "selected": false
                    },
                    "1568": {
                      "text": "شیمر",
                      "code": null,
                      "selected": false
                    },
                    "1570": {
                      "text": "کریشه",
                      "code": null,
                      "selected": false
                    },
                    "1571": {
                      "text": "بوگاتی",
                      "code": null,
                      "selected": false
                    },
                    "196": {
                      "text": "ابریشم",
                      "code": null,
                      "selected": false
                    },
                    "1572": {
                      "text": "مازراتی",
                      "code": null,
                      "selected": false
                    },
                    "1573": {
                      "text": "بالکنی",
                      "code": null,
                      "selected": false
                    },
                    "1574": {
                      "text": "لیوسل",
                      "code": null,
                      "selected": false
                    },
                    "1575": {
                      "text": "الاستانه",
                      "code": null,
                      "selected": false
                    },
                    "1753": {
                      "text": "مداکرلیک",
                      "code": null,
                      "selected": false
                    },
                    "30018": {
                      "text": "اسکاچی",
                      "code": null,
                      "selected": false
                    },
                    "32429": {
                      "text": "بوکله",
                      "code": null,
                      "selected": false
                    },
                    "30017": {
                      "text": "پاراشوت",
                      "code": null,
                      "selected": false
                    },
                    "28141": {
                      "text": "حریر فلاور",
                      "code": null,
                      "selected": false
                    },
                    "30021": {
                      "text": "فانریپ",
                      "code": null,
                      "selected": false
                    },
                    "30016": {
                      "text": "کراش",
                      "code": null,
                      "selected": false
                    },
                    "30025": {
                      "text": "کرپ پرادا",
                      "code": null,
                      "selected": false
                    },
                    "30023": {
                      "text": "گلکسی",
                      "code": null,
                      "selected": false
                    },
                    "17338": {
                      "text": "نایلون تاسلون",
                      "code": null,
                      "selected": false
                    },
                    "28277": {
                      "text": "وال",
                      "code": null,
                      "selected": false
                    },
                    "30019": {
                      "text": "یاخما",
                      "code": null,
                      "selected": false
                    },
                    "34917": {
                      "text": "ابر و بادی",
                      "code": null,
                      "selected": false
                    },
                    "35368": {
                      "text": "ام دی اف",
                      "code": null,
                      "selected": false
                    },
                    "34843": {
                      "text": "بزیاق",
                      "code": null,
                      "selected": false
                    },
                    "34841": {
                      "text": "پاسفیک",
                      "code": null,
                      "selected": false
                    },
                    "37647": {
                      "text": "چرم گیاهی (وگن)",
                      "code": null,
                      "selected": false
                    },
                    "36718": {
                      "text": "داکرون پنبه",
                      "code": null,
                      "selected": false
                    },
                    "36717": {
                      "text": "دوشین",
                      "code": null,
                      "selected": false
                    },
                    "34568": {
                      "text": "ساتن ابریشم",
                      "code": null,
                      "selected": false
                    },
                    "34554": {
                      "text": "سیلک",
                      "code": null,
                      "selected": false
                    },
                    "35320": {
                      "text": "غواصی",
                      "code": null,
                      "selected": false
                    },
                    "34840": {
                      "text": "فاستونی",
                      "code": null,
                      "selected": false
                    },
                    "35739": {
                      "text": "کرپ آلیزه",
                      "code": null,
                      "selected": false
                    },
                    "34686": {
                      "text": "کرپ سافت",
                      "code": null,
                      "selected": false
                    },
                    "34842": {
                      "text": "کرپ فلور",
                      "code": null,
                      "selected": false
                    },
                    "33885": {
                      "text": "کرسپو",
                      "code": null,
                      "selected": false
                    },
                    "33005": {
                      "text": "مازاراتی",
                      "code": null,
                      "selected": false
                    },
                    "34373": {
                      "text": "مایع",
                      "code": null,
                      "selected": false
                    },
                    "37263": {
                      "text": "مرویجت",
                      "code": null,
                      "selected": false
                    },
                    "35059": {
                      "text": "ورنی",
                      "code": null,
                      "selected": false
                    },
                    "37951": {
                      "text": "پارچه حوله\u200Cای",
                      "code": null,
                      "selected": false
                    },
                    "38246": {
                      "text": "ترویرا",
                      "code": null,
                      "selected": false
                    },
                    "37955": {
                      "text": "سرب",
                      "code": null,
                      "selected": false
                    },
                    "38202": {
                      "text": "سلانیک",
                      "code": null,
                      "selected": false
                    },
                    "38662": {
                      "text": "شمعی",
                      "code": null,
                      "selected": false
                    },
                    "40375": {
                      "text": "الیزا",
                      "code": null,
                      "selected": false
                    },
                    "40408": {
                      "text": "کتان کریستال",
                      "code": null,
                      "selected": false
                    },
                    "40450": {
                      "text": "کرپ کنزو",
                      "code": null,
                      "selected": false
                    },
                    "51339": {
                      "text": "مروارید",
                      "code": null,
                      "selected": false
                    }
                  },
                  "hint": null
                },
                "160": {
                  "id": 160,
                  "title": "قد",
                  "code": null,
                  "postfix": null,
                  "unit": null,
                  "type": "select",
                  "required": true,
                  "value": null,
                  "values": {
                    "1007": {
                      "text": "زیر زانو",
                      "code": null,
                      "selected": false
                    },
                    "1006": {
                      "text": "زیر باسن",
                      "code": null,
                      "selected": false
                    },
                    "1002": {
                      "text": "بلند",
                      "code": null,
                      "selected": false
                    },
                    "1011": {
                      "text": "نیم تنه",
                      "code": null,
                      "selected": false
                    },
                    "1008": {
                      "text": "کوتاه",
                      "code": null,
                      "selected": false
                    },
                    "1003": {
                      "text": "روی باسن",
                      "code": null,
                      "selected": false
                    },
                    "1004": {
                      "text": "روی زانو",
                      "code": null,
                      "selected": false
                    },
                    "1005": {
                      "text": "روی کمر",
                      "code": null,
                      "selected": false
                    }
                  },
                  "hint": null
                },
                "200": {
                  "id": 200,
                  "title": "نحوه بسته شدن",
                  "code": null,
                  "postfix": null,
                  "unit": null,
                  "type": "select",
                  "required": true,
                  "value": null,
                  "values": {
                    "1307": {
                      "text": "دکمه مخفی",
                      "code": null,
                      "selected": false
                    },
                    "1303": {
                      "text": "جلو بسته",
                      "code": null,
                      "selected": false
                    },
                    "1302": {
                      "text": "جلو باز",
                      "code": null,
                      "selected": false
                    },
                    "1301": {
                      "text": "تک دکمه",
                      "code": null,
                      "selected": false
                    },
                    "1300": {
                      "text": "پنچ دکمه",
                      "code": null,
                      "selected": false
                    },
                    "1299": {
                      "text": "بیش از سه دکمه",
                      "code": null,
                      "selected": false
                    },
                    "1313": {
                      "text": "قزن",
                      "code": null,
                      "selected": false
                    },
                    "1763": {
                      "text": "حرارتی",
                      "code": null,
                      "selected": false
                    },
                    "1764": {
                      "text": "دوخت",
                      "code": null,
                      "selected": false
                    },
                    "1761": {
                      "text": "روبان",
                      "code": null,
                      "selected": false
                    },
                    "1762": {
                      "text": "قفل",
                      "code": null,
                      "selected": false
                    },
                    "1316": {
                      "text": "یکسره",
                      "code": null,
                      "selected": false
                    },
                    "1308": {
                      "text": "دکمه و زیپ",
                      "code": null,
                      "selected": false
                    },
                    "1312": {
                      "text": "سه دکمه",
                      "code": null,
                      "selected": false
                    },
                    "1298": {
                      "text": "بندی",
                      "code": null,
                      "selected": false
                    },
                    "1315": {
                      "text": "کمربند",
                      "code": null,
                      "selected": false
                    },
                    "1311": {
                      "text": "ساده",
                      "code": null,
                      "selected": false
                    },
                    "1306": {
                      "text": "دکمه",
                      "code": null,
                      "selected": false
                    },
                    "1314": {
                      "text": "کشی",
                      "code": null,
                      "selected": false
                    },
                    "1305": {
                      "text": "چهار دکمه",
                      "code": null,
                      "selected": false
                    },
                    "1310": {
                      "text": "زیپ",
                      "code": null,
                      "selected": false
                    },
                    "1304": {
                      "text": "چسبی",
                      "code": null,
                      "selected": false
                    },
                    "1309": {
                      "text": "دو دکمه",
                      "code": null,
                      "selected": false
                    },
                    "1765": {
                      "text": "گیره",
                      "code": null,
                      "selected": false
                    }
                  },
                  "hint": null
                },
                "196": {
                  "id": 196,
                  "title": "مورد استفاده",
                  "code": null,
                  "postfix": null,
                  "unit": null,
                  "type": "checkbox",
                  "required": true,
                  "value": null,
                  "values": {
                    "1280": {
                      "text": "اسپرت",
                      "code": null,
                      "selected": false
                    },
                    "1281": {
                      "text": "روزمره",
                      "code": null,
                      "selected": false
                    },
                    "1282": {
                      "text": "مهمانی",
                      "code": null,
                      "selected": false
                    }
                  },
                  "hint": null
                },
                "87": {
                  "id": 87,
                  "title": "جزئیات",
                  "code": null,
                  "postfix": null,
                  "unit": null,
                  "type": "text",
                  "required": false,
                  "value": null,
                  "values": [],
                  "hint": "می\u200Cتوانید جزییات ظاهری کالا را در این قسمت به صورت خلاصه وارد کنید."
                },
                "209": {
                  "id": 209,
                  "title": "نگهداری",
                  "code": null,
                  "postfix": null,
                  "unit": null,
                  "type": "text",
                  "required": false,
                  "value": null,
                  "values": [],
                  "hint": "در این قسمت می\u200Cتوانید شرایط نگهداری کالا را  ذکر کنید. مانند: نحوه شستشو"
                },
                "171": {
                  "id": 171,
                  "title": "کد کالای محصول",
                  "code": null,
                  "postfix": null,
                  "unit": null,
                  "type": "input",
                  "required": false,
                  "value": null,
                  "values": [],
                  "hint": null
                },
                "174": {
                  "id": 174,
                  "title": "کشور مبدا برند",
                  "code": null,
                  "postfix": null,
                  "unit": null,
                  "type": "select",
                  "required": false,
                  "value": null,
                  "values": {
                    "1106": {
                      "text": "اسکاتلند",
                      "code": null,
                      "selected": false
                    },
                    "1116": {
                      "text": "ایتالیا",
                      "code": null,
                      "selected": false
                    },
                    "1117": {
                      "text": "ایران",
                      "code": null,
                      "selected": false
                    },
                    "1118": {
                      "text": "برزیل",
                      "code": null,
                      "selected": false
                    },
                    "1119": {
                      "text": "برمه",
                      "code": null,
                      "selected": false
                    },
                    "1120": {
                      "text": "بلاروس",
                      "code": null,
                      "selected": false
                    },
                    "1103": {
                      "text": "اتریش",
                      "code": null,
                      "selected": false
                    },
                    "1121": {
                      "text": "بلژیک",
                      "code": null,
                      "selected": false
                    },
                    "1122": {
                      "text": "بلغارستان",
                      "code": null,
                      "selected": false
                    },
                    "1123": {
                      "text": "بنگلادش",
                      "code": null,
                      "selected": false
                    },
                    "1111": {
                      "text": "آلمان",
                      "code": null,
                      "selected": false
                    },
                    "1124": {
                      "text": "پاکستان",
                      "code": null,
                      "selected": false
                    },
                    "1125": {
                      "text": "پرتغال",
                      "code": null,
                      "selected": false
                    },
                    "1126": {
                      "text": "تایلند",
                      "code": null,
                      "selected": false
                    },
                    "1127": {
                      "text": "ترکمنستان",
                      "code": null,
                      "selected": false
                    },
                    "1128": {
                      "text": "ترکیه",
                      "code": null,
                      "selected": false
                    },
                    "1129": {
                      "text": "تونس",
                      "code": null,
                      "selected": false
                    },
                    "1130": {
                      "text": "چین",
                      "code": null,
                      "selected": false
                    },
                    "1131": {
                      "text": "دانمارک",
                      "code": null,
                      "selected": false
                    },
                    "1132": {
                      "text": "روسیه",
                      "code": null,
                      "selected": false
                    },
                    "1133": {
                      "text": "رومانی",
                      "code": null,
                      "selected": false
                    },
                    "1134": {
                      "text": "ژاپن",
                      "code": null,
                      "selected": false
                    },
                    "1135": {
                      "text": "سریلانکا",
                      "code": null,
                      "selected": false
                    },
                    "1136": {
                      "text": "سنگاپور",
                      "code": null,
                      "selected": false
                    },
                    "1137": {
                      "text": "سوئد",
                      "code": null,
                      "selected": false
                    },
                    "1107": {
                      "text": "اسلونی",
                      "code": null,
                      "selected": false
                    },
                    "1138": {
                      "text": "سوئیس",
                      "code": null,
                      "selected": false
                    },
                    "1139": {
                      "text": "صربستان",
                      "code": null,
                      "selected": false
                    },
                    "1140": {
                      "text": "فرانسه",
                      "code": null,
                      "selected": false
                    },
                    "1141": {
                      "text": "فنلاند",
                      "code": null,
                      "selected": false
                    },
                    "1142": {
                      "text": "فیلیپین",
                      "code": null,
                      "selected": false
                    },
                    "1143": {
                      "text": "قبرس",
                      "code": null,
                      "selected": false
                    },
                    "1144": {
                      "text": "کامبوج",
                      "code": null,
                      "selected": false
                    },
                    "1145": {
                      "text": "کانادا",
                      "code": null,
                      "selected": false
                    },
                    "1146": {
                      "text": "کره جنوبی",
                      "code": null,
                      "selected": false
                    },
                    "1147": {
                      "text": "کلمبیا",
                      "code": null,
                      "selected": false
                    },
                    "1148": {
                      "text": "گرجستان",
                      "code": null,
                      "selected": false
                    },
                    "1149": {
                      "text": "لیتوانی",
                      "code": null,
                      "selected": false
                    },
                    "1150": {
                      "text": "مالزی",
                      "code": null,
                      "selected": false
                    },
                    "1151": {
                      "text": "مراکش",
                      "code": null,
                      "selected": false
                    },
                    "1152": {
                      "text": "مصر",
                      "code": null,
                      "selected": false
                    },
                    "1153": {
                      "text": "مقدونیه",
                      "code": null,
                      "selected": false
                    },
                    "1154": {
                      "text": "مکزیک",
                      "code": null,
                      "selected": false
                    },
                    "1155": {
                      "text": "موزامبیک",
                      "code": null,
                      "selected": false
                    },
                    "1156": {
                      "text": "میانمار",
                      "code": null,
                      "selected": false
                    },
                    "1157": {
                      "text": "هلند",
                      "code": null,
                      "selected": false
                    },
                    "1158": {
                      "text": "هند",
                      "code": null,
                      "selected": false
                    },
                    "1159": {
                      "text": "هندوراس",
                      "code": null,
                      "selected": false
                    },
                    "1160": {
                      "text": "هنگ کنگ",
                      "code": null,
                      "selected": false
                    },
                    "1161": {
                      "text": "ویتنام",
                      "code": null,
                      "selected": false
                    },
                    "1162": {
                      "text": "یونان",
                      "code": null,
                      "selected": false
                    },
                    "1553": {
                      "text": "ماداگاسکار",
                      "code": null,
                      "selected": false
                    },
                    "1554": {
                      "text": "قرقیزستان",
                      "code": null,
                      "selected": false
                    },
                    "1555": {
                      "text": "مولداوی",
                      "code": null,
                      "selected": false
                    },
                    "1556": {
                      "text": "جزیره موریس",
                      "code": null,
                      "selected": false
                    },
                    "1557": {
                      "text": "توکلائو",
                      "code": null,
                      "selected": false
                    },
                    "1558": {
                      "text": "اردن",
                      "code": null,
                      "selected": false
                    },
                    "1559": {
                      "text": "دومینیکن",
                      "code": null,
                      "selected": false
                    },
                    "1104": {
                      "text": "اسپانیا",
                      "code": null,
                      "selected": false
                    },
                    "1560": {
                      "text": "تایوان",
                      "code": null,
                      "selected": false
                    },
                    "1561": {
                      "text": "لهستان",
                      "code": null,
                      "selected": false
                    },
                    "1112": {
                      "text": "آمریکا",
                      "code": null,
                      "selected": false
                    },
                    "1113": {
                      "text": "اندونزی",
                      "code": null,
                      "selected": false
                    },
                    "1108": {
                      "text": "آفریقای جنوبی",
                      "code": null,
                      "selected": false
                    },
                    "1105": {
                      "text": "استرالیا",
                      "code": null,
                      "selected": false
                    },
                    "1114": {
                      "text": "انگلستان",
                      "code": null,
                      "selected": false
                    },
                    "1109": {
                      "text": "اکراین",
                      "code": null,
                      "selected": false
                    },
                    "1110": {
                      "text": "آلبانی",
                      "code": null,
                      "selected": false
                    }
                  },
                  "hint": null
                },
                "173": {
                  "id": 173,
                  "title": "کشور تولید کننده",
                  "code": null,
                  "postfix": null,
                  "unit": null,
                  "type": "select",
                  "required": false,
                  "value": null,
                  "values": {
                    "1069": {
                      "text": "فیلیپین",
                      "code": null,
                      "selected": false
                    },
                    "1068": {
                      "text": "فنلاند",
                      "code": null,
                      "selected": false
                    },
                    "1079": {
                      "text": "گرجستان",
                      "code": null,
                      "selected": false
                    },
                    "1067": {
                      "text": "فرانسه",
                      "code": null,
                      "selected": false
                    },
                    "1066": {
                      "text": "صربستان",
                      "code": null,
                      "selected": false
                    },
                    "1065": {
                      "text": "سوئیس",
                      "code": null,
                      "selected": false
                    },
                    "1064": {
                      "text": "سوئد",
                      "code": null,
                      "selected": false
                    },
                    "1063": {
                      "text": "سریلانکا",
                      "code": null,
                      "selected": false
                    },
                    "1093": {
                      "text": "مولداوی",
                      "code": null,
                      "selected": false
                    },
                    "1102": {
                      "text": "یونان",
                      "code": null,
                      "selected": false
                    },
                    "1100": {
                      "text": "هنگ\u200Cکنگ",
                      "code": null,
                      "selected": false
                    },
                    "1099": {
                      "text": "هندوراس",
                      "code": null,
                      "selected": false
                    },
                    "1098": {
                      "text": "هند",
                      "code": null,
                      "selected": false
                    },
                    "1097": {
                      "text": "هلند",
                      "code": null,
                      "selected": false
                    },
                    "1096": {
                      "text": "هائیتی",
                      "code": null,
                      "selected": false
                    },
                    "1101": {
                      "text": "ویتنام",
                      "code": null,
                      "selected": false
                    },
                    "1095": {
                      "text": "نیکاراگوئه",
                      "code": null,
                      "selected": false
                    },
                    "1094": {
                      "text": "میانمار",
                      "code": null,
                      "selected": false
                    },
                    "1062": {
                      "text": "ژاپن",
                      "code": null,
                      "selected": false
                    },
                    "1092": {
                      "text": "موزامبیک",
                      "code": null,
                      "selected": false
                    },
                    "1072": {
                      "text": "قزاقستان",
                      "code": null,
                      "selected": false
                    },
                    "1091": {
                      "text": "موریس",
                      "code": null,
                      "selected": false
                    },
                    "1090": {
                      "text": "مکزیک",
                      "code": null,
                      "selected": false
                    },
                    "1089": {
                      "text": "مقدونیه",
                      "code": null,
                      "selected": false
                    },
                    "1076": {
                      "text": "کرواسی",
                      "code": null,
                      "selected": false
                    },
                    "1088": {
                      "text": "مصر",
                      "code": null,
                      "selected": false
                    },
                    "1087": {
                      "text": "مراکش",
                      "code": null,
                      "selected": false
                    },
                    "1086": {
                      "text": "مالزی",
                      "code": null,
                      "selected": false
                    },
                    "1085": {
                      "text": "ماداگاسکار",
                      "code": null,
                      "selected": false
                    },
                    "1084": {
                      "text": "لیتوانی",
                      "code": null,
                      "selected": false
                    },
                    "1028": {
                      "text": "اکراین",
                      "code": null,
                      "selected": false
                    },
                    "1041": {
                      "text": "بلژیک",
                      "code": null,
                      "selected": false
                    },
                    "1040": {
                      "text": "بلاروس",
                      "code": null,
                      "selected": false
                    },
                    "1039": {
                      "text": "برمه",
                      "code": null,
                      "selected": false
                    },
                    "1038": {
                      "text": "برزیل",
                      "code": null,
                      "selected": false
                    },
                    "1037": {
                      "text": "ایران",
                      "code": null,
                      "selected": false
                    },
                    "1036": {
                      "text": "ایتالیا",
                      "code": null,
                      "selected": false
                    },
                    "1034": {
                      "text": "انگلستان",
                      "code": null,
                      "selected": false
                    },
                    "1033": {
                      "text": "اندونزی",
                      "code": null,
                      "selected": false
                    },
                    "1030": {
                      "text": "السالوادور",
                      "code": null,
                      "selected": false
                    },
                    "1042": {
                      "text": "بلغارستان",
                      "code": null,
                      "selected": false
                    },
                    "1026": {
                      "text": "اسلونی",
                      "code": null,
                      "selected": false
                    },
                    "1025": {
                      "text": "اسکاتلند",
                      "code": null,
                      "selected": false
                    },
                    "1024": {
                      "text": "استرالیا",
                      "code": null,
                      "selected": false
                    },
                    "1023": {
                      "text": "اسپانیا",
                      "code": null,
                      "selected": false
                    },
                    "1022": {
                      "text": "اردن",
                      "code": null,
                      "selected": false
                    },
                    "1021": {
                      "text": "اتریش",
                      "code": null,
                      "selected": false
                    },
                    "1074": {
                      "text": "کانادا",
                      "code": null,
                      "selected": false
                    },
                    "1032": {
                      "text": "آمریکا",
                      "code": null,
                      "selected": false
                    },
                    "1031": {
                      "text": "آلمان",
                      "code": null,
                      "selected": false
                    },
                    "1029": {
                      "text": "آلبانی",
                      "code": null,
                      "selected": false
                    },
                    "1052": {
                      "text": "توکلائو",
                      "code": null,
                      "selected": false
                    },
                    "1061": {
                      "text": "رومانی",
                      "code": null,
                      "selected": false
                    },
                    "1060": {
                      "text": "روسیه",
                      "code": null,
                      "selected": false
                    },
                    "1059": {
                      "text": "دومینیکن",
                      "code": null,
                      "selected": false
                    },
                    "1058": {
                      "text": "دانمارک",
                      "code": null,
                      "selected": false
                    },
                    "1057": {
                      "text": "چین",
                      "code": null,
                      "selected": false
                    },
                    "1056": {
                      "text": "چک",
                      "code": null,
                      "selected": false
                    },
                    "1055": {
                      "text": "جزیره موریس",
                      "code": null,
                      "selected": false
                    },
                    "1054": {
                      "text": "جزایر تورکس و کایکوس",
                      "code": null,
                      "selected": false
                    },
                    "1053": {
                      "text": "تونس",
                      "code": null,
                      "selected": false
                    },
                    "1027": {
                      "text": "آفریقای جنوبی",
                      "code": null,
                      "selected": false
                    },
                    "1051": {
                      "text": "ترکیه",
                      "code": null,
                      "selected": false
                    },
                    "1050": {
                      "text": "ترکمنستان",
                      "code": null,
                      "selected": false
                    },
                    "1049": {
                      "text": "تایوان",
                      "code": null,
                      "selected": false
                    },
                    "1048": {
                      "text": "تایلند",
                      "code": null,
                      "selected": false
                    },
                    "1047": {
                      "text": "پرو",
                      "code": null,
                      "selected": false
                    },
                    "1046": {
                      "text": "پرتغال",
                      "code": null,
                      "selected": false
                    },
                    "1045": {
                      "text": "پاکستان",
                      "code": null,
                      "selected": false
                    },
                    "1044": {
                      "text": "بوسنی و هرزگوین",
                      "code": null,
                      "selected": false
                    },
                    "1082": {
                      "text": "لائوس",
                      "code": null,
                      "selected": false
                    },
                    "1043": {
                      "text": "بنگلادش",
                      "code": null,
                      "selected": false
                    },
                    "1073": {
                      "text": "کامبوج",
                      "code": null,
                      "selected": false
                    },
                    "1078": {
                      "text": "کلمبیا",
                      "code": null,
                      "selected": false
                    },
                    "1077": {
                      "text": "کشمیر",
                      "code": null,
                      "selected": false
                    },
                    "1083": {
                      "text": "لهستان",
                      "code": null,
                      "selected": false
                    },
                    "1081": {
                      "text": "گینه",
                      "code": null,
                      "selected": false
                    },
                    "1075": {
                      "text": "کره جنوبی",
                      "code": null,
                      "selected": false
                    },
                    "1080": {
                      "text": "گواتمالا",
                      "code": null,
                      "selected": false
                    },
                    "1071": {
                      "text": "قرقیزستان",
                      "code": null,
                      "selected": false
                    },
                    "1070": {
                      "text": "قبرس",
                      "code": null,
                      "selected": false
                    }
                  },
                  "hint": null
                }
              }
            }
          },
          "old_attribute_dimensions": null,
          "attribute_dimensions": null,
          "dimensions_attribute_postfix": null,
          "has_height": false,
          "dimensions_attribute": false,
          "weight_attribute": false,
          "weight_attribute_postfix": null,
          "weight_attribute_required": false,
          "weight_attribute_reasons": false,
          "weight_attribute_hint": "",
          "dimensions_attribute_required": false,
          "dimensions_attribute_hint": "",
          "dimension_attribute_multiplier": null,
          "weight_attribute_multiplier": null
        }
      }';
    }
}