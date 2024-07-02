<?php

namespace App\Lib\Exception;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use Throwable;

class AccessDeniedException extends \Exception
{
    public function __construct(
        string $message = "",
        int $code = 403,
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