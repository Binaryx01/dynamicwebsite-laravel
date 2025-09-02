<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // <-- needed
use App\Models\Navitem; // <-- needed
use App\Models\NavItems;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Only for the layout view
        View::composer('frontendlayouts.app', function ($view) {
            $view->with('navitems', NavItems::orderBy('order')->get());
        }); // <-- close the composer
    }
}
