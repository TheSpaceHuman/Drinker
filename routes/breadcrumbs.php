<?php

// Index
Breadcrumbs::for('home', function ($trail) {
$trail->push('Главная', route('page.index'));
});

// Home > Search
Breadcrumbs::for('search', function ($trail) {
  $trail->parent('home');
  $trail->push('Поиск', route('page.search'));
});

// Home > Shop
Breadcrumbs::for('shop', function ($trail) {
  $trail->parent('home');
  $trail->push('Магазин', route('page.shop'));
});

// Home > Shop > [productCategory]
Breadcrumbs::for('productCategory', function ($trail, $productCategory) {
  $trail->parent('shop');
  $trail->push($productCategory->title, route('page.productCategory', $productCategory->slug));
});

// Home > Shop > [productCategory] > [Product]
Breadcrumbs::for('product', function ($trail, $product) {
  $trail->parent('productCategory', $product->category);
  $trail->push($product->title, route('page.product', $product->slug));
});

// Home > About
Breadcrumbs::for('about', function ($trail) {
$trail->parent('home');
$trail->push('О компании', route('page.about'));
});

// Home > Basket
Breadcrumbs::for('basket', function ($trail) {
  $trail->parent('home');
  $trail->push('Корзина', route('page.basket'));
});

// Home > Basket > Checkout
Breadcrumbs::for('checkout', function ($trail) {
  $trail->parent('basket');
  $trail->push('Оформление заказа', route('page.checkout'));
});

// Home > Contact
Breadcrumbs::for('contact', function ($trail) {
  $trail->parent('home');
  $trail->push('Контакты', route('page.contact'));
});

// Home > Blog
Breadcrumbs::for('blog', function ($trail) {
$trail->parent('home');
$trail->push('Блог', route('page.blog'));
});


// Home > Blog > [PostCategory]
Breadcrumbs::for('postCategory', function ($trail, $postCategory) {
  $trail->parent('blog');
  $trail->push($postCategory->name, route('page.blog.category', $postCategory->slug));
});

// Home > Blog > [PostCategory] > [Post]
Breadcrumbs::for('post', function ($trail, $post) {
  $trail->parent('postCategory', $post->category);
  $trail->push($post->title, route('page.post', $post->slug));
});


