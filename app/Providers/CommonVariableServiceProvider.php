<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CommonVariableServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $data             = [];
        $data['country']  = "Bangladesh";
        $data['currency'] = "BDT";

        view()->share('common_variable', $data);
    }
}
