<div id="element-cart-icon-desktop"
     class="element-item element-cart-icon woocommerce style-1 drop-down top-right element-align-right cart-empty">
    <a class="element-cart-link" href="{{ route('page.basket') }}" title="Просмотр корзины">
        <span class="icon-element-cart">
          <i class="cs-font clever-icon-cart-15"></i>
          <span class="element-cart-count">{{ $amount }}</span>
        </span>
    </a>
    <div class="element-cart-content widget_shopping_cart">
        <div class="widget_shopping_cart_content">
            @if($products->isNotEmpty())
                <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                    @foreach($products as $product)
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="{{ route('action.basket.removeProduct', ['id' => $product->id]) }}" class="remove" aria-label="Удалить данный продукт"><i class="zoo-icon-close"></i></a>
                            <div class="wrap-product-thumb">
                                <a href="{{ route('page.product', ['slug' => $product->slug]) }}" class="">
                                    <img src="{{Voyager::image($product->thumbnail('small'))}}"
                                         class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazy-img loaded"
                                         alt="{{ $product->title }}"
                                         data-lazied="IMG" width="300" height="300">
                                </a>
                            </div>
                            <div class="wrap-product-cart-detail">
                                <h4 class="product-widget-title">
                                    <a href="{{ route('page.product', ['slug' => $product->slug]) }}"
                                       title="{{ $product->title }}"
                                    >
                                        {{ $product->title }}
                                    </a>
                                </h4>
                                <span class="quantity">Количество: {{ session()->get('basket.'.$product->id) }}
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">{!! setting('site.currency') !!} </span>{{ $product->price }}
                                    </span>
                                </span>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="wrap-bottom-mini-cart">
                    <p class="woocommerce-mini-cart__total total"><strong>Итого:</strong>
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">{!! setting('site.currency') !!} </span>{{ $total }}
                        </span>
                    </p>


                    <p class="woocommerce-mini-cart__buttons buttons">
                        <a href="{{ route('page.basket') }}" class="button wc-forward">В корзину</a>
                        <a href="{{ route('page.checkout') }}" class="button checkout wc-forward">Заказать</a>
                    </p>
                </div>
            @else
                <p class="woocommerce-mini-cart__empty-message">
                    Корзина пуста
                </p>
            @endif
        </div>
    </div>
</div>