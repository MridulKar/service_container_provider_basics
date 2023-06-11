<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // way to bind any service provider
        app()->bind('custom_service_provider', function(){
            echo "This is my custom service provider";
        });

        // way to use any service provider, first register your service provider in config>app.php
        // app()->make('custom_service_provider');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
