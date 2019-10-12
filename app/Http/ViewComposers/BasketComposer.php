<?php

namespace App\Http\ViewComposers;


use App\Delivery;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BasketComposer
{
  public function compose(View $view)
  {
    $basket = request()->session()->get('basket');
    $amount = 0;
    $totalBefore = 0;
    $total = 0;
    $productIds = [];

    if(!empty($basket)) {
      foreach ($basket as $id => $quantity) {
        $productIds[] = $id;
        $total += (int) DB::table('products')->where('id', $id)->first()->price * $quantity;
      }
      $amount = count($basket);
    }

    $products = Product::find($productIds);
    $recommended = null;
    if($products->isNotEmpty()) {
      $recommended = $products->first()->recommendedProducts();
    }

    $deliveryId = null;
    $delivery = null;
    if(request()->session()->has('delivery')) {
      $deliveryId = (int) request()->session()->get('delivery');
      $total += (int) DB::table('deliveries')->where('id', $deliveryId)->first()->price;
      $delivery = Delivery::find($deliveryId);
    }




    return $view->with([
        'products' => $products,
        'amount' => $amount,
        'total' => $total,
        'totalBefore' => $total,
        'recommended' => $recommended,
        'delivery' => $delivery,
    ]);
  }
}