<?php

namespace App\Mock\Shipment;

use App\Mock\AMockV2;

class DeleteDKPickupShipmentMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "message": "success"
        }
      }';
    }
}