<?php

namespace App\Mock\LighteningDeal;

use App\Mock\AMockV2;

class LighteningDealProductMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
            "status": "ok",
            "data": {
                "sort_data": {
                    "sort_column": "latest",
                    "sort_order": "desc",
                    "sort_columns": [
                        "latest",
                        "bestSeller",
                        "mostViewed",
                        "mostStock",
                        "userDemanded"
                    ]
                },
                "pager": {
                    "page": 1,
                    "item_per_page": 10,
                    "total_pages": 1793,
                    "total_rows": 17922
                },
                "form_data": [],
                "items": [
                    {
                        "id": 1234568,
                        "title_fa": "کتاب چگونه هیولای خشم را گرسنه بگذاریم؟ اثر کیت کالینز-دانلی نشر نسل نواندیش",
                        "title_en": null,
                        "image": "https://dkstatics-public.digikala.com/digikala-products/420ae28ed0eb93f5e4cfc7cb8fcea299e90d2b7d_1689494808.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                        "price": 0,
                        "views": 0,
                        "orders": 0,
                        "seller_id": 1234,
                        "disabled": true,
                        "validationMessages": [],
                        "stock": 4
                    },
                    {
                        "id": 1234567,
                        "title_fa": "کتاب جادوگر شهر از اثر ال. فرانک باوم نشر افق",
                        "title_en": null,
                        "image": "https://dkstatics-public.digikala.com/digikala-products/5d4990dcc4d1eb9f66b18c5f9b5c4b23fb014512_1688539016.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                        "price": 2250000,
                        "views": 0,
                        "orders": 0,
                        "seller_id": 1234,
                        "disabled": false,
                        "validationMessages": [],
                        "stock": 6
                    },
                    {
                        "id": 1234569,
                        "title_fa": "کتاب در خدمت تخت طاووس اثر پرویز راجی انتشارات فرهنگ جاوید",
                        "title_en": null,
                        "image": "https://dkstatics-public.digikala.com/digikala-products/cbead2a546f80eec23ec56cd7c03870c6c61d299_1688471709.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
                        "price": 2685400,
                        "views": 0,
                        "orders": 0,
                        "seller_id": 1234,
                        "disabled": false,
                        "validationMessages": [],
                        "stock": 3
                    }
                ],
                "meta_data": []
            }
        }';
    }
}