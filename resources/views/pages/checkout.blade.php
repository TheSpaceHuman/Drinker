@extends('layouts.main')

@section('title', 'Оформление заказа')
@section('description', '')
@section('keywords', '')


@section('header')
    @include('includes.header')
@endsection

@section('footer')
    @include('includes.footer')
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('checkout') }}
@endsection

@section('content')
    <main id="site-main-content" class="main-content">
        <div class="container">
            <h1 class="page-title the-title">Оформление заказа</h1>
            <div class="page-content">
                <div class="woocommerce-notices-wrapper"></div>

                <form name="checkout" method="post" class="checkout woocommerce-checkout"
                      action="{{ route('action.basket.newOrder') }}" enctype="multipart/form-data"
                      novalidate="novalidate">@csrf
                    <div id="customer_details" class="wrap-customer-detail">
                        <div class="woocommerce-billing-fields">

                            <h3>Платежные реквизиты</h3>

                            <div class="woocommerce-billing-fields__field-wrapper">
                                <p class="form-row form-row-wide" id="billing_company_field" data-priority="30">
                                    <label for="checkout_name" class="">ФИО</label>
                                    <span class="woocommerce-input-wrapper">
                                        <input type="text" class="input-text @error('checkout_name') is-invalid @enderror"
                                             name="checkout_name"
                                             id="checkout_name"
                                             placeholder=""
                                             value="{{ old('checkout_name') }}"
                                             autocomplete="organization">
                                        @error('checkout_name')
                                            <div class="valid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </span>
                                </p>

                                <p class="form-row form-row-wide address-field validate-required"
                                   id="billing_city_field" data-priority="70"
                                   data-o_class="form-row form-row-wide address-field validate-required">
                                    <label for="billing_city" class="">Город&nbsp;
                                        <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <span class="woocommerce-input-wrapper">
                                        <input type="text" class="input-text @error('checkout_city') is-invalid @enderror"
                                               name="checkout_city"
                                               id="checkout_city"
                                               placeholder=""
                                               value="{{old('checkout_city')}}"
                                        >
                                        @error('checkout_city')
                                            <div class="valid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </span>
                                </p>

                                <p class="form-row form-row-wide address-field validate-required"
                                   id="billing_address_1_field" data-priority="50">
                                    <label for="checkout_address" class="">Адрес
                                        <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <span class="woocommerce-input-wrapper">
                                        <input type="text" class="input-text @error('checkout_address') is-invalid @enderror"
                                             name="checkout_address"
                                             id="checkout_address"
                                             placeholder=""
                                             value={{ old('checkout_address') }}""
                                             autocomplete="address-line1"
                                             >
                                        @error('checkout_address')
                                            <div class="valid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </span>
                                </p>



                                <p class="form-row form-row-wide validate-required validate-phone"
                                   id="billing_phone_field" data-priority="100">
                                    <label for="checkout_phone" class="">Телефон&nbsp;
                                        <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <span class="woocommerce-input-wrapper">
                                        <input type="tel" class="input-text @error('checkout_phone') is-invalid @enderror"
                                                 name="checkout_phone"
                                                 id="checkout_phone" placeholder=""
                                                 value="{{ old('checkout_phone') }}"
                                        >
                                        @error('checkout_phone')
                                            <div class="valid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </span>
                                </p>
                               {{-- <p class="form-row form-row-wide validate-required validate-email"
                                   id="billing_email_field" data-priority="110">
                                    <label for="billing_email" class="">
                                         Email
                                        <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <span class="woocommerce-input-wrapper">
                                        <input type="email" class="input-text @error('checkout_email') is-invalid @enderror"
                                             name="checkout_email"
                                             id="checkout_email" placeholder=""
                                             value="{{ old('checkout_email') }}"
                                        >
                                        @error('checkout_email')
                                            <div class="valid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </span>
                                </p>--}}
                            </div>

                        </div>

                        <div class="woocommerce-shipping-fields">
                        </div>
                        <div class="woocommerce-additional-fields">
                            <h3>Дополнительная информация</h3>
                            <div class="woocommerce-additional-fields__field-wrapper">
                                <p class="form-row notes" id="order_comments_field" data-priority="">
                                    <label for="checkout_comment" class="">
                                        Заметка к заказу&nbsp;
                                    </label>
                                    <span class="woocommerce-input-wrapper">
                                        <textarea name="checkout_comment"
                                                class="input-text @error('checkout_comment') is-invalid @enderror"
                                                id="checkout_comment"
                                                placeholder="Примечания о вашем заказе, например специальные заметки для доставки"
                                                rows="2"
                                                cols="5">{{ old('checkout_comment') }}</textarea>
                                        @error('checkout_comment')
                                            <div class="valid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="woocommerce-additional-fields" style="margin-bottom: 30px;">
                            <h3>Варианты доставки</h3>
                            <div class="delivery-radio-list">
                                @forelse($deliveries as $delivery)
                                    <div class="delivery-radio-item">
                                        <input type="radio" name="delivery" id="{{ $delivery->title }}" value="{{ $delivery->id }}">
                                        <label for="{{ $delivery->title }}">{{ $delivery->title }}</label>
                                    </div>
                                    @empty
                                    <p>Доставки отсутствуют</p>
                                @endforelse
                            </div>
                        </div>
                    </div>


                    <div class="wrap-order-detail">
                        <h3 id="order_review_heading">Ваш заказ</h3>


                        <div id="order_review" class="woocommerce-checkout-review-order">
                            <div class="shop_table woocommerce-checkout-review-order-table">
                                @include('partials.shop.miniCheckout')
                            </div>

                        </div>

                    </div>
                </form>

            </div>
        </div>
        <div class="clear-fix"></div>
        </div>
    </main>
@endsection
