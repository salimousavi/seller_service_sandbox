<?php

namespace App\View\Auth;

use App\Lib\Controller\AListView;

class ScopeListView extends AListView
{
    static protected function mockDataClass(): string
    {
        return ScopeMockData::class;
    }
}