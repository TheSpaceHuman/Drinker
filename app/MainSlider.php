<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;


class MainSlider extends Model
{
  use Resizable;
  protected $guarded = ['id'];
    
}
