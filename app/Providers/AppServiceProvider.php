<?php

namespace App\Providers;

use Inertia\Inertia;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Inertia::share([
            'errors'=>function(){
                return Session::get('errors')
                ? Session::get('errors')->getBag('default')->getMessages()
                : (object) [];
            }
        ]);
        Inertia::share('csrf_token',function(){
            return csrf_token();
        });
        $this->publishes([
            __DIR__.'../../public/*' => public_path('vendor/courier'),
        ], 'public');
    }
}
