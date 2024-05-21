<?php

namespace Custodia\Forks\Laravel10FullCalendar;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laravel-calendar', function ($app) {
            return $app->make('Dhonions\Laravel10FullCalendar\Calendar');
        });
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views/', 'laravel-10-full-calendar');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravel-10-full-calendar'];
    }
}
