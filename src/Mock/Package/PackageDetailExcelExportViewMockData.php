<?php

namespace App\Mock\Package;

use App\Mock\AMockV2;

class PackageDetailExcelExportViewMockData extends AMockV2
{
    protected static function response1(): ?string
    {
        return '{
        "status": 200,
        "data": {
          "file_link": "https://dkstatics-private.digikala.com/digikala-mp-excel-export/2412d803b90df6dc2a507bcf7be4becb16270c88_1722598631.xlsx?Expires=1723203431&OSSAccessKeyId=LTAIPClJziKGRUZJ&Signature=cQI%2B3LUue57IpudTQWnDeMg8N0o%3D"
        }
      }';
    }
}