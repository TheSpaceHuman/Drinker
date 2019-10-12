@extends('layouts.main')

@section('title', $page->title)
@section('description', $page->meta_description)
@section('keywords', $page->meta_keywords)


@section('header')
    @include('includes.header')
@endsection

@section('footer')
    @include('includes.footer')
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('about') }}
@endsection

@section('content')
    <main id="site-main-content" class="main-content">
        <div class="container">
            <div class="page-content">
               {!! $page->body !!}
            </div>
            <div class="clear-fix"></div>
        </div>
    </main>
@endsection