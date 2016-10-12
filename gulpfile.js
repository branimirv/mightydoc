var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix.styles([
        'bootstrap.min.css',
        '../font-awesome/css/font-awesome.min.css',
        'dataTables.bootstrap.min.css',
        'select2.min.css',
        'custom.css',
        'style1.css'
    ], 'public/css/back.css');

    mix.sass('app.scss')
        .version('css/app.css');

    mix.scripts([
        'jquery-2.2.0.min.js',
        'bootstrap.min.js',
        'jquery.dataTables.min.js',
        'dataTables.bootstrap.min.js',
        'select2.full.min.js'
    ]);

    mix.version(['js/all.js', 'css/back.css']);
});
