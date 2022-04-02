const mix = require('laravel-mix');
require('laravel-mix-valet');

// mix.options({
//     hmrOptions: {
//         host: 'gethouse.test',
//         port: 8080,
//     },
// });

// mix.browserSync({
//     proxy: 'https://gethouse.test',
//     host: 'gethouse.test',

//     https: {
//         key: 'Users/amisha/.config/valet/Certificates/gethouse.test.key',
//         cert: 'Users/amisha/.config/valet/Certificates/gethouse.test.crt',
//     },
// });

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
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .valet()
    .webpackConfig(require('./webpack.config'));

if (mix.inProduction()) {
    mix.version();
}
