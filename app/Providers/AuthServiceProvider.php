<?php

namespace App\Providers;

use App\Apartment;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('admin-panel', function (User $user) {
            return $user->isAdmin();
        });
        Gate::define('manager-panel', function (User $user) {
            return $user->role <= 2;
        });
        Gate::define('show-apartment', function (User $user, Apartment $apartment) {
            return $user->id == $apartment->user_id || $user->isAdmin();
        });
        //
    }
}
