<header id="site-header" class="site-header header-menu-right">
    <div class="wrap-site-header-desktop show-on-desktop">
        <div id="top-header-desktop" class="header-row header-top full-width container-fluid">
            <div class="wrap-builder-items">
                <div class="row">
                    <div class="col-md-6 builder-item builder-block-html1">
                        <div class="element-item element-html1 builder-block-html">
                            <ul class="address-topbar">
                                <li><a href="tel:{{ setting('contacts.phone') }}"><i class="cs-font clever-icon-phone-6"></i> {{ setting('contacts.phone') }}</a></li>
                                <li><a href="mailto:{{ setting('contacts.email') }}"><i class="cs-font clever-icon-mail-3"></i> {{ setting('contacts.email') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 builder-item builder-block-social-icons row-align-right">
                        <ul
                                class="element-item element-social-icons header-social-icons item-block-social-icons color-custom element-align-right">
                            <li class="social-icon-item">
                                <a class="social-icon  shape-none  icon-facebook" rel="nofollow" target="_blank" href="{{ setting('socials.facebook') }}"
                                   title="Facebook">
                                    <i class="icon cs-font clever-icon-facebook"></i>
                                </a>
                            </li>
                            <li class="social-icon-item">
                                <a class="social-icon  shape-none  icon-twitter" rel="nofollow" target="_blank" href="{{ setting('socials.twitter') }}" title="Twitter">
                                    <i class="icon cs-font clever-icon-twitter"></i>
                                </a>
                            </li>
                            <li class="social-icon-item">
                                <a class="social-icon  shape-none  icon-instagram" rel="nofollow" target="_blank" href="{{ setting('socials.instagram') }}"
                                   title="Instagram">
                                    <i class="icon cs-font clever-icon-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="main-header-desktop" class="header-row header-main full-width container-fluid">
            <div class="wrap-builder-items">
                <div class="row">
                    <div class="col-md-3 builder-item builder-block-logo">
                        <div class="element-item element-logo site-branding item-block-logo">
                            <a href="{{ route('page.index') }}" rel="home" title="{{ setting('site.title') }}" class="wrap-logo">
                                <img class="site-logo"
                                     src="assets/img/index/logo.svg"
                                     alt="{{ setting('site.title') }}"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-auto ml-auto builder-item builder-block-primary-menu row-align-right row-item-group">
                        <nav id="primary-menu" class="element-item element-primary-menu style-plain element-align-right primary-menu">

                            {{ menu('AppMainMenu', 'partials.nav.AppMainMenu') }}

                        </nav>
                        <div class="element-item element-search-box zoo-search-box-container header-search-box header-search element-align-right">
                            <a href="#" class="btn-lb-search"><i class="zoo-icon-search"></i></a>
                        </div>
                        @include('partials.shop.miniBasket')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-site-header-mobile show-on-mobile">
        <div id="main-header-mobile" class="header-row header-main full-width container-fluid">
            <div class="wrap-builder-items">
                <div class="row">
                    <div class="col-9 builder-item builder-block-logo">
                        <div class="element-item element-logo site-branding item-block-logo">
                            <a href="{{ route('page.index') }}" rel="home" title="{{ setting('site.title') }}" class="wrap-logo">
                                <img class="site-logo"
                                     src="assets/img/index/logo.svg"
                                     alt="{{ setting('site.title') }}"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-3 builder-item builder-block-nav-icon row-align-right">
                        @include('partials.shop.miniBasketMobile')
                        <a href="#" class="element-item element-nav-icon off-canvas-toggle menu element-align-right icon-style-menu" title="Menu">
                            <i class="zoo-css-icon-menu"></i>
                            <span class="nav-icon-label hide-on-mobile">Меню</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-off-canvas-sidebar off-canvas-sidebar-panel is-text-dark off-canvas-slide-left off-canvas-effect show-on-mobile">
        <div class="wrap-header-off-canvas"><a href="#" class="off-canvas-close"><i class="zoo-icon-close"></i></a>
            <div class="wrap-content-header-off-canvas">
                <div class="builder-item-sidebar mobile-builder-block-mobile-menu mobile-builder-block-menu ">
                    {{ menu('AppMainMenu', 'partials.nav.AppMainMenuMobile') }}
                </div>
            </div>
        </div>
        <div class="mask-off-canvas"></div>
    </div>
    @include('partials.search.mainSearchForm')

</header>