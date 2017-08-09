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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/app/modern-business/modern-business.css'
], 'public/css/front.css');

mix.styles([
    'resources/assets/app/sb-admin/sb-admin.css',
    'resources/assets/app/morris/morris.css',
    'resources/assets/app/weather/weather.css'
], 'public/css/back.css');

mix.scripts([
    'resources/assets/app/morris/morris-data.js',
    'resources/assets/app/morris/morris.js',
    'resources/assets/app/morris/raphael.min.js',
    'resources/assets/app/weather/weather.js'
], 'public/js/back.js');