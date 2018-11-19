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

mix.js([
    'js/jquery.min.js',
    'js/jquery-ui.js',
    'js/tether.min.js',
    'js/moment.js',
    'js/transition.min.js',
    'js/bootstrap.min.js',
    'js/fitvids.js',
    'js/jquery.waypoints.min.js',
    'js/jquery.counterup.min.js',
    'js/imagesloaded.pkgd.min.js',
    'js/smooth-scroll.min.js',
    'js/lightcase.js',
    'js/search.js',
    'js/owl.carousel.min.js',
    'js/jquery.magnific-popup.min.js',
    'js/ajaxchimp.min.js',
    'js/newsletter.js',
    'js/jquery.form.js',
],'public/js/all.js');


mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
