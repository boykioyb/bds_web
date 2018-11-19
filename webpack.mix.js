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

mix.combine([
    'public/js/jquery.min.js',
    'public/js/jquery-ui.js',
    'public/js/tether.min.js',
    'public/js/moment.js',
    'public/js/transition.min.js',
    'public/js/bootstrap.min.js',
    'public/js/fitvids.js',
    'public/js/jquery.waypoints.min.js',
    'public/js/jquery.counterup.min.js',
    'public/js/imagesloaded.pkgd.min.js',
    'public/js/smooth-scroll.min.js',
    'public/js/lightcase.js',
    'public/js/isotope.pkgd.min.js',
    'public/js/search.js',
    'public/js/owl.carousel.min.js',
    'public/js/jquery.magnific-popup.min.js',
    'public/js/ajaxchimp.min.js',
    'public/js/newsletter.js',
    'public/js/jquery.form.js',
    'public/js/jquery.validate.min.js',
    'public/js/searched.js',
    'public/js/forms-2.js',
    'public/js/color-switcher.js',
    'public/js/owl.carousel.js',
], 'public/js/all.js', 'public/js');

