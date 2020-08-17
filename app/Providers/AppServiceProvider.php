<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Schema;

>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e

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
<<<<<<< HEAD
    public function boot()
    {
        //
=======
    
    public function boot()
    {
        Schema::defaultStringLength(191);
>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e
    }
}
