<?php

namespace App\Lib\Controller;

abstract class AObjectView extends AResponse
{
    abstract static protected function mockDataClass(): string;

    protected function get200Response(): array
    {
        $items = static::mockDataClass()::ITEMS;
        $rand = rand(0, count($items) - 1);
        return $items[$rand];
    }
}