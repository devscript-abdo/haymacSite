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
            'App\Repository\Page\PageRepositoryCache'
        );

        $this->app->bind(
            'App\Repository\Post\PostInterface',
            'App\Repository\Post\PostRepositoryCache'
        );

        $this->app->bind(
            'App\Repository\Service\ServiceInterface',
            'App\Repository\Service\ServiceRepositoryCache'
        );

        $this->app->bind(
            'App\Repository\Project\ProjectInterface',
            'App\Repository\Project\ProjectRepositoryCache'
        );

        $this->app->bind(
            'App\Repository\Client\ClientInterface',
            'App\Repository\Client\ClientRepository'
        );

        $this->app->bind(
            'App\Repository\Testimonial\TestimonialInterface',
            'App\Repository\Testimonial\TestimonialRepositoryCache'
        );

        $this->app->bind(
            'App\Repository\Team\TeamInterface',
            'App\Repository\Team\TeamRepositoryCache'
        );

        $this->app->bind(
            'App\Repository\Tag\TagInterface',
            'App\Repository\Tag\TagRepositoryCache'
        );

        $this->app->bind(
            'App\Repository\Comment\CommentInterface',
            'App\Repository\Comment\CommentRepositoryCache'
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
