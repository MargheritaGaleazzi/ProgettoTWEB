<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
            // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot() {
        $this->registerPolicies();

        Gate::define('isAdmin', function ($user) {
            return $user->hasRole('amministratore');
        });

        Gate::define('isUser', function ($user) {
            return $user->hasRole('cliente');
        });
        
        Gate::define('isOrganizator', function ($user) {
            return $user->hasRole('organizzatore');
        });

         Gate::define('show-discount', function ($user) {
            return $user->hasRole(['cliente', 'organizzatore']);
        }); 

        //show-discount serve per mostrare il prezzo scontato solo agli utenti registrati
    }
}
