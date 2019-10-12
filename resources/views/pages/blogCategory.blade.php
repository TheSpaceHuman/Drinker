@extends('layouts.main')

@section('title', $category->name)
@section('description', '')
@section('keywords', '')


@section('header')
    @include('includes.header')
@endsection

@section('footer')
    @include('includes.footer')
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('postCategory', $category) }}
@endsection

@section('content')
    <div class="archive">
        <main id="site-main-content" class="main-content archive-content has-right-sidebar">
            <div class="container">
                <h1>{{ $category->name }}</h1>
                <div class="row">
                    <div class="wrap-loop-content col-12 col-md-9 list-layout">
                        <div class="row">
                            @foreach($posts as $post)
                                @include('partials.blog.miniCardBlog', compact('post'))
                            @endforeach
                        </div>

                        {{ $posts->links('partials.pagination.defaultPagination') }}

                    </div>
                    <aside id="sidebar" class="sidebar widget-area col-12 col-md-3" role="complementary">
                        <div id="search-2" class="widget widget_search">
                            <form role="search" method="get" class="custom-search-form search-form" action="{{ route('page.search') }}">
                                <input type="text" placeholder="Поиск…" class="search-field" value="" name="search">
                                <button type="submit" value="Поиск"><i class="zoo-icon-search"></i></button>
                            </form>
                        </div>

                        <div id="nav_menu-2" class="widget widget_nav_menu"><h4 class="widget-title">Категории</h4>
                            <div class="menu-main-menu-container">
                                <ul id="menu-main-menu-2" class="menu">
                                    @foreach($blogCategories as $category)
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4472">
                                            <a href="{{ route('page.blog.category', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>


                    </aside>
                </div>
            </div>
        </main>
    </div>
@endsection