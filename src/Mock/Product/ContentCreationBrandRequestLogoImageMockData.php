<?php

namespace App\Mock\Product;

use App\Mock\AMockV2;

class ContentCreationBrandRequestLogoImageMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "isValid": true,
          "data": {
            "id": "5NfdF",
            "url": "https://dkstatics-public.digikala.com/digikala-content-creation-requests/73ebf0bdf03dd0f717d0b5b3dee7cf5b4db73ff7_1722497392.jpg?x-oss-process=image/resize,m_fill,h_80,w_80",
            "tempFile": true
          }
        }
      }';
    }

    protected static function response2(): ?string
    {
        return '{
          "isValid": true,
          "data": {
            "id": "5Nf1t",
            "url": "https://dkstatics-public.digikala.com/digikala-content-creation-requests/de3bd3c8c6db8235582b61e5847789125e40b25c_1722496737.jpg?x-oss-process=image/resize,m_fill,h_80,w_80",
            "tempFile": true
          }
        }';
    }
}