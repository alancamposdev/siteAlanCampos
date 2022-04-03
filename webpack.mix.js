const mix = require('laravel-mix');

mix.postCss('resources/css/home.css', 'public/css');
mix.postCss('resources/css/cv.css', 'public/css/cv.css');

mix.js('resources/js/main.js', 'public/js')
    .sass('resources/sass/main.scss', 'public/css/main.css');

mix.browserSync('localhost');