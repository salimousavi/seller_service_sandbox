<?php

namespace App\Mock\Swagger;

class SwaggerMockData
{
    public static function build(): string
    {
        return file_get_contents(__dir__ . '/swagger.yaml');
    }
}