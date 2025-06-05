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
    .sass('resources/sass/app.scss', 'public/css')
    .js('node_modules/popper.js/dist/popper.js', 'public/js').sourceMaps()
    .copy('resources/sass/fonts', 'public/css/fonts')
    .copy('resources/images', 'public/images')
    .scripts([
        'public/js/misc/jquery.min9d52.js',
        'public/js/misc/jquery-migrate.mind617.js'
    ], 'public/js/initial.js')
    .scripts([
        'public/js/misc/mediaelement-and-player.min08e1.js',
        'public/js/misc/mediaelement-migrate.mine23c.js',
        'public/js/misc/frontend.min8f76.js',
        'public/js/misc/wp-embed.mine23c.js'
    ], 'public/js/second.js')
    .scripts([
        'public/js/misc/bootbox.js',
        'resources/js/alpine.js'
    ], 'public/js/third.js');

