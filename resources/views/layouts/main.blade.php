<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base href="/">
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="yandex-verification" content="9109d309ba11081e" />
    <meta name="keywords" content="@yield('keywords', 'keywords')"/>
    <meta name="description" content="@yield('description', 'description')"/>
    <meta name="author" content="TheSpaceHuman"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title  -->
    <title>@yield('title', 'Title')</title>

    <!--Fonts-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/cleversoft.min.css">
    <link rel="stylesheet" href="assets/css/elementor-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    <!--Style-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <style>
        /*@import url('https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap');*/
        @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff&display=swap');

        body {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

    </style>
    <script type='text/javascript'>
      /* <![CDATA[ */
      var zooThemeSettings = {"import_settings":"","enable_dev_mode":"0","enable_builtin_mega_menu":"0","mobile_breakpoint_width":"992","isRtl":"","ajaxUrl":"http:\/\/winnes.wp1.zootemplate.com\/wp-admin\/admin-ajax.php"};
      /* ]]> */
    </script>

    <script src="assets/js/jquery-3.4.1.min.js" defer></script>
    <script src="assets/js/jquery-migrate.min.js" defer></script>

{{--metrik--}}
<!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
      (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

      ym(55303105, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
      });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/55303105" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149124548-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-149124548-1');
    </script>

</head>


<body class="home page-template-default page page-id-1915 wp-custom-logo woocommerce-no-js normal-layout off-canvas-slide-left free-shipping-notice-enable elementor-default elementor-page elementor-page-1915 woocommerce">

    @yield('header')

    @yield('breadcrumbs', '')
    @yield('content')

    @yield('footer')

<div class="zoo-mask-close"></div>
<a id="zoo-back-to-top" style="display: none;" href="#site-header" title="Back to Top"><i class="cs-font clever-icon-up"></i></a>
{{--Socials dropdown--}}
    <div class="socials-dropdown">
        <div class="socials-dropdown-wrapper">
            <div class="socials-dropdown__icon">
                <i class="fas fa-phone"></i>
            </div>
            <div class="socials-dropdown__list">
                <div class="socials-dropdown__list__item">
                    <a href="tel:{{ setting('contacts.phone') }}">
                        <i class="fas fa-phone-alt"></i>
                        <span class="socials-dropdown__list__item__tooltip">Позвонить</span>
                    </a>
                </div>
                <div class="socials-dropdown__list__item">
                    <a href="https://telegram.me/{{ setting('socials.telegram') }}">
                        <i class="fab fa-telegram"></i>
                        <span class="socials-dropdown__list__item__tooltip">Telegram</span>
                    </a>
                </div>
                <div class="socials-dropdown__list__item">
                    <a href="https://wa.me/{{ setting('socials.whatsapp') }}">
                        <i class="fab fa-whatsapp"></i>
                        <span class="socials-dropdown__list__item__tooltip">Whatsapp</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

<script>(function () {
    function addEventListener(element, event, handler) {
      if (element.addEventListener) {
        element.addEventListener(event, handler, false);
      } else if (element.attachEvent) {
        element.attachEvent('on' + event, handler);
      }
    }

    function maybePrefixUrlField() {
      if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
        this.value = "http://" + this.value;
      }
    }

    var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
    if (urlFields && urlFields.length > 0) {
      for (var j = 0; j < urlFields.length; j++) {
        addEventListener(urlFields[j], 'blur', maybePrefixUrlField);
      }
    }/* test if browser supports date fields */
    var testInput = document.createElement('input');
    testInput.setAttribute('type', 'date');
    if (testInput.type !== 'date') {

      /* add placeholder & pattern to all date fields */
      var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
      for (var i = 0; i < dateFields.length; i++) {
        if (!dateFields[i].placeholder) {
          dateFields[i].placeholder = 'YYYY-MM-DD';
        }
        if (!dateFields[i].pattern) {
          dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
        }
      }
    }

  })();</script>
<script type="text/javascript">
  var c = document.body.className;
  c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
  document.body.className = c;
</script>
<script type='text/javascript'>
  /* <![CDATA[ */
  var wc_add_to_cart_params = {
    "ajax_url": "\/wp-admin\/admin-ajax.php",
    "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
    "i18n_view_cart": "View cart",
    "cart_url": "http:\/\/winnes.wp1.zootemplate.com\/cart\/",
    "is_cart": "",
    "cart_redirect_after_add": "no"
  };
  /* ]]> */
</script>
<script type='text/javascript'>
  /* <![CDATA[ */
  var woocommerce_params = {"ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"};
  /* ]]> */
</script>
<script type='text/javascript'>
  /* <![CDATA[ */
  var wc_cart_fragments_params = {
    "ajax_url": "\/wp-admin\/admin-ajax.php",
    "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
    "cart_hash_key": "wc_cart_hash_3adcee256e0beee530c782b262918802",
    "fragment_name": "wc_fragments_3adcee256e0beee530c782b262918802",
    "request_timeout": "5000"
  };
  /* ]]> */
</script>
<script type='text/javascript'>
  /* <![CDATA[ */
  var zooWishlistCDATA = {
    "addToWishlist": "Add to Wishlist",
    "addToWishlistIcon": "<i class=\"zoo-icon-heart-o\"><\/i> ",
    "browseWishlist": "Browse Wishlist",
    "browseWishlistIcon": "<i class=\"zoo-icon-heart\"><\/i> ",
    "addToWishlistErr": "Failed to add the item to Wishlist.",
    "wishlistIsEmpty": "Wishlist is empty."
  };
  /* ]]> */
</script>
<script type='text/javascript'>
  /* <![CDATA[ */
  var zooProductsCompareCDATA = {
    "addToCompare": "Add to Compare",
    "addToCompareIcon": "<i class=\"zoo-icon-refresh\"><\/i> ",
    "browseCompare": "Browse Compare",
    "browseCompareIcon": "<i class=\"zoo-icon-refresh\"><\/i> ",
    "addToCompareErr": "Failed to add the item to compare list.",
    "compareIsEmpty": "No products to compare."
  };
  /* ]]> */
</script>
<script type='text/javascript' src='assets/js/wp-util.min.js'></script>
<script type='text/javascript'>
  /* <![CDATA[ */
  var mc4wp_forms_config = [];
  /* ]]> */
</script>
<script type='text/javascript'>
  var elementorFrontendConfig = {
    "environmentMode": {"edit": false, "wpPreview": false},
    "is_rtl": false,
    "breakpoints": {"xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600},
    "version": "2.6.6",
    "urls": {"assets": "http:\/\/winnes.wp1.zootemplate.com\/wp-content\/plugins\/elementor\/assets\/"},
    "settings": {
      "page": [],
      "general": {"elementor_global_image_lightbox": "yes", "elementor_enable_lightbox_in_editor": "yes"}
    },
    "post": {"id": 1915, "title": "Home Menu Right", "excerpt": ""}
  };
</script>

    <script src="{{ asset('js/all.js') }}" defer></script>
    <script src="{{ asset('js/common.js') }}" defer></script>

    {{--Modals--}}
    @yield('modals', '')
    {{--Notifications--}}
    @include('partials.notifications.alert')
    @include('partials.notifications.validateAlert')
    @include('partials.shop.addCardMessage')

</body>
</html>
