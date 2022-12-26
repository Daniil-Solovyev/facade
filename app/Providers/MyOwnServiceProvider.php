<?php

namespace App\Providers;

use App\Services\RedisSettingsService;
use Illuminate\Support\ServiceProvider;

class MyOwnServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('redis.settings.service', function () {
            return new RedisSettingsService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
