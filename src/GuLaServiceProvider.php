<?php

namespace SilNex\GuLa;

use Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables;
use Illuminate\Support\ServiceProvider;

class GuLaServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->useEnvironmentPath(__DIR__ . '/../');
        $this->app->bootstrapWith([LoadEnvironmentVariables::class]);

        $this->mergeConfigFrom(__DIR__ . '/config/gula.php', 'gula');
        config(['database.connections.gula' => config('gula')]);
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/config/gula.php' => config_path('gula.php'),
            ], 'config');
        }
    }
}
