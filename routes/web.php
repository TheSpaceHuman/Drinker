<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Pages
Route::get('/', 'PagesController@index')->name('page.index');
Route::get('shop', 'PagesController@shop')->name('page.shop');
Route::get('shop/product/{slug}', 'PagesController@product')->name('page.product');
Route::get('shop/category/{slug}', 'PagesController@productCategory')->name('page.productCategory');
Route::get('blog', 'PagesController@blog')->name('page.blog');
Route::get('blog/category/{slug}', 'PagesController@blogCategory')->name('page.blog.category');
Route::get('blog/post/{slug}', 'PagesController@blogPost')->name('page.post');
Route::get('about', 'PagesController@about')->name('page.about');
Route::get('contact', 'PagesController@contact')->name('page.contact');
Route::get('basket', 'PagesController@basket')->name('page.basket');
Route::get('basket/checkout', 'PagesController@checkout')->name('page.checkout');
Route::get('search', 'PagesController@search')->name('page.search');
Route::get('test', 'PagesController@test')->name('page.test');

// Actions
Route::post('contact/mail-send', 'SendMailController@contactFeedback')->name('action.contact.mailSend');
Route::get('basket/addProduct/{id}-{quantity}', 'BasketController@addProduct')->name('action.basket.addProduct');
Route::post('basket/addProductForm', 'BasketController@addProductForm')->name('action.basket.addProductForm');
Route::get('basket/removeProduct/{id}', 'BasketController@removeProduct')->name('action.basket.removeProduct');
Route::get('basket/decrementProduct/{id}-{quantity}', 'BasketController@decrementProduct')->name('action.basket.decrementProduct');
Route::get('basket/fastBuy/{id}', 'BasketController@fastBuy')->name('action.basket.fastBuy');
Route::get('basket/clearBasket', 'BasketController@clearBasket')->name('action.basket.clearBasket');
Route::post('basket/checkout/createOrder', 'OrderController@newOrder')->name('action.basket.newOrder');


Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Sitemap
Route::get('sitemap', function (){
  $sitemap = App::make('sitemap');
  $sitemap->setCache('laravel.sitemap', 60);
  if (!$sitemap->isCached()) {
    $sitemap->add(route('page.index'), null, 1);
    $sitemap->add(route('page.about'), null, 0.5);
    $sitemap->add(route('page.contact'), null, 0.5);
    $sitemap->add(route('page.shop'), null, 0.5);
    $sitemap->add(route('page.blog'), null, 0.5);

    $posts =  DB::table('posts')->orderBy('created_at', 'desc')->get();
    foreach ($posts as $post) {
      $sitemap->add(route('page.post', $post->slug), $post->updated_at, 0.8);
    }

    $productCategories = DB::table('product_categories')->orderBy('created_at', 'desc')->get();
    foreach ($productCategories as $productCategory) {
      $sitemap->add(route('page.productCategory', $productCategory->slug), $productCategory->updated_at, 0.3);
    }

    $products = DB::table('products')->orderBy('created_at', 'desc')->get();
    foreach ($products as $product) {
      $sitemap->add(route('page.product', $product->slug), $product->updated_at, 1);
    }

  }

  return $sitemap->render('xml');
});
