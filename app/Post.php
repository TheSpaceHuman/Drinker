<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Post extends Model
{
  use Resizable;
  protected $guarded = [];
  protected $table = 'posts';

  public function category()
  {
    return $this->belongsTo(Category::class);
  }
}
