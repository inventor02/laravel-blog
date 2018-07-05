let mix = require('laravel-mix');

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

mix
    .js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/home/home.js', 'public/js/home')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .copy('node_modules/trumbowyg/dist/ui/icons.svg', 'public/vendor/trumbowyg/icons.svg');