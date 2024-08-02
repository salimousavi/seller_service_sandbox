<?php

namespace App\Mock\Shipment;

use App\Mock\AMockV2;

class DKPickupShipmentsMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "sort_data": {
            "sort_column": "shipment_id",
            "sort_order": "desc",
            "sort_columns": ["shipment_id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 10,
            "total_pages": 14,
            "total_rows": 135
          },
          "form_data": [],
          "items": [
            {
              "id": 545190,
              "shipment_number": "755249010824003",
              "created_at": "2024-08-01T11:06:03.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-08-01T12:00:00.000000+03:30",
              "cost": 825046,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 4860,
              "total_weight": 755,
              "min_distance": 21,
              "can_delete": false
            },
            {
              "id": 544884,
              "shipment_number": "755249010824002",
              "created_at": "2024-08-01T00:29:41.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-08-01T12:00:00.000000+03:30",
              "cost": 826504,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 4704,
              "total_weight": 1050,
              "min_distance": 21,
              "can_delete": false
            },
            {
              "id": 544883,
              "shipment_number": "755249010824001",
              "created_at": "2024-08-01T00:28:11.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-08-01T12:00:00.000000+03:30",
              "cost": 833369,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 9472,
              "total_weight": 2180,
              "min_distance": 21,
              "can_delete": false
            },
            {
              "id": 544861,
              "shipment_number": "755249310724003",
              "created_at": "2024-07-31T18:01:06.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-08-01T12:00:00.000000+03:30",
              "cost": 837105,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 14156,
              "total_weight": 2795,
              "min_distance": 21,
              "can_delete": false
            },
            {
              "id": 544652,
              "shipment_number": "755249310724002",
              "created_at": "2024-07-31T10:29:34.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-08-01T12:00:00.000000+03:30",
              "cost": 868118,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 22752,
              "total_weight": 7900,
              "min_distance": 21,
              "can_delete": false
            },
            {
              "id": 544029,
              "shipment_number": "755249300724001",
              "created_at": "2024-07-30T08:18:10.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-07-30T12:00:00.000000+03:30",
              "cost": 854510,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 28248,
              "total_weight": 5660,
              "min_distance": 21,
              "can_delete": false
            },
            {
              "id": 543844,
              "shipment_number": "755249290724003",
              "created_at": "2024-07-29T11:49:48.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-07-29T12:00:00.000000+03:30",
              "cost": 821948,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 1296,
              "total_weight": 300,
              "min_distance": 21,
              "can_delete": false
            },
            {
              "id": 543705,
              "shipment_number": "755249290724002",
              "created_at": "2024-07-29T10:02:25.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-07-29T12:00:00.000000+03:30",
              "cost": 840841,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 18216,
              "total_weight": 3410,
              "min_distance": 21,
              "can_delete": false
            },
            {
              "id": 543703,
              "shipment_number": "755249290724001",
              "created_at": "2024-07-29T09:59:49.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-07-29T12:00:00.000000+03:30",
              "cost": 820733,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 432,
              "total_weight": 100,
              "min_distance": 21,
              "can_delete": false
            },
            {
              "id": 543491,
              "shipment_number": "755249280724004",
              "created_at": "2024-07-28T22:56:34.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-07-29T12:00:00.000000+03:30",
              "cost": 844425,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 21416,
              "total_weight": 4000,
              "min_distance": 21,
              "can_delete": false
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
            "sort_column": "shipment_id",
            "sort_order": "desc",
            "sort_columns": ["shipment_id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 10,
            "total_pages": 14,
            "total_rows": 135
          },
          "form_data": [],
          "items": [
            {
              "id": 545190,
              "shipment_number": "755249010824003",
              "created_at": "2024-08-01T11:06:03.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-08-01T12:00:00.000000+03:30",
              "cost": 825046,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 4860,
              "total_weight": 755,
              "min_distance": 21,
              "can_delete": false
            },
            {
              "id": 544884,
              "shipment_number": "755249010824002",
              "created_at": "2024-08-01T00:29:41.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-08-01T12:00:00.000000+03:30",
              "cost": 826504,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 4704,
              "total_weight": 1050,
              "min_distance": 21,
              "can_delete": false
            },
            {
              "id": 544883,
              "shipment_number": "755249010824001",
              "created_at": "2024-08-01T00:28:11.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-08-01T12:00:00.000000+03:30",
              "cost": 833369,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 9472,
              "total_weight": 2180,
              "min_distance": 21,
              "can_delete": false
            },
            {
              "id": 544861,
              "shipment_number": "755249310724003",
              "created_at": "2024-07-31T18:01:06.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-08-01T12:00:00.000000+03:30",
              "cost": 837105,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 14156,
              "total_weight": 2795,
              "min_distance": 21,
              "can_delete": false
            },
            {
              "id": 544652,
              "shipment_number": "755249310724002",
              "created_at": "2024-07-31T10:29:34.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-08-01T12:00:00.000000+03:30",
              "cost": 868118,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 22752,
              "total_weight": 7900,
              "min_distance": 21,
              "can_delete": false
            },
            {
              "id": 544029,
              "shipment_number": "755249300724001",
              "created_at": "2024-07-30T08:18:10.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-07-30T12:00:00.000000+03:30",
              "cost": 854510,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 28248,
              "total_weight": 5660,
              "min_distance": 21,
              "can_delete": false
            },
            {
              "id": 543844,
              "shipment_number": "755249290724003",
              "created_at": "2024-07-29T11:49:48.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-07-29T12:00:00.000000+03:30",
              "cost": 821948,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 1296,
              "total_weight": 300,
              "min_distance": 21,
              "can_delete": false
            },
            {
              "id": 543705,
              "shipment_number": "755249290724002",
              "created_at": "2024-07-29T10:02:25.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-07-29T12:00:00.000000+03:30",
              "cost": 840841,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 18216,
              "total_weight": 3410,
              "min_distance": 21,
              "can_delete": false
            },
            {
              "id": 543703,
              "shipment_number": "755249290724001",
              "created_at": "2024-07-29T09:59:49.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-07-29T12:00:00.000000+03:30",
              "cost": 820733,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 432,
              "total_weight": 100,
              "min_distance": 21,
              "can_delete": false
            },
            {
              "id": 543491,
              "shipment_number": "755249280724004",
              "created_at": "2024-07-28T22:56:34.000000+03:30",
              "pickup_warehouse_title": "سام313",
              "pickup_date": "2024-07-29T12:00:00.000000+03:30",
              "cost": 844425,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 21416,
              "total_weight": 4000,
              "min_distance": 21,
              "can_delete": false
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
            "sort_column": "shipment_id",
            "sort_order": "desc",
            "sort_columns": ["shipment_id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 10,
            "total_pages": 5,
            "total_rows": 43
          },
          "form_data": [],
          "items": [
            {
              "id": 536627,
              "shipment_number": "253674080724001",
              "created_at": "2024-07-08T18:12:43.000000+03:30",
              "pickup_warehouse_title": "انبار شماره 1",
              "pickup_date": "2024-07-09T12:00:00.000000+03:30",
              "cost": 910238,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 38700,
              "total_weight": 21500,
              "min_distance": 17,
              "can_delete": false
            },
            {
              "id": 533608,
              "shipment_number": "253674300624001",
              "created_at": "2024-06-30T14:38:16.000000+03:30",
              "pickup_warehouse_title": "انبار شماره 1",
              "pickup_date": "2024-07-07T10:00:00.000000+03:30",
              "cost": 932715,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 135240,
              "total_weight": 25200,
              "min_distance": 17,
              "can_delete": false
            },
            {
              "id": 532234,
              "shipment_number": "253674260624001",
              "created_at": "2024-06-26T11:41:37.000000+03:30",
              "pickup_warehouse_title": "انبار شماره 1",
              "pickup_date": "2024-06-30T12:00:00.000000+03:30",
              "cost": 875306,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 84525,
              "total_weight": 15750,
              "min_distance": 17,
              "can_delete": false
            },
            {
              "id": 515879,
              "shipment_number": "253674090524001",
              "created_at": "2024-05-09T09:58:13.000000+03:30",
              "pickup_warehouse_title": "انبار شماره 1",
              "pickup_date": "2024-05-11T12:00:00.000000+03:30",
              "cost": 980519,
              "status": {
                "partially_received": "دریافت ناقص"
              },
              "total_volume": 294147,
              "total_weight": 54810,
              "min_distance": 17,
              "can_delete": false
            },
            {
              "id": 513885,
              "shipment_number": "253674040524002",
              "created_at": "2024-05-04T15:54:39.000000+03:30",
              "pickup_warehouse_title": "انبار شماره 1",
              "pickup_date": "2024-05-09T10:00:00.000000+03:30",
              "cost": 928127,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 225360,
              "total_weight": 37560,
              "min_distance": 17,
              "can_delete": false
            },
            {
              "id": 513880,
              "shipment_number": "253674040524001",
              "created_at": "2024-05-04T10:10:54.000000+03:30",
              "pickup_warehouse_title": "انبار شماره 1",
              "pickup_date": "2024-05-06T10:00:00.000000+03:30",
              "cost": 920473,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 207048,
              "total_weight": 35040,
              "min_distance": 17,
              "can_delete": false
            },
            {
              "id": 513381,
              "shipment_number": "253674010524001",
              "created_at": "2024-05-01T11:53:58.000000+03:30",
              "pickup_warehouse_title": "انبار شماره 1",
              "pickup_date": "2024-05-02T10:00:00.000000+03:30",
              "cost": 648385,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 67055,
              "total_weight": 11730,
              "min_distance": 17,
              "can_delete": false
            },
            {
              "id": 492552,
              "shipment_number": "253674250224001",
              "created_at": "2024-02-25T11:34:26.000000+03:30",
              "pickup_warehouse_title": "انبار شماره 1",
              "pickup_date": "2024-03-09T12:00:00.000000+03:30",
              "cost": 983161,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 314396,
              "total_weight": 55680,
              "min_distance": 17,
              "can_delete": false
            },
            {
              "id": 489121,
              "shipment_number": "253674160224001",
              "created_at": "2024-02-16T13:38:38.000000+03:30",
              "pickup_warehouse_title": "انبار شماره 1",
              "pickup_date": "2024-02-21T12:00:00.000000+03:30",
              "cost": 710897,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 123342,
              "total_weight": 22020,
              "min_distance": 17,
              "can_delete": false
            },
            {
              "id": 488222,
              "shipment_number": "253674140224001",
              "created_at": "2024-02-14T00:02:52.000000+03:30",
              "pickup_warehouse_title": "انبار شماره 1",
              "pickup_date": "2024-02-14T12:00:00.000000+03:30",
              "cost": 607743,
              "status": {
                "received": "دریافت شده"
              },
              "total_volume": 27048,
              "total_weight": 5040,
              "min_distance": 17,
              "can_delete": false
            }
          ],
          "meta_data": []
        }
      }';
    }
}