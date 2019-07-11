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

 mix.sass('resources/sass/app.scss', 'public/css')

mix.styles('resources/assets/css/libs/*.css','public/css/libs.css')

mix.scripts(['resources/assets/js/libs/*.js'], 'public/js/semuaaa.js');
