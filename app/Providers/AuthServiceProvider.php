<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\CategoryPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
         'App\Models\Category' => 'App\Policies\CategoryPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('read-category', [CategoryPolicy::class, 'viewAny']);

        Gate::define('create-category', [CategoryPolicy::class, 'create']);

        Gate::define('edit-category', [CategoryPolicy::class, 'update']);

        Gate::define('delete-category', [CategoryPolicy::class, 'delete']);

    }
}
