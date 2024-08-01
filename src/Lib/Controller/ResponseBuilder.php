<?php

namespace App\Lib\Controller;

use App\Lib\Exception\AccessDeniedException;
use App\Lib\Exception\BadRequestException;
use App\Lib\Exception\IpLimiterException;
use App\Lib\Exception\NotFoundException;
use App\Lib\Exception\UnAuthorizedException;
use App\Lib\Exception\UndefinedResponseModeException;
use App\Lib\Resolver\APIRequest;
use App\Mock\AMockV2;

class ResponseBuilder
{
    const RESPONSE_CODE_HEADER_NAME = 'x-response-code';

    const RESPONSE_MODE_200 = 200;
    const RESPONSE_MODE_400 = 400;
    const RESPONSE_MODE_401 = 401;
    const RESPONSE_MODE_403 = 403;
    const RESPONSE_MODE_404 = 404;
    const RESPONSE_MODE_429 = 429;
    const RESPONSE_MODE_ALL = [
        self::RESPONSE_MODE_200,
        self::RESPONSE_MODE_400,
        self::RESPONSE_MODE_401,
        self::RESPONSE_MODE_403,
        self::RESPONSE_MODE_404,
        self::RESPONSE_MODE_429,
    ];

    /**
     * @throws UndefinedResponseModeException
     */
    public static function execute(APIRequest $apiRequest, string $mockClass): array
    {
        $mode = intval($apiRequest->getHeader(self::RESPONSE_CODE_HEADER_NAME));

        return match ($mode) {
            self::RESPONSE_MODE_200 => static::get200Response($mockClass),
            self::RESPONSE_MODE_400 => static::get400Response(),
            self::RESPONSE_MODE_401 => static::get401Response(),
            self::RESPONSE_MODE_403 => static::get403Response(),
            self::RESPONSE_MODE_404 => static::get404Response(),
            self::RESPONSE_MODE_429 => static::get429Response($apiRequest),
            default => throw new UndefinedResponseModeException(),
        };
    }

    protected static function get200Response(string $mockClass): array
    {
        /** @var AMockV2 $mockClass */
        return $mockClass::build();
    }

    protected static function get400Response(): array
    {
        throw new BadRequestException([]);
    }

    protected static function get401Response(): array
    {
        throw new UnAuthorizedException();
    }

    protected static function get403Response(): array
    {
        throw new AccessDeniedException();
    }

    protected static function get404Response(): array
    {
        throw new NotFoundException();
    }

    protected static function get429Response(APIRequest $apiRequest): array
    {
        throw new IpLimiterException($apiRequest->getClientIp());
    }
}