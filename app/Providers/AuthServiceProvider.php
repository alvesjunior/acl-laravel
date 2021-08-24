<?php

namespace App\Providers;

use App\Models\User;
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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('realizar-venda', function (User $user) {
            $user_permissions = $user->load('roles.permissions')->roles->transform(function ($role) {
                return $role->permissions->transform(function ($permission) {
                    return $permission->name;
                });
            });
            return in_array('realizar_venda', $user_permissions->first()->toArray()); // retorna true or false
        });
    }
}
