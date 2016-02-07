// Load plugins
    var gulp = require('gulp'),
        sass = require('gulp-sass'),
        autoprefixer = require('gulp-autoprefixer'),
        minifycss = require('gulp-minify-css'),
        jshint = require('gulp-jshint'),
        uglify = require('gulp-uglify'),
        imagemin = require('gulp-imagemin'),
        rename = require('gulp-rename'),
        concat = require('gulp-concat'),
        notify = require('gulp-notify'),
        cache = require('gulp-cache'),
        del = require('del');

    var sassPaths = [
        'bower_components/bootstrap-sass/assets/stylesheets',
        'bower_components/sweetalert/dist/'
    ];

    var scriptPaths = [
        'bower_components/jquery/dist/jquery.js',
        'bower_components/bootstrap/dist/js/bootstrap.js',
        'bower_components/sweetalert/dist/sweetalert.min.js',
        'resources/assets/scripts/app.js'
    ];

    // Styles
    gulp.task('styles', function() {
        return gulp.src('resources/assets/sass/app.scss')
            .pipe(sass({
                includePaths: sassPaths
            }))
            .pipe(autoprefixer('last 2 version'))
            .pipe(gulp.dest('public/css'))
            .pipe(concat('app.css'))
            .pipe(gulp.dest('public/css'))
            .pipe(minifycss())
            .pipe(rename({
              suffix: '.min'
            }))
            .pipe(gulp.dest('public/css'))
            .pipe(notify({ message: 'Styles task complete' }));
    });

    // Scripts
    gulp.task('scripts', function() {
        return gulp.src(scriptPaths)
            .pipe(concat('app.js'))
            .pipe(gulp.dest('public/js'))
            .pipe(uglify())
            .pipe(rename({
                suffix: '.min'
            }))
            .pipe(gulp.dest('public/js'))
            .pipe(notify({ message: 'Scripts task complete' }));
    });

    // Images
    gulp.task('images', function() {
        return gulp.src('resources/assets/images/**/*')
            .pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
            .pipe(gulp.dest('public/img'))
            .pipe(notify({ message: 'Images task complete' }));
    });

    // Clean
    gulp.task('clean', function() {
        return del(['public/css', 'public/js', 'public/img']);
    });

    // Default task
    gulp.task('default', ['clean'], function() {
        gulp.start('styles', 'scripts', 'images', 'watch');
    });

    // Watch
    gulp.task('watch', function() {
        // Watch .scss files
        gulp.watch('resources/assets/sass/**/*.scss', ['styles']);
        // Watch .js files
        gulp.watch('resources/assets/scripts/**/*.js', ['scripts']);
        // Watch image files
        gulp.watch('resources/assets/images/**/*', ['images']);
    });
