<?php

namespace Andreapozza\LaravelYousign;

use Andreapozza\YouSign\YouSignConnector;
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

        $this->mergeConfigFrom(
            __DIR__.'/../config/yousign.php', 'yousign'
        );
    }

    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/yousign.php' => config_path('yousign.php'),
        ], 'yousign');
    }
}