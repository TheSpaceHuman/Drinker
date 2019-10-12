<?php

namespace App\Http\Controllers;

use App\Delivery;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BasketController extends Controller
{
  public function addProduct($id, $quantity, Request $request)
  {
    $product = Product::find($id);
    $quantityInt = (int)$quantity;

    if($request->session()->has('basket.'.$id)) {
      $sessionQuantity = (int) $request->session()->get('basket.'.$id);
      $sessionQuantity += $quantityInt;
      $request->session()->put('basket.'.$id, $sessionQuantity);
    } else {
      $request->session()->put('basket.'.$id, $quantityInt);
    }

    $request->session()->flash('success-message', 'Успешно добавлен в корзину');
    $request->session()->flash('success-message-title', $product->title);

//    Log::info('added product: '.$product->title);

    return back();

  }

  public function addProductForm(Request $request)
  {
    $id = $request->id;
    $quantity = $request->quantity;

    $product = Product::find($id);
    $quantityInt = (int)$quantity;

    if($request->session()->has('basket.'.$id)) {
      $sessionQuantity = (int) $request->session()->get('basket.'.$id);
      $sessionQuantity += $quantityInt;
      $request->session()->put('basket.'.$id, $sessionQuantity);
    } else {
      $request->session()->put('basket.'.$id, $quantityInt);
    }

    $request->session()->flash('success-message', 'Успешно добавлен в корзину');
    $request->session()->flash('success-message-title', $product->title);
    $request->session()->flash('basket-alert', $product->id);

    return back();

  }

  public function decrementProduct($id, $quantity, Request $request)
  {
    $product = Product::find($id);
    $quantityInt = (int)$quantity;

    if($request->session()->has('basket.'.$id)) {
      $sessionQuantity = (int) $request->session()->get('basket.'.$id);
      $sessionQuantity = $sessionQuantity - $quantityInt;
      if ($sessionQuantity < 1) {
        $request->session()->forget('basket.'.$id);
      } else {
        $request->session()->put('basket.'.$id, $sessionQuantity);
      }

    }

    if($sessionQuantity < 1) {
      $request->session()->flash('info-message', 'Продукт удалён из корзины' );
    } else {
      $request->session()->flash('info-message', 'Количество уменьшено на '.$quantityInt );
    }
    $request->session()->flash('info-message-title', $product->title);

    return back();

  }

  public function removeProduct($id, Request $request)
  {
    $product = Product::find($id);

    $request->session()->forget('basket.'.$id);

    $request->session()->flash('info-message', 'Успешно удален из корзины');
    $request->session()->flash('info-message-title', $product->title);

    return back();

  }

  public function clearBasket(Request $request)
  {
    $request->session()->forget('basket');

    $request->session()->flash('info-message', 'Корзина очищена');

    return back();
  }

  public function fastBuy($id, Request $request)
  {
    $request->session()->forget('basket');

    $request->session()->put('basket.'.$id, 1);

    $deliveries = Delivery::orderBy('sort', 'DESC')->get();

    return view('pages.checkout', compact('deliveries'));

  }

}
