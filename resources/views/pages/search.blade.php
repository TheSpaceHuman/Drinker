@extends('layouts.main')

@section('title', 'Поиск')
@section('description', '')
@section('keywords', '')


@section('header')
    @include('includes.header')
@endsection

@section('footer')
    @include('includes.footer')
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('search') }}
@endsection

@section('content')
    <main id="site-main-content" class="main-content">
        <div class="container">
            <div class="page-content">
                <form role="search" method="get" class="custom-search-form search-form" style="padding-top: 35px;padding-bottom: 35px;" action="{{ route('page.search') }}">
                    <input type="text" placeholder="Поиск…" class="search-field" value="{{ request()->query('search') }}" name="search">
                    <button type="submit" value="Поиск" style="border-bottom-right-radius: 20px;border-top-right-radius: 20px;"><i class="zoo-icon-search"></i></button>
                </form>
                <div class="search">
                    <div class="search__list">
                        @forelse($products as $product)
                            <div class="search__item">
                                <div class="search__item__image">
                                    <a href="{{ route('page.product', ['slug' => $product->slug]) }}">
                                        <img src="{{Voyager::image($product->thumbnail('medium'))}}" alt="{{ $product->title }}">
                                    </a>
                                </div>
                                <div class="search__item__text">
                                    <div class="search__item__text__title">
                                        <a href="{{ route('page.product', ['slug' => $product->slug]) }}">{{ $product->title }}</a>
                                    </div>
                                    <div class="search__item__text__price">
                                        ₽ {{ $product->price }}
                                    </div>
                                    <div class="search__item__text__description">
                                        {{ $product->intro }}
                                    </div>
                                </div>
                            </div>
                            @empty
                            <h3 class="text-center">Ничего подходяжего не найдено</h3>
                        @endforelse
                    </div>

                    {{ $products->appends(['search' => request()->search])->links('partials.pagination.defaultPagination') }}

                </div>
            </div>
            <div class="clear-fix"></div>
        </div>
    </main>
@endsection