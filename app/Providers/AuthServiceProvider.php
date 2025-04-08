<?php

namespace App\Providers;

use App\Models\Profile;
use App\Models\Publication;
use Illuminate\Auth\GenericUser;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('update-publication',function(GenericUser $profile,Publication$publication){
            return $profile->id == $publication->profile_id;
        });
    }
}
