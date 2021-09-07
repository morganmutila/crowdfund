<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        view()->composer('layouts.navigation', function ($view)
        {
            $view->with('categories', \App\Models\Category::all());
        });


        view()->composer('layouts.home-navigation', function ($view)
        {
            $view->with('categories', \App\Models\Category::all());
        });


        Model::preventLazyLoading(! app()->isProduction());
    }
}
