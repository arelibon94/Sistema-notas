<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Schema::defaultStringLength(120);
    }

    /**
     * Register any application services.
     */
    public function register()
    {
    }
}
