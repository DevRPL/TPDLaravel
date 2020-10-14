<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
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
        view()->composer('master.collegeStudent.*', function ($view) {
            $view->with('page', 'Mahasiswa');
        });

        view()->composer('master.value.*', function ($view) {
            $view->with('page', 'Nilai');
        });
        
        view()->composer(
            ['master.value.create'],
            'App\Http\ViewComposers\CollegeStudentComposer'
        );
    }
}
