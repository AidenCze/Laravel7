<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Producer;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\User;
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
     view()->share('categories', Category::all());
     view()->share('producers', Producer::all());
     view()->share('products', Product::all());
     view()->share('subcategories',Subcategory::all());
    }
}
