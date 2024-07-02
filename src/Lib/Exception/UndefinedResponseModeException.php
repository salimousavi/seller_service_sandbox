<?php

namespace App\Lib\Exception;

use Throwable;

class UndefinedResponseModeException extends \Exception
{
    public function __construct(
        string     $message = "define proper 'Response Code' in Headers (if dont know what it is, read the Readme.md file",
        int        $code = 400,
        ?Throwable $previous = null
    )
    {
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