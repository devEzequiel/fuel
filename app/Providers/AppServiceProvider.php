<?php

namespace App\Providers;

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
        $this->app->bind(
            'App\Repositories\Contracts\DriverRepositoryInterface',
            'App\Repositories\Eloquent\DriverRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\VehicleRepositoryInterface',
            'App\Repositories\Eloquent\VehicleRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\VehicleRepositoryInterface',
            'App\Repositories\Eloquent\VehicleRepository'
        );
    }

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
