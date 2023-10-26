

const mix = require('laravel-mix');

mix.setPublicPath('public/');


mix.sass('resources/assets/css/app.scss', 'public/css/app.css').options({
    processCssUrls: false
});;
mix.js('resources/assets/js/app.js', 'public/js/app.js');  