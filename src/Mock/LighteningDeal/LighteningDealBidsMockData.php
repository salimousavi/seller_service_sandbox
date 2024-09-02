<?php

namespace App\Mock\LighteningDeal;

use App\Mock\AMockV2;

class LighteningDealBidsMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
            "status": "ok",
            "data": {
                "sort_data": {
                    "sort_column": "id",
                    "sort_order": "desc",
                    "sort_columns": [
                        "id"
                    ]
                },
                "pager": {
                    "page": 1,
                    "item_per_page": 10,
                    "total_pages": 1,
                    "total_rows": 1
                },
                "form_data": {
                    "alpha": "1"
                },
                "items": [
                    {
                        "promotionId": 90149657,
                        "bidId": 110793,
                        "dkp": 11925207,
                        "productId": 11925207,
                        "date": {
                            "start": "2024-09-05 08:00:00",
                            "end": "2024-09-05 12:00:00",
                            "startHour": "08:00",
                            "endHour": "12:00",
                            "weekdayName": "پنج‌شنبه",
                            "day": 15,
                            "month": "شهریور"
                        },
                        "remainingTime": {
                            "days": 0,
                            "hours": 2,
                            "minutes": 5
                        },
                        "bidCount": 57,
                        "minBid": 7000000,
                        "maxBid": 7140000,
                        "autoRaise": 1,
                        "finalBidAmount": 0,
                        "status": "pending",
                        "paymentMethod": "wallet",
                        "isPaymentMethodEditable": true,
                        "availablePaymentMethods": [
                            "wallet"
                        ],
                        "productVariants": [
                            {
                                "title": "کتاب جادوگر شهر از اثر ال. فرانک باوم نشر افق | گارانتی اصالت و سلامت فیزیکی کالا",
                                "productVariantId": 42802744,
                                "dkpc": 42802744,
                                "price": 2300000,
                                "promotionPrice": 1800000,
                                "offPercent": 21,
                                "numberOfVariantsInPromotion": 5,
                                "remainingNumberOfVariantsInPromotion": 5,
                                "numberOfVariantsSoldInPromotion": 0,
                                "revenue": 0,
                                "image": "https://dkstatics-public.digikala.com/digikala-products/5d4990dcc4d1eb9f66b18c5f9b5c4b23fb014512_1688539016.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                            }
                        ]
                    }
                ],
                "meta_data": []
            }
        }';
    }
}