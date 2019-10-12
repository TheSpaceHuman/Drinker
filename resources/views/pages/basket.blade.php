@extends('layouts.main')

@section('title', $page->title)
@section('description', $page->meta_description)
@section('keywords', $page->meta_keywords)


@section('header')
    @include('includes.header')
@endsection

@section('footer')
    @include('includes.footer')
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('basket') }}
@endsection
{{--@php(dd($recommended))--}}
@section('content')
    <main id="site-main-content" class="main-content woocommerce-cart">
        <div class="container">
            <h1 class="page-title the-title">Корзина</h1>
            <div class="page-content">
                <div class="woocommerce">
                    <div class="zoo-wrap-cart-content">
                        <div class="woocommerce-notices-wrapper"></div>
                        <form class="woocommerce-cart-form" action="http://winnes.wp1.zootemplate.com/cart/"
                              method="post">

                            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                @if (request()->session()->has('basket'))
                                <thead>
                                <tr>
                                    <th class="product-remove"></th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Продукт</th>
                                    <th class="product-price">Цена</th>
                                    <th class="product-quantity">Количество</th>
                                    <th class="product-subtotal">Отого</th>
                                </tr>
                                </thead>
                                @endif
                                <tbody>

                                   @forelse($products as $product)
                                       <tr class="woocommerce-cart-form__cart-item cart_item">

                                           <td class="product-remove">
                                               <a href="{{ route('action.basket.removeProduct', ['id' => $product->id]) }}"
                                                  class="remove" aria-label="Удалить"
                                                  data-product_sku=""><i class="zoo-icon-close"></i>
                                               </a>
                                           </td>

                                           <td class="product-thumbnail">
                                               <a href="{{ route('page.product', ['slug' => $product->slug]) }}">
                                                   <img src="{{Voyager::image($product->thumbnail('small'))}}"
                                                       class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazy-img loaded"
                                                       alt="{{ $product->title }}" data-lazied="IMG" width="300" height="300">
                                               </a>
                                           </td>

                                           <td class="product-name" data-title="Product">
                                               <a href="{{ route('page.product', ['slug' => $product->slug]) }}">{{ $product->title }}</a>
                                               <div class="mobile-content">
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">{!! setting('site.currency') !!} </span>{{ $product->price }}
                                                </span>
                                               <div class="product-remove">
                                                   <a href="{{ route('action.basket.removeProduct', ['id' => $product->id]) }}" class="remove" aria-label="Удалить"><i class="zoo-icon-close"></i></a>
                                               </div>
                                               </div>
                                           </td>

                                           <td class="product-price" data-title="Price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">{!! setting('site.currency') !!} </span>{{ $product->price }}
                                            </span>
                                           </td>

                                           <td class="product-quantity" data-title="Quantity">
                                               <div class="quantity">
                                                   <a href="{{ route('action.basket.decrementProduct', ['id' => $product->id, 'quantity' => 1 ]) }}" class="qty-nav decrease">-</a>
                                                   <input type="number" class="input-text qty text" step="1" min="0" max=""
                                                          name="basket-item" value="{{ session()->get('basket.'.$product->id) }}"
                                                          title="Qty" size="4" inputmode="numeric">
                                                   <a href="{{ route('action.basket.addProduct', ['id' => $product->id, 'quantity' => 1 ]) }}" class="qty-nav increase">+</a>
                                               </div>
                                           </td>

                                           <td class="product-subtotal" data-title="Total">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">{!! setting('site.currency') !!} </span>{{ $product->getTotalCost() }}
                                            </span>
                                           </td>
                                       </tr>
                                   @empty
                                        <h4 style="margin: 20px; font-weight: 700; text-align: center;">Корзина пуста</h4>
                                   @endforelse

                                </tbody>
                            </table>

                            <div class="bottom-table-cart">
                                <div class="coupon" style="display: none">
                                    <label for="coupon_code">Купон:</label>
                                    <input type="text" name="coupon_code" class="input-text" id="coupon_code" value=""
                                           placeholder="Скидочный купон">
                                    <button type="submit" class="button" name="apply_coupon" value="Использовать купон">
                                        Использовать купон
                                    </button>
                                </div>
                                @if (request()->session()->has('basket'))
                                    <a class="button btn back-shop" style="display: none;" title="Очистить корзину" href="{{ route('action.basket.clearBasket') }}">
                                        Очистить корзину
                                    </a>
                                @endif

                                <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce"
                                       value="d411cb02df"><input type="hidden" name="_wp_http_referer" value="/cart/">
                            </div>
                        </form>

                        <div class="cart-collaterals">
                            <div class="cart_totals ">


                                <h2>Всего в корзине</h2>
                                <div class="toggle-block">
                                    <h3 class="heading-toggle-block">
                                        Купон:
                                        <i class="zoo-icon-down"></i>
                                    </h3>
                                    <div class="coupon content-toggle-block">
                                        <input type="text" name="coupon_code" class="input-text" value=""
                                               placeholder="Скидочный купон">
                                        <button class="button apply-coupon">Использовать купон</button>
                                    </div>
                                </div>
                                <table class="shop_table shop_table_responsive" cellspacing="0">

                                    <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Промежуточный итог</th>
                                        <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">{!! setting('site.currency') !!} </span>{{ $total }}</span>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Всего</th>
                                        <td data-title="Total"><strong><span
                                                        class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">{!! setting('site.currency') !!} </span>{{ $total }}</span></strong>
                                        </td>
                                    </tr>


                                    </tbody>
                                </table>

                                <div class="wc-proceed-to-checkout">
                                    <a href="{{ route('page.checkout') }}" class="checkout-button button alt wc-forward">
                                        Оформить заказ
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="clear-fix"></div>
            @isset($recommended)
            <section class="related products">
                <h2>Рекомендуемые продукты</h2>
                <ul class="products zoo-products grid-layout grid-lg-4-cols grid-md-2-cols grid-2-cols" data-zoo-config="{&quot;cols&quot;:&quot;4&quot;,&quot;tablet&quot;:&quot;2&quot;,&quot;mobile&quot;:&quot;2&quot;,&quot;highlight_featured&quot;:&quot;0&quot;}">
                    @foreach($recommended as $product)
                        @include('partials.shop.miniCardProduct', compact('product'))
                    @endforeach
                </ul>

            </section>
            @endisset
        </div>
    </main>
@endsection