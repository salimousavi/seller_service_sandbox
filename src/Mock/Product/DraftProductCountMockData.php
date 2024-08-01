<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class DraftProductCountMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "number_of_drafts": 0
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "number_of_drafts": 10
        }
      }';
    }

    protected static function response3(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "number_of_drafts": 57
        }
      }';
    }
}