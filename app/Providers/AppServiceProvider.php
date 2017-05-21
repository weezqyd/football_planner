<?php

namespace App\Providers;

use App\Support\Countries;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton(Countries::class, function () {
            return new Countries();
        });
    }
}
