<div class="order-listing">
    <table class="table-responsive table" style="width: 100%;">
        <thead>
            <tr>
                <th>Название продукта</th>
                <th>Количество</th>
                <th>Цена</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td><a href="{{ route('page.product', ['slug' => $product->slug]) }}" target="_blank">{{ $product->title }}</a></td>
                    <td>{{ request()->session()->get('basket.'.$product->id) }}</td>
                    <td>{{ $product->price }} ₽</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h4>Доставка: {{ $delivery->title }} - {{ $delivery->price }} ₽</h4>
    <h4 style="margin-bottom: 20px;margin-top: 20px;">Итого: {{ $total }} ₽</h4>
</div>
