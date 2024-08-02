<?php

namespace App\Mock\Package;

use App\Mock\AMockV2;

class SellerCreatePackageMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": 201,
        "data": {
          "packages": [
            {
              "package_id": 22961597,
              "package_number": "11899181010824002",
              "shipping_nature_id": 1,
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "mobile_hub",
                "title": "تحویل به انبار سیار"
              },
              "received_at_forecast": "2024-08-03T10:00:00.000000+03:30",
              "time_scope": {
                "start": 10,
                "end": 12
              },
              "warehouse_title": "تهران،ترانسفو",
              "cost": 250023
            }
          ]
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": 201,
        "data": {
          "packages": [
            {
              "package_id": 22961594,
              "package_number": "2873712010824001",
              "shipping_nature_id": 2,
              "shipping_nature": {
                "key": "large",
                "title": "بزرگ"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "received_at_forecast": "2024-08-03T14:00:00.000000+03:30",
              "time_scope": {
                "start": 14,
                "end": 15
              },
              "warehouse_title": "انبار بادامک",
              "cost": null
            }
          ]
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '{
        "status": 201,
        "data": {
          "packages": [
            {
              "package_id": 22961592,
              "package_number": "1530251010824001",
              "shipping_nature_id": 1,
              "shipping_nature": {
                "key": "small",
                "title": "کوچک"
              },
              "delivery_type": {
                "key": "seller",
                "title": "توسط فروشنده"
              },
              "received_at_forecast": "2024-08-03T12:00:00.000000+03:30",
              "time_scope": {
                "start": 12,
                "end": 13
              },
              "warehouse_title": "انبار تبریز غرب",
              "cost": null
            }
          ]
        }
      }';
    }
}