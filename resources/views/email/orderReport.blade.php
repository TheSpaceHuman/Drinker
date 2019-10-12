@component('mail::message')
<h1 style="text-align: center;">Новый заказ от {{ $checkout_name }}</h1>
<p>Имя: {{ $checkout_name }}</p>
<p>Телефон: {{ $checkout_phone }}</p>
<p>Email: {{ $checkout_email }}</p>
<p>Город: {{ $checkout_city }}</p>
<p>Адрес: {{ $checkout_address }}</p>
<p>Комментарий: {{ $checkout_comment }}</p>
<p>Доставка: {{ $checkout_delivery }}</p>
<hr>
<table class="table-responsive table" style="width: 100%;">
    <colgroup>
        <col style="width: 50%;" span="1">
        <col style="width: 25%;" span="1">
        <col style="width: 25%;" span="1">
    </colgroup>
   <thead>
       <tr>
           <th style="text-align: left;font-size: 12px;">Название продукта</th>
           <th style="text-align: left;font-size: 12px;">Количество</th>
           <th style="text-align: left;font-size: 12px;">Цена</th>
       </tr>
   </thead>
   <tbody>
       @foreach($checkout_products as $product)
           <tr>
               <td><a href="{{ route('page.product', ['slug' => $product->slug]) }}" target="_blank">{{ $product->title }}</a></td>
               <td>{{ request()->session()->get('basket.'.$product->id) }}</td>
               <td>{{ $product->price }} ₽</td>
           </tr>
       @endforeach
   </tbody>
</table>
<hr>

<strong>Итого: {{ $checkout_total }} ₽</strong>


@endcomponent