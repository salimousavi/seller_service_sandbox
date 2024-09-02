<?php

namespace App\Mock\Shipment;

use App\Mock\AMockV2;

class DeleteDKPickupShipmentMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": "ok",
        "data": {
          "message": "success"
        }
      }';
    }
}