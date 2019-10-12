@extends('layouts.main')

@section('title', $productCategory->title)
@section('description', $productCategory->meta_description)
@section('keywords', $productCategory->meta_keywords)

@section('header')
    @include('includes.header')
@endsection

@section('footer')
    @include('includes.footer')
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('productCategory', $productCategory) }}
@endsection

@section('content')
    <main id="site-main-content" class="main-content">
        <div class="zoo-wrap-product-shop-loop off-canvas-sidebar-layout container"><div class="zoo-products-shop-loop">
                    <div class="woocommerce-products-header">
                        <h2 class="shop-title" style="padding-top: 30px;">{{ $productCategory->title }} ({{ $productCategory->products->count() }})</h2>
                        <div class="term-description">
                            {!! $productCategory->description !!}
                        </div>
                    </div>
                    <div class="woocommerce-notices-wrapper"></div><div id="top-shop-loop" class="wrap-top-shop-loop">
                        <div class="left-top-shop-loop">
                            <div class="wrap-toggle-products-layout">
                                <span class="label-toggle-products-layout">Посмотреть, как:</span>
                                <a class="toggle-products-grid-layout toggle-products-layout-button active" data-layout="grid" href="#" title="Сетка"><i class="cs-font clever-icon-grid"></i></a>
                                <a class="toggle-products-list-layout toggle-products-layout-button " data-layout="list" href="#" title="Список"><i class="togglelines"></i></a>
                            </div>
                        </div>
                        <div class="right-top-shop-loop">
                            <form class="woocommerce-ordering" method="get" action="">
                                <select name="orderby" class="orderby" aria-label="сортировка">
                                    <option value="title">Сортировка по названию</option>
                                    <option value="price-asc">Сортировка по цене (убывание)</option>
                                    <option value="price-desc">Сортировка по цене (возрастанию)</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <ul class="products zoo-products grid-layout grid-lg-4-cols grid-md-2-cols grid-2-cols" data-zoo-config="{&quot;cols&quot;:&quot;4&quot;,&quot;tablet&quot;:&quot;2&quot;,&quot;mobile&quot;:&quot;2&quot;,&quot;highlight_featured&quot;:&quot;0&quot;}">

                        @forelse($products as $product)
                            @include('partials.shop.miniCardProduct', compact('product'))
                        @empty
                            <h4>Товары отсутствуют</h4>
                        @endforelse
                    </ul>

                {{ $products->appends(['orderby' => Request::query('orderby')])->links('partials.pagination.defaultPagination') }}


                </div></div>
    </main>
@endsection