const path = require('path');
const mix = require('laravel-mix');
const webpackNodeExternals = require('webpack-node-externals');

mix.alias({
    ziggy: path.resolve('vendor/tightenco/ziggy/src/js'),
});

mix.options({ manifest: false })
    .js('resources/js/ssr.js', 'public/js')
    .vue({ version: 3, options: { optimizeSSR: true } })
    .alias({
        '@': path.resolve('resources/js'),
        ziggy: path.resolve('vendor/tightenco/ziggy/src/js'),
    })
    .webpackConfig({
        target: 'node',
        externals: [webpackNodeExternals()],
    });
