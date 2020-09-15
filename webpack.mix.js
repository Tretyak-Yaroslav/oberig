const mix = require('laravel-mix');
require('laravel-mix-alias');

//aliases
const config = require('./webpack.config')
mix.webpackConfig(config)

//sass to css start---------------------------------------------------------------------->
mix.sass('resources/sass/styles.sass', 'public/css/sass-builds/').options({
    processCssUrls: false
});
//sass to css end -----------------------------------------------------------------------<

// js start ----------------------------------------------------------------------------->
mix.js('resources/js/vue/main-page/main-page.js', 'public/js/vue-builds/');
mix.js('resources/js/script.js', 'public/js/');

mix.babel([
    'public/js/vue-builds/main-page.js',
    'public/js/script.js',
], 'public/js/main-page-all.js').version();

mix.js('resources/js/app.js', 'public/js');
// js end -------------------------------------------------------------------------------<
