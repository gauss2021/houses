<?php

namespace App\Providers;

use App\Models\House;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Schema::defaultStringLength(191);

        // Model::preventLazyLoading();

        Gate::define('is_admin',function(User $user){

            return $user->role==='admin';

        });
        

        Gate::define('is_owner',function(User $user){

            return $user->role==='owner';

        });

        // Gate pour se rassurer que seul celui qui a creeé une maison peut le modifier et le supprimer

        Gate::define('is_my_house',function(User $user,House $house){

            return $house->owner->is($user->owner);

        });
    }
}
