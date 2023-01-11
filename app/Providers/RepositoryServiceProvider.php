<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\CustomerRepositoryInterface',
            'App\Repositories\CustomerRepository'
        );

        $this->app->bind(
            'App\Repositories\OfficeInfoRepositoryInterface',
            'App\Repositories\OfficeInfoRepository'
        );

        $this->app->bind(
            'App\Repositories\RideRepositoryInterface',
            'App\Repositories\RideRepository'
        );

        $this->app->bind(
            'App\Repositories\AdminRepositories\ChildRepositoryInterface',
            'App\Repositories\\AdminRepositories\ChildRepository'
        );      

        $this->app->bind(
            'App\Repositories\DriverRepositoryInterface',
            'App\Repositories\DriverRepository'
        );
        $this->app->bind(
            'App\Repositories\OrderDetailRepositoryInterface',
            'App\Repositories\OrderDetailRepository'
        );
        $this->app->bind(
            'App\Repositories\OrderMasterRepositoryInterface',
            'App\Repositories\OrderMasterRepository'
        );
        $this->app->bind(
            'App\Repositories\ServiceTypeRepositoryInterface',
            'App\Repositories\ServiceTypeRepository'
        );
        $this->app->bind(
            'App\Repositories\VehicleRepositoryInterface',
            'App\Repositories\VehcileRepository'
        );
        $this->app->bind(
            'App\Repositories\VehicleRouteRepositoryInterface',
            'App\Repositories\VehicleRouteRepository'

        );
        $this->app->bind(
            'App\Repositories\RideDetailsRepositoryInterface',
            'App\Repositories\RideDetailsRepository'

        );

        $this->app->bind(
            'App\Repositories\Driver_st_end_RepositoryInterface',
            'App\Repositories\Driver_st_end_Repository'

        );

        $this->app->bind(
            'App\Repositories\DriverRouteRepositoryInterface',
            'App\Repositories\DriverRouteRepository'

        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
