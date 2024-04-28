<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Athlete;
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
        View::composer('admindashboard', function ($view) {
            $totalRecords = Athlete::count();
            $view->with('totalRecords', $totalRecords);
        });
    }
}
