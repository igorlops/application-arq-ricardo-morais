<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Models\SeoMeta;

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
        // View::composer('components.app-layout', function ($view) {
        //     $routeName = Route::currentRouteName() ?? 'home';
        //     $seo = SeoMeta::where('page_name', $routeName)
        //                   ->where('status', true)
        //                   ->first();
        //     $view->with('seoMeta', $seo);
        // });
    }
}
