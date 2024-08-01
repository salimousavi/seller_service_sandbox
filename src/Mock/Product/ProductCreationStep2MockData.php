<?php

namespace App\Mock\Product;

use App\Mock\AMock;
use App\Mock\AMockV2;

class ProductCreationStep2MockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "isValid": true,
          "errors": null,
          "bind": {
            "brands": [
              {
                "id": "10630",
                "text": "مانگو Mango",
                "title_fa": "مانگو",
                "title_en": "Mango",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/c004e8822da0589bd317ae70e84aa1ed596c8a06_1620821990.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1944",
                "text": "ریباک Reebok",
                "title_fa": "ریباک",
                "title_en": "Reebok",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/b1b801a41575e941255442bd5f7fd5f15f85e7a4_1620821751.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6611",
                "text": "آلدو Aldo",
                "title_fa": "آلدو",
                "title_en": "Aldo",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100010279.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1291",
                "text": "آدیداس Adidas",
                "title_fa": "آدیداس",
                "title_en": "Adidas",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/21b62a2b3489b7a452d393cde3d1e22a78a24aa7_1620821635.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1933",
                "text": "نایکی Nike",
                "title_fa": "نایکی",
                "title_en": "Nike",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/37116214d81bcb5d68dd0cf9548fa0974a4dd9a0_1620822000.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10633",
                "text": "اونلی Only",
                "title_fa": "اونلی",
                "title_en": "Only",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008193.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "9498",
                "text": "پی سز Pieces",
                "title_fa": "پی سز",
                "title_en": "Pieces",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/6712.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7670",
                "text": "جی اوکس Geox",
                "title_fa": "جی اوکس",
                "title_en": "Geox",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7013.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10631",
                "text": "جک اند جونز Jack and Jones",
                "title_fa": "جک اند جونز",
                "title_en": "Jack and Jones",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100010439.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10652",
                "text": "ایدکس Idexe",
                "title_fa": "ایدکس",
                "title_en": "Idexe",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008101.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10626",
                "text": "سوپردرای Superdry",
                "title_fa": "سوپردرای",
                "title_en": "Superdry",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008198.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10775",
                "text": "بلوکیدز Blukids",
                "title_fa": "بلوکیدز",
                "title_en": "Blukids",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008000.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10629",
                "text": "ارکسترا Orchestra",
                "title_fa": "ارکسترا",
                "title_en": "Orchestra",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008088.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10632",
                "text": "سلکتد Selected",
                "title_fa": "سلکتد",
                "title_en": "Selected",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008197.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10643",
                "text": "اتام Etam",
                "title_fa": "اتام",
                "title_en": "Etam",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008092.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "9894",
                "text": "اکسسورایز Accessorize",
                "title_fa": "اکسسورایز",
                "title_en": "Accessorize",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7176.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "719",
                "text": "متفرقه Miscellaneous",
                "title_fa": "متفرقه",
                "title_en": "Miscellaneous",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/d37a7e939b804659cfc1e6d88092a1b8ea8132d4_1603699076.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "5430",
                "text": "مایورال Mayoral",
                "title_fa": "مایورال",
                "title_en": "Mayoral",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/2720.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6020",
                "text": "فیلیپ پلین Philipp plein",
                "title_fa": "فیلیپ پلین",
                "title_en": "Philipp plein",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1832.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7149",
                "text": "چیبو Tchibo",
                "title_fa": "چیبو",
                "title_en": "Tchibo",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/92.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "4821",
                "text": "آلپاین پرو Alpine Pro",
                "title_fa": "آلپاین پرو",
                "title_en": "Alpine Pro",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1098.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "5301",
                "text": "سی ام پی CMP",
                "title_fa": "سی ام پی",
                "title_en": "CMP",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/907.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "5513",
                "text": "تارکان Tarkan",
                "title_fa": "تارکان",
                "title_en": "Tarkan",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1680.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7005",
                "text": "باینت Baynet",
                "title_fa": "باینت",
                "title_en": "Baynet",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/6121429b7133dafda8a035f21a4ad8c9352dddfc_1630338035.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7540",
                "text": "کارپیزا Carpisa",
                "title_fa": "کارپیزا",
                "title_en": "Carpisa",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4417.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7550",
                "text": "سولز Sols",
                "title_fa": "سولز",
                "title_en": "Sols",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4410.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7260",
                "text": "سیاوود Siawood",
                "title_fa": "سیاوود",
                "title_en": "Siawood",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4186.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6064",
                "text": "فرانکلین مارشال Franklin Marshall",
                "title_fa": "فرانکلین مارشال",
                "title_en": "Franklin Marshall",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1450.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7845",
                "text": "کی وان ایکس K1X",
                "title_fa": "کی وان ایکس",
                "title_en": "K1X",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4617.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "2064",
                "text": "اوکلی Oakley",
                "title_fa": "اوکلی",
                "title_en": "Oakley",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/3971.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7706",
                "text": "ارئا Errea",
                "title_fa": "ارئا",
                "title_en": "Errea",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7001.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6001",
                "text": "کریویت Crivit",
                "title_fa": "کریویت",
                "title_en": "Crivit",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/758.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7838",
                "text": "آریان نخ باف Arian Nakh Baf",
                "title_fa": "آریان نخ باف",
                "title_en": "Arian Nakh Baf",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4637.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "8403",
                "text": "آر اِن اِس RNS",
                "title_fa": "آر اِن اِس",
                "title_en": "RNS",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5249.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "8555",
                "text": "پول اند بیر Pull & Bear",
                "title_fa": "پول اند بیر",
                "title_en": "Pull & Bear",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5403.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "9535",
                "text": "گارودی Garoudi",
                "title_fa": "گارودی",
                "title_en": "Garoudi",
                "logo_id": "https://dkstatics-public-2.digikala.com/digikala-brands/100007873.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7534",
                "text": "پونتو بلانکو Punto Blanco",
                "title_fa": "پونتو بلانکو",
                "title_en": "Punto Blanco",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4207.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10648",
                "text": "سلیو Celio",
                "title_fa": "سلیو",
                "title_en": "Celio",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008175.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10640",
                "text": "دفکتو Defacto",
                "title_fa": "دفکتو",
                "title_en": "Defacto",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008082.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10653",
                "text": "تیفوسی Tiffosi",
                "title_fa": "تیفوسی",
                "title_en": "Tiffosi",
                "logo_id": "https://dkstatics-public-2.digikala.com/digikala-brands/100008252.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "4055",
                "text": "ال سی وایکیکی LC Waikiki",
                "title_fa": "ال سی وایکیکی",
                "title_en": "LC Waikiki",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/563edbc8ec3797296c8a87ebbd9e8fd5869726e2_1620821675.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6551",
                "text": "کوتون Koton",
                "title_fa": "کوتون",
                "title_en": "Koton",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/419b1e1d958aba941317c065809ec7a478021f79_1620821821.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10634",
                "text": "نیو لوک New Look",
                "title_fa": "نیو لوک",
                "title_en": "New Look",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100011428.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "2638",
                "text": "اس.اولیور S.Oliver",
                "title_fa": "اس.اولیور",
                "title_en": "S.Oliver",
                "logo_id": "https://dkstatics-public-2.digikala.com/digikala-brands/100007864.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10704",
                "text": "یونیتی Uniti",
                "title_fa": "یونیتی",
                "title_en": "Uniti",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008042.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "2101",
                "text": "آندر آرمور Under Armour",
                "title_fa": "آندر آرمور",
                "title_en": "Under Armour",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1764.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "8102",
                "text": "برکس Brax",
                "title_fa": "برکس",
                "title_en": "Brax",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4932.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10747",
                "text": "پاول اند شارک Paul and Shark",
                "title_fa": "پاول اند شارک",
                "title_en": "Paul and Shark",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008025.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10752",
                "text": "اونلی اند سانز Only and Sons",
                "title_fa": "اونلی اند سانز",
                "title_en": "Only and Sons",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008128.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10783",
                "text": "مینیموم Minimum",
                "title_fa": "مینیموم",
                "title_en": "Minimum",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100007956.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7468",
                "text": "دثار Desar",
                "title_fa": "دثار",
                "title_en": "Desar",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4263.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "476",
                "text": "پوما Puma",
                "title_fa": "پوما",
                "title_en": "Puma",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/2430.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10776",
                "text": "یوپیم Upim",
                "title_fa": "یوپیم",
                "title_en": "Upim",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100007962.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10811",
                "text": "جامه پوش آرا Jame Poosh Ara",
                "title_fa": "جامه پوش آرا",
                "title_en": "Jame Poosh Ara",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/9bb78379a50689ead3550cabb79ca2829aaeb722_1599980699.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1814",
                "text": "باس Boss",
                "title_fa": "باس",
                "title_en": "Boss",
                "logo_id": "https://dkstatics-public-2.digikala.com/digikala-brands/100007858.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "8629",
                "text": "تچر Tachar",
                "title_fa": "تچر",
                "title_en": "Tachar",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100012870.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10022",
                "text": "پپه جینز Pepe Jeans",
                "title_fa": "پپه جینز",
                "title_en": "Pepe Jeans",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7308.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7152",
                "text": "لیورجی Livergy",
                "title_fa": "لیورجی",
                "title_en": "Livergy",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7078ea79506daa592a5ce12e0d66148459c710d6_1623736737.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7561",
                "text": "یو اس پولو US POLO",
                "title_fa": "یو اس پولو",
                "title_en": "US POLO",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4404.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "4338",
                "text": "آراد Arad",
                "title_fa": "آراد",
                "title_en": "Arad",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/3663.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1304",
                "text": "اسپیدو Speedo",
                "title_fa": "اسپیدو",
                "title_en": "Speedo",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/3977.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6875",
                "text": "ساروک Sarook",
                "title_fa": "ساروک",
                "title_en": "Sarook",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/350.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7663",
                "text": "اچ اند ام H&M",
                "title_fa": "اچ اند ام",
                "title_en": "H&M",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/3a6ea0344caeaeb4eac463536f31734c72445ba3_1620821890.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "12933",
                "text": "شرافیت Sherafit",
                "title_fa": "شرافیت",
                "title_en": "Sherafit",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100009936.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1934",
                "text": "دیادورا Diadora",
                "title_fa": "دیادورا",
                "title_en": "Diadora",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100013878.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7859",
                "text": "موکارلو Mocarlo",
                "title_fa": "موکارلو",
                "title_en": "Mocarlo",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4690.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "13778",
                "text": "او وی اس OVS",
                "title_fa": "او وی اس",
                "title_en": "OVS",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100010831.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "2933",
                "text": "361 درجه 361 Degrees",
                "title_fa": "361 درجه",
                "title_en": "361 Degrees",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100010706.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "13287",
                "text": "کالینز Colins",
                "title_fa": "کالینز",
                "title_en": "Colins",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/89c89df1602a8962418650f06d4f4b30091bc415_1620821794.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6753",
                "text": "اسپرینگ فیلد Springfield",
                "title_fa": "اسپرینگ فیلد",
                "title_en": "Springfield",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/426.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "14473",
                "text": "کورتفیل Cortefiel",
                "title_fa": "کورتفیل",
                "title_en": "Cortefiel",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100011557.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "14883",
                "text": "جندقی Jandaqi",
                "title_fa": "جندقی",
                "title_en": "Jandaqi",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100011998.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7278",
                "text": "دالی Dalli",
                "title_fa": "دالی",
                "title_en": "Dalli",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4105.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "2085",
                "text": "تامی Tomy",
                "title_fa": "تامی",
                "title_en": "Tomy",
                "logo_id": ""
              },
              {
                "id": "14887",
                "text": "نرگس طافی Narges Tafi",
                "title_fa": "نرگس طافی",
                "title_en": "Narges Tafi",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100012001.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10265",
                "text": "نامدارز Namdarz",
                "title_fa": "نامدارز",
                "title_en": "Namdarz",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7565.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "15805",
                "text": "آرمانی اکسچنج Armani Exchange",
                "title_fa": "آرمانی اکسچنج",
                "title_en": "Armani Exchange",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100013021.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "15244",
                "text": "مَک mc",
                "title_fa": "مَک",
                "title_en": "mc",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100012369.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10400",
                "text": "دیوایدد Divided",
                "title_fa": "دیوایدد",
                "title_en": "Divided",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7699.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "15794",
                "text": "جی ووا Givova",
                "title_fa": "جی ووا",
                "title_en": "Givova",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100013010.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "462",
                "text": "اسپریت Esprit",
                "title_fa": "اسپریت",
                "title_en": "Esprit",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5725.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "17292",
                "text": "سون فارست Seven Forests",
                "title_fa": "سون فارست",
                "title_en": "Seven Forests",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100014592.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10625",
                "text": "دبنهامز Debenhams",
                "title_fa": "دبنهامز",
                "title_en": "Debenhams",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008070.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "17199",
                "text": "جی بی سی JBC",
                "title_fa": "جی بی سی",
                "title_en": "JBC",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100014498.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "17852",
                "text": "استارت Start",
                "title_fa": "استارت",
                "title_en": "Start",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100015160.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "4121",
                "text": "مل اند موژ Mel and Moj",
                "title_fa": "مل اند موژ",
                "title_en": "Mel and Moj",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5e1218cc3213274c270b7b03e13277719a6ed8fa_1627295055.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1448",
                "text": "دیزل DIESEL",
                "title_fa": "دیزل",
                "title_en": "DIESEL",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/558843a8bba212009b986b9337be7d6905c19029_1612943064.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "11051",
                "text": "کیابی Kiabi",
                "title_fa": "کیابی",
                "title_en": "Kiabi",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008117.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "20900",
                "text": "کوی KOI",
                "title_fa": "کوی",
                "title_en": "KOI",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/519567026a4d363572a51b406f4cb756b0ffd19e_1607946758.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "8310",
                "text": "امپریو آرمانی Emporio Armani",
                "title_fa": "امپریو آرمانی",
                "title_en": "Emporio Armani",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5153.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "20432",
                "text": "ادورا Adora",
                "title_fa": "ادورا",
                "title_en": "Adora",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/a078c1db9574e8ee14b36ef5eff81ffe941507df_1606138772.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "21822",
                "text": "سولا Sola",
                "title_fa": "سولا",
                "title_en": "Sola",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/25ae9fd3933d410b5c11c5e4587706e867bfaf34_1612160546.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "20091",
                "text": "نست کیدز Nestkids",
                "title_fa": "نست کیدز",
                "title_en": "Nestkids",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1426972a19a2bf4808c885c6f919b065e20996ce_1604823307.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "17161",
                "text": "آی ان سی .Inc",
                "title_fa": "آی ان سی",
                "title_en": ".Inc",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100014459.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "18631",
                "text": "هومنیتی Whomanity",
                "title_fa": "هومنیتی",
                "title_en": "Whomanity",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/855a9cfefe9f4ec4a50ded34756a791df6b91d47_1596960787.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "4976",
                "text": "کوئیک سیلور Quiksilver",
                "title_fa": "کوئیک سیلور",
                "title_en": "Quiksilver",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1056.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6002",
                "text": "کرین Crane",
                "title_fa": "کرین",
                "title_en": "Crane",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1499.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "20764",
                "text": "استریت آپ STRAIGHT UP",
                "title_fa": "استریت آپ",
                "title_en": "STRAIGHT UP",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7bd8edbebecd5c572fe2c3d9bacbb53af2ca6a27_1607430438.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7716",
                "text": "واتسون Watson",
                "title_fa": "واتسون",
                "title_en": "Watson",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/6993.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "13821",
                "text": "الایو Alive",
                "title_fa": "الایو",
                "title_en": "Alive",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100010874.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1417",
                "text": "لوچیانو Luciano",
                "title_fa": "لوچیانو",
                "title_en": "Luciano",
                "logo_id": ""
              },
              {
                "id": "9892",
                "text": "پاتن جامه Patan Jameh",
                "title_fa": "پاتن جامه",
                "title_en": "Patan Jameh",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/f8fb7477fd2b5f84362ba3be122faa674a9b23be_1643636439.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "17306",
                "text": "آرمانی جینز Armani Jeans",
                "title_fa": "آرمانی جینز",
                "title_en": "Armani Jeans",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100014606.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "18107",
                "text": "لیلیان مد Lilian Mode",
                "title_fa": "لیلیان مد",
                "title_en": "Lilian Mode",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7d482351613cf8efce9bb85a024cca06dc105893_1610276481.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1953",
                "text": "سالومون Salomon",
                "title_fa": "سالومون",
                "title_en": "Salomon",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100013867.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "23374",
                "text": "ان سی نو Encino",
                "title_fa": "ان سی نو",
                "title_en": "Encino",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/aee3e99e16dde08d5f3a05291ac4dcbac2d66963_1620222389.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6337",
                "text": "گیادا Giada",
                "title_fa": "گیادا",
                "title_en": "Giada",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1236.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "18299",
                "text": "بلو موشن Blue Motion",
                "title_fa": "بلو موشن",
                "title_en": "Blue Motion",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/c22de8918d71bb9fcc12375809cf0dfd5f3af5a3_1595051836.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "21532",
                "text": "جی تی هوگرو Gt Hugero",
                "title_fa": "جی تی هوگرو",
                "title_en": "Gt Hugero",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/b97a05ef4c923f9fbbff6e529c22cc2b2cf76957_1610794831.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "24089",
                "text": "چپس CHAPS",
                "title_fa": "چپس",
                "title_en": "CHAPS",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/c22d3cdb65b730c591f035732e3d4f9db9b9015b_1623747107.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "2428",
                "text": "رنگلر Wrangler",
                "title_fa": "رنگلر",
                "title_en": "Wrangler",
                "logo_id": ""
              },
              {
                "id": "22307",
                "text": "پیاتزا ایتالیا piazza italia",
                "title_fa": "پیاتزا ایتالیا",
                "title_en": "piazza italia",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/e05415b73cc30e266c527401f2bf38ee5cef2d51_1614411407.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "2102",
                "text": "کلمبیا Columbia",
                "title_fa": "کلمبیا",
                "title_en": "Columbia",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/2988.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10748",
                "text": "بادی اسپینر Body Spinner",
                "title_fa": "بادی اسپینر",
                "title_en": "Body Spinner",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008117.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "20397",
                "text": "اینساید inside",
                "title_fa": "اینساید",
                "title_en": "inside",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/cb7ba2c3f2023e2d465c7d42a8b0306a7fa4ad0a_1606031990.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "14059",
                "text": "ریزرود Reserved",
                "title_fa": "ریزرود",
                "title_en": "Reserved",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100011134.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "16091",
                "text": "نکست next",
                "title_fa": "نکست",
                "title_en": "next",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100013308.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7033",
                "text": "درسمن Dressmann",
                "title_fa": "درسمن",
                "title_en": "Dressmann",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/192.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "9500",
                "text": "مارکس اند اسپنسر Marks And Spencer",
                "title_fa": "مارکس اند اسپنسر",
                "title_en": "Marks And Spencer",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/6714.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "13731",
                "text": "کوبوس Cubus",
                "title_fa": "کوبوس",
                "title_en": "Cubus",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100010784.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "29536",
                "text": "کمپ دیوید CAMP DAVID",
                "title_fa": "کمپ دیوید",
                "title_en": "CAMP DAVID",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/fb8ad71414517e3d8ea7cefc0261f7ce587cbf25_1629535621.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "21910",
                "text": "سولوگناک SOLOGNAC",
                "title_fa": "سولوگناک",
                "title_en": "SOLOGNAC",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/fcc015caf4dc1d22aa3443822f0240d960fdf80b_1612598184.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "17547",
                "text": "مساوات Mosawat",
                "title_fa": "مساوات",
                "title_en": "Mosawat",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100014848.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "14118",
                "text": "واتسونز Watsons",
                "title_fa": "واتسونز",
                "title_en": "Watsons",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100011192.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "14891",
                "text": "سی اند ای C&A",
                "title_fa": "سی اند ای",
                "title_en": "C&A",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100012006.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "18228",
                "text": "کانی راش Kani Rush",
                "title_fa": "کانی راش",
                "title_en": "Kani Rush",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/06f8316da373a2748fa420d010703b21ae1b7cff_1594626243.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "30317",
                "text": "والدشوتز Waldschütz",
                "title_fa": "والدشوتز",
                "title_en": "Waldschütz",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/c975c3bcd97dfdc15a830558d11aeb07c65ef2a0_1633187294.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "23842",
                "text": "بوهومن boohooMAN",
                "title_fa": "بوهومن",
                "title_en": "boohooMAN",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/3f1d83ce4b9d662785498939bf8cae79026853b6_1622627865.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "30658",
                "text": "پارکساید parkside",
                "title_fa": "پارکساید",
                "title_en": "parkside",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/32965bda738b1f1ad6cf0335e974d6570b1d60e4_1635166101.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "9985",
                "text": "تامی هیلفیگر Tommy Hilfiger",
                "title_fa": "تامی هیلفیگر",
                "title_en": "Tommy Hilfiger",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7271.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "22009",
                "text": "جورج George",
                "title_fa": "جورج",
                "title_en": "George",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1e7fbf61705224975b610690b97f507835c2452d_1612878980.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "30551",
                "text": "تام اند رز TOM & ROSE",
                "title_fa": "تام اند رز",
                "title_en": "TOM & ROSE",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/ce50cc22e38a74dab9be7a78ee6072803db6ae72_1634484482.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "30393",
                "text": "دانمور dunmore",
                "title_fa": "دانمور",
                "title_en": "dunmore",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/241d1ef896bc6af1ce3e509502a78818d9cb8e71_1633760256.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "8335",
                "text": "لیوایز Levi",
                "title_fa": "لیوایز",
                "title_en": "Levi",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5179.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "12622",
                "text": "دنیم Denim",
                "title_fa": "دنیم",
                "title_en": "Denim",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100009626.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "17362",
                "text": "هالیدی Holiday",
                "title_fa": "هالیدی",
                "title_en": "Holiday",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100014662.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "17046",
                "text": "کیکی رایکی Kikiriki",
                "title_fa": "کیکی رایکی",
                "title_en": "Kikiriki",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/02ffbe428c114595e445e53fa36d59860468bf88_1594023772.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10973",
                "text": "کروم CORUM",
                "title_fa": "کروم",
                "title_en": "CORUM",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008030.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1075",
                "text": "کاترپیلار CAT",
                "title_fa": "کاترپیلار",
                "title_en": "CAT",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5932.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "13005",
                "text": "تونی مونتانا tony montana",
                "title_fa": "تونی مونتانا",
                "title_en": "tony montana",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100010013.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "34839",
                "text": "یوکی Uki",
                "title_fa": "یوکی",
                "title_en": "Uki",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/10671759ebcd765859b996f5995d7c69ea88ff41_1660030965.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "18573",
                "text": "میس نگار miss negar",
                "title_fa": "میس نگار",
                "title_en": "miss negar",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4f792b42ec662dfd3090a5a435a5d6b7baa4dee2_1596458346.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "29528",
                "text": "اکستمپوری EXTEMPORE",
                "title_fa": "اکستمپوری",
                "title_en": "EXTEMPORE",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/dafff5fdc937281b2c2a0cd055383de2481bd0aa_1629208845.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "22552",
                "text": "جوتی جینز Jooti jeans",
                "title_fa": "جوتی جینز",
                "title_en": "Jooti jeans",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/ec2e6cf37c51f96855ec807e11e1da5a0bed2b13_1615387490.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "31063",
                "text": "مالدینی Maldini",
                "title_fa": "مالدینی",
                "title_en": "Maldini",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/de9ba5ee9ebc17a9111fad1d276ead56a40430eb_1636977434.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "2768",
                "text": "تیمبرلند Timberland",
                "title_fa": "تیمبرلند",
                "title_en": "Timberland",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100013860.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "21650",
                "text": "سسیل CECIL",
                "title_fa": "سسیل",
                "title_en": "CECIL",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/c40b763f80b2fa1f51d82386aa4e02f11e337aa8_1611403457.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "15298",
                "text": "مکس Max",
                "title_fa": "مکس",
                "title_en": "Max",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100012495.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10778",
                "text": "باس اورنج Boss Orange",
                "title_fa": "باس اورنج",
                "title_en": "Boss Orange",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100007976.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10806",
                "text": "متی Motee",
                "title_fa": "متی",
                "title_en": "Motee",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008279.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10502",
                "text": "درفش Darafsh",
                "title_fa": "درفش",
                "title_en": "Darafsh",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7801.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6721",
                "text": "وین اند وین Win and Win",
                "title_fa": "وین اند وین",
                "title_en": "Win and Win",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/411.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "32487",
                "text": "اورجینال مارینز orginal marines",
                "title_fa": "اورجینال مارینز",
                "title_en": "orginal marines",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/09c27c7ac6e45d3d8ed4f949a7db961485165b7f_1643807565.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10515",
                "text": "آنکل سم Uncle Sam",
                "title_fa": "آنکل سم",
                "title_en": "Uncle Sam",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7814.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "38675",
                "text": "مامی دوز Mami Dooz",
                "title_fa": "مامی دوز",
                "title_en": "Mami Dooz",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/e508029b13e819486fcabd62ad65e89228d89efc_1687615810.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "35040",
                "text": "کیو اس Q/S",
                "title_fa": "کیو اس",
                "title_en": "Q/S",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/54adce8dbc5e4edefde715b40ccd84f94441a55c_1661152998.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "9217",
                "text": "جیمو Gemo",
                "title_fa": "جیمو",
                "title_en": "Gemo",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/6424.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "40232",
                "text": "ویکدی WEEKDAY",
                "title_fa": "ویکدی",
                "title_en": "WEEKDAY",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/657179b137eb9d525a382ce7ec278215198babad_1694251932.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "43261",
                "text": "لیلاژ leylazh",
                "title_fa": "لیلاژ",
                "title_en": "leylazh",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/c8ac25e194fce3b03a4fd6c3a7a25acdf28f4316_1706972904.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "44872",
                "text": "هیژا مد Hija mode",
                "title_fa": "هیژا مد",
                "title_en": "Hija mode",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5932d6fad846e6727309c3aed4b4333abd21179a_1717241630.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "23478",
                "text": "ایزی دو Easydo",
                "title_fa": "ایزی دو",
                "title_en": "Easydo",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/c95593eef0e707167459036b178ac095cb53881d_1620727356.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "45741",
                "text": "بلونیل Bluenil",
                "title_fa": "بلونیل",
                "title_en": "Bluenil",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/ac8b47034ba6b85c59dc266b24cfbf016be74732_1720894420.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "8802",
                "text": "زی سا ZIsa",
                "title_fa": "زی سا",
                "title_en": "ZIsa",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/a8dc990f30f0e25199b37b145e18a37bf61c7b6c_1632915975.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6950",
                "text": "نوزده نودیک 1991",
                "title_fa": "نوزده نودیک",
                "title_en": "1991",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4bc20a51e90a6323528c3e16f1d45713e48d40bd_1629019174.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              }
            ],
            "category_product_types": [
              {
                "value": "22483",
                "text": "شلوارک"
              }
            ],
            "product_classes": [
              {
                "value": "19",
                "text": "آرجی\u200Cبی RGB"
              },
              {
                "value": "7",
                "text": "ارگانیک Organic"
              },
              {
                "value": "2",
                "text": "بادوام Durable"
              },
              {
                "value": "15",
                "text": "بدون مواد بی پی ای BPA-free"
              },
              {
                "value": "10",
                "text": "تولید محدود Limited Edition"
              },
              {
                "value": "14",
                "text": "دست مهر powerful-hand"
              },
              {
                "value": "11",
                "text": "سایز بزرگ Plus Size"
              },
              {
                "value": "4",
                "text": "سرویس Service"
              },
              {
                "value": "12",
                "text": "ضد آب Water Resistant"
              },
              {
                "value": "13",
                "text": "فرش دیجی کالا Fresh By Digikala"
              },
              {
                "value": "6",
                "text": "فله Bunch"
              },
              {
                "value": "16",
                "text": "قابلیت تنظیم سرعت Speed-Control"
              },
              {
                "value": "1",
                "text": "مایعات Liquids"
              },
              {
                "value": "20",
                "text": "مبلغ قابل\u200Cتغییر است eGift"
              },
              {
                "value": "18",
                "text": "مخصوص بازی Gaming"
              },
              {
                "value": "3",
                "text": "مصرفی Consumable"
              },
              {
                "value": "5",
                "text": "مصرفی بادوام Durable Consumable"
              },
              {
                "value": "8",
                "text": "منجمد Frozen"
              },
              {
                "value": "9",
                "text": "های کپی high copy"
              },
              {
                "value": "17",
                "text": "هوشمند Smart"
              }
            ],
            "divisions": [
              {
                "value": "350",
                "text": "شلوارک"
              }
            ],
            "guideline": {
              "category_selection": {
                "video": null,
                "short_description": "برای انتخاب گروه، لطفا نمونه مشابه کالای خود را در سایت دیجیکالا جست و جو کنید و چنانچه کالای یافت شده با کالایی که قصد درج آن را دارید یکسان بود، همان گروه را برای درج کالا انتخاب کنید."
              },
              "product_info": {
                "video": null,
                "short_description": "",
                "items": [
                  {
                    "title": "نشان غیراصل",
                    "content": "<p>اصالت کالا (نشان غیر اصل): اگر روی کالا برندی وجود دارد که آن محصول توسط آن برند تولید نشده است، باید از نشان غیر اصل استفاده کنید. اگرروی کالا هیچ برندی وجود ندارد، نباید از نشان غیر اصل استفاده کرد و محصول را با برند متفرقه درج کنید.<br />\r\n<br />\r\n1- اگر محصول غیراصل است و از نشان غیر اصل استفاده می&zwnj;کنید، نباید هیچ برندی در عنوان کالا ذکر شود.<br />\r\n2- اگر کالایی نشان غیر اصل نداشته باشد به معنای این است که آن کالا اصل و تولید شده توسط آن برند است. اگر روی این کالا، کالای فیک بفروشید، مشمول جریمه خواهید شد. برای اطلاع بیشتر به این <a href=\"https://selleracademy.digikala.com/%D9%81%D8%B1%D9%88%D8%B4-%DA%A9%D8%A7%D9%84%D8%A7%DB%8C-%D8%BA%DB%8C%D8%B1%D8%A7%D8%B5%D9%84-%D8%AF%D8%B1-%D8%AF%DB%8C%D8%AC%DB%8C%e2%80%8c%DA%A9%D8%A7%D9%84%D8%A7/\" target=\"_blank\">لینک</a> مراجعه کنید.<br />\r\n&nbsp;</p>"
                  },
                  {
                    "title": "برند کالا",
                    "content": "<p>اطمینان حاصل کنید که برند انتخاب شده در فیلد برند، دقیقا برند کالایی است که قصد فروش آن را دارید. برند مورد نظر شما باید در همان گروه کالایی که قصد درج کالا را دارید، ثبت شده باشد.<br />\r\n<br />\r\nاگر برندی برای کالای خود انتخاب می کنید، آن برند باید روی حداقل یکی از تصاویر کالا درتصاویرآلبوم وجود داشته باشد، چنانچه در تصاویر کالا برند دیده نشود و شما در فیلد برند، برندی برای کالا انتخاب کرده باشید، کالا رد می شود.<br />\r\n<br />\r\nاگر کالای شما تولید شده توسط برند اصلی است، باید برند محصول را در فیلد برند انتخاب کنید اگر برند شما در لیست برندهای موجود نبود گزینه درخواست ایجاد برند جدید را انتخاب کنید و اقدام به ثبت برند خود کنید. آموزش درخواست برند جدید در این <a href=\"https://selleracademy.digikala.com/%D8%AF%D8%B1%D8%AE%D9%88%D8%A7%D8%B3%D8%AA-%D8%A7%DB%8C%D8%AC%D8%A7%D8%AF-%D8%A8%D8%B1%D9%86%D8%AF/\" target=\"_blank\">لینک</a> موجود است.<br />\r\n<br />\r\nاگر روی کالای شما هیچ برندی وجود ندارد، باید برند &quot;متفرقه&quot; را انتخاب کنید.</p>\r\n\r\n<p><strong>نکته: برندی که در نام کالا و فیلد برند استفاده شده ، باید روی کالا چاپ یا به صورت لیبل قابل مشاهده باشد (برند روی جعبه&nbsp; و یا بسته بندی و یا اتکیت به تنهایی قابل قبول نیست).&nbsp;</strong></p>\r\n\r\n<p><strong>اگر برند شما ثبت نشده و در لیست برندهای موجود نیست باید برند متفرقه را انتخاب کنید، در این حالت در صورت اجباری بودن استفاده از نام گذاری خودکار(در گام چهارم)، در عنوان کالا، برندی نمایش داده نمی شود و در صورت تمایل باید برند خود را ثبت کنید.</strong></p>"
                  },
                  {
                    "title": "نوع کالا",
                    "content": "<p>در هنگام انتخاب نوع کالا تنها مواردی رو انتخاب کنید که به کالای شما مربوط است. اگر موارد بی ربط به کالا را انتخاب کنید کالا رد می شود.</p>"
                  },
                  {
                    "title": "مدل کالا",
                    "content": "<p>از این قسمت در سیستم نامگذاری خودکار استفاده می شود.حتما دقت کنید اگر روی کالا یا بسته بندی مدلی وجود دارد، باید دقیقا همان مدل در این قسمت و عنوان کالا نوشته شود.<br />\r\nلطفا توجه کنید اگر موارد زیر را در قسمت مدل کالا رعایت نکنید کالای شما رد می شود:<br />\r\n<br />\r\n1- در این قسمت به هیچ عنوان کلمه &quot;مدل&quot; را ننویسید. (کلمه مدل در عنوان پیشنهادی به صورت خودکار اضافه خواهد شد)<br />\r\n2- اگر کالای شما دارای مدل، کد و سری بود ابتدا تنها مدل کالا را بنویسید و سپس با ذکر کلمات کد و سری، کد و سری کالا را بنویسید.<br />\r\nمثال:<br />\r\nعنوان کالا:<br />\r\nعینک آفتابی ری بن مدل 01 کد 02 سری 03<br />\r\nچیزی که باید در قسمت مدل وارد کنید:<br />\r\n01 کد 02 سری 03<br />\r\n&nbsp;</p>"
                  },
                  {
                    "title": "دسته بندی کالا",
                    "content": "<p>در گام دوم درج کالا، قسمت دسته بندی مربوط به ماهیت کالا در عنوان کالا است.<br />\r\n<br />\r\nاگر در این قسمت ماهیت کالای خود را پیدا نکردید، درخواست اضافه شدن این دسته بندی را با ثبت تیکت از طریق فرم &quot;تماس با ما&quot; برای واحد LQA ارسال کنید.</p>"
                  },
                  {
                    "title": "ابعاد و وزن بسته بندی",
                    "content": "<p>در این قسمت شما باید ابعاد بسته بندی کالا را که قرار است به انبار ارسال شود، به سانتی متر و همچنین وزن کالا را باید به گرم بنویسید.<br />\r\n<br />\r\nابعاد و وزن در این قسمت، روی سایت نمایش داده نمی شود و تنها برای انبار قابل مشاهده است.<br />\r\n<br />\r\nحتما دقت کنید که ابعاد و وزن بسته بندی را به درستی وارد کنید.<br />\r\n&nbsp;</p>"
                  },
                  {
                    "title": "شرح کالا",
                    "content": "<p>اگر تمایلی ندارید برای کالای خود شرح بنویسید در این قسمت اصلا چیزی ننویسید. اما اگر قصد دارید برای کالا شرح بنویسید باید نکات زیر را رعایت کنید، در غیر این صورت کالای شما رد خواهد شد.<br />\r\nلطفا توجه کنید اگر موارد زیر را درشرح کالا رعایت نکنید کالای شما رد می شود:<br />\r\n<br />\r\n1- در شرح کالا نباید نام فروشگاه، قیمت، گارانتی، ضمانت نامه و نام برند نامرتبط به کالای خود را بنویسید.<br />\r\n2- املا و نگارش کلمات باید صحیح باشد و هیچ غلط املایی در آن وجود نداشته باشد.<br />\r\n3- اطلاعات موجود در شرح کالا نباید با مشخصات و ویژگی&zwnj;های کالا مغایرت داشته باشد.<br />\r\n4- در شرح نویسی باید از جملات پیوسته استفاده کنید و اگر از عبارت های کوتاه در هر سطر با علامت گذاری (شماره، نقطه،خط فاصله) استفاده کنید کالا به دلیل شرح نامناسب رد خواهد شد.<br />\r\n<br />\r\nبرای اطلاعات بیشتر در باره&zwnj;ی نحوه&zwnj;ی درست نگارش شرح کالا به لینک زیر مراجعه کنید:<br />\r\n<a href=\"https://selleracademy.digikala.com/%DA%86%DA%AF%D9%88%D9%86%D9%87-%D8%B4%D8%B1%D8%AD-%DA%A9%D8%A7%D9%84%D8%A7-%D8%A8%D9%86%D9%88%DB%8C%D8%B3%DB%8C%D9%85/\" target=\"_blank\">رابطه&zwnj;ی یک شرح خوب با فروش کالا (چگونه شرح بنویسیم؟</a>)</p>"
                  },
                  {
                    "title": "نقاط ضعف و قوت کالا",
                    "content": "<p>اگر تمایلی ندارید برای کالای خود نقاط ضعف و قوت بنویسید در این قسمت اصلا چیزی ننویسید. اما اگر قصد دارید برای کالا نقاط ضعف و قوت بنویسید باید نکات زیر را رعایت کنید، در غیر این صورت کالای شما رد خواهد شد:<br />\r\n<br />\r\n1- در نقاط قوت و نقاط ضعف باید از عبارت&zwnj;های بدون فعل و کوتاه استفاده کنید. (مانند: وزن کم، فلزی، طول عمر بالای باتری و &hellip;)<br />\r\n2- قبل و بعد از جمله نباید از علامت (نقطه ، خط فاصله و&hellip;) استفاده کنید.<br />\r\n3- در نقاط قوت و نقاط ضعف نباید از نوع گارانتی و قیمت کالا صحبت کنید.<br />\r\n4- نقاط قوت و نقاط ضعف نباید سلیقه&zwnj;ای باشد، به&zwnj; عنوان مثال &ldquo;طراحی زیبا&rdquo; یا &quot;به صرفه&quot; ، جز نقاط قوت محصول نیست.<br />\r\n5- در نقاط قوت و نقاط ضعف ویژگی یا تکنولوژی&zwnj;های برتر نسبت به کالاهای مشابه را ثبت کنید.<br />\r\n&nbsp;</p>"
                  }
                ]
              },
              "attributes": {
                "video": null,
                "short_description": "",
                "items": [
                  {
                    "title": "مشخصات فنی نوشتاری",
                    "content": "<p>لطفا در هنگام نوشتن مشخصات فنی، به نکات زیر دقت کنید:<br />\r\n<br />\r\n1- تمام مشخصات فنی ذکر شده در این قسمت باید با مشخصات کالا در تصاویر، عنوان و شرح کالا یکسان باشد در صورت مغایرت این اطلاعات با هم، کالای شما در زمان بررسی رد می شود.<br />\r\n2- مشخصات فنی وارد شده باید دقیقا مطابق با کالایی باشد که بفروش میرسانید و در صورت هر گونه مغایرت، کالا به این دلیل مرجوع و فروشنده جریمه می شود.<br />\r\n3- املا و نگارش کلمات باید صحیح باشد و هیچ غلط املایی در آن وجود نداشته باشد.<br />\r\n4- در مشخصات فنی نباید نام فروشگاه، قیمت و گارانتی کالا را بنویسید.<br />\r\n5- مشخصات فنی، مشخصات دقیقی هستند، بنابراین نباید از عبارات تبلیغاتی و سلیقه ای استفاده کنید.<br />\r\nمثال: عمر مفید زیاد، ظاهر زیبا و...<br />\r\n6- اگر مشخصه ی فنی دارای واحد اندازه گیری است، حتما از مطابقت این عدد با واحد اندازه گیری اطمینان حاصل کنید. در صورت مغایرت، احتمال مرجوع شدن کالا زیاد است.<br />\r\n7- چنانچه کالای درج شده، چند پارچه یا چند تکه است باید مشخصات فنی تمام اجزا را در مشخصات کالا ذکر کنید.<br />\r\n&nbsp;</p>"
                  },
                  {
                    "title": "مشخصات فنی انتخابی",
                    "content": "<p>در قسمت هایی از مشخصات فنی که اطلاعات را باید در آن انتخاب کرد، به موارد زیر دقت کنید:<br />\r\n<br />\r\n1- اطمینان حاصل کنید که تمام مشخصات فنی ذکر شده در این قسمت با مشخصات کالا در تصاویر، عنوان و شرح کالا یکسان باشد در غیر این صورت، کالا در زمان بررسی رد می شود.<br />\r\n2- مشخصات فنی وارد شده باید دقیقا مطابق با کالایی باشد که بفروش میرسانید و در صورت هر گونه مغایرت، کالا به این دلیل مرجوع و فروشنده جریمه می شود.<br />\r\n3- اگر در این قسمت ها، گزینه ای مربوط به مشخصات کالای شما وجود نداشت، از طریق فرم &quot;تماس با ما&quot; به واحد LQA اطلاع دهید تا این گزینه به مشخصات فنی گروه مورد نظر اضافه شود.<br />\r\nتوجه داشته باشید، تا زمانی که این گزینه به مشخصات فنی اضافه نشده، کالا را درج نکنید.<br />\r\n&nbsp;</p>"
                  }
                ]
              },
              "auto_title": {
                "video": null,
                "short_description": "",
                "items": [
                  {
                    "title": "نامگذاری خودکار",
                    "content": "<p>پس از پر کردن قسمت های برند، مدل، دسته بندی در گام دوم درج و مشخصات فنی در گام سوم درج، عنوان صحیح کالای شما با توجه به مشخصاتی که شما پر کرده اید در گام چهارم به شما نمایش داده خواهد شد.<br />\r\nعنوان پیشنهادی برای کالای شما بهترین عنوان است و با ویرایش آن امکان رد شدن کالا وجود دارد.<br />\r\nلطفا عنوان کالای خود را بررسی کنید و در صورت صحیح بودن عنوان روی &quot;تایید و ادامه&quot; کلیک کنید.<br />\r\n<br />\r\nحتما دقت کنید، در صورتی که نامگذاری خودکار در این گروه اجباری شده باشد دکمه &quot;ویرایش&quot; حذف شده است و برای تغییر عنوان کالا باید تغییرات را در قسمت های برند، مدل و دسته بندی ایجاد کنید تا عنوان کالا اصلاح شود.<br />\r\n<br />\r\nهمچنین در صورت اجباری بودن استفاده از نام گذاری خودکار، اگر کالای شما برند ثبت شده در دیجی کالا دارد می توانید برند خود را انتخاب کنید و این برند در عنوان کالا هم نمایش داده می شود اما اگر برند شما در دیجی کالا ثبت نشده باشد باید در فیلد برند، در گام دوم، برند &quot;متفرقه&quot; را انتخاب کنید و درعنوان کالا هم برند نمایش داده نمی شود. برای نمایش برند در عنوان کالا حتما باید برند خود را در دیجی کالا ثبت کنید.<br />\r\n&nbsp;</p>"
                  }
                ]
              },
              "media": {
                "video": null,
                "short_description": "",
                "items": [
                  {
                    "title": "تصویر اصلی",
                    "content": "<p>زمانی که تصاویر خود را بارگذاری کردید، با کلیک روی علامت &quot;پرچم&quot; عکس اصلی کالا را از بین تصاویر مشخص کنید. برای انتخاب عکس اصلی کالا باید به نکات زیر توجه کنید:<br />\r\n<br />\r\n1- به طوری عمومی بهتر است تصاویر اصلی با پس زمینه سفید باشد.می توانید برای آموزش سفید کردن پس زمینه تصویر <a href=\"https://selleracademy.digikala.com/%D9%88%DB%8C%D8%B1%D8%A7%DB%8C%D8%B4-%D8%B9%DA%A9%D8%B3-%D8%AC%D8%AF%D8%A7-%DA%A9%D8%B1%D8%AF%D9%86-%DA%A9%D8%A7%D9%84%D8%A7-%D8%A7%D8%B2-%D9%BE%D8%B3-%D8%B2%D9%85%DB%8C%D9%86%D9%87/\" target=\"_blank\">اینجا</a> و آموزش حذف سایه ازعکس اصلی <a href=\"https://selleracademy.digikala.com/%D9%88%DB%8C%D8%B1%D8%A7%DB%8C%D8%B4-%D8%B9%DA%A9%D8%B3-%D8%A7%D8%B2-%D8%A8%DB%8C%D9%86-%D8%A8%D8%B1%D8%AF%D9%86-%D8%B3%D8%A7%DB%8C%D9%87%e2%80%8c%DB%8C-%DA%A9%D8%A7%D9%84%D8%A7/\" target=\"_blank\">اینجا </a>کلیک کنید.<br />\r\n2- عکس اصلی باید کیفیت بالایی داشته باشد و نباید هیچ لوگو یا واترمارکی بر روی عکس وجود داشته باشد.<br />\r\n3- کالا باید در عکس اصلی بزرگ و در مرکز تصویر باشد.<br />\r\n4- زاویه صحیح کالا و نحوه چیدمان کالاهای چند تکه در عکس اصلی اهمیت زیادی دارد، لطفا با توجه به جدید ترین کالاهای مشابه روی سایت، کالا را عکاسی کنید.<br />\r\n5- در عکس اصلی تنها باید تصویر کالایی که میفروشید وجود داشته باشد و وجود اشیا دیگر در تصویر اصلی باعث رد شدن عکس میشود.<br />\r\n6- اگر کالای شما چند تکه است، باید تصویر تمام تکه ها در عکس اصلی دیده شود، در غیر این صورت کالا رد می شود.<br />\r\n7- تصاویر کالا باید دقیقا مطابق با کالایی باشد که بفروش میرسانید و در صورت هر گونه مغایرت، کالا به این دلیل مرجوع و فروشنده جریمه می شود.</p>\r\n\r\n<p><strong>نکته:</strong></p>\r\n\r\n<p><strong>* عمده ترین دلیل رد تصویر کالا در گروه &quot;شلوارک مردانه&quot;&nbsp; ویرایش و دوربری نامناسب است.</strong></p>\r\n\r\n<p><strong>* زاویه قرارگیری لباس در تصویر اصلی&nbsp; در گروه&quot; شلوارک مردانه&quot; &nbsp; باید از روبرو&nbsp; باشد.</strong></p>\r\n\r\n<p><strong>&nbsp;* در ویرایش تصویر، به قسمت کمر شلوارک&nbsp; دقت کنید تا بریده و حذف نشود.</strong></p>\r\n\r\n<p style=\"text-align: center;\"><strong>&nbsp;&nbsp;تصویر درست:</strong></p>\r\n\r\n<p style=\"text-align: center;\"><strong><img alt=\"\" src=\"https://dkstatics-public.digikala.com/digikala-reviews/2ea045411be44c5bcda0815513d03e91911f7c11_1630235355.jpg\" style=\"height:150px; width:150px\" /></strong></p>\r\n\r\n<p style=\"text-align: center;\"><strong>تصویر نادرست:</strong></p>\r\n\r\n<p style=\"text-align: center;\"><strong><img alt=\"\" src=\"https://dkstatics-public.digikala.com/digikala-reviews/7b9168049f93d8f9cfa2d39b891851f102289923_1630235375.jpg\" style=\"height:150px; width:150px\" /></strong></p>"
                  },
                  {
                    "title": "تصویر آلبوم",
                    "content": "<p>تصاویر آلبوم برای نمایش زوایا و کاربرد کالا به مشتری است.<br />\r\n1- در هیچ کدام از تصاویر آلبوم نباید هیچ لوگو و واترمارکی وجود داشته باشد.<br />\r\n2- در تصاویر آلبوم نباید هیچ آدرس سایت، شماره تلفن و نشانی شبکه ها اجتماعی وجود داشته باشد. (لطفا اگر این موارد روی کالا یا بسته بندی وجود دارد طوری عکاسی کنید تا این موارد در تصاویر دیده نشود.)<br />\r\n3- در تصاویر آلبوم، طرح های مختلف یک کالا را قرار ندهید، برای هر طرح باید یک کالای جداگانه درج شود.<br />\r\n4- دقت کنید که بین هیچ کدام از تصاویر نباید مغایرتی وجود داشته باشد.</p>\r\n\r\n<p><strong>نکته:</strong></p>\r\n\r\n<p><strong>* اگر شلوارک برند دارد، وجود آن روی جعبه&nbsp; و یا بسته بندی و یا اتکیت به تنهایی قابل قبول نیست بلکه برند باید روی کالا چاپ یا به صورت لیبل مشاهده شود.</strong></p>\r\n\r\n<p><strong>&nbsp;* اگر&nbsp; برند در یکی از تصاویر در&nbsp; کمر شلوارک به صورت لیبل وجود دارد باید در سایر تصاویر نیز مشاهده شود.( در زمان ویرایش به این مورد توجه داشته باشید تا لیبل کالا حذف نشود)</strong></p>\r\n\r\n<p style=\"text-align: center;\"><strong>تصویر درست:</strong></p>\r\n\r\n<p style=\"text-align: center;\"><strong><img alt=\"\" src=\"https://dkstatics-public.digikala.com/digikala-reviews/6252c8e7a93e079ff907038747ef1fb93d9a8841_1630235431.jpg\" style=\"height:150px; width:150px\" /></strong></p>\r\n\r\n<p><strong>قیمت گذاری&nbsp; در گروه &quot;شلوارک مردانه &quot; بر اساس سایز است و هر رنگ کالا باید جداگانه درج شود، در تصاویر آلبوم نیز&nbsp; نباید رنگ های دیگر کالا درج شود.</strong></p>\r\n\r\n<p>&nbsp;</p>"
                  }
                ]
              }
            },
            "category_data": {
              "categoryTheme": "sized",
              "categoryThemeTranslated": "سایز",
              "categoryTitle": "شلوارک مردانه"
            },
            "allow_fake": true,
            "brand_other_id": 719,
            "show_colors": true,
            "colors": [
              {
                "color_palette_id": 1,
                "color_palette_name": "صورتی",
                "color_palette_code": "#ff69b4"
              },
              {
                "color_palette_id": 2,
                "color_palette_name": "بنفش",
                "color_palette_code": "#810cc4"
              },
              {
                "color_palette_id": 3,
                "color_palette_name": "زرد",
                "color_palette_code": "#e6ce15"
              },
              {
                "color_palette_id": 4,
                "color_palette_name": "نارنجی",
                "color_palette_code": "#e87109"
              },
              {
                "color_palette_id": 5,
                "color_palette_name": "سفید",
                "color_palette_code": "#ffffff"
              },
              {
                "color_palette_id": 6,
                "color_palette_name": "نقره\u200Cای",
                "color_palette_code": "#e6e7e8"
              },
              {
                "color_palette_id": 7,
                "color_palette_name": "طوسی",
                "color_palette_code": "#D3D3D3"
              },
              {
                "color_palette_id": 8,
                "color_palette_name": "مشکی",
                "color_palette_code": "#2b2b2b"
              },
              {
                "color_palette_id": 9,
                "color_palette_name": "قرمز",
                "color_palette_code": "#c70e0e"
              },
              {
                "color_palette_id": 10,
                "color_palette_name": "قهوه\u200C\u200Cای",
                "color_palette_code": "#8b4513"
              },
              {
                "color_palette_id": 11,
                "color_palette_name": "سبز",
                "color_palette_code": "#12b844"
              },
              {
                "color_palette_id": 12,
                "color_palette_name": "آبی",
                "color_palette_code": "#1c75d4"
              }
            ],
            "dimension_level": "product",
            "dimension_config": {
              "length": {
                "min": 1,
                "max": 200
              },
              "width": {
                "min": 1,
                "max": 200
              },
              "height": {
                "min": 1,
                "max": 200
              },
              "weight": {
                "min": 1,
                "max": 200000
              }
            },
            "general_mefa": {
              "7746": {
                "value": 7746,
                "text": "2720000066407(شلوارک مردانه پوشاک - شناسه عمومی تولید داخل)",
                "general_id": "2720000066407"
              },
              "7747": {
                "value": 7747,
                "text": "2710000066408(شلوارک مردانه پوشاک - شناسه عمومی وارداتی)",
                "general_id": "2710000066408"
              },
              "7946": {
                "value": 7946,
                "text": "2720000067404(تی شرت و شلوارک مردانه پوشاک - شناسه عمومی تولید داخل)",
                "general_id": "2720000067404"
              },
              "7947": {
                "value": 7947,
                "text": "2710000067405(تی شرت و شلوارک مردانه پوشاک - شناسه عمومی وارداتی)",
                "general_id": "2710000067405"
              },
              "7992": {
                "value": 7992,
                "text": "2720000067633(بلوز و شلوارک مردانه پوشاک - شناسه عمومی تولید داخل)",
                "general_id": "2720000067633"
              },
              "7993": {
                "value": 7993,
                "text": "2710000067634(بلوز و شلوارک مردانه پوشاک - شناسه عمومی وارداتی)",
                "general_id": "2710000067634"
              }
            },
            "category_mefa_type": "general",
            "statuses": [
              {
                "value": "marketable",
                "text": "قابل فروش",
                "selected": true
              },
              {
                "value": "coming_soon",
                "text": "به زودی",
                "selected": false
              },
              {
                "value": "stop_production",
                "text": "توقف تولید",
                "selected": false
              }
            ],
            "fake_reasons": [
              {
                "value": "این محصول در سایت سازنده یافت نشد",
                "text": 1
              },
              {
                "value": "برند در عکس ها و مشخصات دیگر آورده نشده",
                "text": 6
              },
              {
                "value": "بسته بندی کالا با بسته بندی اصلی تفاوت دارد",
                "text": 2
              },
              {
                "value": "تغییرات LQA",
                "text": 22
              },
              {
                "value": "تفاوت در برند کالا با کالای اصلی",
                "text": 5
              },
              {
                "value": "ظاهر کالا با کالای اصلی تفاوت دارد",
                "text": 3
              },
              {
                "value": "کشور سازنده معتبر نیست",
                "text": 7
              },
              {
                "value": "کیفیت کالا یا بسته بندی آن پایین است",
                "text": 4
              }
            ],
            "platforms": [
              {
                "value": "digikala",
                "text": "دیجیکالا",
                "selected": true
              },
              {
                "value": "fresh",
                "text": "فِرِش",
                "selected": false
              }
            ]
          }
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "isValid": true,
          "errors": null,
          "bind": {
            "brands": [
              {
                "id": "719",
                "text": "متفرقه Miscellaneous",
                "title_fa": "متفرقه",
                "title_en": "Miscellaneous",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/d37a7e939b804659cfc1e6d88092a1b8ea8132d4_1603699076.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "363",
                "text": "ام پی MP",
                "title_fa": "ام پی",
                "title_en": "MP",
                "logo_id": ""
              },
              {
                "id": "2506",
                "text": "پانو Pano",
                "title_fa": "پانو",
                "title_en": "Pano",
                "logo_id": ""
              },
              {
                "id": "2829",
                "text": "سوناکس Sonax",
                "title_fa": "سوناکس",
                "title_en": "Sonax",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100012441.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "2434",
                "text": "بولزوان Bullsone",
                "title_fa": "بولزوان",
                "title_en": "Bullsone",
                "logo_id": ""
              },
              {
                "id": "2906",
                "text": "مادرز Mothers",
                "title_fa": "مادرز",
                "title_en": "Mothers",
                "logo_id": ""
              },
              {
                "id": "2908",
                "text": "اچ آر HR",
                "title_fa": "اچ آر",
                "title_en": "HR",
                "logo_id": ""
              },
              {
                "id": "2606",
                "text": "اف سی پی FCP",
                "title_fa": "اف سی پی",
                "title_en": "FCP",
                "logo_id": ""
              },
              {
                "id": "3171",
                "text": "دی ان دی DND",
                "title_fa": "دی ان دی",
                "title_en": "DND",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1731.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "3076",
                "text": "مارپا مارپا",
                "title_fa": "مارپا",
                "title_en": "مارپا",
                "logo_id": ""
              },
              {
                "id": "4796",
                "text": "وورث Wurth",
                "title_fa": "وورث",
                "title_en": "Wurth",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1143.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "4228",
                "text": "تام کلین Tam Clean",
                "title_fa": "تام کلین",
                "title_en": "Tam Clean",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100012496.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6671",
                "text": "پی اند سی P and C",
                "title_fa": "پی اند سی",
                "title_en": "P and C",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/446.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "3463",
                "text": "اکتیو تولز Active Tools",
                "title_fa": "اکتیو تولز",
                "title_en": "Active Tools",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/3342.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "5599",
                "text": "آریکس Arix",
                "title_fa": "آریکس",
                "title_en": "Arix",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/2098.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "4560",
                "text": "اتوسول Autosol",
                "title_fa": "اتوسول",
                "title_en": "Autosol",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/3395.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6969",
                "text": "مولر مولر",
                "title_fa": "مولر",
                "title_en": "مولر",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/262.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "3705",
                "text": "تیتیز Titiz",
                "title_fa": "تیتیز",
                "title_en": "Titiz",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/3819.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "8369",
                "text": "نانوتیس Nanotiss",
                "title_fa": "نانوتیس",
                "title_en": "Nanotiss",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5211.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6242",
                "text": "کاریزما charisma",
                "title_fa": "کاریزما",
                "title_en": "charisma",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1368.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6404",
                "text": "ارج پلاستیک Arjplastic",
                "title_fa": "ارج پلاستیک",
                "title_en": "Arjplastic",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1203.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6193",
                "text": "نانووا nanova",
                "title_fa": "نانووا",
                "title_en": "nanova",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1355.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10240",
                "text": "کوئیک کلین Quick Clean",
                "title_fa": "کوئیک کلین",
                "title_en": "Quick Clean",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7541.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "5535",
                "text": "واکس ستاره Setareh wax",
                "title_fa": "واکس ستاره",
                "title_en": "Setareh wax",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/2191.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "11674",
                "text": "بایرن تکس BAYERNTEX",
                "title_fa": "بایرن تکس",
                "title_en": "BAYERNTEX",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008660.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10957",
                "text": "مفرا mafra",
                "title_fa": "مفرا",
                "title_en": "mafra",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008011.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "8751",
                "text": "کنزاکس Kenzax",
                "title_fa": "کنزاکس",
                "title_en": "Kenzax",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5811.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7911",
                "text": "پاورپلاس Powerplus",
                "title_fa": "پاورپلاس",
                "title_en": "Powerplus",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4711.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "8663",
                "text": "تیوان TIWAN",
                "title_fa": "تیوان",
                "title_en": "TIWAN",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5562.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6250",
                "text": "پی اچ سی والیو Phc valeo",
                "title_fa": "پی اچ سی والیو",
                "title_en": "Phc valeo",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1773.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "2707",
                "text": "بی ام دبلیو BMW",
                "title_fa": "بی ام دبلیو",
                "title_en": "BMW",
                "logo_id": ""
              },
              {
                "id": "8145",
                "text": "پاسیکو PASYCO",
                "title_fa": "پاسیکو",
                "title_en": "PASYCO",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4978.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10509",
                "text": "مستر پنگوئین Mr.Panguin",
                "title_fa": "مستر پنگوئین",
                "title_en": "Mr.Panguin",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7807.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "13614",
                "text": "آیون AION",
                "title_fa": "آیون",
                "title_en": "AION",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100010661.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1453",
                "text": "کرشر Karcher",
                "title_fa": "کرشر",
                "title_en": "Karcher",
                "logo_id": ""
              },
              {
                "id": "14029",
                "text": "جاسک Jusk",
                "title_fa": "جاسک",
                "title_en": "Jusk",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100011102.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "12173",
                "text": "تری\u200Cام 3M",
                "title_fa": "تری\u200Cام",
                "title_en": "3M",
                "logo_id": "https://dkstatics-public-2.digikala.com/digikala-brands/100009183.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "15248",
                "text": "دوو DEVO",
                "title_fa": "دوو",
                "title_en": "DEVO",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100012373.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1642",
                "text": "بوف Buff",
                "title_fa": "بوف",
                "title_en": "Buff",
                "logo_id": "https://dkstatics-public-2.digikala.com/digikala-brands/100009084.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "15578",
                "text": "اتوفاکس AUTOFOX",
                "title_fa": "اتوفاکس",
                "title_en": "AUTOFOX",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100012788.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "15141",
                "text": "فارکلا Farecla",
                "title_fa": "فارکلا",
                "title_en": "Farecla",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100012263.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "16363",
                "text": "ویسکوز VISKOVITA",
                "title_fa": "ویسکوز",
                "title_en": "VISKOVITA",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100013584.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10111",
                "text": "تمیز8.5 Temiz8.5",
                "title_fa": "تمیز8.5",
                "title_en": "Temiz8.5",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7400.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "2247",
                "text": "لایف هایت Leifheit",
                "title_fa": "لایف هایت",
                "title_en": "Leifheit",
                "logo_id": ""
              },
              {
                "id": "4400",
                "text": "شو Show",
                "title_fa": "شو",
                "title_en": "Show",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/3468.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "5308",
                "text": "سانتکس Suntex",
                "title_fa": "سانتکس",
                "title_en": "Suntex",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/2989.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "17898",
                "text": "اکسو OXO",
                "title_fa": "اکسو",
                "title_en": "OXO",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100015208.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "213",
                "text": "بیسوس Baseus",
                "title_fa": "بیسوس",
                "title_en": "Baseus",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5643.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "19575",
                "text": "سارین sarin",
                "title_fa": "سارین",
                "title_en": "sarin",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7d18f156502c86cd6b58f98e5108ad286db498b9_1601976916.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "20462",
                "text": "ام ایکس اس MXS",
                "title_fa": "ام ایکس اس",
                "title_en": "MXS",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/76e7fd4dedb97c9d98c45dacb78f71244a5b22ec_1606216941.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "12304",
                "text": "راینو RHINO",
                "title_fa": "راینو",
                "title_en": "RHINO",
                "logo_id": "https://dkstatics-public-2.digikala.com/digikala-brands/100009312.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "8391",
                "text": "وایت اند وایت white and white",
                "title_fa": "وایت اند وایت",
                "title_en": "white and white",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5235.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "21897",
                "text": "لینکس LYNX",
                "title_fa": "لینکس",
                "title_en": "LYNX",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/60f1bb56bf47e35c1190e4096a3fcb6bf22bb8f8_1612595293.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "4604",
                "text": "فلکس Flex",
                "title_fa": "فلکس",
                "title_en": "Flex",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/2669.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "12274",
                "text": "نانوزیت nanozit",
                "title_fa": "نانوزیت",
                "title_en": "nanozit",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100009285.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "2063",
                "text": "ایگل Eagle",
                "title_fa": "ایگل",
                "title_en": "Eagle",
                "logo_id": ""
              },
              {
                "id": "12184",
                "text": "آذین صنعت Azin Sanat",
                "title_fa": "آذین صنعت",
                "title_en": "Azin Sanat",
                "logo_id": "https://dkstatics-public-2.digikala.com/digikala-brands/100009196.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "2015",
                "text": "رینبو Rainbow",
                "title_fa": "رینبو",
                "title_en": "Rainbow",
                "logo_id": ""
              },
              {
                "id": "20952",
                "text": "نکستول گروپ nextool group",
                "title_fa": "نکستول گروپ",
                "title_en": "nextool group",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7030b62fe60033983dc6e81ec10b4e8229ab215d_1608107356.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "29568",
                "text": "نانو کلین NANO CLEAN",
                "title_fa": "نانو کلین",
                "title_en": "NANO CLEAN",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7983aa1d16e9789aee482b7d5f16a22317476966_1629613058.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "17382",
                "text": "ماییلدا Myilda",
                "title_fa": "ماییلدا",
                "title_en": "Myilda",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100014685.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "30817",
                "text": "کروکودیل Crocodile",
                "title_fa": "کروکودیل",
                "title_en": "Crocodile",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5aa4464fc0b4a26a196c9f6f590427b38c5ef87b_1635858225.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "30871",
                "text": "کخ شیمی kochchemie",
                "title_fa": "کخ شیمی",
                "title_en": "kochchemie",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/49f2db1b6b299fa5e14dcda9e03e9a001f3dd869_1636193580.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "13496",
                "text": "لیائو پرفکت لایف Liao Perfect Life",
                "title_fa": "لیائو پرفکت لایف",
                "title_en": "Liao Perfect Life",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100010541.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "4688",
                "text": "ترتل واکس Turtle Wax",
                "title_fa": "ترتل واکس",
                "title_en": "Turtle Wax",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/3562.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "31828",
                "text": "آریدان aridan",
                "title_fa": "آریدان",
                "title_en": "aridan",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/23760b51c8f072dcb8eb28ac1f0fbb5ac3f3f687_1641045860.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "31694",
                "text": "مکس شاین Maxshine",
                "title_fa": "مکس شاین",
                "title_en": "Maxshine",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/9aaeafa5bcba66e0bf345ef1399d2fa48af3803f_1640427167.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "31111",
                "text": "سینوکس Cinwax",
                "title_fa": "سینوکس",
                "title_en": "Cinwax",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/10b0b3425b1f7f6748decc1da908f91910730976_1637404648.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "11509",
                "text": "نازگل Nazgol",
                "title_fa": "نازگل",
                "title_en": "Nazgol",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100008530.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "9667",
                "text": "تانوس TANOS",
                "title_fa": "تانوس",
                "title_en": "TANOS",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/6876.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "14063",
                "text": "ایکانو Ecano",
                "title_fa": "ایکانو",
                "title_en": "Ecano",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100011138.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "12796",
                "text": "ریمکس Remax Shoes",
                "title_fa": "ریمکس",
                "title_en": "Remax Shoes",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100009792.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "36594",
                "text": "نانو مجیک nano magic",
                "title_fa": "نانو مجیک",
                "title_en": "nano magic",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5ee6cf49faa85d2b6735d562a008454883be6c27_1668596854.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "36844",
                "text": "کلینتون Clinton",
                "title_fa": "کلینتون",
                "title_en": "Clinton",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/a97370624150dea22f71e977d9e37ac3acca49d2_1670762733.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "36776",
                "text": "مولکول ویورک Molcol ewYork",
                "title_fa": "مولکول ویورک",
                "title_en": "Molcol ewYork",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/af3ef806ae72e5a75de50fbecf5e0aabf8183c7f_1670239025.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "36918",
                "text": "شاین میت shine mate",
                "title_fa": "شاین میت",
                "title_en": "shine mate",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1a7d48c8e5f6ea415fa8e4669df85d95348ed387_1671293567.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "37274",
                "text": "دست کاج dastkaaj",
                "title_fa": "دست کاج",
                "title_en": "dastkaaj",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/f0b4ac7cf82fb23bbd633b2af7c94e67793aea73_1674293183.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "4219",
                "text": "آرئون Areon",
                "title_fa": "آرئون",
                "title_en": "Areon",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/2785.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "38675",
                "text": "مامی دوز Mami Dooz",
                "title_fa": "مامی دوز",
                "title_en": "Mami Dooz",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/e508029b13e819486fcabd62ad65e89228d89efc_1687615810.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "39701",
                "text": "دیورتکس DIVORTEX",
                "title_fa": "دیورتکس",
                "title_en": "DIVORTEX",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/2bf8df7308ddafc5a4d91f3ad4ea3ee7c1084944_1692090409.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "39699",
                "text": "اس جی سی بی SGCB",
                "title_fa": "اس جی سی بی",
                "title_en": "SGCB",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7e5396e58c88733ece4c146ccbae6a5c7c968d5e_1692025350.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "36816",
                "text": "کارماکر CARMA CARE",
                "title_fa": "کارماکر",
                "title_en": "CARMA CARE",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/95e95cc48d756d97752f508bd2ad5a4c8c7d6025_1670431326.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "39698",
                "text": "لیکوئد المنتز liquid elements",
                "title_fa": "لیکوئد المنتز",
                "title_en": "liquid elements",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/963129898b996b6797d46789e391a4c01fbff331_1692025293.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "41205",
                "text": "فور بای فور Four by Four",
                "title_fa": "فور بای فور",
                "title_en": "Four by Four",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/23b1930f00be8540eebc39b0f8f321572b5d6bd1_1697881025.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "9462",
                "text": "اریکا ERICA",
                "title_fa": "اریکا",
                "title_en": "ERICA",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/6676.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "40873",
                "text": "پروف proff",
                "title_fa": "پروف",
                "title_en": "proff",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/656ab1081659abd8bed72f0b55c65a3dfb540856_1695656174.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "42752",
                "text": "سوف suff",
                "title_fa": "سوف",
                "title_en": "suff",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7fae180a51b5ccc765bfd1450ba1220ae2835330_1704102008.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "15521",
                "text": "روپس RUPES",
                "title_fa": "روپس",
                "title_en": "RUPES",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100012729.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "39031",
                "text": "ابونیک Ebonique",
                "title_fa": "ابونیک",
                "title_en": "Ebonique",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/94763a7ed4d4bc1244f0d810c398dc096c905de9_1690225071.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "44703",
                "text": "کلینر KLEANER",
                "title_fa": "کلینر",
                "title_en": "KLEANER",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/2e3635dfeb35fff678aaefc469f083902fbc4ed7_1716215629.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              }
            ],
            "category_product_types": [
              {
                "value": "11836",
                "text": "اسفنج"
              },
              {
                "value": "10748",
                "text": "تیغه"
              },
              {
                "value": "9155",
                "text": "دستمال"
              },
              {
                "value": "9154",
                "text": "فرچه"
              },
              {
                "value": "9153",
                "text": "پد"
              }
            ],
            "product_classes": [
              {
                "value": "19",
                "text": "آرجی\u200Cبی RGB"
              },
              {
                "value": "7",
                "text": "ارگانیک Organic"
              },
              {
                "value": "2",
                "text": "بادوام Durable"
              },
              {
                "value": "15",
                "text": "بدون مواد بی پی ای BPA-free"
              },
              {
                "value": "10",
                "text": "تولید محدود Limited Edition"
              },
              {
                "value": "14",
                "text": "دست مهر powerful-hand"
              },
              {
                "value": "11",
                "text": "سایز بزرگ Plus Size"
              },
              {
                "value": "4",
                "text": "سرویس Service"
              },
              {
                "value": "12",
                "text": "ضد آب Water Resistant"
              },
              {
                "value": "13",
                "text": "فرش دیجی کالا Fresh By Digikala"
              },
              {
                "value": "6",
                "text": "فله Bunch"
              },
              {
                "value": "16",
                "text": "قابلیت تنظیم سرعت Speed-Control"
              },
              {
                "value": "1",
                "text": "مایعات Liquids"
              },
              {
                "value": "20",
                "text": "مبلغ قابل\u200Cتغییر است eGift"
              },
              {
                "value": "18",
                "text": "مخصوص بازی Gaming"
              },
              {
                "value": "3",
                "text": "مصرفی Consumable"
              },
              {
                "value": "5",
                "text": "مصرفی بادوام Durable Consumable"
              },
              {
                "value": "8",
                "text": "منجمد Frozen"
              },
              {
                "value": "9",
                "text": "های کپی high copy"
              },
              {
                "value": "17",
                "text": "هوشمند Smart"
              }
            ],
            "divisions": [],
            "guideline": {
              "category_selection": {
                "video": null,
                "short_description": "برای انتخاب گروه، لطفا نمونه مشابه کالای خود را در سایت دیجیکالا جست و جو کنید و چنانچه کالای یافت شده با کالایی که قصد درج آن را دارید یکسان بود، همان گروه را برای درج کالا انتخاب کنید."
              },
              "product_info": {
                "video": null,
                "short_description": "",
                "items": [
                  {
                    "title": "نشان غیراصل",
                    "content": "<p>اصالت کالا (نشان غیر اصل): اگر روی کالا برندی وجود دارد که آن محصول توسط آن برند تولید نشده است، باید از نشان غیر اصل استفاده کنید. اگرروی کالا هیچ برندی وجود ندارد، نباید از نشان غیر اصل استفاده کرد و محصول را با برند متفرقه درج کنید.<br />\r\n<br />\r\n1- اگر محصول غیراصل است و از نشان غیر اصل استفاده می&zwnj;کنید، نباید هیچ برندی در عنوان کالا ذکر شود.<br />\r\n2- اگر کالایی نشان غیر اصل نداشته باشد به معنای این است که آن کالا اصل و تولید شده توسط آن برند است. اگر روی این کالا، کالای فیک بفروشید، مشمول جریمه خواهید شد. برای اطلاع بیشتر به این <a href=\"https://selleracademy.digikala.com/%D9%81%D8%B1%D9%88%D8%B4-%DA%A9%D8%A7%D9%84%D8%A7%DB%8C-%D8%BA%DB%8C%D8%B1%D8%A7%D8%B5%D9%84-%D8%AF%D8%B1-%D8%AF%DB%8C%D8%AC%DB%8C%e2%80%8c%DA%A9%D8%A7%D9%84%D8%A7/\" target=\"_blank\">لینک</a> مراجعه کنید.<br />\r\n&nbsp;</p>"
                  },
                  {
                    "title": "برند کالا",
                    "content": "<p>اطمینان حاصل کنید که برند انتخاب شده در فیلد برند، دقیقا برند کالایی است که قصد فروش آن را دارید. برند مورد نظر شما باید در همان گروه کالایی که قصد درج کالا را دارید، ثبت شده باشد.<br />\r\n<br />\r\nاگر برندی برای کالای خود انتخاب می کنید، آن برند باید روی حداقل یکی از تصاویر کالا درتصاویرآلبوم وجود داشته باشد، چنانچه در تصاویر کالا برند دیده نشود و شما در فیلد برند، برندی برای کالا انتخاب کرده باشید، کالا رد می شود.<br />\r\n<br />\r\nاگر کالای شما تولید شده توسط برند اصلی است، باید برند محصول را در فیلد برند انتخاب کنید اگر برند شما در لیست برندهای موجود نبود گزینه درخواست ایجاد برند جدید را انتخاب کنید و اقدام به ثبت برند خود کنید. آموزش درخواست برند جدید در این <a href=\"https://selleracademy.digikala.com/%D8%AF%D8%B1%D8%AE%D9%88%D8%A7%D8%B3%D8%AA-%D8%A7%DB%8C%D8%AC%D8%A7%D8%AF-%D8%A8%D8%B1%D9%86%D8%AF/\" target=\"_blank\">لینک</a> موجود است.<br />\r\n<br />\r\nاگر روی کالای شما هیچ برندی وجود ندارد، باید برند &quot;متفرقه&quot; را انتخاب کنید.</p>"
                  },
                  {
                    "title": "نوع کالا",
                    "content": "<p>در هنگام انتخاب نوع کالا تنها مواردی رو انتخاب کنید که به کالای شما مربوط است. اگر موارد بی ربط به کالا را انتخاب کنید کالا رد می شود.</p>"
                  },
                  {
                    "title": "عنوان کالا",
                    "content": "<p>فرمول عمومی نامگذاری کالا در دیجیکالا به صورت زیر است:<br />\r\nماهیت کالا+برند کالا+کلمه مدل+مدل کالا<br />\r\nمثال: تیشرت آستین کوتاه(ماهیت کالا) آدیداس(برند) مدل(کلمه مدل) 002 (مدل کالا)<br />\r\n<br />\r\nبرند در عنوان:<br />\r\nاگر کالای شما تولید شده توسط برند اصلی است، باید برند در عنوان محصول ذکر شود (طبق فرمول نامگذاری).<br />\r\nاگر روی کالای شما هیچ برندی وجود ندارد، شما در عنوان کالا هم نباید از هیچ برندی استفاده کنید.<br />\r\n<br />\r\nلطفا توجه کنید اگر موارد زیر را درعنوان کالا رعایت نکنید کالای شما رد می شود:<br />\r\n1- در عنوان کالا باید بین تمام کلمات یک فاصله وجود داشته باشد.<br />\r\n2- املا و نگارش کلمات باید صحیح باشد و هیچ غلط املایی در آن نباشد.<br />\r\n3- برند های غیر ایرانی در عنوان فارسی باید با زبان فارسی نوشته شود.<br />\r\n4- عنوان کالا باید مطابق تصویر، مشخصات فنی و برند کالا باشد، در غیر این صورت کالا در زمان بررسی رد می شود.<br />\r\n5- در صورتی که کالایی که درج کردید چند عددی است، حتما در انتهای عنوان کالا این مورد را ذکر کنید.<br />\r\nمانند : بسته دو عددی (در صورتی که دو کالا دقیقا یکسان هستند)<br />\r\nیا مجموعه دو عددی (در صورتی که رنگ دو کالا با یکدیگر متفاوت است)<br />\r\n&nbsp;</p>"
                  },
                  {
                    "title": "ابعاد و وزن بسته بندی",
                    "content": "<p>در این قسمت شما باید ابعاد بسته بندی کالا را که قرار است به انبار ارسال شود، به سانتی متر و همچنین وزن کالا را باید به گرم بنویسید.<br />\r\n<br />\r\nابعاد و وزن در این قسمت، روی سایت نمایش داده نمی شود و تنها برای انبار قابل مشاهده است.<br />\r\n<br />\r\nحتما دقت کنید که ابعاد و وزن بسته بندی را به درستی وارد کنید.<br />\r\n&nbsp;</p>"
                  },
                  {
                    "title": "شرح کالا",
                    "content": "<p>اگر تمایلی ندارید برای کالای خود شرح بنویسید در این قسمت اصلا چیزی ننویسید. اما اگر قصد دارید برای کالا شرح بنویسید باید نکات زیر را رعایت کنید، در غیر این صورت کالای شما رد خواهد شد.<br />\r\nلطفا توجه کنید اگر موارد زیر را درشرح کالا رعایت نکنید کالای شما رد می شود:<br />\r\n<br />\r\n1- در شرح کالا نباید نام فروشگاه، قیمت، گارانتی، ضمانت نامه و نام برند نامرتبط به کالای خود را بنویسید.<br />\r\n2- املا و نگارش کلمات باید صحیح باشد و هیچ غلط املایی در آن وجود نداشته باشد.<br />\r\n3- اطلاعات موجود در شرح کالا نباید با مشخصات و ویژگی&zwnj;های کالا مغایرت داشته باشد.<br />\r\n4- در شرح نویسی باید از جملات پیوسته استفاده کنید و اگر از عبارت های کوتاه در هر سطر با علامت گذاری (شماره، نقطه،خط فاصله) استفاده کنید کالا به دلیل شرح نامناسب رد خواهد شد.<br />\r\n<br />\r\nبرای اطلاعات بیشتر در باره&zwnj;ی نحوه&zwnj;ی درست نگارش شرح کالا به لینک زیر مراجعه کنید:<br />\r\n<a href=\"https://selleracademy.digikala.com/%DA%86%DA%AF%D9%88%D9%86%D9%87-%D8%B4%D8%B1%D8%AD-%DA%A9%D8%A7%D9%84%D8%A7-%D8%A8%D9%86%D9%88%DB%8C%D8%B3%DB%8C%D9%85/\" target=\"_blank\">رابطه&zwnj;ی یک شرح خوب با فروش کالا (چگونه شرح بنویسیم؟</a>)</p>"
                  },
                  {
                    "title": "نقاط ضعف و قوت کالا",
                    "content": "<p>اگر تمایلی ندارید برای کالای خود نقاط ضعف و قوت بنویسید در این قسمت اصلا چیزی ننویسید. اما اگر قصد دارید برای کالا نقاط ضعف و قوت بنویسید باید نکات زیر را رعایت کنید، در غیر این صورت کالای شما رد خواهد شد:<br />\r\n<br />\r\n1- در نقاط قوت و نقاط ضعف باید از عبارت&zwnj;های بدون فعل و کوتاه استفاده کنید. (مانند: وزن کم، فلزی، طول عمر بالای باتری و &hellip;)<br />\r\n2- قبل و بعد از جمله نباید از علامت (نقطه ، خط فاصله و&hellip;) استفاده کنید.<br />\r\n3- در نقاط قوت و نقاط ضعف نباید از نوع گارانتی و قیمت کالا صحبت کنید.<br />\r\n4- نقاط قوت و نقاط ضعف نباید سلیقه&zwnj;ای باشد، به&zwnj; عنوان مثال &ldquo;طراحی زیبا&rdquo; یا &quot;به صرفه&quot; ، جز نقاط قوت محصول نیست.<br />\r\n5- در نقاط قوت و نقاط ضعف ویژگی یا تکنولوژی&zwnj;های برتر نسبت به کالاهای مشابه را ثبت کنید.<br />\r\n&nbsp;</p>"
                  }
                ]
              },
              "attributes": {
                "video": null,
                "short_description": "",
                "items": [
                  {
                    "title": "مشخصات فنی نوشتاری",
                    "content": "<p>لطفا در هنگام نوشتن مشخصات فنی، به نکات زیر دقت کنید:<br />\r\n<br />\r\n1- تمام مشخصات فنی ذکر شده در این قسمت باید با مشخصات کالا در تصاویر، عنوان و شرح کالا یکسان باشد در صورت مغایرت این اطلاعات با هم، کالای شما در زمان بررسی رد می شود.<br />\r\n2- مشخصات فنی وارد شده باید دقیقا مطابق با کالایی باشد که بفروش میرسانید و در صورت هر گونه مغایرت، کالا به این دلیل مرجوع و فروشنده جریمه می شود.<br />\r\n3- املا و نگارش کلمات باید صحیح باشد و هیچ غلط املایی در آن وجود نداشته باشد.<br />\r\n4- در مشخصات فنی نباید نام فروشگاه، قیمت و گارانتی کالا را بنویسید.<br />\r\n5- مشخصات فنی، مشخصات دقیقی هستند، بنابراین نباید از عبارات تبلیغاتی و سلیقه ای استفاده کنید.<br />\r\nمثال: عمر مفید زیاد، ظاهر زیبا و...<br />\r\n6- اگر مشخصه ی فنی دارای واحد اندازه گیری است، حتما از مطابقت این عدد با واحد اندازه گیری اطمینان حاصل کنید. در صورت مغایرت، احتمال مرجوع شدن کالا زیاد است.<br />\r\n7- چنانچه کالای درج شده، چند پارچه یا چند تکه است باید مشخصات فنی تمام اجزا را در مشخصات کالا ذکر کنید.<br />\r\n&nbsp;</p>"
                  },
                  {
                    "title": "مشخصات فنی انتخابی",
                    "content": "<p>در قسمت هایی از مشخصات فنی که اطلاعات را باید در آن انتخاب کرد، به موارد زیر دقت کنید:<br />\r\n<br />\r\n1- اطمینان حاصل کنید که تمام مشخصات فنی ذکر شده در این قسمت با مشخصات کالا در تصاویر، عنوان و شرح کالا یکسان باشد در غیر این صورت، کالا در زمان بررسی رد می شود.<br />\r\n2- مشخصات فنی وارد شده باید دقیقا مطابق با کالایی باشد که بفروش میرسانید و در صورت هر گونه مغایرت، کالا به این دلیل مرجوع و فروشنده جریمه می شود.<br />\r\n3- اگر در این قسمت ها، گزینه ای مربوط به مشخصات کالای شما وجود نداشت، از طریق فرم &quot;تماس با ما&quot; به واحد LQA اطلاع دهید تا این گزینه به مشخصات فنی گروه مورد نظر اضافه شود.<br />\r\nتوجه داشته باشید، تا زمانی که این گزینه به مشخصات فنی اضافه نشده، کالا را درج نکنید.<br />\r\n&nbsp;</p>"
                  }
                ]
              },
              "media": {
                "video": null,
                "short_description": "",
                "items": [
                  {
                    "title": "تصویر اصلی",
                    "content": "<p>زمانی که تصاویر خود را بارگذاری کردید، با کلیک روی علامت &quot;پرچم&quot; عکس اصلی کالا را از بین تصاویر مشخص کنید. برای انتخاب عکس اصلی کالا باید به نکات زیر توجه کنید:<br />\r\n<br />\r\n1- به طوری عمومی بهتر است تصاویر اصلی با پس زمینه سفید باشد.می توانید برای آموزش سفید کردن پس زمینه تصویر <a href=\"https://selleracademy.digikala.com/%D9%88%DB%8C%D8%B1%D8%A7%DB%8C%D8%B4-%D8%B9%DA%A9%D8%B3-%D8%AC%D8%AF%D8%A7-%DA%A9%D8%B1%D8%AF%D9%86-%DA%A9%D8%A7%D9%84%D8%A7-%D8%A7%D8%B2-%D9%BE%D8%B3-%D8%B2%D9%85%DB%8C%D9%86%D9%87/\" target=\"_blank\">اینجا</a> و آموزش حذف سایه ازعکس اصلی <a href=\"https://selleracademy.digikala.com/%D9%88%DB%8C%D8%B1%D8%A7%DB%8C%D8%B4-%D8%B9%DA%A9%D8%B3-%D8%A7%D8%B2-%D8%A8%DB%8C%D9%86-%D8%A8%D8%B1%D8%AF%D9%86-%D8%B3%D8%A7%DB%8C%D9%87%e2%80%8c%DB%8C-%DA%A9%D8%A7%D9%84%D8%A7/\" target=\"_blank\">اینجا </a>کلیک کنید.<br />\r\n2- عکس اصلی باید کیفیت بالایی داشته باشد و نباید هیچ لوگو یا واترمارکی بر روی عکس وجود داشته باشد.<br />\r\n3- کالا باید در عکس اصلی بزرگ و در مرکز تصویر باشد.<br />\r\n4- زاویه صحیح کالا و نحوه چیدمان کالاهای چند تکه در عکس اصلی اهمیت زیادی دارد، لطفا با توجه به جدید ترین کالاهای مشابه روی سایت، کالا را عکاسی کنید.<br />\r\n5- در عکس اصلی تنها باید تصویر کالایی که میفروشید وجود داشته باشد و وجود اشیا دیگر در تصویر اصلی باعث رد شدن عکس میشود.<br />\r\n6- اگر کالای شما چند تکه است، باید تصویر تمام تکه ها در عکس اصلی دیده شود، در غیر این صورت کالا رد می شود.<br />\r\n7- تصاویر کالا باید دقیقا مطابق با کالایی باشد که بفروش میرسانید و در صورت هر گونه مغایرت، کالا به این دلیل مرجوع و فروشنده جریمه می شود.<br />\r\n&nbsp;</p>"
                  },
                  {
                    "title": "تصویر آلبوم",
                    "content": "<p>تصاویر آلبوم برای نمایش زوایا و کاربرد کالا به مشتری است.<br />\r\n1- در هیچ کدام از تصاویر آلبوم نباید هیچ لوگو و واترمارکی وجود داشته باشد.<br />\r\n2- در تصاویر آلبوم نباید هیچ آدرس سایت، شماره تلفن و نشانی شبکه ها اجتماعی وجود داشته باشد. (لطفا اگر این موارد روی کالا یا بسته بندی وجود دارد طوری عکاسی کنید تا این موارد در تصاویر دیده نشود.)<br />\r\n3- در تصاویر آلبوم، طرح های مختلف یک کالا را قرار ندهید، برای هر طرح باید یک کالای جداگانه درج شود.<br />\r\n4- دقت کنید که بین هیچ کدام از تصاویر نباید مغایرتی وجود داشته باشد.</p>\r\n\r\n<p>بهتر است از لیبل اصالت کالا بر روی بسته بندی، عکس قرار داده شود</p>\r\n\r\n<p><img alt=\"\" src=\"https://dkstatics-public.digikala.com/digikala-reviews/ed1d0ba41f95a4902710f778eb47ca5ba0165d6b_1646326556.jpg\" style=\"height:150px; width:150px\" /></p>"
                  }
                ]
              }
            },
            "category_data": {
              "categoryTheme": "colored",
              "categoryThemeTranslated": "رنگ",
              "categoryTitle": "پد و دستمال نظافت خودرو"
            },
            "allow_fake": true,
            "brand_other_id": 719,
            "show_colors": false,
            "dimension_level": "product",
            "dimension_config": null,
            "general_mefa": {
              "1239": {
                "value": 1239,
                "text": "2720000009862(ابر شستشو - شناسه عمومی تولید داخل)",
                "general_id": "2720000009862"
              },
              "1240": {
                "value": 1240,
                "text": "2710000009863(ابر شستشو - شناسه عمومی وارداتی)",
                "general_id": "2710000009863"
              },
              "1241": {
                "value": 1241,
                "text": "2720000009879(اسفنج شستشو - شناسه عمومی تولید داخل)",
                "general_id": "2720000009879"
              },
              "1242": {
                "value": 1242,
                "text": "2710000009870(اسفنج شستشو - شناسه عمومی وارداتی)",
                "general_id": "2710000009870"
              },
              "5024": {
                "value": 5024,
                "text": "2720000052752(اسپری سیلر مواد پوشش دهنده - شناسه عمومی تولید داخل)",
                "general_id": "2720000052752"
              },
              "5025": {
                "value": 5025,
                "text": "2710000052753(اسپری سیلر مواد پوشش دهنده - شناسه عمومی وارداتی)",
                "general_id": "2710000052753"
              },
              "14206": {
                "value": 14206,
                "text": "2720000098736(دستمال نظافت چند منظوره - شناسه عمومی تولید داخل)",
                "general_id": "2720000098736"
              },
              "14207": {
                "value": 14207,
                "text": "2710000098737(دستمال نظافت چند منظوره - شناسه عمومی وارداتی)",
                "general_id": "2710000098737"
              },
              "16666": {
                "value": 16666,
                "text": "2720000111138(مایع شیشه شور وسایل نقلیه - شناسه عمومی تولید داخل)",
                "general_id": "2720000111138"
              },
              "16667": {
                "value": 16667,
                "text": "2710000111139(مایع شیشه شور وسایل نقلیه - شناسه عمومی وارداتی)",
                "general_id": "2710000111139"
              },
              "16796": {
                "value": 16796,
                "text": "2720000111794(برس تجهیزات کارگاهی خودرو - شناسه عمومی تولید داخل)",
                "general_id": "2720000111794"
              },
              "16797": {
                "value": 16797,
                "text": "2710000111795(برس تجهیزات کارگاهی خودرو - شناسه عمومی وارداتی)",
                "general_id": "2710000111795"
              },
              "23194": {
                "value": 23194,
                "text": "2720000143825(ست پد پولیشکاری تجهیزات مشترک پرداخت و پوشش دهی مواد - شناسه عمومی تولید داخل)",
                "general_id": "2720000143825"
              },
              "23195": {
                "value": 23195,
                "text": "2710000143826(ست پد پولیشکاری تجهیزات مشترک پرداخت و پوشش دهی مواد - شناسه عمومی وارداتی)",
                "general_id": "2710000143826"
              },
              "26655": {
                "value": 26655,
                "text": "2720000176786(تیغه قطعات وسایل نقلیه - شناسه عمومی تولید داخل)",
                "general_id": "2720000176786"
              },
              "26656": {
                "value": 26656,
                "text": "2710000176787(تیغه قطعات وسایل نقلیه - شناسه عمومی وارداتی)",
                "general_id": "2710000176787"
              }
            },
            "category_mefa_type": "general",
            "statuses": [
              {
                "value": "marketable",
                "text": "قابل فروش",
                "selected": true
              },
              {
                "value": "coming_soon",
                "text": "به زودی",
                "selected": false
              },
              {
                "value": "stop_production",
                "text": "توقف تولید",
                "selected": false
              }
            ],
            "fake_reasons": [
              {
                "value": "این محصول در سایت سازنده یافت نشد",
                "text": 1
              },
              {
                "value": "برند در عکس ها و مشخصات دیگر آورده نشده",
                "text": 6
              },
              {
                "value": "بسته بندی کالا با بسته بندی اصلی تفاوت دارد",
                "text": 2
              },
              {
                "value": "تغییرات LQA",
                "text": 22
              },
              {
                "value": "تفاوت در برند کالا با کالای اصلی",
                "text": 5
              },
              {
                "value": "ظاهر کالا با کالای اصلی تفاوت دارد",
                "text": 3
              },
              {
                "value": "کشور سازنده معتبر نیست",
                "text": 7
              },
              {
                "value": "کیفیت کالا یا بسته بندی آن پایین است",
                "text": 4
              }
            ],
            "platforms": [
              {
                "value": "digikala",
                "text": "دیجیکالا",
                "selected": true
              },
              {
                "value": "fresh",
                "text": "فِرِش",
                "selected": false
              }
            ]
          }
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "isValid": true,
          "errors": null,
          "bind": {
            "brands": [
              {
                "id": "719",
                "text": "متفرقه Miscellaneous",
                "title_fa": "متفرقه",
                "title_en": "Miscellaneous",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/d37a7e939b804659cfc1e6d88092a1b8ea8132d4_1603699076.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "185",
                "text": "موشی Moshi",
                "title_fa": "موشی",
                "title_en": "Moshi",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/3955.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "213",
                "text": "بیسوس Baseus",
                "title_fa": "بیسوس",
                "title_en": "Baseus",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5643.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "222",
                "text": "مونی فیلم Moni Film",
                "title_fa": "مونی فیلم",
                "title_en": "Moni Film",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5659.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "221",
                "text": "مستر Master",
                "title_fa": "مستر",
                "title_en": "Master",
                "logo_id": ""
              },
              {
                "id": "199",
                "text": "دیسکاوری بای Discovery Buy",
                "title_fa": "دیسکاوری بای",
                "title_en": "Discovery Buy",
                "logo_id": ""
              },
              {
                "id": "18",
                "text": "سامسونگ Samsung",
                "title_fa": "سامسونگ",
                "title_en": "Samsung",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/3960.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10",
                "text": "اپل Apple",
                "title_fa": "اپل",
                "title_en": "Apple",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/eca9a45791656682d1414563ee8b2b88101b6f1e_1680613335.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "82",
                "text": "هوآوی Huawei",
                "title_fa": "هوآوی",
                "title_en": "Huawei",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/af664f0bcf9bc412b741c618e6e52fc2d090198f_1619269008.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1005",
                "text": "فوجی Fuji",
                "title_fa": "فوجی",
                "title_en": "Fuji",
                "logo_id": ""
              },
              {
                "id": "2551",
                "text": "فوجی Fuji",
                "title_fa": "فوجی",
                "title_en": "Fuji",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1760.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "248",
                "text": "اس جی پی SGP",
                "title_fa": "اس جی پی",
                "title_en": "SGP",
                "logo_id": ""
              },
              {
                "id": "707",
                "text": "اسمارت تاچ Smart Touch",
                "title_fa": "اسمارت تاچ",
                "title_en": "Smart Touch",
                "logo_id": ""
              },
              {
                "id": "1124",
                "text": "زیناس Zenus",
                "title_fa": "زیناس",
                "title_en": "Zenus",
                "logo_id": ""
              },
              {
                "id": "1250",
                "text": "اسپیگن Spigen",
                "title_fa": "اسپیگن",
                "title_en": "Spigen",
                "logo_id": ""
              },
              {
                "id": "1915",
                "text": "جی سی پال JCPAL",
                "title_fa": "جی سی پال",
                "title_en": "JCPAL",
                "logo_id": ""
              },
              {
                "id": "724",
                "text": "اوزاکی Ozaki",
                "title_fa": "اوزاکی",
                "title_en": "Ozaki",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4000.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "36",
                "text": "فراسو Farassoo",
                "title_fa": "فراسو",
                "title_en": "Farassoo",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5505.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1824",
                "text": "وویا Voia",
                "title_fa": "وویا",
                "title_en": "Voia",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/3973.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "2009",
                "text": "پورو Puro",
                "title_fa": "پورو",
                "title_en": "Puro",
                "logo_id": ""
              },
              {
                "id": "1716",
                "text": "ریمکس Remax",
                "title_fa": "ریمکس",
                "title_en": "Remax",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5742.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1651",
                "text": "نیلکین Nillkin",
                "title_fa": "نیلکین",
                "title_en": "Nillkin",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100012424.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "2409",
                "text": "آی شیلدز iShieldz",
                "title_fa": "آی شیلدز",
                "title_en": "iShieldz",
                "logo_id": ""
              },
              {
                "id": "1089",
                "text": "جاست موبایل Just Mobile",
                "title_fa": "جاست موبایل",
                "title_en": "Just Mobile",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5989.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1784",
                "text": "اینسیپیو Incipio",
                "title_fa": "اینسیپیو",
                "title_en": "Incipio",
                "logo_id": ""
              },
              {
                "id": "242",
                "text": "هوکو Hoco",
                "title_fa": "هوکو",
                "title_en": "Hoco",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5635.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "4343",
                "text": "موکول Mocoll",
                "title_fa": "موکول",
                "title_en": "Mocoll",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/2794.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "8921",
                "text": "سیگنت Cygnett",
                "title_fa": "سیگنت",
                "title_en": "Cygnett",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/6088.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "51",
                "text": "مایکروسافت Microsoft",
                "title_fa": "مایکروسافت",
                "title_en": "Microsoft",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1803.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1051",
                "text": "راک Rock",
                "title_fa": "راک",
                "title_en": "Rock",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4707.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "4329",
                "text": "لیتو Litu",
                "title_fa": "لیتو",
                "title_en": "Litu",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/2729.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "4754",
                "text": "مولتی نانو Multi Nano",
                "title_fa": "مولتی نانو",
                "title_en": "Multi Nano",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/2585.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "4312",
                "text": "سام پلاس Sum Plus",
                "title_fa": "سام پلاس",
                "title_en": "Sum Plus",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/2788.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "5461",
                "text": "آیپیرل iPEARL",
                "title_fa": "آیپیرل",
                "title_en": "iPEARL",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/874.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "5633",
                "text": "نانو فیکس ایت Nanofixit",
                "title_fa": "نانو فیکس ایت",
                "title_en": "Nanofixit",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1635.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6046",
                "text": "پیکسی pixie",
                "title_fa": "پیکسی",
                "title_en": "pixie",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/774.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7062",
                "text": "وی مکس VMAX",
                "title_fa": "وی مکس",
                "title_en": "VMAX",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/254.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "241",
                "text": "بست اب BestAB",
                "title_fa": "بست اب",
                "title_en": "BestAB",
                "logo_id": ""
              },
              {
                "id": "223",
                "text": "کپدیس Capdase",
                "title_fa": "کپدیس",
                "title_en": "Capdase",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5672.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "5299",
                "text": "کوتتسی Coteetci",
                "title_fa": "کوتتسی",
                "title_en": "Coteetci",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/2239.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "135",
                "text": "بلکین Belkin",
                "title_fa": "بلکین",
                "title_en": "Belkin",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5602.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "3207",
                "text": "کریستال Crystal",
                "title_fa": "کریستال",
                "title_en": "Crystal",
                "logo_id": ""
              },
              {
                "id": "1",
                "text": "سونی Sony",
                "title_fa": "سونی",
                "title_en": "Sony",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/1812.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10469",
                "text": "هورس Horse",
                "title_fa": "هورس",
                "title_en": "Horse",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7770.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "5625",
                "text": "جوی روم Joyroom",
                "title_fa": "جوی روم",
                "title_en": "Joyroom",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/6090.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6855",
                "text": "راک اسپیس Rock space",
                "title_fa": "راک اسپیس",
                "title_en": "Rock space",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/366.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "3106",
                "text": "نزتک Naztech",
                "title_fa": "نزتک",
                "title_en": "Naztech",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/2357.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "214",
                "text": "گریفین Griffin",
                "title_fa": "گریفین",
                "title_en": "Griffin",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5660.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "2617",
                "text": "پریمیوم Premium",
                "title_fa": "پریمیوم",
                "title_en": "Premium",
                "logo_id": ""
              },
              {
                "id": "6563",
                "text": "دیاموند Diamond",
                "title_fa": "دیاموند",
                "title_en": "Diamond",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/552.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7255",
                "text": "لیتوو Lito",
                "title_fa": "لیتوو",
                "title_en": "Lito",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/6.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "4477",
                "text": "ایکس وان X One",
                "title_fa": "ایکس وان",
                "title_en": "X One",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/3119.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "5688",
                "text": "مادام کوکو Madame Coco",
                "title_fa": "مادام کوکو",
                "title_en": "Madame Coco",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/2069.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "12386",
                "text": "آرجی RG",
                "title_fa": "آرجی",
                "title_en": "RG",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100009398.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1642",
                "text": "بوف Buff",
                "title_fa": "بوف",
                "title_en": "Buff",
                "logo_id": "https://dkstatics-public-2.digikala.com/digikala-brands/100009084.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "12775",
                "text": "بلک تایگر black tiger",
                "title_fa": "بلک تایگر",
                "title_en": "black tiger",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100009772.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "68",
                "text": "فیلیپس Philips",
                "title_fa": "فیلیپس",
                "title_en": "Philips",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/3950.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "6442",
                "text": "پنزر گلس Panzer glass",
                "title_fa": "پنزر گلس",
                "title_en": "Panzer glass",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/668.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1044",
                "text": "توتو TOTU",
                "title_fa": "توتو",
                "title_en": "TOTU",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/3993.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1067",
                "text": "اس تی ام STM",
                "title_fa": "اس تی ام",
                "title_en": "STM",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/3985.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "17678",
                "text": "ای اِس آر ESR",
                "title_fa": "ای اِس آر",
                "title_en": "ESR",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/6c45c115ed682c873f182b2838f8ee39dadf64d3_1610959603.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "19301",
                "text": "دوکس دوکیس DUX DUCIS",
                "title_fa": "دوکس دوکیس",
                "title_en": "DUX DUCIS",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/dc134522a5e91944773cf6a49322e42b372e860e_1600583225.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "10463",
                "text": "لایونکس Lionex",
                "title_fa": "لایونکس",
                "title_en": "Lionex",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/7764.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "17495",
                "text": "بادیگارد BodyGuard",
                "title_fa": "بادیگارد",
                "title_en": "BodyGuard",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/100014799.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "29830",
                "text": "مگو megoo",
                "title_fa": "مگو",
                "title_en": "megoo",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/de441cc7e14e66ac552616fee26bbc6560437492_1630830481.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "21208",
                "text": "گرین لاین Green Lion",
                "title_fa": "گرین لاین",
                "title_en": "Green Lion",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/e989bc5f34b67af97fb54e30e5f3c4ce1d15f1ed_1667984036.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "20046",
                "text": "ژیژیس ZhiZhis",
                "title_fa": "ژیژیس",
                "title_en": "ZhiZhis",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/24cfb107aef890c0baa2c849d3c22f005e392df8_1604742673.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "8791",
                "text": "رمو Remo",
                "title_fa": "رمو",
                "title_en": "Remo",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/5875.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "12095",
                "text": "تراستکتور Trustector",
                "title_fa": "تراستکتور",
                "title_en": "Trustector",
                "logo_id": "https://dkstatics-public-2.digikala.com/digikala-brands/100009102.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "29404",
                "text": "گلس استار glass star",
                "title_fa": "گلس استار",
                "title_en": "glass star",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/0e1f6d05d3fb89f9e6a3db923bbddf5e37b1680f_1628494036.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "2418",
                "text": "آراری Araree",
                "title_fa": "آراری",
                "title_en": "Araree",
                "logo_id": ""
              },
              {
                "id": "32095",
                "text": "شهر گلس Shahr Glass",
                "title_fa": "شهر گلس",
                "title_en": "Shahr Glass",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/c672197e1b856916470b6b0f755063b10516fdfb_1642246341.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "1741",
                "text": "جی-کیس G-Case",
                "title_fa": "جی-کیس",
                "title_en": "G-Case",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/6285.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "7828",
                "text": "ویوو Wiwu",
                "title_fa": "ویوو",
                "title_en": "Wiwu",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4642.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "29943",
                "text": "اِپیکوی epicoy",
                "title_fa": "اِپیکوی",
                "title_en": "epicoy",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/a604bc19467bbe6c700b579386abc269d0f196e1_1631356703.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "235",
                "text": "سوپرمکس Supermax",
                "title_fa": "سوپرمکس",
                "title_en": "Supermax",
                "logo_id": ""
              },
              {
                "id": "3431",
                "text": "تکنو Tecno",
                "title_fa": "تکنو",
                "title_en": "Tecno",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/6ff0f2b4aa40bbd5a54baac37d87adb84817c751_1632291861.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "4254",
                "text": "تکنو Tecno",
                "title_fa": "تکنو",
                "title_en": "Tecno",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/2821.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "36984",
                "text": "گاردتک اساک َguardtek Asak",
                "title_fa": "گاردتک اساک",
                "title_en": "َguardtek Asak",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4b80a2311fca74099c2c0f6f3dda42d91c11c173_1671882444.jpg?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "43437",
                "text": "ژاند XUNDD",
                "title_fa": "ژاند",
                "title_en": "XUNDD",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/84d21e6fc504cdd7b97c17313be115f5b5f04f86_1708182823.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              },
              {
                "id": "8135",
                "text": "رسی Recci",
                "title_fa": "رسی",
                "title_en": "Recci",
                "logo_id": "https://dkstatics-public.digikala.com/digikala-brands/4968.png?x-oss-process=image/resize,m_lfit,h_80,w_80"
              }
            ],
            "category_product_types": [],
            "product_classes": [
              {
                "value": "19",
                "text": "آرجی\u200Cبی RGB"
              },
              {
                "value": "7",
                "text": "ارگانیک Organic"
              },
              {
                "value": "2",
                "text": "بادوام Durable"
              },
              {
                "value": "15",
                "text": "بدون مواد بی پی ای BPA-free"
              },
              {
                "value": "10",
                "text": "تولید محدود Limited Edition"
              },
              {
                "value": "14",
                "text": "دست مهر powerful-hand"
              },
              {
                "value": "11",
                "text": "سایز بزرگ Plus Size"
              },
              {
                "value": "4",
                "text": "سرویس Service"
              },
              {
                "value": "12",
                "text": "ضد آب Water Resistant"
              },
              {
                "value": "13",
                "text": "فرش دیجی کالا Fresh By Digikala"
              },
              {
                "value": "6",
                "text": "فله Bunch"
              },
              {
                "value": "16",
                "text": "قابلیت تنظیم سرعت Speed-Control"
              },
              {
                "value": "1",
                "text": "مایعات Liquids"
              },
              {
                "value": "20",
                "text": "مبلغ قابل\u200Cتغییر است eGift"
              },
              {
                "value": "18",
                "text": "مخصوص بازی Gaming"
              },
              {
                "value": "3",
                "text": "مصرفی Consumable"
              },
              {
                "value": "5",
                "text": "مصرفی بادوام Durable Consumable"
              },
              {
                "value": "8",
                "text": "منجمد Frozen"
              },
              {
                "value": "9",
                "text": "های کپی high copy"
              },
              {
                "value": "17",
                "text": "هوشمند Smart"
              }
            ],
            "divisions": [],
            "guideline": {
              "category_selection": {
                "video": null,
                "short_description": "برای انتخاب گروه، لطفا نمونه مشابه کالای خود را در سایت دیجیکالا جست و جو کنید و چنانچه کالای یافت شده با کالایی که قصد درج آن را دارید یکسان بود، همان گروه را برای درج کالا انتخاب کنید."
              },
              "attributes": {
                "video": null,
                "short_description": "",
                "items": [
                  {
                    "title": "مشخصات فنی نوشتاری",
                    "content": "<p>لطفا در هنگام نوشتن مشخصات فنی، به نکات زیر دقت کنید:<br />\r\n<br />\r\n1- تمام مشخصات فنی ذکر شده در این قسمت باید با مشخصات کالا در تصاویر، عنوان و شرح کالا یکسان باشد در صورت مغایرت این اطلاعات با هم، کالای شما در زمان بررسی رد می شود.<br />\r\n2- مشخصات فنی وارد شده باید دقیقا مطابق با کالایی باشد که بفروش میرسانید و در صورت هر گونه مغایرت، کالا به این دلیل مرجوع و فروشنده جریمه می شود.<br />\r\n3- املا و نگارش کلمات باید صحیح باشد و هیچ غلط املایی در آن وجود نداشته باشد.<br />\r\n4- در مشخصات فنی نباید نام فروشگاه، قیمت و گارانتی کالا را بنویسید.<br />\r\n5- مشخصات فنی، مشخصات دقیقی هستند، بنابراین نباید از عبارات تبلیغاتی و سلیقه ای استفاده کنید.<br />\r\nمثال: عمر مفید زیاد، ظاهر زیبا و...<br />\r\n6- اگر مشخصه ی فنی دارای واحد اندازه گیری است، حتما از مطابقت این عدد با واحد اندازه گیری اطمینان حاصل کنید. در صورت مغایرت، احتمال مرجوع شدن کالا زیاد است.<br />\r\n7- چنانچه کالای درج شده، چند پارچه یا چند تکه است باید مشخصات فنی تمام اجزا را در مشخصات کالا ذکر کنید.<br />\r\n&nbsp;</p>"
                  },
                  {
                    "title": "مشخصات فنی انتخابی",
                    "content": "<p>در قسمت هایی از مشخصات فنی که اطلاعات را باید در آن انتخاب کرد، به موارد زیر دقت کنید:<br />\r\n<br />\r\n1- اطمینان حاصل کنید که تمام مشخصات فنی ذکر شده در این قسمت با مشخصات کالا در تصاویر، عنوان و شرح کالا یکسان باشد در غیر این صورت، کالا در زمان بررسی رد می شود.<br />\r\n2- مشخصات فنی وارد شده باید دقیقا مطابق با کالایی باشد که بفروش میرسانید و در صورت هر گونه مغایرت، کالا به این دلیل مرجوع و فروشنده جریمه می شود.<br />\r\n3- اگر در این قسمت ها، گزینه ای مربوط به مشخصات کالای شما وجود نداشت، از طریق فرم &quot;تماس با ما&quot; به واحد LQA اطلاع دهید تا این گزینه به مشخصات فنی گروه مورد نظر اضافه شود.<br />\r\nتوجه داشته باشید، تا زمانی که این گزینه به مشخصات فنی اضافه نشده، کالا را درج نکنید.<br />\r\n&nbsp;</p>"
                  }
                ]
              },
              "product_info": {
                "video": null,
                "short_description": "",
                "items": [
                  {
                    "title": "نشان غیراصل",
                    "content": "<p>اصالت کالا (نشان غیر اصل): اگر روی کالا برندی وجود دارد که آن محصول توسط آن برند تولید نشده است، باید از نشان غیر اصل استفاده کنید. اگرروی کالا هیچ برندی وجود ندارد، نباید از نشان غیر اصل استفاده کرد و محصول را با برند متفرقه درج کنید.<br />\r\n<br />\r\n1- اگر محصول غیراصل است و از نشان غیر اصل استفاده می&zwnj;کنید، نباید هیچ برندی در عنوان کالا ذکر شود.<br />\r\n2- اگر کالایی نشان غیر اصل نداشته باشد به معنای این است که آن کالا اصل و تولید شده توسط آن برند است. اگر روی این کالا، کالای فیک بفروشید، مشمول جریمه خواهید شد. برای اطلاع بیشتر به این <a href=\"https://selleracademy.digikala.com/%D9%81%D8%B1%D9%88%D8%B4-%DA%A9%D8%A7%D9%84%D8%A7%DB%8C-%D8%BA%DB%8C%D8%B1%D8%A7%D8%B5%D9%84-%D8%AF%D8%B1-%D8%AF%DB%8C%D8%AC%DB%8C%e2%80%8c%DA%A9%D8%A7%D9%84%D8%A7/\" target=\"_blank\">لینک</a> مراجعه کنید.<br />\r\n&nbsp;</p>"
                  },
                  {
                    "title": "برند کالا",
                    "content": "<p>اطمینان حاصل کنید که برند انتخاب شده در فیلد برند، دقیقا برند کالایی است که قصد فروش آن را دارید. برند مورد نظر شما باید در همان گروه کالایی که قصد درج کالا را دارید، ثبت شده باشد.<br />\r\n<br />\r\nاگر برندی برای کالای خود انتخاب می کنید، آن برند باید روی حداقل یکی از تصاویر کالا درتصاویرآلبوم وجود داشته باشد، چنانچه در تصاویر کالا برند دیده نشود و شما در فیلد برند، برندی برای کالا انتخاب کرده باشید، کالا رد می شود.<br />\r\n<br />\r\nاگر کالای شما تولید شده توسط برند اصلی است، باید برند محصول را در فیلد برند انتخاب کنید اگر برند شما در لیست برندهای موجود نبود گزینه درخواست ایجاد برند جدید را انتخاب کنید و اقدام به ثبت برند خود کنید. آموزش درخواست برند جدید در این <a href=\"https://selleracademy.digikala.com/%D8%AF%D8%B1%D8%AE%D9%88%D8%A7%D8%B3%D8%AA-%D8%A7%DB%8C%D8%AC%D8%A7%D8%AF-%D8%A8%D8%B1%D9%86%D8%AF/\" target=\"_blank\">لینک</a> موجود است.<br />\r\n<br />\r\nاگر روی کالای شما هیچ برندی وجود ندارد، باید برند &quot;متفرقه&quot; را انتخاب کنید.</p>"
                  },
                  {
                    "title": "نوع کالا",
                    "content": "<p>در هنگام انتخاب نوع کالا تنها مواردی رو انتخاب کنید که به کالای شما مربوط است. اگر موارد بی ربط به کالا را انتخاب کنید کالا رد می شود.</p>"
                  },
                  {
                    "title": "عنوان کالا",
                    "content": "<p>فرمول عمومی نامگذاری کالا در دیجیکالا به صورت زیر است:<br />\r\nماهیت کالا+برند کالا+کلمه مدل+مدل کالا<br />\r\nمثال: تیشرت آستین کوتاه(ماهیت کالا) آدیداس(برند) مدل(کلمه مدل) 002 (مدل کالا)<br />\r\n<br />\r\nبرند در عنوان:<br />\r\nاگر کالای شما تولید شده توسط برند اصلی است، باید برند در عنوان محصول ذکر شود (طبق فرمول نامگذاری).<br />\r\nاگر روی کالای شما هیچ برندی وجود ندارد، شما در عنوان کالا هم نباید از هیچ برندی استفاده کنید.<br />\r\n<br />\r\nلطفا توجه کنید اگر موارد زیر را درعنوان کالا رعایت نکنید کالای شما رد می شود:<br />\r\n1- در عنوان کالا باید بین تمام کلمات یک فاصله وجود داشته باشد.<br />\r\n2- املا و نگارش کلمات باید صحیح باشد و هیچ غلط املایی در آن نباشد.<br />\r\n3- برند های غیر ایرانی در عنوان فارسی باید با زبان فارسی نوشته شود.<br />\r\n4- عنوان کالا باید مطابق تصویر، مشخصات فنی و برند کالا باشد، در غیر این صورت کالا در زمان بررسی رد می شود.<br />\r\n5- در صورتی که کالایی که درج کردید چند عددی است، حتما در انتهای عنوان کالا این مورد را ذکر کنید.<br />\r\nمانند : بسته دو عددی (در صورتی که دو کالا دقیقا یکسان هستند)<br />\r\nیا مجموعه دو عددی (در صورتی که رنگ دو کالا با یکدیگر متفاوت است)</p>\r\n\r\n<p><strong>نکته : محافظ صفحه نمایش + برند (درصورت وجود به فارسی) + مدل .... + مناسب برای تبلت&nbsp;+ (برند تبلت به فارسی)+ (مدل تبلت به انگلیسی)</strong></p>\r\n\r\n<p style=\"text-align:right\"><strong>نمونه : محافظ صفحه نمایش هورس مدل UCCT3 مناسب برای تبلت سامسونگ Galaxy Tab S7 Plus / T970 / T976</strong></p>"
                  },
                  {
                    "title": "ابعاد و وزن بسته بندی",
                    "content": "<p>در این قسمت شما باید ابعاد بسته بندی کالا را که قرار است به انبار ارسال شود، به سانتی متر و همچنین وزن کالا را باید به گرم بنویسید.<br />\r\n<br />\r\nابعاد و وزن در این قسمت، روی سایت نمایش داده نمی شود و تنها برای انبار قابل مشاهده است.<br />\r\n<br />\r\nحتما دقت کنید که ابعاد و وزن بسته بندی را به درستی وارد کنید.<br />\r\n&nbsp;</p>"
                  },
                  {
                    "title": "شرح کالا",
                    "content": "<p>اگر تمایلی ندارید برای کالای خود شرح بنویسید در این قسمت اصلا چیزی ننویسید. اما اگر قصد دارید برای کالا شرح بنویسید باید نکات زیر را رعایت کنید، در غیر این صورت کالای شما رد خواهد شد.<br />\r\nلطفا توجه کنید اگر موارد زیر را درشرح کالا رعایت نکنید کالای شما رد می شود:<br />\r\n<br />\r\n1- در شرح کالا نباید نام فروشگاه، قیمت، گارانتی، ضمانت نامه و نام برند نامرتبط به کالای خود را بنویسید.<br />\r\n2- املا و نگارش کلمات باید صحیح باشد و هیچ غلط املایی در آن وجود نداشته باشد.<br />\r\n3- اطلاعات موجود در شرح کالا نباید با مشخصات و ویژگی&zwnj;های کالا مغایرت داشته باشد.<br />\r\n4- در شرح نویسی باید از جملات پیوسته استفاده کنید و اگر از عبارت های کوتاه در هر سطر با علامت گذاری (شماره، نقطه،خط فاصله) استفاده کنید کالا به دلیل شرح نامناسب رد خواهد شد.<br />\r\n<br />\r\nبرای اطلاعات بیشتر در باره&zwnj;ی نحوه&zwnj;ی درست نگارش شرح کالا به لینک زیر مراجعه کنید:<br />\r\n<a href=\"https://selleracademy.digikala.com/%DA%86%DA%AF%D9%88%D9%86%D9%87-%D8%B4%D8%B1%D8%AD-%DA%A9%D8%A7%D9%84%D8%A7-%D8%A8%D9%86%D9%88%DB%8C%D8%B3%DB%8C%D9%85/\" target=\"_blank\">رابطه&zwnj;ی یک شرح خوب با فروش کالا (چگونه شرح بنویسیم؟</a>)</p>"
                  },
                  {
                    "title": "نقاط ضعف و قوت کالا",
                    "content": "<p>اگر تمایلی ندارید برای کالای خود نقاط ضعف و قوت بنویسید در این قسمت اصلا چیزی ننویسید. اما اگر قصد دارید برای کالا نقاط ضعف و قوت بنویسید باید نکات زیر را رعایت کنید، در غیر این صورت کالای شما رد خواهد شد:<br />\r\n<br />\r\n1- در نقاط قوت و نقاط ضعف باید از عبارت&zwnj;های بدون فعل و کوتاه استفاده کنید. (مانند: وزن کم، فلزی، طول عمر بالای باتری و &hellip;)<br />\r\n2- قبل و بعد از جمله نباید از علامت (نقطه ، خط فاصله و&hellip;) استفاده کنید.<br />\r\n3- در نقاط قوت و نقاط ضعف نباید از نوع گارانتی و قیمت کالا صحبت کنید.<br />\r\n4- نقاط قوت و نقاط ضعف نباید سلیقه&zwnj;ای باشد، به&zwnj; عنوان مثال &ldquo;طراحی زیبا&rdquo; یا &quot;به صرفه&quot; ، جز نقاط قوت محصول نیست.<br />\r\n5- در نقاط قوت و نقاط ضعف ویژگی یا تکنولوژی&zwnj;های برتر نسبت به کالاهای مشابه را ثبت کنید.<br />\r\n&nbsp;</p>"
                  }
                ]
              },
              "media": {
                "video": null,
                "short_description": "",
                "items": [
                  {
                    "title": "تصویر آلبوم",
                    "content": "<p>تصاویر آلبوم برای نمایش زوایا و کاربرد کالا به مشتری است.<br />\r\n1- در هیچ کدام از تصاویر آلبوم نباید هیچ لوگو و واترمارکی وجود داشته باشد.<br />\r\n2- در تصاویر آلبوم نباید هیچ آدرس سایت، شماره تلفن و نشانی شبکه ها اجتماعی وجود داشته باشد. (لطفا اگر این موارد روی کالا یا بسته بندی وجود دارد طوری عکاسی کنید تا این موارد در تصاویر دیده نشود.)<br />\r\n3- در تصاویر آلبوم، طرح های مختلف یک کالا را قرار ندهید، برای هر طرح باید یک کالای جداگانه درج شود.<br />\r\n4- دقت کنید که بین هیچ کدام از تصاویر نباید مغایرتی وجود داشته باشد.<br />\r\n&nbsp;</p>"
                  },
                  {
                    "title": "تصویر اصلی",
                    "content": "<p>زمانی که تصاویر خود را بارگذاری کردید، با کلیک روی علامت &quot;پرچم&quot; عکس اصلی کالا را از بین تصاویر مشخص کنید. برای انتخاب عکس اصلی کالا باید به نکات زیر توجه کنید:<br />\r\n<br />\r\n1- به طوری عمومی بهتر است تصاویر اصلی با پس زمینه سفید باشد.می توانید برای آموزش سفید کردن پس زمینه تصویر <a href=\"https://selleracademy.digikala.com/%D9%88%DB%8C%D8%B1%D8%A7%DB%8C%D8%B4-%D8%B9%DA%A9%D8%B3-%D8%AC%D8%AF%D8%A7-%DA%A9%D8%B1%D8%AF%D9%86-%DA%A9%D8%A7%D9%84%D8%A7-%D8%A7%D8%B2-%D9%BE%D8%B3-%D8%B2%D9%85%DB%8C%D9%86%D9%87/\" target=\"_blank\">اینجا</a> و آموزش حذف سایه ازعکس اصلی <a href=\"https://selleracademy.digikala.com/%D9%88%DB%8C%D8%B1%D8%A7%DB%8C%D8%B4-%D8%B9%DA%A9%D8%B3-%D8%A7%D8%B2-%D8%A8%DB%8C%D9%86-%D8%A8%D8%B1%D8%AF%D9%86-%D8%B3%D8%A7%DB%8C%D9%87%e2%80%8c%DB%8C-%DA%A9%D8%A7%D9%84%D8%A7/\" target=\"_blank\">اینجا </a>کلیک کنید.<br />\r\n2- عکس اصلی باید کیفیت بالایی داشته باشد و نباید هیچ لوگو یا واترمارکی بر روی عکس وجود داشته باشد.<br />\r\n3- کالا باید در عکس اصلی بزرگ و در مرکز تصویر باشد.<br />\r\n4- زاویه صحیح کالا و نحوه چیدمان کالاهای چند تکه در عکس اصلی اهمیت زیادی دارد، لطفا با توجه به جدید ترین کالاهای مشابه روی سایت، کالا را عکاسی کنید.<br />\r\n5- در عکس اصلی تنها باید تصویر کالایی که میفروشید وجود داشته باشد و وجود اشیا دیگر در تصویر اصلی باعث رد شدن عکس میشود.<br />\r\n6- اگر کالای شما چند تکه است، باید تصویر تمام تکه ها در عکس اصلی دیده شود، در غیر این صورت کالا رد می شود.<br />\r\n7- تصاویر کالا باید دقیقا مطابق با کالایی باشد که بفروش میرسانید و در صورت هر گونه مغایرت، کالا به این دلیل مرجوع و فروشنده جریمه می شود.<br />\r\n*<strong>نکته: زاویه کالا در تصویر اصلی روبه رو یا مایل باشد. امکان قرار گیری بسته بندی کالا در تصویری اصلی کنار کالا وجود دارد</strong></p>\r\n\r\n<p style=\"text-align: center;\"><strong>تصویر درست:</strong></p>\r\n\r\n<p style=\"text-align: center;\"><img src=\"https://dkstatics-public.digikala.com/digikala-reviews/afebfea4f3e3a8086e07872a5dce286d413e47d9_1635259068.jpg\" style=\"height:150px; width:150px\" /></p>"
                  }
                ]
              }
            },
            "category_data": {
              "categoryTheme": "colored",
              "categoryThemeTranslated": "رنگ",
              "categoryTitle": "محافظ صفحه نمایش تبلت"
            },
            "allow_fake": true,
            "brand_other_id": 719,
            "show_colors": false,
            "dimension_level": "product",
            "dimension_config": null,
            "general_mefa": {
              "15434": {
                "value": 15434,
                "text": "2720000104932(محافظ (گلس) تلفن همراه - شناسه عمومی تولید داخل)",
                "general_id": "2720000104932"
              },
              "15435": {
                "value": 15435,
                "text": "2710000104933(محافظ (گلس) تلفن همراه - شناسه عمومی وارداتی)",
                "general_id": "2710000104933"
              }
            },
            "category_mefa_type": "general",
            "statuses": [
              {
                "value": "marketable",
                "text": "قابل فروش",
                "selected": true
              },
              {
                "value": "coming_soon",
                "text": "به زودی",
                "selected": false
              },
              {
                "value": "stop_production",
                "text": "توقف تولید",
                "selected": false
              }
            ],
            "fake_reasons": [
              {
                "value": "این محصول در سایت سازنده یافت نشد",
                "text": 1
              },
              {
                "value": "برند در عکس ها و مشخصات دیگر آورده نشده",
                "text": 6
              },
              {
                "value": "بسته بندی کالا با بسته بندی اصلی تفاوت دارد",
                "text": 2
              },
              {
                "value": "تغییرات LQA",
                "text": 22
              },
              {
                "value": "تفاوت در برند کالا با کالای اصلی",
                "text": 5
              },
              {
                "value": "ظاهر کالا با کالای اصلی تفاوت دارد",
                "text": 3
              },
              {
                "value": "کشور سازنده معتبر نیست",
                "text": 7
              },
              {
                "value": "کیفیت کالا یا بسته بندی آن پایین است",
                "text": 4
              }
            ],
            "platforms": [
              {
                "value": "digikala",
                "text": "دیجیکالا",
                "selected": true
              },
              {
                "value": "fresh",
                "text": "فِرِش",
                "selected": false
              }
            ]
          }
        }
      }';
    }
}