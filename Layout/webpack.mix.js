const mix = require('laravel-mix');

mix.sass('assets/css/app.scss', 'public/css/app.css').options({
    processCssUrls: false
});;
mix.js('assets/js/app.js', 'public/js/app.js');