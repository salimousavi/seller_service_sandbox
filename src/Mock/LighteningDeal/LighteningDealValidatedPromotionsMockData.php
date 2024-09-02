<?php

namespace App\Mock\LighteningDeal;

use App\Mock\AMockV2;

class LighteningDealValidatedPromotionsMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "sort_data": {
            "sort_column": "id",
            "sort_order": "desc",
            "sort_columns": ["id"]
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
              "startDate": "1403/05/15",
              "day": 15,
              "month": "مرداد",
              "year": 1403,
              "weekdayName": "دو\u200Cشنبه",
              "dayOfWeek": 2,
              "message": "",
              "timeslots": {
                "157135654": {
                  "startAt": "2024-08-05 00:00:00",
                  "endAt": "2024-08-05 08:00:00",
                  "startAtTime": "00:00",
                  "endAtTime": "08:00",
                  "promotionId": 157135654,
                  "bidCount": 14,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157135655": {
                  "startAt": "2024-08-05 08:00:00",
                  "endAt": "2024-08-05 12:00:00",
                  "startAtTime": "08:00",
                  "endAtTime": "12:00",
                  "promotionId": 157135655,
                  "bidCount": 13,
                  "maxBid": 19800000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157135656": {
                  "startAt": "2024-08-05 12:00:00",
                  "endAt": "2024-08-05 15:30:00",
                  "startAtTime": "12:00",
                  "endAtTime": "15:30",
                  "promotionId": 157135656,
                  "bidCount": 11,
                  "maxBid": 19800000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157135657": {
                  "startAt": "2024-08-05 15:30:00",
                  "endAt": "2024-08-05 19:30:00",
                  "startAtTime": "15:30",
                  "endAtTime": "19:30",
                  "promotionId": 157135657,
                  "bidCount": 15,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157135658": {
                  "startAt": "2024-08-05 19:30:00",
                  "endAt": "2024-08-06 00:00:00",
                  "startAtTime": "19:30",
                  "endAtTime": "00:00",
                  "promotionId": 157135658,
                  "bidCount": 15,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                }
              }
            },
            {
              "startDate": "1403/05/16",
              "day": 16,
              "month": "مرداد",
              "year": 1403,
              "weekdayName": "سه\u200Cشنبه",
              "dayOfWeek": 3,
              "message": "",
              "timeslots": {
                "157312488": {
                  "startAt": "2024-08-06 00:00:00",
                  "endAt": "2024-08-06 08:00:00",
                  "startAtTime": "00:00",
                  "endAtTime": "08:00",
                  "promotionId": 157312488,
                  "bidCount": 6,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157312489": {
                  "startAt": "2024-08-06 08:00:00",
                  "endAt": "2024-08-06 12:00:00",
                  "startAtTime": "08:00",
                  "endAtTime": "12:00",
                  "promotionId": 157312489,
                  "bidCount": 4,
                  "maxBid": 11110000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157312491": {
                  "startAt": "2024-08-06 12:00:00",
                  "endAt": "2024-08-06 15:30:00",
                  "startAtTime": "12:00",
                  "endAtTime": "15:30",
                  "promotionId": 157312491,
                  "bidCount": 3,
                  "maxBid": 11110000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157312492": {
                  "startAt": "2024-08-06 15:30:00",
                  "endAt": "2024-08-06 19:30:00",
                  "startAtTime": "15:30",
                  "endAtTime": "19:30",
                  "promotionId": 157312492,
                  "bidCount": 3,
                  "maxBid": 11110000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157312493": {
                  "startAt": "2024-08-06 19:30:00",
                  "endAt": "2024-08-07 00:00:00",
                  "startAtTime": "19:30",
                  "endAtTime": "00:00",
                  "promotionId": 157312493,
                  "bidCount": 7,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                }
              }
            },
            {
              "startDate": "1403/05/17",
              "day": 17,
              "month": "مرداد",
              "year": 1403,
              "weekdayName": "چهار\u200Cشنبه",
              "dayOfWeek": 4,
              "message": "",
              "timeslots": {
                "157566408": {
                  "startAt": "2024-08-07 00:00:00",
                  "endAt": "2024-08-07 08:00:00",
                  "startAtTime": "00:00",
                  "endAtTime": "08:00",
                  "promotionId": 157566408,
                  "bidCount": 3,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157566409": {
                  "startAt": "2024-08-07 08:00:00",
                  "endAt": "2024-08-07 12:00:00",
                  "startAtTime": "08:00",
                  "endAtTime": "12:00",
                  "promotionId": 157566409,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157566410": {
                  "startAt": "2024-08-07 12:00:00",
                  "endAt": "2024-08-07 15:30:00",
                  "startAtTime": "12:00",
                  "endAtTime": "15:30",
                  "promotionId": 157566410,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157566411": {
                  "startAt": "2024-08-07 15:30:00",
                  "endAt": "2024-08-07 19:30:00",
                  "startAtTime": "15:30",
                  "endAtTime": "19:30",
                  "promotionId": 157566411,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157566412": {
                  "startAt": "2024-08-07 19:30:00",
                  "endAt": "2024-08-08 00:00:00",
                  "startAtTime": "19:30",
                  "endAtTime": "00:00",
                  "promotionId": 157566412,
                  "bidCount": 7,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                }
              }
            },
            {
              "startDate": "1403/05/18",
              "day": 18,
              "month": "مرداد",
              "year": 1403,
              "weekdayName": "پنج\u200Cشنبه",
              "dayOfWeek": 5,
              "message": "",
              "timeslots": {
                "157832876": {
                  "startAt": "2024-08-08 00:00:00",
                  "endAt": "2024-08-08 08:00:00",
                  "startAtTime": "00:00",
                  "endAtTime": "08:00",
                  "promotionId": 157832876,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157832877": {
                  "startAt": "2024-08-08 08:00:00",
                  "endAt": "2024-08-08 12:00:00",
                  "startAtTime": "08:00",
                  "endAtTime": "12:00",
                  "promotionId": 157832877,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157832878": {
                  "startAt": "2024-08-08 12:00:00",
                  "endAt": "2024-08-08 15:30:00",
                  "startAtTime": "12:00",
                  "endAtTime": "15:30",
                  "promotionId": 157832878,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157832879": {
                  "startAt": "2024-08-08 15:30:00",
                  "endAt": "2024-08-08 19:30:00",
                  "startAtTime": "15:30",
                  "endAtTime": "19:30",
                  "promotionId": 157832879,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157832880": {
                  "startAt": "2024-08-08 19:30:00",
                  "endAt": "2024-08-09 00:00:00",
                  "startAtTime": "19:30",
                  "endAtTime": "00:00",
                  "promotionId": 157832880,
                  "bidCount": 3,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                }
              }
            },
            {
              "startDate": "1403/05/19",
              "day": 19,
              "month": "مرداد",
              "year": 1403,
              "weekdayName": "جمعه",
              "dayOfWeek": 6,
              "message": "",
              "timeslots": {
                "158035106": {
                  "startAt": "2024-08-09 00:00:00",
                  "endAt": "2024-08-09 08:00:00",
                  "startAtTime": "00:00",
                  "endAtTime": "08:00",
                  "promotionId": 158035106,
                  "bidCount": 1,
                  "maxBid": 3000000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "158035107": {
                  "startAt": "2024-08-09 08:00:00",
                  "endAt": "2024-08-09 12:00:00",
                  "startAtTime": "08:00",
                  "endAtTime": "12:00",
                  "promotionId": 158035107,
                  "bidCount": 1,
                  "maxBid": 3000000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "158035108": {
                  "startAt": "2024-08-09 12:00:00",
                  "endAt": "2024-08-09 15:30:00",
                  "startAtTime": "12:00",
                  "endAtTime": "15:30",
                  "promotionId": 158035108,
                  "bidCount": 1,
                  "maxBid": 3000000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "158035109": {
                  "startAt": "2024-08-09 15:30:00",
                  "endAt": "2024-08-09 19:30:00",
                  "startAtTime": "15:30",
                  "endAtTime": "19:30",
                  "promotionId": 158035109,
                  "bidCount": 1,
                  "maxBid": 3000000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "158035110": {
                  "startAt": "2024-08-09 19:30:00",
                  "endAt": "2024-08-10 00:00:00",
                  "startAtTime": "19:30",
                  "endAtTime": "00:00",
                  "promotionId": 158035110,
                  "bidCount": 1,
                  "maxBid": 3000000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                }
              }
            }
          ],
          "meta_data": []
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "sort_data": {
            "sort_column": "id",
            "sort_order": "desc",
            "sort_columns": ["id"]
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
              "startDate": "1403/05/15",
              "day": 15,
              "month": "مرداد",
              "year": 1403,
              "weekdayName": "دو\u200Cشنبه",
              "dayOfWeek": 2,
              "message": "",
              "timeslots": {
                "157135654": {
                  "startAt": "2024-08-05 00:00:00",
                  "endAt": "2024-08-05 08:00:00",
                  "startAtTime": "00:00",
                  "endAtTime": "08:00",
                  "promotionId": 157135654,
                  "bidCount": 14,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157135655": {
                  "startAt": "2024-08-05 08:00:00",
                  "endAt": "2024-08-05 12:00:00",
                  "startAtTime": "08:00",
                  "endAtTime": "12:00",
                  "promotionId": 157135655,
                  "bidCount": 13,
                  "maxBid": 19800000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157135656": {
                  "startAt": "2024-08-05 12:00:00",
                  "endAt": "2024-08-05 15:30:00",
                  "startAtTime": "12:00",
                  "endAtTime": "15:30",
                  "promotionId": 157135656,
                  "bidCount": 11,
                  "maxBid": 19800000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157135657": {
                  "startAt": "2024-08-05 15:30:00",
                  "endAt": "2024-08-05 19:30:00",
                  "startAtTime": "15:30",
                  "endAtTime": "19:30",
                  "promotionId": 157135657,
                  "bidCount": 15,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157135658": {
                  "startAt": "2024-08-05 19:30:00",
                  "endAt": "2024-08-06 00:00:00",
                  "startAtTime": "19:30",
                  "endAtTime": "00:00",
                  "promotionId": 157135658,
                  "bidCount": 15,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                }
              }
            },
            {
              "startDate": "1403/05/16",
              "day": 16,
              "month": "مرداد",
              "year": 1403,
              "weekdayName": "سه\u200Cشنبه",
              "dayOfWeek": 3,
              "message": "",
              "timeslots": {
                "157312488": {
                  "startAt": "2024-08-06 00:00:00",
                  "endAt": "2024-08-06 08:00:00",
                  "startAtTime": "00:00",
                  "endAtTime": "08:00",
                  "promotionId": 157312488,
                  "bidCount": 6,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157312489": {
                  "startAt": "2024-08-06 08:00:00",
                  "endAt": "2024-08-06 12:00:00",
                  "startAtTime": "08:00",
                  "endAtTime": "12:00",
                  "promotionId": 157312489,
                  "bidCount": 4,
                  "maxBid": 11110000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157312491": {
                  "startAt": "2024-08-06 12:00:00",
                  "endAt": "2024-08-06 15:30:00",
                  "startAtTime": "12:00",
                  "endAtTime": "15:30",
                  "promotionId": 157312491,
                  "bidCount": 3,
                  "maxBid": 11110000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157312492": {
                  "startAt": "2024-08-06 15:30:00",
                  "endAt": "2024-08-06 19:30:00",
                  "startAtTime": "15:30",
                  "endAtTime": "19:30",
                  "promotionId": 157312492,
                  "bidCount": 3,
                  "maxBid": 11110000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157312493": {
                  "startAt": "2024-08-06 19:30:00",
                  "endAt": "2024-08-07 00:00:00",
                  "startAtTime": "19:30",
                  "endAtTime": "00:00",
                  "promotionId": 157312493,
                  "bidCount": 7,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                }
              }
            },
            {
              "startDate": "1403/05/17",
              "day": 17,
              "month": "مرداد",
              "year": 1403,
              "weekdayName": "چهار\u200Cشنبه",
              "dayOfWeek": 4,
              "message": "",
              "timeslots": {
                "157566408": {
                  "startAt": "2024-08-07 00:00:00",
                  "endAt": "2024-08-07 08:00:00",
                  "startAtTime": "00:00",
                  "endAtTime": "08:00",
                  "promotionId": 157566408,
                  "bidCount": 3,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157566409": {
                  "startAt": "2024-08-07 08:00:00",
                  "endAt": "2024-08-07 12:00:00",
                  "startAtTime": "08:00",
                  "endAtTime": "12:00",
                  "promotionId": 157566409,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157566410": {
                  "startAt": "2024-08-07 12:00:00",
                  "endAt": "2024-08-07 15:30:00",
                  "startAtTime": "12:00",
                  "endAtTime": "15:30",
                  "promotionId": 157566410,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157566411": {
                  "startAt": "2024-08-07 15:30:00",
                  "endAt": "2024-08-07 19:30:00",
                  "startAtTime": "15:30",
                  "endAtTime": "19:30",
                  "promotionId": 157566411,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157566412": {
                  "startAt": "2024-08-07 19:30:00",
                  "endAt": "2024-08-08 00:00:00",
                  "startAtTime": "19:30",
                  "endAtTime": "00:00",
                  "promotionId": 157566412,
                  "bidCount": 7,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                }
              }
            },
            {
              "startDate": "1403/05/18",
              "day": 18,
              "month": "مرداد",
              "year": 1403,
              "weekdayName": "پنج\u200Cشنبه",
              "dayOfWeek": 5,
              "message": "",
              "timeslots": {
                "157832876": {
                  "startAt": "2024-08-08 00:00:00",
                  "endAt": "2024-08-08 08:00:00",
                  "startAtTime": "00:00",
                  "endAtTime": "08:00",
                  "promotionId": 157832876,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157832877": {
                  "startAt": "2024-08-08 08:00:00",
                  "endAt": "2024-08-08 12:00:00",
                  "startAtTime": "08:00",
                  "endAtTime": "12:00",
                  "promotionId": 157832877,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157832878": {
                  "startAt": "2024-08-08 12:00:00",
                  "endAt": "2024-08-08 15:30:00",
                  "startAtTime": "12:00",
                  "endAtTime": "15:30",
                  "promotionId": 157832878,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157832879": {
                  "startAt": "2024-08-08 15:30:00",
                  "endAt": "2024-08-08 19:30:00",
                  "startAtTime": "15:30",
                  "endAtTime": "19:30",
                  "promotionId": 157832879,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157832880": {
                  "startAt": "2024-08-08 19:30:00",
                  "endAt": "2024-08-09 00:00:00",
                  "startAtTime": "19:30",
                  "endAtTime": "00:00",
                  "promotionId": 157832880,
                  "bidCount": 3,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                }
              }
            },
            {
              "startDate": "1403/05/19",
              "day": 19,
              "month": "مرداد",
              "year": 1403,
              "weekdayName": "جمعه",
              "dayOfWeek": 6,
              "message": "",
              "timeslots": {
                "158035106": {
                  "startAt": "2024-08-09 00:00:00",
                  "endAt": "2024-08-09 08:00:00",
                  "startAtTime": "00:00",
                  "endAtTime": "08:00",
                  "promotionId": 158035106,
                  "bidCount": 1,
                  "maxBid": 3000000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "158035107": {
                  "startAt": "2024-08-09 08:00:00",
                  "endAt": "2024-08-09 12:00:00",
                  "startAtTime": "08:00",
                  "endAtTime": "12:00",
                  "promotionId": 158035107,
                  "bidCount": 1,
                  "maxBid": 3000000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "158035108": {
                  "startAt": "2024-08-09 12:00:00",
                  "endAt": "2024-08-09 15:30:00",
                  "startAtTime": "12:00",
                  "endAtTime": "15:30",
                  "promotionId": 158035108,
                  "bidCount": 1,
                  "maxBid": 3000000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "158035109": {
                  "startAt": "2024-08-09 15:30:00",
                  "endAt": "2024-08-09 19:30:00",
                  "startAtTime": "15:30",
                  "endAtTime": "19:30",
                  "promotionId": 158035109,
                  "bidCount": 1,
                  "maxBid": 3000000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "158035110": {
                  "startAt": "2024-08-09 19:30:00",
                  "endAt": "2024-08-10 00:00:00",
                  "startAtTime": "19:30",
                  "endAtTime": "00:00",
                  "promotionId": 158035110,
                  "bidCount": 1,
                  "maxBid": 3000000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                }
              }
            }
          ],
          "meta_data": []
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "sort_data": {
            "sort_column": "id",
            "sort_order": "desc",
            "sort_columns": ["id"]
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
              "startDate": "1403/05/15",
              "day": 15,
              "month": "مرداد",
              "year": 1403,
              "weekdayName": "دو\u200Cشنبه",
              "dayOfWeek": 2,
              "message": "",
              "timeslots": {
                "157135654": {
                  "startAt": "2024-08-05 00:00:00",
                  "endAt": "2024-08-05 08:00:00",
                  "startAtTime": "00:00",
                  "endAtTime": "08:00",
                  "promotionId": 157135654,
                  "bidCount": 13,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157135655": {
                  "startAt": "2024-08-05 08:00:00",
                  "endAt": "2024-08-05 12:00:00",
                  "startAtTime": "08:00",
                  "endAtTime": "12:00",
                  "promotionId": 157135655,
                  "bidCount": 13,
                  "maxBid": 19800000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157135656": {
                  "startAt": "2024-08-05 12:00:00",
                  "endAt": "2024-08-05 15:30:00",
                  "startAtTime": "12:00",
                  "endAtTime": "15:30",
                  "promotionId": 157135656,
                  "bidCount": 11,
                  "maxBid": 19800000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157135657": {
                  "startAt": "2024-08-05 15:30:00",
                  "endAt": "2024-08-05 19:30:00",
                  "startAtTime": "15:30",
                  "endAtTime": "19:30",
                  "promotionId": 157135657,
                  "bidCount": 14,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157135658": {
                  "startAt": "2024-08-05 19:30:00",
                  "endAt": "2024-08-06 00:00:00",
                  "startAtTime": "19:30",
                  "endAtTime": "00:00",
                  "promotionId": 157135658,
                  "bidCount": 14,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                }
              }
            },
            {
              "startDate": "1403/05/16",
              "day": 16,
              "month": "مرداد",
              "year": 1403,
              "weekdayName": "سه\u200Cشنبه",
              "dayOfWeek": 3,
              "message": "",
              "timeslots": {
                "157312488": {
                  "startAt": "2024-08-06 00:00:00",
                  "endAt": "2024-08-06 08:00:00",
                  "startAtTime": "00:00",
                  "endAtTime": "08:00",
                  "promotionId": 157312488,
                  "bidCount": 6,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157312489": {
                  "startAt": "2024-08-06 08:00:00",
                  "endAt": "2024-08-06 12:00:00",
                  "startAtTime": "08:00",
                  "endAtTime": "12:00",
                  "promotionId": 157312489,
                  "bidCount": 4,
                  "maxBid": 11110000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157312491": {
                  "startAt": "2024-08-06 12:00:00",
                  "endAt": "2024-08-06 15:30:00",
                  "startAtTime": "12:00",
                  "endAtTime": "15:30",
                  "promotionId": 157312491,
                  "bidCount": 3,
                  "maxBid": 11110000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157312492": {
                  "startAt": "2024-08-06 15:30:00",
                  "endAt": "2024-08-06 19:30:00",
                  "startAtTime": "15:30",
                  "endAtTime": "19:30",
                  "promotionId": 157312492,
                  "bidCount": 3,
                  "maxBid": 11110000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157312493": {
                  "startAt": "2024-08-06 19:30:00",
                  "endAt": "2024-08-07 00:00:00",
                  "startAtTime": "19:30",
                  "endAtTime": "00:00",
                  "promotionId": 157312493,
                  "bidCount": 7,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                }
              }
            },
            {
              "startDate": "1403/05/17",
              "day": 17,
              "month": "مرداد",
              "year": 1403,
              "weekdayName": "چهار\u200Cشنبه",
              "dayOfWeek": 4,
              "message": "",
              "timeslots": {
                "157566408": {
                  "startAt": "2024-08-07 00:00:00",
                  "endAt": "2024-08-07 08:00:00",
                  "startAtTime": "00:00",
                  "endAtTime": "08:00",
                  "promotionId": 157566408,
                  "bidCount": 3,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157566409": {
                  "startAt": "2024-08-07 08:00:00",
                  "endAt": "2024-08-07 12:00:00",
                  "startAtTime": "08:00",
                  "endAtTime": "12:00",
                  "promotionId": 157566409,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157566410": {
                  "startAt": "2024-08-07 12:00:00",
                  "endAt": "2024-08-07 15:30:00",
                  "startAtTime": "12:00",
                  "endAtTime": "15:30",
                  "promotionId": 157566410,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157566411": {
                  "startAt": "2024-08-07 15:30:00",
                  "endAt": "2024-08-07 19:30:00",
                  "startAtTime": "15:30",
                  "endAtTime": "19:30",
                  "promotionId": 157566411,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157566412": {
                  "startAt": "2024-08-07 19:30:00",
                  "endAt": "2024-08-08 00:00:00",
                  "startAtTime": "19:30",
                  "endAtTime": "00:00",
                  "promotionId": 157566412,
                  "bidCount": 7,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                }
              }
            },
            {
              "startDate": "1403/05/18",
              "day": 18,
              "month": "مرداد",
              "year": 1403,
              "weekdayName": "پنج\u200Cشنبه",
              "dayOfWeek": 5,
              "message": "",
              "timeslots": {
                "157832876": {
                  "startAt": "2024-08-08 00:00:00",
                  "endAt": "2024-08-08 08:00:00",
                  "startAtTime": "00:00",
                  "endAtTime": "08:00",
                  "promotionId": 157832876,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157832877": {
                  "startAt": "2024-08-08 08:00:00",
                  "endAt": "2024-08-08 12:00:00",
                  "startAtTime": "08:00",
                  "endAtTime": "12:00",
                  "promotionId": 157832877,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157832878": {
                  "startAt": "2024-08-08 12:00:00",
                  "endAt": "2024-08-08 15:30:00",
                  "startAtTime": "12:00",
                  "endAtTime": "15:30",
                  "promotionId": 157832878,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157832879": {
                  "startAt": "2024-08-08 15:30:00",
                  "endAt": "2024-08-08 19:30:00",
                  "startAtTime": "15:30",
                  "endAtTime": "19:30",
                  "promotionId": 157832879,
                  "bidCount": 2,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "157832880": {
                  "startAt": "2024-08-08 19:30:00",
                  "endAt": "2024-08-09 00:00:00",
                  "startAtTime": "19:30",
                  "endAtTime": "00:00",
                  "promotionId": 157832880,
                  "bidCount": 3,
                  "maxBid": 59700000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                }
              }
            },
            {
              "startDate": "1403/05/19",
              "day": 19,
              "month": "مرداد",
              "year": 1403,
              "weekdayName": "جمعه",
              "dayOfWeek": 6,
              "message": "",
              "timeslots": {
                "158035106": {
                  "startAt": "2024-08-09 00:00:00",
                  "endAt": "2024-08-09 08:00:00",
                  "startAtTime": "00:00",
                  "endAtTime": "08:00",
                  "promotionId": 158035106,
                  "bidCount": 1,
                  "maxBid": 3000000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "158035107": {
                  "startAt": "2024-08-09 08:00:00",
                  "endAt": "2024-08-09 12:00:00",
                  "startAtTime": "08:00",
                  "endAtTime": "12:00",
                  "promotionId": 158035107,
                  "bidCount": 1,
                  "maxBid": 3000000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "158035108": {
                  "startAt": "2024-08-09 12:00:00",
                  "endAt": "2024-08-09 15:30:00",
                  "startAtTime": "12:00",
                  "endAtTime": "15:30",
                  "promotionId": 158035108,
                  "bidCount": 1,
                  "maxBid": 3000000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "158035109": {
                  "startAt": "2024-08-09 15:30:00",
                  "endAt": "2024-08-09 19:30:00",
                  "startAtTime": "15:30",
                  "endAtTime": "19:30",
                  "promotionId": 158035109,
                  "bidCount": 1,
                  "maxBid": 3000000,
                  "minAllowableBid": 7000000,
                  "maxAllowableBid": 30000000
                },
                "158035110": {
                  "startAt": "2024-08-09 19:30:00",
                  "endAt": "2024-08-10 00:00:00",
                  "startAtTime": "19:30",
                  "endAtTime": "00:00",
                  "promotionId": 158035110,
                  "bidCount": 1,
                  "maxBid": 3000000,
                  "minAllowableBid": 7000000,
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