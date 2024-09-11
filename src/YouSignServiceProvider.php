<?php

namespace Andreapozza\LaravelYousign;

use Illuminate\Support\ServiceProvider;

class YouSignServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('yousign', fn () => new YouSignConnector(config('yousign.api_key'), config('yousign.mode', 'production')));
    }
}