<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Modules\Bulletin\Entities\Bulletin;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        Blade::component('components.backend-breadcrumbs', 'backendBreadcrumbs');

        view()->composer('frontend.includes.header', function($view) {
            $bulletins = Bulletin::all();
            $view->with('bulletins', $bulletins);
        });
    }
}
