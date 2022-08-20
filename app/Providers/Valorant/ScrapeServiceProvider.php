<?php

namespace App\Providers\Valorant;

use Illuminate\Support\ServiceProvider;

class ScrapeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->singleton('scrape', 'App\MyClasses\Valorant\Scrape');
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
