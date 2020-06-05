<?php

namespace App\Providers;

use App\Apartment;
use App\Observers\ApartmentObserve;
use Illuminate\Support\ServiceProvider;

class ApartmentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Apartment::observe(ApartmentObserve::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
