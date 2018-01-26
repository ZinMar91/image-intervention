const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

// elixir(function(mix) {
//     mix.webpack('main.js'); // resources/assets/js/main.js
// });

// elixir(function (mix) {
//     mix.sass('app.scss')
//         .webpack('app.js')
//         .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/', 'public/fonts/bootstrap');
// });

elixir(function (mix) {
    mix.sass('app.scss', 'public/css/all.css')
        .webpack('app.js').version(['css/all.css', 'js/app.js']);
});


// elixir(function (mix) {
//     mix.sass('app.scss')
//     .webpack('app.js');
// });