<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Menus;
use App\Menus_sub;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeSidebar();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function composeSidebar()
    {
        view()->composer('admin.layouts.sidebar', function ($view) {
            $menus = Menus::orderBy('order', 'asc')->get();
            $view->with('menus', $menus);
        });
    }
}
