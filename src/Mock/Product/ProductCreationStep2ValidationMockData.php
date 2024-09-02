<?php

namespace App\Mock\Product;

use App\Mock\AMock;
use App\Mock\AMockV2;

class ProductCreationStep2ValidationMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "force_url": null,
          "is_valid": true,
          "errors": [],
          "bind": {
            "vat": 9,
            "shipping_nature_id": 1,
            "is_created_by_cf": false,
            "product_nature": "non_fmcg",
            "sensitivity": "normal",
            "status": "marketable",
            "active": true,
            "active_digistyle": false,
            "product_type": "product",
            "site": "digikala",
            "platforms": ["digikala"],
            "fake_reasons": [],
            "category_id": 77,
            "division_id": null,
            "model": "MAHOOT AMD-FullSkin Cover Sticker for Motorola Moto G14",
            "brand_id": 5288,
            "product_type_ids": [13612],
            "is_iranian": true,
            "fake": false,
            "general_mefa_id": 15432,
            "exclusive_mefa_id": "",
            "package_width": 11,
            "package_height": 1,
            "package_length": 18,
            "package_weight": 20,
            "description": "این محصول برپوش طرح مدل برند ای ام دی (AMD Brand) از سری تکنولوژی است که توسط دپارتمان طراحی ماهوت طراحی شده است.در توضیح ساختار فنی فول اسکین طرح می\u200Cتوان گفت تصویر بر روی لایه اولِ برپوش، مستقیما با یک تکنیک منحصربفرد چاپ می\u200Cشود. همچنین بخش چسبنده دارای تکنولوژی Bubble Free است که نصب را آسان و چسبندگی را حداکثر می\u200Cکند و هیچ اثری از چسب، بر روی گوشی هوشمند باقی نمی\u200Cگذارد. در لایه دوم یک ورق لمینت گرم، با دستگا\u200Cه\u200Cهای مخصوص در دمای بالا بر روی لایه اول اعمال می شود تا مقاومت در برابر مواد شیمیایی و خط و خش حداکثر شود. این محصول نوعي استيكر(برچسب) چندلايه است و به منظور پوشش تمامی وجوه گوشي هوشمند ساخته شده است و كناره\u200Cهاي دستگاه را هم پوشش مي\u200Cدهد.هدف استفاده از آن ايجاد طرح، رنگ و احساسي نو براي دستگاه هوشمند است، در حالي كه زبان طراحي و ظرافت گوشي هوشمند حفظ شود. لازم به ذکر است که فول اسکین با وجود چسبندگي بالا هيچي اثري از خود هنگام جدا شدن برجاي نمي\u200Cگذارد. همچنین جنس فول اسکین از پليكربنات است و اين ماده تاثير قابل توجهي بر روي آنتن دهي و يا دفع حرارت گوشي هوشمند نخواهد داشت. نصب این محصول دشوار است و نیاز به دقت و تمرین دارد به همین منظور درون جعبه یک عدد فول اسکین آزمایشی برای تمرین نصب قرار دارد."
          },
          "draft_product_id": 654070
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "force_url": null,
          "is_valid": true,
          "errors": [],
          "bind": {
            "vat": 9,
            "shipping_nature_id": 1,
            "is_created_by_cf": false,
            "product_nature": "non_fmcg",
            "sensitivity": "sensitive",
            "status": "marketable",
            "active": true,
            "active_digistyle": false,
            "product_type": "product",
            "site": "digikala",
            "platforms": ["digikala"],
            "fake_reasons": [],
            "category_id": 9955,
            "division_id": 3202,
            "model": "مدل سه گربه",
            "brand_id": 719,
            "product_type_ids": [20392],
            "color_id": 9,
            "is_iranian": true,
            "fake": false,
            "general_mefa_id": 7944,
            "exclusive_mefa_id": "",
            "package_width": 15,
            "package_height": 5,
            "package_length": 20,
            "package_weight": 200,
            "description": "تیشرت و شلوارک سه گربه . با جنس و کیفیت هالی مناسب برای دختران سایز 45و50.جنس تیشرت و شلوارک نخ پنبه اعلاس که کودک شما احساس راحتی زیادی می کند..\nاین تیشرت شلوارک در رنگ بندی قرمز ، صورتی،سرخابی،گلبهی  موجود می باشد."
          },
          "draft_product_id": 654063
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "force_url": null,
          "is_valid": true,
          "errors": [],
          "bind": {
            "vat": 9,
            "shipping_nature_id": 1,
            "is_created_by_cf": false,
            "product_nature": "non_fmcg",
            "sensitivity": "normal",
            "status": "marketable",
            "active": true,
            "active_digistyle": false,
            "product_type": "product",
            "site": "digikala",
            "platforms": ["digikala"],
            "fake_reasons": [],
            "category_id": 77,
            "division_id": null,
            "model": "فانتزی",
            "brand_id": 719,
            "product_type_ids": [3540],
            "is_iranian": true,
            "fake": false,
            "general_mefa_id": 15432,
            "exclusive_mefa_id": "",
            "package_width": 10,
            "package_height": 3,
            "package_length": 20,
            "package_weight": 30,
            "description": "قاب فوق محافظ بسیار خوبی برای موبایل شما می\u200Cباشد همچنین از ماندگاری رنگ بالایی برخوردار است پشت قاب از یک فلز استفاده شده که استحکام قاب را در ضربات سنگین بسیار بالا میبرد در کل استفاده از این قاب به دلیل استفاده از متریال خوب حس خوبی به شما انتقال میدهد .",
            "advantages": [],
            "disadvantages": []
          },
          "draft_product_id": 654059
        }
      }';
    }
}