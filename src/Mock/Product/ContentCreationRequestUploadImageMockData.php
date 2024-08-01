<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class ContentCreationRequestUploadImageMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "isValid": true,
          "data": {
            "id": "5Ncor",
            "url": "https://dkstatics-public.digikala.com/digikala-content-creation-requests/cf1f4350df7fd79b99f116d60089215e665f168b_1722462972.jpg?x-oss-process=image/resize,m_fill,h_80,w_80",
            "tempFile": true
          }
        }
      }';
    }
}