var gulp = require('gulp'); var bower = require('gulp-bower'); var elixir = 
require('laravel-elixir'); gulp.task('bower', function() {
    return bower();
});
var paths = {
    'jquery': 'vendor/jquery/dist',
    'bootstrap': 'vendor/bootstrap/dist',
    'bootstra386': 'vendor/bootstra.386/dist',
    'fontawesome': 'vendor/font-awesome',
    'colorbox': 'vendor/jquery-colorbox',
    'flag': 'vendor/flag-sprites/dist',
    'metisMenu': 'vendor/metisMenu/dist',
    'summernote': 'vendor/summernote/dist',
    'select2': 'vendor/select2/dist',
    'jquery_ui': 'vendor/jquery-ui',
};
elixir.config.sourcemaps = true;

elixir(function(mix) {
    // Run bower install
    mix.task('bower');
    // Copy fonts straight to public
    mix.copy('resources/' + paths.bootstra386 + '/fonts/bootstrap/**', 
'public/fonts');
    mix.copy('resources/' + paths.fontawesome + '/fonts/**', 'public/fonts');
    // Copy images straight to public
    mix.copy('resources/' + paths.colorbox + '/example3/images/**', 
'public/css/images');
    mix.copy('resources/' + paths.jquery_ui + '/themes/base/images/**', 
'public/css/images');
    // Copy flag resources
    mix.copy('resources/' + paths.flag + '/css/flag-sprites.min.css', 
'public/css/flags.css');
    mix.copy('resources/' + paths.flag + '/img/flags.png', 'public/img/flags.png');
    mix.styles([
        '../public/assets/css/docs.css',
        '../public/assets/css/bootstrap.css',
        '../public/assets/css/bootstrap-responsive.css',
        '../public/assets/css/prettify.css',
        '../public/assets/css/offcanvas.css'
    ]);

    mix.scripts([
        "../public/assets/js/jquery.js",
        "../public/assets/js/bootstrap-386.js",
        "../public/assets/js/bootstrap-transition.js",
        "../public/assets/js/bootstrap-alert.js",
        "../public/assets/js/bootstrap-modal.js",
        "../public/assets/js/bootstrap-dropdown.js",
        "../public/assets/js/bootstrap-scrollspy.js",
        "../public/assets/js/bootstrap-tab.js",
        "../public/assets/js/bootstrap-tooltip.js",
        "../public/assets/js/bootstrap-popover.js",
        "../public/assets/js/bootstrap-button.js",
        "../public/assets/js/bootstrap-collapse.js",
        "../public/assets/js/bootstrap-carousel.js",
        "../public/assets/js/bootstrap-typeahead.js",
        "../public/assets/js/bootstrap-affix.js",
        "../public/assets/js/holder/holder.js",
        "../public/assets/js/google-code-prettify/prettify.js",
        "../public/assets/js/application.js",
    ])
});
