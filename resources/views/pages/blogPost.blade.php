@extends('layouts.main')

@section('title', $post->title)
@section('description', $post->meta_description)
@section('keywords', $post->meta_keywords)


@section('header')
    @include('includes.header')
@endsection

@section('footer')
    @include('includes.footer')
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('post', $post) }}
@endsection

@section('content')
    <div class="archive">
        <main id="site-main-content" class="main-content content-single-post">
            <div class="wrap-main-content content-single">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-9 wrap-post-content-has-sidebar sidebar-right">
                            <article id="post-3407" class="post-item post-detail post-3407 post type-post status-publish format-standard has-post-thumbnail hentry category-winnes tag-winnes">
                                <div class="header-post col-12 col-lg-12">
                                    <h1 class="title-detail">{{ $post->title }}</h1>
                                    <ul class="post-info" style="margin-bottom: 20px;">
                                        <li class="post-date">
                                            <i class="cs-font clever-icon-clock-4"></i>
                                            {{ $post->created_at->format('d-m-Y') }}
                                        </li>
                                        <li class="list-cat">
                                            <i class="cs-font clever-icon-document"></i>
                                            <a href="{{ route('page.blog.category', ['slug', $post->category->slug]) }}" rel="category">{{ $post->category->name }}</a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="post-media col-12 col-lg-12  single-image">
                                    <img src="{{Voyager::image($post->thumbnail('medium'))}}"
                                         class="attachment-full-thumb size-full-thumb lazy-img wp-post-image loaded"
                                         alt="{{ $post->title }}" data-lazied="IMG" width="1000" height="665">
                                </div>
                                <div class="post-content col-12 col-lg-12">
                                    {!! $post->body !!}
                                </div>
                            </article>
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
            </div>
        </main>
    </div>
@endsection