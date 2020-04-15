<?php

namespace Cheanizer\LaraRapiWha;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class LaraRapiWhaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/lararapiwha.php' => config_path('lararapiwa.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/lararapiwha.php', 'lararapiwha'
        );

        $this->app->bind('cheanizer-lararapiwha', function () {
            $parameters = [
                'base_url' => Config::get('lararapiwha.base_url'),
                'apikey' => Config::get('lararapiwha.apikey')
            ];
            $obj = new LaraRapiWha($parameters);

            return $obj;
        });
    }
}
