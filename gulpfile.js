'use strict';
// Generated on 2014-03-10 using generator-gulp-webapp 0.0.4

var gulp = require('gulp');
var wiredep = require('wiredep').stream;

// Load plugins
var $ = require('gulp-load-plugins')();

// Specify Source Directories
var stylesSrc  = 'app/assets/styles';
var scriptsSrc = 'app/assets/scripts';
var imagesSrc  = 'app/assets/images';
var pagesSrc    = 'app/views';
var bower_components = 'app/assets/bower_components'

// Specify Destination Directories
var stylesDest  = 'public/css';
var scriptsDest = 'public/js';
var imagesDest  = 'public/images';

var stylesToConcat = [
    stylesSrc + '/main.scss',
    bower_components + '/bootstrap-application-wizard/src/bootstrap-wizard.css',
    bower_components + '/jquery-icheck/skins/all.css',
    bower_components + '/OriginalHoverEffects/css/style_common.css',
    bower_components + '/OriginalHoverEffects/css/style9.css',
    bower_components + '/circleHoverEffects/css/common.css',
    bower_components + '/CircleHoverEffects/css/style6.css',
    bower_components + '/font-awesome/css/font-awesome.css',
    bower_components + '/IconHoverEffects/css/component.css',
    bower_components + '/smartmenus/src/css/sm-core-css.css',
    bower_components + '/smartmenus/src/css/sm-clean/sm-clean.css',
    bower_components + '/owlcarousel/owl-carousel/owl.carousel.css',
    bower_components + '/owlcarousel/owl-carousel/owl.theme.css',
    bower_components + '/owlcarousel/owl-carousel/owl.transitions.css',
    bower_components + '/animate.css/animate.css'
];

var scriptsToConcat = [
    scriptsSrc       + '/main.js',
    bower_components + '/jquery-icheck/icheck.js',
    bower_components + '/ubilabs-geocomplete/jquery.geocomplete.js',
    bower_components + '/responsive-nav/client/src/responsive-nav.js',
    // bower_components + 'jquery.nicescroll/jquery.nicescroll.js',
    bower_components + '/smartmenus/src/jquery.smartmenus.js',
    bower_components + '/owlcarousel/owl-carousel/owl.carousel.js',
    // bower_components + 'flowtype/flowtype.js',
    bower_components + '/jquery-waypoints/waypoints.js'
];

// Styles
gulp.task('styles', function () {
    return gulp.src(stylesToConcat)
        .pipe($.rubySass({
          style: 'expanded',
          loadPath: ['app/assets/bower_components']
        }))
        .pipe($.concat('main.css'))
        .pipe($.autoprefixer('last 1 version'))
        .pipe($.minifyCss())
        .pipe($.rename( {suffix: '.min'} ))
        .pipe(gulp.dest(stylesDest))
        .pipe($.size())
        .pipe($.notify('Styles were Sassed, concatenated, autoprefixed, minified and suffixed with .min.'));
});

// Scripts
gulp.task('scripts', function () {
    return gulp.src(scriptsToConcat)
//        .pipe($.jshint('.jshintrc'))
//        .pipe($.jshint.reporter('default'))
        .pipe($.concat('main.js'))
        .pipe($.uglify())
        .pipe($.rename( {suffix: '.min'} ))
        .pipe(gulp.dest(scriptsDest))
        .pipe($.size())
        .pipe($.notify('Scripts were hinted, concatenated, minified, and suffixed with .min.'));
});

// HTML
gulp.task('html', function () {
    return gulp.src('app/*.html')
      .pipe($.useref())
      .pipe(gulp.dest('dist'))
      .pipe($.size());
});

// Images
gulp.task('images', function () {
    return gulp.src(imagesSrc + '/**/*')
        .pipe($.cache($.imagemin({
            optimizationLevel: 3,
            progressive: true,
            interlaced: true
        })))
        .pipe(gulp.dest(imagesDest))
        .pipe($.size());
});

// Clean
gulp.task('clean', function () {
    return gulp.src([stylesDest, scriptsDest, imagesDest], {read: false}).pipe($.clean());
});

// Bundle
// gulp.task('bundle', ['styles', 'scripts'], $.bundle('./app/*.html'));
gulp.task('bundle', ['styles', 'scripts']);

// Build
// gulp.task('build', ['html', 'bundle', 'images']);
gulp.task('build', ['bundle', 'images']);

// Default task
gulp.task('default', ['clean'], function () {
    gulp.start('build');
});

// Connect
gulp.task('connect', $.connect.server({
    root: ['public'],
    port: 9000,
    livereload: true
}));

// Inject Bower components
gulp.task('wiredep', function () {
    gulp.src('app/styles/*.scss')
        .pipe(wiredep({
            directory: 'app/bower_components',
            ignorePath: 'app/bower_components/'
        }))
        .pipe(gulp.dest('app/styles'));

    gulp.src('app/*.html')
        .pipe(wiredep({
            directory: 'app/bower_components',
            ignorePath: 'app/'
        }))
        .pipe(gulp.dest('app'));
});

// Watch
gulp.task('watch', ['connect'], function () {
    // Watch for changes in `app` folder
    gulp.watch([
        pagesSrc + '/*.blade.php',
        stylesSrc + '/**/*.css',
        scriptsSrc + '/**/*.js',
        imagesSrc + '/**/*'
    ], function(event) {
        return gulp.src(event.path)
            .pipe($.connect.reload());
    });
    
    // Watch .scss files
    gulp.watch(stylesSrc + '/**/*.scss', ['styles']);
    

    // Watch .js files
    gulp.watch(scriptsSrc + '/**/*.js', ['scripts']);

    // Watch image files
    gulp.watch(imagesSrc + '/**/*', ['images']);

    // Watch bower files
    // gulp.watch('app/bower_components/*', ['wiredep']);
});
