<?php

namespace App\Mock\LighteningDeal;

use App\Mock\AMockV2;

class LighteningDealProductMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "sort_data": {
            "sort_column": "latest",
            "sort_order": "desc",
            "sort_columns": ["latest", "bestSeller", "mostViewed", "mostStock", "userDemanded"]
          },
          "pager": {
            "page": 2,
            "item_per_page": 10,
            "total_pages": 11,
            "total_rows": 107
          },
          "form_data": [],
          "items": [
            {
              "id": 14400528,
              "title_fa": "قالب شمع مدل صدف طرح طاووس کد C10CM",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/b1d2736f999a1de2d8e66df1eca644ab7c684f3b_1707739527.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 4690000,
              "views": 0,
              "orders": 1,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 2
            },
            {
              "id": 14395260,
              "title_fa": "قالب شمع مدل تخم مرغ نوروز طرح هندسی و خورشید مجموعه 2 عددی",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/5f94ff69c7efa451724069947f9c7a2288c962da_1707721574.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 3490000,
              "views": 0,
              "orders": 0,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 10
            },
            {
              "id": 14390583,
              "title_fa": "قالب شمع مدل تخم مرغ هفت سین عید نوروز طرح بته جقه کد C 06CM",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/3eded79221071d4f51527bef83501dc9ff52f684_1707664791.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 2190000,
              "views": 0,
              "orders": 2,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 28
            },
            {
              "id": 14390055,
              "title_fa": "قالب شمع مدل تخم مرغ هفت سین عید نوروز طرح هندسی کد C 06CM",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/fee4c8d779519cfc8d84ba60d1bd55a6d212ca1c_1707658629.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 2199000,
              "views": 0,
              "orders": 0,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 29
            },
            {
              "id": 14367868,
              "title_fa": "قالب شمع مدل استوانه های شیاردار و استونه پیچ موج دار مجموعه 3 عددی",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/762c7ef4a1f53bdca5d40c62918f183495f88f09_1707424024.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 11990000,
              "views": 0,
              "orders": 2,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 4
            },
            {
              "id": 14367831,
              "title_fa": "قالب شمع مدل استوانه پیچ طرح موج کد C 15CM",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/32cc6ab2b1832a10751c3a47e0d53b09d26e3be0_1707421949.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 5670000,
              "views": 0,
              "orders": 2,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 3
            },
            {
              "id": 14367830,
              "title_fa": "قالب شمع مدل استوانه شیاردار کد C 10-15CM مجموعه 2 عددی",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/93fe2bb953c41245f5067cd4f122cfb5cbbdbb15_1707423567.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 7990000,
              "views": 0,
              "orders": 1,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 5
            },
            {
              "id": 14367667,
              "title_fa": "قالب شمع مدل استوانه شیاردار طرح کله قندی کد C 15CM",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/4af8e7e445e8cf1f6b3465817928b440b10a509d_1707421410.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 5399000,
              "views": 0,
              "orders": 0,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 4
            },
            {
              "id": 14367343,
              "title_fa": "قالب شمع مدل استوانه منبت کد C 13CM",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/a08aa2dc6ca6af4805e2723f95c1f4ea2ed6fa02_1707418031.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 5270000,
              "views": 0,
              "orders": 1,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 7
            },
            {
              "id": 14367261,
              "title_fa": "قالب شمع مدل استند سکه هفت سین طرح نوروز مبارک کد C 10CM ",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/907187df2bcbfaefc4d32212cb6db29755c03326_1707417203.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 2950000,
              "views": 0,
              "orders": 1,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 2
            }
          ],
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
            "sort_column": "latest",
            "sort_order": "desc",
            "sort_columns": ["latest", "bestSeller", "mostViewed", "mostStock", "userDemanded"]
          },
          "pager": {
            "page": 2,
            "item_per_page": 10,
            "total_pages": 11,
            "total_rows": 107
          },
          "form_data": [],
          "items": [
            {
              "id": 14400528,
              "title_fa": "قالب شمع مدل صدف طرح طاووس کد C10CM",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/b1d2736f999a1de2d8e66df1eca644ab7c684f3b_1707739527.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 4690000,
              "views": 0,
              "orders": 1,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 2
            },
            {
              "id": 14395260,
              "title_fa": "قالب شمع مدل تخم مرغ نوروز طرح هندسی و خورشید مجموعه 2 عددی",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/5f94ff69c7efa451724069947f9c7a2288c962da_1707721574.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 3490000,
              "views": 0,
              "orders": 0,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 10
            },
            {
              "id": 14390583,
              "title_fa": "قالب شمع مدل تخم مرغ هفت سین عید نوروز طرح بته جقه کد C 06CM",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/3eded79221071d4f51527bef83501dc9ff52f684_1707664791.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 2190000,
              "views": 0,
              "orders": 2,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 28
            },
            {
              "id": 14390055,
              "title_fa": "قالب شمع مدل تخم مرغ هفت سین عید نوروز طرح هندسی کد C 06CM",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/fee4c8d779519cfc8d84ba60d1bd55a6d212ca1c_1707658629.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 2199000,
              "views": 0,
              "orders": 0,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 29
            },
            {
              "id": 14367868,
              "title_fa": "قالب شمع مدل استوانه های شیاردار و استونه پیچ موج دار مجموعه 3 عددی",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/762c7ef4a1f53bdca5d40c62918f183495f88f09_1707424024.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 11990000,
              "views": 0,
              "orders": 2,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 4
            },
            {
              "id": 14367831,
              "title_fa": "قالب شمع مدل استوانه پیچ طرح موج کد C 15CM",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/32cc6ab2b1832a10751c3a47e0d53b09d26e3be0_1707421949.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 5670000,
              "views": 0,
              "orders": 2,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 3
            },
            {
              "id": 14367830,
              "title_fa": "قالب شمع مدل استوانه شیاردار کد C 10-15CM مجموعه 2 عددی",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/93fe2bb953c41245f5067cd4f122cfb5cbbdbb15_1707423567.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 7990000,
              "views": 0,
              "orders": 1,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 5
            },
            {
              "id": 14367667,
              "title_fa": "قالب شمع مدل استوانه شیاردار طرح کله قندی کد C 15CM",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/4af8e7e445e8cf1f6b3465817928b440b10a509d_1707421410.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 5399000,
              "views": 0,
              "orders": 0,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 4
            },
            {
              "id": 14367343,
              "title_fa": "قالب شمع مدل استوانه منبت کد C 13CM",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/a08aa2dc6ca6af4805e2723f95c1f4ea2ed6fa02_1707418031.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 5270000,
              "views": 0,
              "orders": 1,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 7
            },
            {
              "id": 14367261,
              "title_fa": "قالب شمع مدل استند سکه هفت سین طرح نوروز مبارک کد C 10CM ",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/907187df2bcbfaefc4d32212cb6db29755c03326_1707417203.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 2950000,
              "views": 0,
              "orders": 1,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 2
            }
          ],
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
            "sort_column": "latest",
            "sort_order": "desc",
            "sort_columns": ["latest", "bestSeller", "mostViewed", "mostStock", "userDemanded"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 10,
            "total_pages": 3,
            "total_rows": 22
          },
          "form_data": {
            "q": "گل"
          },
          "items": [
            {
              "id": 13876195,
              "title_fa": "قالب شمع مدل گل آلاله رز و مارگاریت مجموعه 4 عددی",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/54ca4217e7929cfeec8e4ed73a2d1f914efbbb4b_1703573498.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 5180000,
              "views": 0,
              "orders": 6,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 16
            },
            {
              "id": 13980294,
              "title_fa": "قالب شمع مدل باغ گل مارسلا، گوی ساحل، استوانه شیاردار و کمرباریک کد C04 مجموعه چهار عددی",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/845b677143752dc5057a07a69e82b71bbf07e8e0_1704261091.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 14999000,
              "views": 0,
              "orders": 0,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 4
            },
            {
              "id": 13296241,
              "title_fa": "قالب شمع مدل ست گل آلاله، گل مارگاریت و گل رز کلاسیک کد F01 مجموعه 3 عددی",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/fe3d5fb08f3d7728c6ca8c78103041224a4e1684_1699499099.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 2899000,
              "views": 0,
              "orders": 11,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 61
            },
            {
              "id": 13946503,
              "title_fa": "قالب شمع مدل خرس تدی گل گلی کد C 04CM",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/e5b80f24fc7262c026ae47434338fcc762696957_1703999887.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 1130500,
              "views": 0,
              "orders": 2,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 16
            },
            {
              "id": 13942315,
              "title_fa": "قالب شمع مدل خرس تدی گل گلی قلب به دست کد C 06CM",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/a687ff538ee3bbe932fb0a6d5af70fb3b175c3e0_1703939589.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 2349400,
              "views": 0,
              "orders": 3,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 8
            },
            {
              "id": 10471022,
              "title_fa": "قالب شمع مدل سیلیکونی خرگوش گل به دست",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/afa263394c9680deb4ee808b2a55df733f951e1e_1674416934.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 3690000,
              "views": 0,
              "orders": 0,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 3
            },
            {
              "id": 13943009,
              "title_fa": "قالب شمع مدل خرس تدی گل گلی قلب به دست کد C 08CM",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/4acb8572870aca3d7465855ccf6483137aca1cd2_1703944612.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 3998800,
              "views": 0,
              "orders": 0,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 8
            },
            {
              "id": 14401191,
              "title_fa": "قالب شمع مدل استوانه منبت طرح اسلیمی گلدار کد C 12CM",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/6f90c00caea769fce86c90f8ce674b569bcd2449_1707744701.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 5666000,
              "views": 0,
              "orders": 0,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 11
            },
            {
              "id": 13895564,
              "title_fa": "قالب شمع مدل گوی اسپیرال و مارسلا گل بالا مجموعه 2 عددی",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/3050e6ea06bff43edf0a428f7325ec1d27e956da_1703664241.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 7999000,
              "views": 0,
              "orders": 0,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 2
            },
            {
              "id": 13946590,
              "title_fa": "قالب شمع مدل خرس تدی گل گلی کد C 06CM",
              "title_en": null,
              "image": "https://dkstatics-public.digikala.com/digikala-products/41ea1ff67abde31f8cdf9bcedf0b127da4a50f7e_1704001133.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60",
              "price": 2190000,
              "views": 0,
              "orders": 2,
              "seller_id": 1044240,
              "disabled": false,
              "validationMessages": [],
              "stock": 6
            }
          ],
          "meta_data": []
        }
      }';
    }
}