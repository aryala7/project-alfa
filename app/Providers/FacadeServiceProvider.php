<?php

namespace App\Providers;

use App\Http\Helpers\Student;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class FacadeServiceProvider extends ServiceProvider
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
        App::bind('student',function(){
            return new \App\Http\Helpers\Student;
        });
        //
    }
}
