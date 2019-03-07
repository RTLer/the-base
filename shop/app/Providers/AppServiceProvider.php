<?php

namespace App\Providers;

use App\ProductCategory;
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
        \DB::enableQueryLog();

        $categoires = cache()->remember(
            'parentCategories',
            1,
            function (){
                return ProductCategory::query()
                    ->whereNull('parent_id')
                    ->get();
            }
        );
        View::share('categories', $categoires);
    }
}
