<?php

namespace App\Providers;

use App\Models\Wine;
use Illuminate\Support\Facades\View;
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
        view()->composer('*', function ($view) 
        { 
            if(session()->has('wines.recently_viewed')) {
                $wines = Wine::find(session()->get('wines.recently_viewed'))->take(5);
                $view->with('recentlyViewed', $wines);
            } else {
                $view->with('recentlyViewed', []);
            }
        });  
    }
}
