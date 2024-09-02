<?php

namespace App\Mock\Package;

use App\Mock\AMockV2;

class DeletePackageMockData extends AMockV2
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