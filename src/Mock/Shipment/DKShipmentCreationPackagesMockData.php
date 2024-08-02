<?php

namespace App\Mock\Shipment;

use App\Mock\AMockV2;

class DKShipmentCreationPackagesMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "sort_data": {
            "sort_column": "id",
            "sort_order": "asc",
            "sort_columns": ["id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 50,
            "total_pages": 0,
            "total_rows": 0
          },
          "form_data": [],
          "items": [
            {
              "id": 22962287,
              "package_number": "7552491020824001",
              "shipment_type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "created_at": "2024-08-02T00:40:24.000000+03:30",
              "shipment_cost": 633744
            }
          ],
          "meta_data": {
            "warehouse": {
              "time_scopes": ["8-10", "10-12", "12-14", "14-16"]
            }
          }
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "sort_data": {
            "sort_column": "id",
            "sort_order": "asc",
            "sort_columns": ["id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 50,
            "total_pages": 0,
            "total_rows": 0
          },
          "form_data": [],
          "items": [
            {
              "id": 22944268,
              "package_number": "2756941310724001",
              "shipment_type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "created_at": "2024-07-31T16:42:14.000000+03:30",
              "shipment_cost": 612360
            }
          ],
          "meta_data": {
            "warehouse": {
              "time_scopes": ["8-10", "10-12", "12-14", "14-16"]
            }
          }
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "sort_data": {
            "sort_column": "id",
            "sort_order": "asc",
            "sort_columns": ["id"]
          },
          "pager": {
            "page": 1,
            "item_per_page": 50,
            "total_pages": 0,
            "total_rows": 0
          },
          "form_data": [],
          "items": [
            {
              "id": 22944268,
              "package_number": "2756941310724001",
              "shipment_type": {
                "key": "order_fulfilment",
                "title": "سفارش"
              },
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "created_at": "2024-07-31T16:42:14.000000+03:30",
              "shipment_cost": 612360
            }
          ],
          "meta_data": {
            "warehouse": {
              "time_scopes": ["8-10", "10-12", "12-14", "14-16"]
            }
          }
        }
      }';
    }
}