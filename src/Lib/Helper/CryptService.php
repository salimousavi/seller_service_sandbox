<?php

namespace App\Lib\Helper;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class CryptService
{
    const GENERAL_KEY = '1234qwerty567890asdfgh';
    const GENERAL_ALGORITHM = 'HS256';

    public function encryptJWT(array $data, ?string $key = null, ?string $alg = null): string
    {
        return JWT::encode($data, $key ?? self::GENERAL_KEY, $alg ?? self::GENERAL_ALGORITHM);
    }

    public function decryptJWT(string $token, ?string $key = null, ?string $alg = null): array
    {
        return (array)JWT::decode($token, new Key($key ?? self::GENERAL_KEY, $alg ?? self::GENERAL_ALGORITHM));
    }
}