<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Services\Contracts\CollegeStudentServiceContract::class,
            \App\Services\CollegeStudentService::class,
        );

        $this->app->bind(
            \App\Services\Contracts\CollegeStudentValueServiceContract::class,
            \App\Services\CollegeStudentValueService::class
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
