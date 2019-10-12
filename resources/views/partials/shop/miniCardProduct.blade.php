<li class="product type-product post-2141 status-publish last instock product_cat-scotch has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
    <div class="wrap-product-loop-content">
        <div class="wrap-product-img">
            @if($product->old_price)
                <span class="onsale numeric">-{{ $product->percentageDiscount() }}%</span>
            @endif
            <a href="{{ route('page.product', ['slug' => $product->slug]) }}" title="{{ $product->title }}" class="wrap-img">
                <img width="300" height="300"
                     src="{{Voyager::image($product->thumbnail('small'))}}"
                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazy-img"
                     alt="{{ $product->title }}"
                >
            </a>
            <div class="wrap-product-loop-buttons">
                <a href="{{ route('action.basket.fastBuy', ['id' => $product->id]) }}" class="button" title="Быстрая покупка"><i class="zoo-icon-eye"></i>
                    Быстрая покупка
                </a>
            </div>
                {{--<a href="{{ route('action.basket.addProduct', ['id' => ]) }}" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" title="В корзину" data-product_id="{{ $product->id }}" data-product_sku="" rel="nofollow">
                    <i class="zoo-icon-cart"></i>
                    В корзину
                </a>--}}
            <a href="{{ route('action.basket.addProduct', ['id' => $product->id, 'quantity' => 1 ]) }}" class="button product_type_simple add_to_cart_button ajax-add-to-basket" title="В корзину"  rel="nofollow" data-product-id="{{ $product->id }}" data-product-quantity="1">
                <i class="zoo-icon-cart"></i>
                В корзину
            </a>
        </div>
        <div class="wrap-product-loop-detail">
            <h3 class="product-loop-title">
                <a href="{{ route('page.product', ['slug' => $product->slug]) }}" title="{{ $product->title }}">
                    {{ $product->title }}
                </a>
            </h3>
            @if($product->old_price)
                <span class="price">
                    <del>
                        <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">{!! setting('site.currency') !!} </span>{{ $product->old_price }}</span>
                    </del>
                    <ins>
                        <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">{!! setting('site.currency') !!} </span>{{ $product->price }}</span>
                    </ins>
                </span>
            @else
                <span class="price">
                    <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">{!! setting('site.currency') !!} </span>{{ $product->price }}</span>
                </span>
            @endif
            <div class="product-description">
                {{ $product->intro }}
            </div>
        </div>
    </div>
</li>

