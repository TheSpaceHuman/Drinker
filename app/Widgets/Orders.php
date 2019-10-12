<?php

namespace App\Widgets;

use App\Purchase;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class Orders extends BaseDimmer
{
  /**
   * The configuration array.
   *
   * @var array
   */
  protected $config = [];

  /**
   * Treat this method as a controller action.
   * Return view() or other content to display.
   */
  public function run()
  {
    $count = Purchase::all()->count();
    $string = 'Заказов';

    return view('voyager::dimmer', array_merge($this->config, [
        'icon'   => 'voyager-paypal',
        'title'  => "{$count} {$string}",
        'text'   => __('voyager::dimmer.page_text', ['count' => $count, 'string' => Str::lower($string)]),
        'button' => [
            'text' => __('voyager::dimmer.page_link_text'),
            'link' => route('voyager.purchases.index'),
        ],
        'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
    ]));
  }

  /**
   * Determine if the widget should be displayed.
   *
   * @return bool
   */
//  public function shouldBeDisplayed()
//  {
//    return app('VoyagerAuth')->user()->can('browse', Voyager::model('Page'));
//  }
}
