<?php

namespace Andreapozza\LaravelYousign\Facades;

use Illuminate\Support\Facades\Facade;

class YouSign extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'yousign';
    }
}
