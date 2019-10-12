<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class ProductCategory extends Model
{
  use Resizable;
  protected $guarded = ['id'];

  public function products()
  {
    return $this->hasMany('App\Product', 'category_id');
  }

}
