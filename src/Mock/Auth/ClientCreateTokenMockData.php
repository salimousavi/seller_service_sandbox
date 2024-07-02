<?php

namespace App\Mock\Auth;

use App\Mock\AMock;

class ClientCreateTokenMockData extends AMock
{
    const RESPONSE200 = [
        [
            "access_token" => "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzM4NCJ9.eyJ0b2tlbl9pZCI6MTAzNzk1NzEsInNlbGxlcl9pZCI6MTAsInBheWxvYWQiOnsidXNlcm5hbWUiOiI5ODkxMjQyMjY4NzUiLCJlbWFpbCI6InNhbGVzQG1lc2FsZWVuLmNvbSIsImJ1c2luZXNzX25hbWUiOiJcdTA2YWZcdTA2MjdcdTA2NDRcdTA2MzFcdTA2Y2MgXHUwNjQ1XHUwNjJiXHUwNjI3XHUwNjQ0XHUwNmNjXHUwNjQ2IiwiZmlyc3RfbmFtZSI6bnVsbCwibGFzdF9uYW1lIjpudWxsLCJjb21wYW55X25hbWUiOiJcdTA2NDdcdTA2NDZcdTA2MzEgXHUwNjQ1XHUwNjJiXHUwNjI3XHUwNjQ0XHUwNmNjIFx1MDYzNFx1MDYzMVx1MDY0MiIsImlzX2FkbWluIjp0cnVlLCJhZG1pbl9pZCI6OTA4NjUyNywiaXNfY29udGVudF91c2VyIjpmYWxzZSwiaXNfbW9kZXJhdG9yIjpmYWxzZSwiaXNfbWFya2V0cGxhY2VfbW9kZXJhdG9yIjpmYWxzZX0sImV4cCI6MTcyMDE5NTc0N30.O3AyfVEMhJsqYDDAltrsTRzABvlnJkUpMXCi8sXD12-VeFKTcfKxb-6AEXY2ZNI2",
            "refresh_token" => "7Ld8kqyVwELvJEP7WCCumCHTn3XvRmheAZAV6QLyle6qCO6IHTaPC6y3BBoNTJyy",
        ]
    ];

    const ERRORS = [
        [
            "authorization_code" => [
                "کد هویت سنجی معتبر نمی باشد",
            ]
        ],
        [
            "authorization_code" => [
                "کد هویت سنجی منقضی شده است",
            ]
        ]
    ];
}