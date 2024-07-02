<?php

namespace App\Lib\Exception;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use Throwable;

class UnAuthorizedException extends \Exception
{
    public function __construct(
        string $message = "Your access is denied. We can not authorize you. Please get a new access_token",
        int $code = 401,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }

    public function buildErrorResponse(): array
    {
        return [
            'status' => 'error',
            'message' => $this->message,
            'code' => $this->code,
        ];
    }
}