<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
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
        Gate::define("admin", function ($user){
            if(empty($user->getAkses)){
                return redirect("/logout");
            }else {
                return $user->getAkses->id == 1;
            }
        });
        
        Gate::define("kepala_puskesmas", function ($user){
            if(empty($user->getAkses)){
                return redirect("/logout");
            }else {
                return $user->getAkses->id == 4;
            }
        });
        Gate::define("kepala_kecamatan", function ($user){
            if(empty($user->getAkses)){
                return redirect("/logout");
            }else {
                return $user->getAkses->id == 3;
            }
        });
        Gate::define("kepala_desa", function ($user){
            if(empty($user->getAkses)){
                return redirect("/logout");
            }else {
                return $user->getAkses->id ==2;
            }
        });
        Gate::define("bidan", function ($user){
            if(empty($user->getAkses)){
                return redirect("/logout");
            }else {
                return $user->getAkses->id ==5;
            }
        });
        Gate::define("pasien", function ($user){
            if(empty($user->getAkses)){
                return redirect("/logout");
            }else {
                return $user->getAkses->id ==6;
            }
        });
    }
}
