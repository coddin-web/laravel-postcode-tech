<?php

namespace Coddin\Zipcode;

use Coddin\Zipcode\Commands\ZipcodeCommand;
use Illuminate\Support\ServiceProvider;

class ZipcodeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/zipcode.php' => config_path('zipcode.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/zipcode'),
            ], 'views');

            if (! class_exists('CreatePackageTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_zipcode_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_zipcode_table.php'),
                ], 'migrations');
            }

            $this->commands([
                ZipcodeCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'zipcode');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/zipcode.php', 'zipcode');
    }
}
