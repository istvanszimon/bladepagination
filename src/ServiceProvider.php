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

        $this->loadViewsFrom(__DIR__.'/../views', 'blade_pagination');

        $this->publishes([
            __DIR__.'/../views' => base_path('resources/views/vendor/blade_pagination'),
        ]);
    }

}