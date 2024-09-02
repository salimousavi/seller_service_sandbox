<?php

namespace App\Mock\LighteningDeal;

use App\Mock\AMockV2;

class LighteningDealPromotionsMockData extends AMockV2
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
                    "item_per_page": 1000,
                    "total_pages": 1,
                    "total_rows": 5
                },
                "form_data": [],
                "items": [
                    {
                        "startDate": "1400/06/15",
                        "day": 15,
                        "month": "شهریور",
                        "year": 1400,
                        "weekdayName": "پنج‌شنبه",
                        "dayOfWeek": 5,
                        "message": "",
                        "timeslots": {
                            "12349656": {
                                "startAt": "2024-09-05 00:00:00",
                                "endAt": "2024-09-05 08:00:00",
                                "startAtTime": "00:00",
                                "endAtTime": "08:00",
                                "promotionId": 12349656,
                                "bidCount": 68,
                                "maxBid": 28500000,
                                "minBidToWin": 16000000,
                                "minAllowableBid": 7000000,
                                "maxAllowableBid": 30000000
                            },
                            "12349657": {
                                "startAt": "2024-09-05 08:00:00",
                                "endAt": "2024-09-05 12:00:00",
                                "startAtTime": "08:00",
                                "endAtTime": "12:00",
                                "promotionId": 12349657,
                                "bidCount": 56,
                                "maxBid": 30000000,
                                "minBidToWin": 16200000,
                                "minAllowableBid": 7000000,
                                "maxAllowableBid": 30000000
                            },
                            "12349658": {
                                "startAt": "2024-09-05 12:00:00",
                                "endAt": "2024-09-05 15:30:00",
                                "startAtTime": "12:00",
                                "endAtTime": "15:30",
                                "promotionId": 12349658,
                                "bidCount": 66,
                                "maxBid": 30000000,
                                "minBidToWin": 16800000,
                                "minAllowableBid": 7000000,
                                "maxAllowableBid": 30000000
                            },
                            "12349659": {
                                "startAt": "2024-09-05 15:30:00",
                                "endAt": "2024-09-05 19:30:00",
                                "startAtTime": "15:30",
                                "endAtTime": "19:30",
                                "promotionId": 12349659,
                                "bidCount": 64,
                                "maxBid": 30000000,
                                "minBidToWin": 15600000,
                                "minAllowableBid": 7000000,
                                "maxAllowableBid": 30000000
                            },
                            "12349660": {
                                "startAt": "2024-09-05 19:30:00",
                                "endAt": "2024-09-06 00:00:00",
                                "startAtTime": "19:30",
                                "endAtTime": "00:00",
                                "promotionId": 12349660,
                                "bidCount": 49,
                                "maxBid": 28500000,
                                "minBidToWin": 13300000,
                                "minAllowableBid": 7000000,
                                "maxAllowableBid": 30000000
                            }
                        }
                    },
                    {
                        "startDate": "1400/06/16",
                        "day": 16,
                        "month": "شهریور",
                        "year": 1400,
                        "weekdayName": "جمعه",
                        "dayOfWeek": 6,
                        "message": "",
                        "timeslots": {
                            "12349674": {
                                "startAt": "2024-09-06 00:00:00",
                                "endAt": "2024-09-06 08:00:00",
                                "startAtTime": "00:00",
                                "endAtTime": "08:00",
                                "promotionId": 12349674,
                                "bidCount": 63,
                                "maxBid": 30000000,
                                "minBidToWin": 16200000,
                                "minAllowableBid": 7000000,
                                "maxAllowableBid": 30000000
                            },
                            "12349675": {
                                "startAt": "2024-09-06 08:00:00",
                                "endAt": "2024-09-06 12:00:00",
                                "startAtTime": "08:00",
                                "endAtTime": "12:00",
                                "promotionId": 12349675,
                                "bidCount": 64,
                                "maxBid": 28500000,
                                "minBidToWin": 15600000,
                                "minAllowableBid": 7000000,
                                "maxAllowableBid": 30000000
                            },
                            "12349676": {
                                "startAt": "2024-09-06 12:00:00",
                                "endAt": "2024-09-06 15:30:00",
                                "startAtTime": "12:00",
                                "endAtTime": "15:30",
                                "promotionId": 12349676,
                                "bidCount": 58,
                                "maxBid": 28500000,
                                "minBidToWin": 16000000,
                                "minAllowableBid": 7000000,
                                "maxAllowableBid": 30000000
                            },
                            "12349677": {
                                "startAt": "2024-09-06 15:30:00",
                                "endAt": "2024-09-06 19:30:00",
                                "startAtTime": "15:30",
                                "endAtTime": "19:30",
                                "promotionId": 12349677,
                                "bidCount": 63,
                                "maxBid": 30000000,
                                "minBidToWin": 16500000,
                                "minAllowableBid": 7000000,
                                "maxAllowableBid": 30000000
                            },
                            "12349678": {
                                "startAt": "2024-09-06 19:30:00",
                                "endAt": "2024-09-07 00:00:00",
                                "startAtTime": "19:30",
                                "endAtTime": "00:00",
                                "promotionId": 12349678,
                                "bidCount": 73,
                                "maxBid": 30000000,
                                "minBidToWin": 17000000,
                                "minAllowableBid": 7000000,
                                "maxAllowableBid": 30000000
                            }
                        }
                    },
                    {
                        "startDate": "1400/06/17",
                        "day": 17,
                        "month": "شهریور",
                        "year": 1400,
                        "weekdayName": "شنبه",
                        "dayOfWeek": 0,
                        "message": "",
                        "timeslots": {
                            "12349683": {
                                "startAt": "2024-09-07 00:00:00",
                                "endAt": "2024-09-07 08:00:00",
                                "startAtTime": "00:00",
                                "endAtTime": "08:00",
                                "promotionId": 12349683,
                                "bidCount": 63,
                                "maxBid": 30000000,
                                "minBidToWin": 16000000,
                                "minAllowableBid": 10000000,
                                "maxAllowableBid": 30000000
                            },
                            "12349684": {
                                "startAt": "2024-09-07 08:00:00",
                                "endAt": "2024-09-07 12:00:00",
                                "startAtTime": "08:00",
                                "endAtTime": "12:00",
                                "promotionId": 12349684,
                                "bidCount": 86,
                                "maxBid": 30000000,
                                "minBidToWin": 19200000,
                                "minAllowableBid": 10000000,
                                "maxAllowableBid": 30000000
                            },
                            "12349685": {
                                "startAt": "2024-09-07 12:00:00",
                                "endAt": "2024-09-07 15:30:00",
                                "startAtTime": "12:00",
                                "endAtTime": "15:30",
                                "promotionId": 12349685,
                                "bidCount": 65,
                                "maxBid": 27000000,
                                "minBidToWin": 16200000,
                                "minAllowableBid": 10000000,
                                "maxAllowableBid": 30000000
                            },
                            "12349686": {
                                "startAt": "2024-09-07 15:30:00",
                                "endAt": "2024-09-07 19:30:00",
                                "startAtTime": "15:30",
                                "endAtTime": "19:30",
                                "promotionId": 12349686,
                                "bidCount": 77,
                                "maxBid": 28500000,
                                "minBidToWin": 16900000,
                                "minAllowableBid": 10000000,
                                "maxAllowableBid": 30000000
                            },
                            "12349687": {
                                "startAt": "2024-09-07 19:30:00",
                                "endAt": "2024-09-08 00:00:00",
                                "startAtTime": "19:30",
                                "endAtTime": "00:00",
                                "promotionId": 12349687,
                                "bidCount": 65,
                                "maxBid": 28500000,
                                "minBidToWin": 17100000,
                                "minAllowableBid": 10000000,
                                "maxAllowableBid": 30000000
                            }
                        }
                    }
                ],
                "meta_data": []
            }
        }';
    }
}