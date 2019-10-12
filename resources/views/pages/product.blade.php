@extends('layouts.main')

@section('title', $product->title)
@section('description',  $product->meta_description)
@section('keywords',  $product->meta_keywords)


@section('header')
    @include('includes.header')
@endsection

@section('footer')
    @include('includes.footer')
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('product', $product) }}
@endsection

@section('content')
    <main id="site-main-content" class="main-content">
        <div class="zoo-wrap-product-shop-loop off-canvas-sidebar-layout container">
            <div class="woocommerce-notices-wrapper"></div>
            <div class="wrap-single-product-content container right-content-layout content-half-width product-horizontal-gallery">
                <div id="product-3573"
                     class="product type-product post-3573 status-publish first instock product_cat-whiskey product_tag-abc product_tag-product-tag has-post-thumbnail shipping-taxable purchasable product-type-simple">

                    <div class="wrap-single-product-images">
                        <div class="product-extended-button">
                        </div>
                        <div class="images zoo-product-gallery with-images gallery-4-cols horizontal-gallery gallery-without-thumb" data-columns="4">
                            <figure class="woocommerce-product-gallery__wrapper">
                                <div class="wrap-main-product-gallery">
                                    @if(!empty($product->images))
                                        @php($images = json_decode($product->images))
                                        @foreach($images as $image)
                                            <div data-thumb="{{ Voyager::image($product->getThumbnail($image, 'small')) }}"
                                                 data-thumb-alt="{{ $product->title }}"
                                                 class="woocommerce-product-gallery__image">
                                                <a href="{{ Voyager::image($product->getThumbnail($image, 'large')) }}">
                                                    <img width="600" height="600"
                                                         src="{{ Voyager::image($product->getThumbnail($image, 'medium')) }}"
                                                         class="wp-post-image lazy-img"
                                                         alt="{{ $product->title }}"
                                                    />
                                                </a>
                                            </div>
                                        @endforeach
                                    @else
                                        <div data-thumb="{{ Voyager::image($product->thumbnail('medium')) }}"
                                             data-thumb-alt="{{ $product->title }}"
                                             class="woocommerce-product-gallery__image">
                                            <a href="{{ Voyager::image($product->thumbnail('large')) }}">
                                                <img width="600" height="600"
                                                     src="{{ Voyager::image($product->thumbnail('large')) }}"
                                                     class="wp-post-image lazy-img"
                                                     alt="{{ $product->title }}"
                                                />
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="summary entry-summary">
                        @if($product->new)
                            <p class="zoo-single-stock-label stock in-stock">Новый</p>
                        @endif
                        <h1 class="product_title entry-title">{{ $product->title }}</h1>
                        <div class="product_meta wrap-custom-meta">
                            <div class="wrap-left-custom-meta">
                            </div>
                        </div>
                            @if($product->old_price)
                                <p class="price">
                                    <del>
                                        <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">{!! setting('site.currency') !!} </span>{{ $product->old_price }}</span>
                                    </del>
                                    <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">{!! setting('site.currency') !!} </span>{{ $product->price }}</span>
                                </p>
                            @else
                                <p class="price">
                                    <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">{!! setting('site.currency') !!} </span>{{ $product->price }}</span>
                                </p>
                            @endif
                        <div class="woocommerce-product-details__short-description">
                            <div id="tab-description" class="tab-content resp-tab-content resp-tab-content-active">
                                <p>
                                    {{ $product->intro }}
                                </p>
                            </div>
                        </div>


                        <form class="cart" action="{{ route('action.basket.addProductForm') }}" method="POST"
                              enctype="multipart/form-data">@csrf
                            <ul class="zoo-extend-cart-info">
                            </ul>

                            <div class="wrap-group-qty">
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <div class="quantity">
                                    <span class="qty-nav decrease">-</span>
                                    <input type="number" id="quantity" class="input-text qty text"
                                           step="1" min="1" max="" name="quantity" value="1" title="Количество" size="4"
                                           inputmode="numeric">
                                    <span class="qty-nav increase">+</span>
                                </div>

                                <button type="submit" class="single_add_to_cart_button button alt">Добавить в корзину</button>

                            </div>
                        </form>

                        <div class="product_meta">
                            <span class="posted_in"><span class="heading-meta">Категория:</span>
                                <a href="{{ route('page.productCategory', ['slug' => $product->category->slug]) }}" rel="tag">{{ $product->category->title }}</a>
                            </span>

                        </div>
                        <div class="wrap-content-popup-page">
                            <span class="close-popup-page"><i class="cs-font clever-icon-close"></i></span>
                        </div>
                        <div class="close-zoo-extend-cart-info">
                        </div>
                    </div>

                   {{-- <div class="zoo-product-data-tabs tabs-layout">
                        <div class="woocommerce-tabs wc-tabs-wrapper">
                            <ul class="tabs wc-tabs" role="tablist">
                                <li class="description_tab active" id="tab-title-description" role="tab"
                                    aria-controls="tab-description">
                                    <a href="#tab-description">Описание</a>
                                </li>
                            </ul>
                            <div class="zoo-group-accordion">
                                <h3 class="tab-heading">Описание <span class="toggle-visible"></span></h3>
                                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab"
                                     id="tab-description" style="display: block;">
                                    <div id="tab-description" class="tab-content resp-tab-content resp-tab-content-active">
                                        {!! $product->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>--}}
                    </div>
                @if($similarProducts->isNotEmpty())
                    <section class="related products">

                        <h2>Рекомендуемые продукты</h2>
                        <ul class="products zoo-products grid-layout grid-lg-4-cols grid-md-2-cols grid-2-cols" data-zoo-config="{&quot;cols&quot;:&quot;4&quot;,&quot;tablet&quot;:&quot;2&quot;,&quot;mobile&quot;:&quot;2&quot;,&quot;highlight_featured&quot;:&quot;0&quot;}">
                            @foreach($similarProducts as $product)
                                @include('partials.shop.miniCardProduct', compact('product'))
                            @endforeach
                        </ul>

                    </section>
                @endif
                </div>

                @include('partials.shop.aside')

                <div id="zoo-sticky-add-to-cart" class="zoo-sticky-add-to-cart">
                    <div class="container">
                        <div class="wrap-product-content">
                            <h3 class="product-title">{{ $product->title }}</h3>
                            @if($product->old_price)
                                <p class="price">
                                    <del>
                                        <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">{!! setting('site.currency') !!} </span>{{ $product->old_price }}</span>
                                    </del>
                                    <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">{!! setting('site.currency') !!} </span>{{ $product->price }}</span>
                                </p>
                            @else
                                <p class="price">
                                    <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">{!! setting('site.currency') !!} </span>{{ $product->price }}</span>
                                </p>
                            @endif
                        </div>
                        <a href="{{ route('action.basket.addProduct', ['id' => $product->id, 'quantity' => 1 ]) }}" class="button button-sticky-add-to-cart ajax-add-to-basket" title="Добавить в корзину" data-product-id="{{ $product->id }}" data-product-quantity="1">Добавить в корзину</a>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection