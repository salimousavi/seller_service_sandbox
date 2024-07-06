<?php

namespace App\Lib\Controller;

use App\Lib\Exception\BadRequestException;

class AForm extends AResponse
{
    protected function get200Response(): array
    {
        $items = $this->mockClass::RESPONSE200;
        $rand = rand(0, count($items) - 1);
        return $items[$rand];
    }

    protected function get400Response(): array
    {
        $errors = $this->mockClass::ERRORS;
        $rand = rand(0, count($errors) - 1);
        throw new BadRequestException($errors[$rand] ?? []);
    }
}