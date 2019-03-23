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

mix.sass('resources/sass/custom.scss', 'public/css/custom.css')
    .styles([
        'resources/theme/style.css',
        'resources/theme/css/grid.css',
        'resources/theme/css/hover.css',
        'resources/theme/css/animsition.min.css',
        'resources/theme/css/ui.css',
        'resources/theme/css/font-awesome.min.css',
        'resources/theme/css/et-line-icon-style.css',
        'resources/theme/css/pe-icon-7-stroke.css',
        'resources/theme/css/flaticon.css',
        'resources/theme/css/magnific-popup.css',
        'resources/theme/css/owl.carousel.css',
        'resources/theme/css/owl.theme.css',
        'resources/theme/js/rs-plugin/css/settings.css',
        'resources/theme/js/rs-plugin/css/layers.css',
        'resources/theme/js/rs-plugin/css/navigation.css',
        'resources/theme/css/responsive.css',
        'resources/theme/css/colors/red.css'
    ], 'public/css/theme.css')
    .scripts([
        'resources/theme/js/jquery.min.js',
        'resources/theme/js/rs-plugin/js/jquery.themepunch.tools.min.js',
        'resources/theme/js/rs-plugin/js/jquery.themepunch.revolution.min.js',
        'resources/theme/js/rs-plugin/js/extensions/revolution.extension.actions.min.js',
        'resources/theme/js/rs-plugin/js/extensions/revolution.extension.carousel.min.js',
        'resources/theme/js/rs-plugin/js/extensions/revolution.extension.kenburn.min.js',
        'resources/theme/js/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js',
        'resources/theme/js/rs-plugin/js/extensions/revolution.extension.migration.min.js',
        'resources/theme/js/rs-plugin/js/extensions/revolution.extension.navigation.min.js',
        'resources/theme/js/rs-plugin/js/extensions/revolution.extension.parallax.min.js',
        'resources/theme/js/rs-plugin/js/extensions/revolution.extension.slideanims.min.js',
        'resources/theme/js/rs-plugin/js/extensions/revolution.extension.video.min.js',
        'resources/theme/js/jquery.infinitescroll.min.js',
        'resources/theme/js/plugins.js',
        'resources/theme/js/isotope.min.js',
        'resources/theme/js/functions.js',
        'resources/theme/js/switcher.js',
    ], 'public/js/theme.js');
