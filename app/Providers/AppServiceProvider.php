<?php

namespace App\Providers;

use App\MainSlider;
use App\Product;
use App\ProductCategory;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\BasketComposer;

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
      view()->composer('partials.nav.AppMainMenu', function($view){
        $view->with('product_categories', ProductCategory::orderBy('sort', 'DESC')->get());
      });

      view()->composer('partials.nav.AppMainMenuMobile', function($view){
        $view->with('product_categories', ProductCategory::orderBy('sort', 'DESC')->get());
      });

      view()->composer('partials.shop.aside', function($view){
        $view->with('productCategories', ProductCategory::orderBy('sort', 'DESC')->get());
      });

      view()->composer('includes.mainSlider', function($view){
        $view->with('slider', MainSlider::orderBy('sort', 'ASC')->get());
      });

      view()->composer('admin.product.recommended', function($view){
        $view->with('products', Product::orderBy('title', 'ASC')->get());
      });

      view()->composer('partials.shop.miniBasket', BasketComposer::class);
      view()->composer('partials.shop.miniBasketMobile', BasketComposer::class);

      view()->composer('pages.basket', BasketComposer::class);

      view()->composer('partials.shop.miniCheckout', BasketComposer::class);

      view()->composer('partials.shop.orderTemplate', BasketComposer::class);

    }
}
