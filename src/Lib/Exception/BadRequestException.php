<?php

namespace App\Lib\Exception;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use Throwable;

class BadRequestException extends \Exception
{
    public function __construct(
        private array $errors = [],
        string $message = "Validation Failed",
        int $code = 400,
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
            'errors' => $this->errors,
        ];
    }
}