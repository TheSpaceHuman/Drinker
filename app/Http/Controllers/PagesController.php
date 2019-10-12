<?php

namespace App\Http\Controllers;

use App\Category;
use App\Delivery;
use App\Post;
use App\Product;
use App\ProductCategory;
use App\Statistic;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
  public function index()
  {
    Statistic::logIp();
    $page = Page::findOrFail(2);
    $productCategories = ProductCategory::orderBy('sort', 'DESC')->get();
    $products = Product::orderBy('title', 'ASC')->where('popular', 1)->get();

    return view('pages.index', compact('page', 'productCategories', 'products'));
  }

  public function shop(Request $request)
  {
    Statistic::logIp();
    $page = Page::findOrFail(4);

    if ($request->has('orderby')) {
      if($request->orderby === 'price-desc') {
        $products = Product::orderBy('price', 'ASC')->paginate(20);
      } else if($request->orderby === 'price-asc') {
        $products = Product::orderBy('price', 'DESC')->paginate(20);
      } else if($request->orderby === 'title') {
        $products = Product::orderBy('title')->paginate(20);
      }
    } else {
      $products = Product::orderBy('title')->paginate(20);
    }

    return view('pages.shop', compact('page', 'products'));
  }

  public function blog()
  {
    Statistic::logIp();
    $page = Page::findOrFail(6);
    $posts = Post::latest()->paginate(10);
    $blogCategories = Category::all();

    return view('pages.blog', compact('page', 'posts', 'blogCategories'));
  }

  public function blogCategory($slug)
  {
    Statistic::logIp();
    $category = Category::where('slug', $slug)->firstOrFail();
    $posts = Post::where('category_id', $category->id)->latest()->paginate(10);
    $blogCategories = Category::all();

    return view('pages.blogCategory', compact('category', 'posts', 'blogCategories'));
  }

  public function blogPost($slug)
  {
    $post = Post::where('slug', $slug)->firstOrFail();
    $blogCategories = Category::all();

    return view('pages.blogPost', compact('post', 'blogCategories'));
  }

  public function about()
  {
    Statistic::logIp();
    $page = Page::findOrFail(3);

    return view('pages.about', compact('page'));
  }

  public function contact()
  {
    Statistic::logIp();
    $page = Page::findOrFail(5);

    return view('pages.contact', compact('page'));
  }

  public function basket()
  {
    $page = Page::findOrFail(7);
    return view('pages.basket', compact('page'));
  }

  public function product($slug)
  {
    $product = Product::where('slug', $slug)->firstOrFail();
    $similarProducts = $product->recommendedProducts();

    return view('pages.product', compact('product', 'similarProducts'));
  }

  public function productCategory($slug, Request $request)
  {
    $productCategory = ProductCategory::orderBy('sort', 'DESC')->where('slug', $slug)->firstOrFail();

    if ($request->has('orderby')) {
      if($request->orderby === 'price-desc') {
        $products = Product::orderBy('price', 'ASC')->where('category_id', $productCategory->id)->paginate(20);
      } else if($request->orderby === 'price-asc') {
        $products = Product::orderBy('price', 'DESC')->where('category_id', $productCategory->id)->paginate(20);
      } else if($request->orderby === 'title') {
        $products = Product::orderBy('title')->where('category_id', $productCategory->id)->paginate(20);
      }
    } else {
      $products = Product::orderBy('title')->where('category_id', $productCategory->id)->paginate(20);
    }

    return view('pages.productCategory', compact('productCategory', 'products'));
  }

  public function checkout()
  {
    $deliveries = Delivery::orderBy('sort', 'DESC')->get();

    return view('pages.checkout', compact('deliveries'));
  }

  public function search(Request $request)
  {
    $products = Product::search($request->search)->paginate(10);
//    dd(request()->query('search'));

    return view('pages.search', compact('products'));
  }

  public function test()
  {
    $data = Product::first();
    dd($data);
  }

}
