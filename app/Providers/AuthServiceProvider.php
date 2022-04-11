<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //'App\Model' => 'App\Policies\ModelPolicy',

        'App\User' => 'App\Policies\UserPolicy',
        'App\Role' => 'App\Policies\RolePolicy',
        'App\Club' => 'App\Policies\ClubPolicy',
        'App\Equipe' => 'App\Policies\EquipePolicy',
        'App\Administration' => 'App\Policies\AdminisatrationPolicy',
        'App\Quartier' => 'App\Policies\QuartierPolicy',
        'App\zones' => 'App\Policies\ZonesPolicy',
        'App\Activites' => 'App\Policies\ActivitesPolicy',
        'App\Redevabilites' => 'App\Policies\Redevabilites',
        'App\Payements' => 'App\Policies\PolicyPayements',
        'App\Redevables' => 'App\Policies\PolicyRedevables',
        'App\Taxes' => 'App\Policies\PolicyTaxes'








    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
