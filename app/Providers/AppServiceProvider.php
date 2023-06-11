<?php

namespace App\Providers;

use App\Services\PaypalGateway;
use App\Services\PaymentGateway;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use App\Services\PaymentServiceContract;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PaymentGateway::class, function(){
            return new PaymentGateway('23456');
        });

        // $this->app->bind(PaymentServiceContract::class, function(){
        //     return new PaypalGateway('23456');
        // });

        $this->app->bind(PaymentServiceContract::class, function(){

            if(request()->gateway === 'paypal'){
                // hit http://127.0.0.1:8000/post?gateway=paypal
                return new PaypalGateway('1234');
            }

            return new PaypalGateway('12345');

        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
