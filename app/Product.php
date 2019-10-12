<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Product extends Model
{
  use Resizable;
  protected $guarded = ['id'];

  public function category()
  {
    return $this->belongsTo('App\ProductCategory');
  }

  public function percentageDiscount()
  {
    $discont = 0;

    if (!empty($this->old_price) && !empty($this->price)) {
      $discont = (int) abs(($this->old_price / $this->price - 1) * 100);
    }

    return $discont;
  }

  public function scopeSearch($query, $s)
  {
    return $query->where('title', 'like', '%'. $s . '%')
        ->orWhere('description', 'like', '%'. $s . '%');
  }

  public function getSessionQuantity()
  {
    if(request()->session()->has('basket.'.$this->id)) {
      return (int)request()->session()->get('basket.'.$this->id);
    } else {
      return 0;
    }
  }

  public function getTotalCost()
  {
    if(request()->session()->has('basket.'.$this->id)) {
      $quantity = (int)request()->session()->get('basket.'.$this->id);
      return $this->price * $quantity;
    } else {
      return $this->price;
    }
  }

  public function recommendedProducts()
  {
    $recommendedIds = $this->recommended;
    $recommendedIds = str_replace(['[', ']', '"'], '', $recommendedIds);
    $recommendedIds = explode(',', $recommendedIds);

    $products = Product::find($recommendedIds);

    return $products;
  }

}
