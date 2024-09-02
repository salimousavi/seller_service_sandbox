<?php

namespace App\Mock\LighteningDeal;

use App\Mock\AMockV2;

class LighteningDealValidateProductMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
          "status": "ok",
          "data": {
            "sort_data": {
              "sort_column": "id",
              "sort_order": "asc",
              "sort_columns": [
                "id",
                "created_at",
                "status"
              ]
            },
            "pager": {
              "page": 1,
              "item_per_page": 10,
              "total_pages": 100,
              "total_rows": 100
            },
            "form_data": [
              null
            ],
            "items": [
              {
                "startDate": "1403/06/11",
                "day": 11,
                "month": "شهریور",
                "year": 1403,
                "weekdayName": "یکشنبه",
                "dayOfWeek": 1,
                "message": "",
                "timeslots": {
                  "123456789": {
                    "startAt": "2024-09-01 00:00:00",
                    "endAt": "2024-09-01 08:00:00",
                    "startAtTime": "00:00",
                    "endAtTime": "08:00",
                    "promotionId": 123456789,
                    "bidCount": 76,
                    "maxBid": 20000000,
                    "minBidToWin": 10000000,
                    "minAllowableBid": 10000000,
                    "maxAllowableBid": 30000000
                  }
                }
              }
            ],
            "meta_data": {}
          }
        }';
    }
}