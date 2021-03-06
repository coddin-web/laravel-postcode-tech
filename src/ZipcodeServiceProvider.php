<?php

namespace Coddin\Zipcode;

use Illuminate\Support\ServiceProvider;

class ZipcodeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/zipcode.php' => config_path('zipcode.php'),
            ], 'config');
        }

        app()->bind('zipcode', function () {
            return new Zipcode();
        });
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/zipcode.php', 'zipcode');
    }
}
