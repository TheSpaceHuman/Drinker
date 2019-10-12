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
    {{ Breadcrumbs::render('contact') }}
@endsection

@section('content')
    <main id="site-main-content" class="main-content">
        <div class="container">
            <div class="page-content">
                <div data-elementor-type="post" data-elementor-id="2609" class="elementor elementor-2609" data-elementor-settings="[]">
                    <div class="elementor-inner">
                        <div class="elementor-section-wrap">
                            <section class="elementor-element elementor-element-92e4392 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="92e4392" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-element elementor-element-f788d0c elementor-column elementor-col-100 elementor-top-column" data-id="f788d0c" data-element_type="column">
                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-439c4e4 elementor-widget elementor-widget-google_maps" data-id="439c4e4" data-element_type="widget" data-widget_type="google_maps.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-custom-embed">
                                                                <div id="map-1">
                                                                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6e41f710770f3d77e5da90fbcec87bb07c96e979eaa609dcf80996cc275ec651&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="elementor-element elementor-element-c539883 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="c539883" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-element elementor-element-857774a elementor-column elementor-col-50 elementor-top-column" data-id="857774a" data-element_type="column">
                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-187fe3e elementor-widget elementor-widget-heading" data-id="187fe3e" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">Наш адрес</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-91d794e elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list" data-id="91d794e" data-element_type="widget" data-widget_type="icon-list.default">
                                                        <div class="elementor-widget-container">
                                                            <ul class="elementor-icon-list-items">
                                                                <li class="elementor-icon-list-item" style="display: none;">
											<span class="elementor-icon-list-icon">
																<i class="fa fa-map-marker" aria-hidden="true"></i>
													</span>
                                                                    <span class="elementor-icon-list-text">{{ setting('contacts.address') }}</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
																<i class="fa fa-phone" aria-hidden="true"></i>
													</span>
                                                                    <span class="elementor-icon-list-text">
                                                                        <a href="tel:{{ setting('contacts.phone') }}">{{ setting('contacts.phone') }}</a>
                                                                    </span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
                                                                <i class="far fa-envelope"></i>

													</span>
                                                                    <span class="elementor-icon-list-text">
                                                                        <a href="mailto:{{ setting('contacts.email') }}">{{ setting('contacts.email') }}</a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-fc0921f elementor-widget elementor-widget-heading" style="display: none;" data-id="fc0921f" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">График работы</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-3044501 elementor-widget elementor-widget-text-editor" style="display: none;" data-id="3044501" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                <p>Monday to Friday: 10am – 9pm</p>
                                                                <p>Saturday to Sunday: 10am – 11pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-5952253 elementor-column elementor-col-50 elementor-top-column" data-id="5952253" data-element_type="column">
                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-bb76d41 elementor-widget elementor-widget-heading" data-id="bb76d41" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">Напишите нам</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-c07a869 elementor-widget elementor-widget-text-editor" data-id="c07a869" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-text-editor elementor-clearfix">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-4872a97 elementor-widget elementor-widget-shortcode" data-id="4872a97" data-element_type="widget" data-widget_type="shortcode.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-shortcode"><div role="form" class="wpcf7" id="wpcf7-f1770-p2609-o1" dir="ltr" lang="en-US">
                                                                    <div class="screen-reader-response"></div>
                                                                    <form action="{{ route('action.contact.mailSend') }}" method="POST" class="wpcf7-form">@csrf
                                                                        <div>
                                                                            <span class="wpcf7-form-control-wrap your-name">
                                                                                <input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Имя">
                                                                            </span>
                                                                            <br>
                                                                            <span class="wpcf7-form-control-wrap your-email">
                                                                                <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email">
                                                                            </span>
                                                                            <br>
                                                                            <span class="wpcf7-form-control-wrap your-message">
                                                                                <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Сообщение"></textarea>
                                                                            </span>
                                                                            <br>
                                                                            <button type="submit" class="wpcf7-form-control wpcf7-submit btn-variant">Отправить</button>
                                                                            <span class="ajax-loader"></span>
                                                                        </div>
                                                                        <div class="wpcf7-response-output wpcf7-display-none">

                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
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