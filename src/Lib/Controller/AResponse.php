<?php

namespace App\Lib\Controller;

use App\Lib\Exception\AccessDeniedException;
use App\Lib\Exception\BadRequestException;
use App\Lib\Exception\IpLimiterException;
use App\Lib\Exception\NotFoundException;
use App\Lib\Exception\UnAuthorizedException;
use App\Lib\Exception\UndefinedResponseModeException;
use App\Lib\Resolver\APIRequest;
use App\Mock\AMock;

abstract class AResponse
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

    protected array $validation_errors = [];

    public function __construct(
        protected APIRequest $apiRequest,
        protected string $mockClass,
    )
    {
    }

    /**
     * @throws UndefinedResponseModeException
     */
    public function execute(): array
    {
        $mode = intval($this->apiRequest->getHeader(self::RESPONSE_CODE_HEADER_NAME));

        return match ($mode) {
            self::RESPONSE_MODE_200 => $this->get200Response(),
            self::RESPONSE_MODE_400 => $this->get400Response(),
            self::RESPONSE_MODE_401 => $this->get401Response(),
            self::RESPONSE_MODE_403 => $this->get403Response(),
            self::RESPONSE_MODE_404 => $this->get404Response(),
            self::RESPONSE_MODE_429 => $this->get429Response(),
            default => throw new UndefinedResponseModeException(),
        };
    }

    abstract protected function get200Response(): array;

    protected function get400Response(): array
    {
        throw new BadRequestException($this->validation_errors);
    }

    protected function get401Response(): array
    {
        throw new UnAuthorizedException();
    }

    protected function get403Response(): array
    {
        throw new AccessDeniedException();
    }

    protected function get404Response(): array
    {
        throw new NotFoundException();
    }

    protected function get429Response(): array
    {
        throw new IpLimiterException($this->apiRequest->getClientIp());
    }
}