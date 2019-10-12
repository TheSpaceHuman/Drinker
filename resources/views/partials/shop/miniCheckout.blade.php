<ul class="list-checkout-order">
    @foreach($products as $product)
        <li class="cart_item">
            <div class="wrap-product-name">
                <img src="{{Voyager::image($product->thumbnail('small'))}}"
                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazy-img loaded"
                     alt="{{ $product->title }}"
                     data-lazied="IMG" width="300" height="300">
                <div class="product-name">
                   {{ $product->title }}
                    <strong class="product-quantity">× {{ session()->get('basket.'.$product->id) }}</strong></div>
            </div>
            <div class="product-total">

                <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">{!! setting('site.currency') !!} </span>{{ $product->price }}</span>
            </div>
        </li>
    @endforeach
</ul>
<table>
    <tbody>
    <tr class="cart-subtotal">
        <th>Промежуточный итог</th>
        <td><span class="woocommerce-Price-amount amount">
                <span class="woocommerce-Price-currencySymbol">{!! setting('site.currency') !!} </span>{{ $totalBefore }}</span>
        </td>
    </tr>


    <tr class="order-total">
        <th>Итог</th>
        <td>
            <strong>
                <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">{!! setting('site.currency') !!} </span>{{ $total }}
                </span>
            </strong>
        </td>
    </tr>
    </tbody>
</table>
<div id="payment" class="woocommerce-checkout-payment">
    <div class="form-row place-order">
        <div class="woocommerce-terms-and-conditions-wrapper">
            <div class="woocommerce-privacy-policy-text">

            </div>
        </div>
        <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" data-value="Купить">Купить</button>
    </div>
</div>
