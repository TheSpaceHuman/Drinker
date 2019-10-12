@extends('layouts.main')

@section('title', $page->title)
@section('description', $page->meta_description)
@section('keywords', $page->meta_keywords)


@section('header')
    @include('includes.headerIndex')
@endsection

@section('footer')
    @include('includes.footer')
@endsection

@section('content')
    <main id="site-main-content" class="main-content">
        <div class="container">
            <div class="page-content">
                <div data-elementor-type="post" data-elementor-id="1915" class="elementor elementor-1915"
                     data-elementor-settings="[]">
                    <div class="elementor-inner">
                        <div class="elementor-section-wrap">
                            <section class="elementor-element elementor-element-d4b54a2 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                    data-id="d4b54a2" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div
                                                class="elementor-element elementor-element-11ca95c elementor-column elementor-col-100 elementor-top-column"
                                                data-id="11ca95c" data-element_type="column">
                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-b8e938f elementor-widget elementor-widget-clever-slider"
                                                         data-id="b8e938f" data-element_type="widget" data-widget_type="clever-slider.default">
                                                        <div class="elementor-widget-container">
                                                            @include('includes.mainSlider')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                    class="elementor-element elementor-element-5b399e1 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                    data-id="5b399e1" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div
                                                class="elementor-element elementor-element-730c572 elementor-column elementor-col-100 elementor-top-column"
                                                data-id="730c572" data-element_type="column">
                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    {{--<div
                                                            class="elementor-element elementor-element-b70a2b3 elementor-widget elementor-widget-heading"
                                                            data-id="b70a2b3" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">DRINKER</h2></div>
                                                        </div>--}}
                                                   {!! $page->body !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>


                            {{--<section
                                    class="elementor-element elementor-element-29c64b0 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                    data-id="29c64b0" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div
                                                class="elementor-element elementor-element-7a32869 elementor-column elementor-col-100 elementor-top-column"
                                                data-id="7a32869" data-element_type="column">
                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div
                                                            class="elementor-element elementor-element-0cec02b no-space-between-item elementor-widget elementor-widget-clever-multi-banner"
                                                            data-id="0cec02b" data-element_type="widget" data-widget_type="clever-multi-banner.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="  cafe-grid-lg-6-cols cafe-grid-md-3-cols cafe-grid-2-cols "
                                                                 data-cafe-config=''>
                                                                <div class="cafe-row">
                                                                    <div class="cafe-banner normal cafe-overlay-content cafe-col">
                                                                        <a href="#">
                                                                            <div class="cafe-wrap-image">
                                                                                <img
                                                                                        src="http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/04/block1-1-1.jpg"/>
                                                                            </div>
                                                                            <div class="cafe-wrap-content">
                                                                                <div class="cafe-wrap-content-inner">
                                                                                    <h3 class="cafe-banner-title">Limited Time Offers</h3>
                                                                                    <div class="cafe-wrap-extend-content">
                                                                                        <div class="cafe-banner-description"><p>Shop Now</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a></div>
                                                                    <div class="cafe-banner normal cafe-overlay-content cafe-col">
                                                                        <a href="#">
                                                                            <div class="cafe-wrap-image">
                                                                                <img
                                                                                        src="http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/04/block1-2-1.jpg"/>
                                                                            </div>
                                                                            <div class="cafe-wrap-content">
                                                                                <div class="cafe-wrap-content-inner">
                                                                                    <h3 class="cafe-banner-title">Feature Reds</h3>
                                                                                    <div class="cafe-wrap-extend-content">
                                                                                        <div class="cafe-banner-description"><p>Discover</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a></div>
                                                                    <div class="cafe-banner normal cafe-overlay-content cafe-col">
                                                                        <a href="#">
                                                                            <div class="cafe-wrap-image">
                                                                                <img
                                                                                        src="http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/04/block1-3-1.jpg"/>
                                                                            </div>
                                                                            <div class="cafe-wrap-content">
                                                                                <div class="cafe-wrap-content-inner">
                                                                                    <h3 class="cafe-banner-title">Feature Whites</h3>
                                                                                    <div class="cafe-wrap-extend-content">
                                                                                        <div class="cafe-banner-description"><p>Join Now</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a></div>
                                                                    <div class="cafe-banner normal cafe-overlay-content cafe-col">
                                                                        <a href="#">
                                                                            <div class="cafe-wrap-image">
                                                                                <img
                                                                                        src="http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/04/block1-4-1.jpg"/>
                                                                            </div>
                                                                            <div class="cafe-wrap-content">
                                                                                <div class="cafe-wrap-content-inner">
                                                                                    <h3 class="cafe-banner-title">Cocktails & Spritzers</h3>
                                                                                    <div class="cafe-wrap-extend-content">
                                                                                        <div class="cafe-banner-description"><p>Shop Now</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a></div>
                                                                    <div class="cafe-banner normal cafe-overlay-content cafe-col">
                                                                        <a href="#">
                                                                            <div class="cafe-wrap-image">
                                                                                <img
                                                                                        src="http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/04/block1-5-1-1.jpg"/>
                                                                            </div>
                                                                            <div class="cafe-wrap-content">
                                                                                <div class="cafe-wrap-content-inner">
                                                                                    <h3 class="cafe-banner-title">Book A Tasting</h3>
                                                                                    <div class="cafe-wrap-extend-content">
                                                                                        <div class="cafe-banner-description"><p>Discover</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a></div>
                                                                    <div class="cafe-banner normal cafe-overlay-content cafe-col">
                                                                        <a href="#">
                                                                            <div class="cafe-wrap-image">
                                                                                <img
                                                                                        src="http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/04/block1-6-1.jpg"/>
                                                                            </div>
                                                                            <div class="cafe-wrap-content">
                                                                                <div class="cafe-wrap-content-inner">
                                                                                    <h3 class="cafe-banner-title">Wine Inspration</h3>
                                                                                    <div class="cafe-wrap-extend-content">
                                                                                        <div class="cafe-banner-description"><p>Join Now</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>--}}


                            <section class="elementor-element elementor-element-3a1d9df elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                     data-id="3a1d9df" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        @include('partials.shop.aside')
                                        <div class="elementor-element elementor-element-9be8fbc elementor-column elementor-col-66 elementor-top-column"
                                             data-id="9be8fbc" data-element_type="column">
                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div
                                                            class="elementor-element elementor-element-1269c9e border-two-center elementor-widget elementor-widget-heading"
                                                            data-id="1269c9e" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">Популярная продукция</h2></div>
                                                    </div>
                                                    <div
                                                            class="elementor-element elementor-element-0207d16 elementor-widget elementor-widget-clever-product-advanced"
                                                            data-id="0207d16" data-element_type="widget"
                                                            data-widget_type="clever-product-advanced.default">
                                                        <div class="elementor-widget-container">
                                                            <div
                                                                    class="woocommerce cafe-products-wrap append-class  cafe-grid-lg-4-cols cafe-grid-md-3-cols cafe-grid-2-cols "
                                                                    data-args='{"asset_type":"all","product_ids":"","orderby":"date","order":"desc","posts_per_page":12}'
                                                                    data-url="http://winnes.wp1.zootemplate.com/wp-admin/admin-ajax.php"
                                                                    data-cafe-config=''>

                                                                <div class="cafe-head-product-filter has-tabs ">
                                                                </div>
                                                                <ul class="products grid-layout">

                                                                    @foreach($products as $product)
                                                                        @include('partials.shop.miniCardProduct', compact('product'))
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            {!! $page->body2 !!}
                            {{--<section
                                    class="elementor-element elementor-element-871a791 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                    data-id="871a791" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div
                                                class="elementor-element elementor-element-3a16b82 elementor-column elementor-col-100 elementor-top-column"
                                                data-id="3a16b82" data-element_type="column">
                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div
                                                            class="elementor-element elementor-element-9722625 border-two-center elementor-widget elementor-widget-heading"
                                                            data-id="9722625" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">OUR BLOG</h2></div>
                                                    </div>
                                                    <div
                                                            class="elementor-element elementor-element-8f1989c add-border-mask elementor-widget elementor-widget-clever-posts"
                                                            data-id="8f1989c" data-element_type="widget" data-widget_type="clever-posts.default">
                                                        <div class="elementor-widget-container">
                                                            <div
                                                                    class="cafe-posts grid-layout cafe-row cafe-grid-lg-3-cols cafe-grid-md-3-cols cafe-grid-1-cols "
                                                            >
                                                                <article id="post-3407"
                                                                         class="cafe-post-item post-loop-item grid-layout-item cafe-col post-3407 post type-post status-publish format-standard has-post-thumbnail hentry category-winnes tag-winnes">
                                                                    <div class="zoo-post-inner">
                                                                        <div class="wrap-media">
                                                                            <a href="http://winnes.wp1.zootemplate.com/2016/05/12/london-fashion-week-2016/"
                                                                               title="London Fashion Week 2016">
                                                                                <img width="300" height="200"
                                                                                     src="http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog10-1-30x20.jpg"
                                                                                     class="attachment-medium size-medium lazy-img wp-post-image" alt=""
                                                                                     srcset="http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog10-1-30x20.jpg 100w"
                                                                                     sizes="(max-width: 300px) 100vw, 300px"
                                                                                     data-src="http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog10-1-300x200.jpg"
                                                                                     data-srcset="http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog10-1-300x200.jpg 300w, http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog10-1-768x511.jpg 768w, http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog10-1-120x80.jpg 120w, http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog10-1-30x20.jpg 30w, http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog10-1-600x399.jpg 600w, http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog10-1.jpg 1000w"/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="wrap-post-item-content">
                                                                            <ul class="post-info cafe-post-info">
                                                                                <li class="post-date">
                                                                                    May 12, 2016
                                                                                </li>
                                                                            </ul>
                                                                            <h3 class="entry-title title-post"><a
                                                                                        href="http://winnes.wp1.zootemplate.com/2016/05/12/london-fashion-week-2016/"
                                                                                        rel="bookmark">London Fashion Week 2016</a></h3>
                                                                            <div class="entry-content">
                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin viverra vehicula
                                                                                nulla. Quisque sagittis...
                                                                            </div>
                                                                            <a href="http://winnes.wp1.zootemplate.com/2016/05/12/london-fashion-week-2016/"
                                                                               class="readmore">Read more</a>
                                                                        </div>
                                                                    </div>
                                                                </article>
                                                                <article id="post-3405"
                                                                         class="cafe-post-item post-loop-item grid-layout-item cafe-col post-3405 post type-post status-publish format-standard has-post-thumbnail hentry category-winnes">
                                                                    <div class="zoo-post-inner">
                                                                        <div class="wrap-media">
                                                                            <a href="http://winnes.wp1.zootemplate.com/2016/05/12/new-arrival-from-john-lemons/"
                                                                               title="New arrival from John Lemons">
                                                                                <img width="300" height="200"
                                                                                     src="http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog02-1-30x20.jpg"
                                                                                     class="attachment-medium size-medium lazy-img wp-post-image" alt=""
                                                                                     srcset="http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog02-1-30x20.jpg 100w"
                                                                                     sizes="(max-width: 300px) 100vw, 300px"
                                                                                     data-src="http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog02-1-300x200.jpg"
                                                                                     data-srcset="http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog02-1-300x200.jpg 300w, http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog02-1-768x511.jpg 768w, http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog02-1-120x80.jpg 120w, http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog02-1-30x20.jpg 30w, http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog02-1-600x399.jpg 600w, http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog02-1.jpg 1000w"/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="wrap-post-item-content">
                                                                            <ul class="post-info cafe-post-info">
                                                                                <li class="post-date">
                                                                                    May 12, 2016
                                                                                </li>
                                                                            </ul>
                                                                            <h3 class="entry-title title-post"><a
                                                                                        href="http://winnes.wp1.zootemplate.com/2016/05/12/new-arrival-from-john-lemons/"
                                                                                        rel="bookmark">New arrival from John Lemons</a></h3>
                                                                            <div class="entry-content">
                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin viverra vehicula
                                                                                nulla. Quisque sagittis...
                                                                            </div>
                                                                            <a href="http://winnes.wp1.zootemplate.com/2016/05/12/new-arrival-from-john-lemons/"
                                                                               class="readmore">Read more</a>
                                                                        </div>
                                                                    </div>
                                                                </article>
                                                                <article id="post-3400"
                                                                         class="cafe-post-item post-loop-item grid-layout-item cafe-col post-3400 post type-post status-publish format-standard has-post-thumbnail hentry category-winnes">
                                                                    <div class="zoo-post-inner">
                                                                        <div class="wrap-media">
                                                                            <a href="http://winnes.wp1.zootemplate.com/2016/05/12/summer-fashion-week-2016/"
                                                                               title="Summer Fashion Week 2016">
                                                                                <img width="300" height="200"
                                                                                     src="http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog04-1-30x20.jpg"
                                                                                     class="attachment-medium size-medium lazy-img wp-post-image" alt=""
                                                                                     srcset="http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog04-1-30x20.jpg 100w"
                                                                                     sizes="(max-width: 300px) 100vw, 300px"
                                                                                     data-src="http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog04-1-300x200.jpg"
                                                                                     data-srcset="http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog04-1-300x200.jpg 300w, http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog04-1-768x511.jpg 768w, http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog04-1-120x80.jpg 120w, http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog04-1-30x20.jpg 30w, http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog04-1-600x399.jpg 600w, http://winnes.wp1.zootemplate.com/wp-content/uploads/2016/05/blog04-1.jpg 1000w"/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="wrap-post-item-content">
                                                                            <ul class="post-info cafe-post-info">
                                                                                <li class="post-date">
                                                                                    May 12, 2016
                                                                                </li>
                                                                            </ul>
                                                                            <h3 class="entry-title title-post"><a
                                                                                        href="http://winnes.wp1.zootemplate.com/2016/05/12/summer-fashion-week-2016/"
                                                                                        rel="bookmark">Summer Fashion Week 2016</a></h3>
                                                                            <div class="entry-content">
                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin viverra vehicula
                                                                                nulla. Quisque sagittis...
                                                                            </div>
                                                                            <a href="http://winnes.wp1.zootemplate.com/2016/05/12/summer-fashion-week-2016/"
                                                                               class="readmore">Read more</a>
                                                                        </div>
                                                                    </div>
                                                                </article>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>--}}

                            <section
                                    class="elementor-element elementor-element-86b52da elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                    data-id="86b52da" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div
                                                class="elementor-element elementor-element-664b173 elementor-column elementor-col-100 elementor-top-column"
                                                data-id="664b173" data-element_type="column">
                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div
                                                            class="elementor-element elementor-element-51c9368 elementor-widget elementor-widget-wp-widget-mc4wp_form_widget"
                                                            data-id="51c9368" data-element_type="widget"
                                                            data-widget_type="wp-widget-mc4wp_form_widget.default">
                                                        <div class="elementor-widget-container">
                                                            <script>(function () {
                                                                if (!window.mc4wp) {
                                                                  window.mc4wp = {
                                                                    listeners: [],
                                                                    forms: {
                                                                      on: function (event, callback) {
                                                                        window.mc4wp.listeners.push({
                                                                          event: event,
                                                                          callback: callback
                                                                        });
                                                                      }
                                                                    }
                                                                  }
                                                                }
                                                              })();
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear-fix"></div>
        </div>
    </main>
@endsection