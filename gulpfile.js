var elixir = require('laravel-elixir'),
    gulp    = require('gulp'),
    htmlmin = require('gulp-htmlmin');
require('laravel-elixir-uncss');
require('laravel-elixir-compress');

//elixir.config.babel.enabled = false;


elixir.extend('compress', function() {
    new elixir.Task('compress', function() {
        return gulp.src(['./resources/views/*', './resources/views/*/*', '!./resources/views/prod/', '!./resources/views/prod/*'])
            .pipe(htmlmin({
                collapseWhitespace:    true,
                removeAttributeQuotes: true,
                removeComments:        true,
                minifyJS:              true,
            }))
            .pipe(gulp.dest('./resources/views/prod/'));
    })
        .watch(['./resources/views/*', './resources/views/*/*']);
});

elixir.config.sourcemaps = false;
elixir.config.css.minifier.pluginOptions = {
    keepSpecialComments: 0
};

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

// For Sass File
//elixir(function(mix) {
//    mix.sass('app.scss', 'public/assets/css');
//});

// For Plain Css File

elixir(function(mix) {
    mix.styles(['materialize.css', 'font-awesome.css', 'dataTables.material.css', 'main.css'], 'public/css/app.css');
});


elixir(function(mix) {
    mix.scripts(['jquery.js', 'materialize.js'], 'public/js/app.js')
});

elixir(function(mix) {
    mix.compress();
});

// Currently UnCss Stopped
//elixir(function(mix) {
//    mix.uncss('./public/css/app.css', {
//        html: ['public/test.html','http://localhost:8000/','http://localhost:8000/login','http://localhost:8000/register']
//    });
//});