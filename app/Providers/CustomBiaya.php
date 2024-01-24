<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomBiaya extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        require_once app_path() . '/Helpers/CustomBiaya.php';
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
