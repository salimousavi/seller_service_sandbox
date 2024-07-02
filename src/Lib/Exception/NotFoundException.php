<?php

namespace App\Lib\Exception;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use Throwable;

class NotFoundException extends \Exception
{
    public function __construct(
        string $message = "Data is not exist for your request",
        int $code = 404,
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