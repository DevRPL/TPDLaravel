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
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Repositories\CollegeStudentRepository::class, \App\Repositories\CollegeStudentRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CollegeStudentValueRepository::class, \App\Repositories\CollegeStudentValueRepositoryEloquent::class);
        //:end-bindings:
    }
}
