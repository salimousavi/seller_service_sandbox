<?php

namespace App\Mock\Variant;

use App\Mock\AMock;

class ProductVariantImportMockData extends AMock
{
    public const RESPONSE200 = [
        ["importRequestId" => 530917],

    ];

    public const ERRORS = [
        [
            "invalid uploaded file extension = jpg",
        ],
        [
            "import_service" => ["امکان پردازش فایل با بیش از {10000} سطر وجود ندارد."],
        ],
        [
            "import_service" => ["قالب بارگذاری صحیح نیست."],
        ],
        [
            "failed_loading_file" => ["مشکلی در پردازش فایل آپلود شده پیش آمده است، لطفا دوباره تلاش کنید."],
        ]
    ];
}