<?php

namespace App\Mock\Profile;

use App\Mock\AMock;

class ProfileStoreMockData extends AMock
{
    public const ITEMS = [
        [
            "seller_type" => "private",
            "seller_code" => 1234567,
            "business_name" => "کابینت تست ۱",
            "description" => [
                "description" => " کابینت پیش ساخته ۴م زمینی و۳م هواییnام دی اف۹۵۰۰۰۰۰۰تومنnهای گلاس ایرانی ۱۰۰۰۰۰۰۰۰تومنnممبران۱۲۰۰۰۰۰۰تومنnنئوکلاسیک ۱۳۰۰۰۰۰۰تومن",
                "status" => "new",
                "rejection_reason" => null,
            ],
            "holidays" => [],
            "workdays" => [],
            "phone" => null,
            "website" => null,
            "logo" => [
                "file" => null,
                "status" => "new",
                "rejection_reason" => null,
            ],
            "registration_status" => [
                "is_logo_approved" => false,
                "is_description_approved" => false,
                "is_phone_valid" => false,
                "is_business_name_valid" => true,
            ],
        ],
        [
            "seller_type" => "private",
            "seller_code" => 3211233,
            "business_name" => "میسترتم",
            "description" => [
                "description" => null,
                "status" => "new",
                "rejection_reason" => null,
            ],
            "holidays" => [],
            "workdays" => [],
            "phone" => "02155667788",
            "website" => "https://mester.ir",
            "logo" => [
                "file" => null,
                "status" => "new",
                "rejection_reason" => null,
            ],
            "registration_status" => [
                "is_logo_approved" => false,
                "is_description_approved" => false,
                "is_phone_valid" => true,
                "is_business_name_valid" => true,
            ],
        ],
        [
            "seller_type" => "private",
            "seller_code" => 4321123,
            "business_name" => "سانتا تست",
            "description" => [
                "description" => "فروشگاه انواع یراق آلات پنجره و دربn",
                "status" => "new",
                "rejection_reason" => null,
            ],
            "holidays" => [],
            "workdays" => [],
            "phone" => "02188776655",
            "website" => "https://santatest.ir",
            "logo" => [
                "file" => "https://dkstatics-public.digikala.com/digikala-marketplace-seller-logo/a6593997052241903385a81bbe0d8e94a1f3b5c6_1710953009.jpg",
                "status" => "new",
                "rejection_reason" => null,
            ],
            "registration_status" => [
                "is_logo_approved" => false,
                "is_description_approved" => false,
                "is_phone_valid" => true,
                "is_business_name_valid" => true,
            ],
        ]
    ];
}