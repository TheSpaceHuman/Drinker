const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/common.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.copyDirectory('resources/assets', 'public/assets');

mix.styles([
  'resources/assets/css/style.min.css',
  'resources/assets/css/style.css',
  'resources/assets/css/woocommerce.css',
  'resources/assets/css/elements.min.css',
  'resources/assets/css/animations.min.css',
  'resources/assets/css/frontend.min.css',
  'resources/assets/css/clever-addons-for-elementor-frontend.min.css',
  'resources/assets/css/global.css',
  'resources/assets/css/post-1915.css',
  'resources/assets/css/post-2512.css',
  'resources/assets/css/post-2609.css',
  'resources/assets/css/bootstrap-grid.min.css',
  'resources/assets/css/zoo-woocommerce.css',
  'resources/assets/css/zoo-styles.css',
  'resources/assets/css/zoo-styles.media.css',
  'resources/assets/css/rtl.css',
  'resources/assets/css/jquery.growl.css',

], 'public/css/all.css');

mix.scripts([
  'resources/assets/js/jquery.blockUI.min.js',
  'resources/assets/js/add-to-cart.min.js',
  'resources/assets/js/js.cookie.min.js',
  'resources/assets/js/woocommerce.min.js',
  // 'resources/assets/js/cart-fragments.min.js',
  'resources/assets/js/wishlist.min.js',
  'resources/assets/js/products-compare.min.js',
  'resources/assets/js/elements.min.js',
  'resources/assets/js/defer.min.js',
  'resources/assets/js/jquery.sticky-kit.min.js',
  'resources/assets/js/underscore.min.js',
  'resources/assets/js/wp-util.min.js',
  'resources/assets/js/add-to-cart-variation.min.js',
  'resources/assets/js/zoo-woo-ajax.js',
  'resources/assets/js/zoo-woocommerce.js',
  'resources/assets/js/zoo-scripts.js',
  'resources/assets/js/wp-embed.min.js',
  'resources/assets/js/imagesloaded.min.js',
  'resources/assets/js/slick.min.js',
  'resources/assets/js/frontend.min.js',
  'resources/assets/js/forms-api.min.js',
  'resources/assets/js/placeholders.min.js',
  'resources/assets/js/frontend-modules.min.js',
  'resources/assets/js/position.min.js',
  'resources/assets/js/dialog.min.js',
  'resources/assets/js/waypoints.min.js',
  'resources/assets/js/swiper.min.js',
  'resources/assets/js/frontend2.min.js',
  'resources/assets/js/jquery.growl.js',

], 'public/js/all.js');
