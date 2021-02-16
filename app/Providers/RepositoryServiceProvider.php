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
            'App\Repository\Slider\SliderInterface',
            'App\Repository\Slider\SliderRepository'
        );
        
        $this->app->bind(
            'App\Repository\Page\PageInterface',
            'App\Repository\Page\PageRepository'
        );

        $this->app->bind(
            'App\Repository\Service\ServiceInterface',
            'App\Repository\Service\ServiceRepository'
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
