<?php

namespace CoreSolutions\PackageTest;

use Illuminate\Support\ServiceProvider;

class PackageTestProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        dump('Wo0t?');
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
