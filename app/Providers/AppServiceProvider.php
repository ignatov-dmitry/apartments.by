<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Blade::if('admin', function (){
            return auth()->check() && \Auth::user()->isAdmin();
        });

        \Blade::if('manager', function (){
            return auth()->check() && (\Auth::user()->isManager() || \Auth::user()->isAdmin());
        });

        \Blade::if('user', function (){
            return auth()->check() && (\Auth::user()->isUser() || \Auth::user()->isManager() || \Auth::user()->isAdmin());
        });

        \Blade::if('guest', function (){
            return !auth()->check() || \Auth::user()->isUser() || \Auth::user()->isManager() || \Auth::user()->isAdmin();
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
