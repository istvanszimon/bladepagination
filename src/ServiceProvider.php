<?php

namespace Clay\BladePagination;

use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{

    public function register()
    {
        AbstractPaginator::presenter(function ($paginator) {
            return new Presenter($paginator);
        });
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'pagination');
        $this->loadTranslationsFrom(__DIR__.'/../lang', 'pagination');

        $this->publishes([
            __DIR__.'/../views' => base_path('resources/views/pagination'),
        ]);

        $this->publishes([
            __DIR__.'/../config.php' => config_path('pagination.php'),
        ]);
    }

}