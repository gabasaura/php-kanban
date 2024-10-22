const mix = require('laravel-mix');

// Compilar archivos CSS y JS
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

// Versionado de archivos
if (mix.inProduction()) {
    mix.version();
}
