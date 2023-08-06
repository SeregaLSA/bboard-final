<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Bb;
use App\Policies\BbPolicy;

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

    protected $policies = [
        'App\Models\Bb' => 'App\Policies\BbPolicy',
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
