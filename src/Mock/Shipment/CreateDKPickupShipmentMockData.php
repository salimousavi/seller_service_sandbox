<?php

namespace App\Mock\Shipment;

use App\Mock\AMockV2;

class CreateDKPickupShipmentMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": 201,
        "data": {
          "message": "Shipment created successfully",
          "shipment_entity": {
            "number": "1187160020824001",
            "warehouse": "فرایند",
            "received_at_forecast_date": "2024-08-03T23:59:59.999000+03:30",
            "time_scope": "10-12"
          }
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": 201,
        "data": {
          "message": "Shipment created successfully",
          "shipment_entity": {
            "number": "275694020824001",
            "warehouse": null,
            "received_at_forecast_date": "2024-08-03T23:59:59.999000+03:30",
            "time_scope": "14-16"
          }
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '{
        "status": 201,
        "data": {
          "message": "Shipment created successfully",
          "shipment_entity": {
            "number": "1067316020824001",
            "warehouse": "مرکزی تهران",
            "received_at_forecast_date": "2024-08-03T23:59:59.999000+03:30",
            "time_scope": "8-10"
          }
        }
      }';
    }
}