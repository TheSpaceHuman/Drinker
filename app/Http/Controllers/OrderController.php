<?php

namespace App\Http\Controllers;

use App\Jobs\SendContactFeedback;
use App\Jobs\SendOrderReportJob;
use App\Product;
use App\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
  public function newOrder(Request $request)
  {
    $request->validate([
       'checkout_name' => 'required|max:255',
       'checkout_city' => 'required|max:255',
       'checkout_address' => 'required|max:255',
       'checkout_phone' => 'required|max:255',
//       'checkout_email' => 'email|max:255',
       'checkout_comment' => 'max:4000',
       'delivery' => 'numeric'
    ]);

    if($request->has('delivery')) {
      $request->session()->put('delivery', (int) $request->delivery);
    }

    $orderTempate = view('partials.shop.orderTemplate');
    $deliver = DB::table('deliveries')->where('id', (int) $request->delivery)->first()->title;

    $basket = request()->session()->get('basket');
    $total = 0;
    $productIds = [];

    if(!empty($basket)) {
      foreach ($basket as $id => $quantity) {
        $productIds[] = $id;
        $total += (int) DB::table('products')->where('id', $id)->first()->price * $quantity;
      }
    }

    $products = Product::find($productIds);


    Purchase::create([
      'name' => $request->checkout_name,
      'city' => $request->checkout_city,
      'address' => $request->checkout_address,
      'phone' => $request->checkout_phone,
      'email' => $request->checkout_email,
      'comment' => $request->checkout_comment,
      'order' => $orderTempate,
      'delivery' => $deliver,
    ]);


    $reportData = [
        'name' => $request->checkout_name,
        'city' => $request->checkout_city,
        'address' => $request->checkout_address,
        'phone' => $request->checkout_phone,
        'email' => $request->checkout_email,
        'comment' => $request->checkout_comment,
        'delivery' => $deliver,
        'total' => $total,
        'products' => $products,
    ];

    dispatch(new SendOrderReportJob($reportData));

    $request->session()->forget('basket');
    $request->session()->forget('delivery');
    $request->session()->flash('success-message', 'Спасибо за покупку!');

    return redirect()->route('page.index');
  }
}
