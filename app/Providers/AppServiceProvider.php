<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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

        View::creator(['layouts.home-navigation', 'discover', 'layouts.navigation'], function ($view)
        {
            $view->with('categories', \App\Models\Category::all());
        });


        Model::preventLazyLoading(!app()->isProduction());
    }
}
