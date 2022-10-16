<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;
use Http\Client\Response;
//use App\Policies\AdminPolicy;
//use App\Policies\ManagerPolicy;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        //User::class => AdminPolicy::class,
        //User::class => ManagerPolicy::class,
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
        Gate::define('adminChek', function ($user) {
            if($user->dolgnost->name == "admin"){
                   return true;
            }else {
                return false;
            }
        });
        Gate::define('adminManagerChek', function ($user) {
            
            if($user->dolgnost->name != "user"){  
                //dd($user->role);
                return true;
            }else {
                //dd($user->role);
                return false;
            }
        });
    }
}
