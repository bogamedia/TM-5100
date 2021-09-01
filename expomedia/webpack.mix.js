const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.sass('resources/sass/_media-queries.scss', 'resources/css')
    .sass('resources/sass/_variables.scss', 'resources/css')
    .sass('resources/sass/styles.scss', 'resources/css');
    //.sass('resources/sass/admin.sass', 'public/css/admin');
