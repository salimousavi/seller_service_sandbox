<?php

namespace App\Lib\Exception;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use Throwable;

class IpLimiterException extends \Exception
{
    public function __construct(
        private string $ip = "?",
        string $message = "429 Too Many Requests",
        int $code = 429,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }

    public function buildErrorResponse(): array
    {
        return [
            'status' => 'error',
            'message' => "Too Many Requests from " . $this->ip . " Try again soon.",
            'code' => $this->code,
        ];
    }
}