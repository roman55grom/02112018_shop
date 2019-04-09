let gulp = require('gulp');
let cssimport = require('gulp-cssimport');
let autoprefixer = require('gulp-autoprefixer');
let cssmin = require('gulp-cssmin');
let watch = require('gulp-watch');

function generateCatalog () {
    return gulp .src('styles/catalog.css')
                .pipe(cssimport())
                .pipe(autoprefixer({
                    browsers: ['< 0.1%'],
                    cascade: false
                }))
                .pipe(cssmin())
                .pipe(gulp.dest('styles/dest/'));
}

function generateHome () {
    return gulp .src('styles/index.css')
                .pipe(cssimport())
                .pipe(autoprefixer({
                    browsers: ['< 0.1%'],
                    cascade: false
                }))
                .pipe(cssmin())
                .pipe(gulp.dest('styles/dest/'));
}

function generateDetails () {
    return gulp .src('styles/details.css')
                .pipe(cssimport())
                .pipe(autoprefixer({
                    browsers: ['< 0.1%'],
                    cascade: false
                }))
                .pipe(cssmin())
                .pipe(gulp.dest('styles/dest/'));
}

function watchStyles () {
    watch('styles/blocks/**/*.css', generateCatalog);
    watch('styles/blocks/**/*.css', generateHome);
    watch('styles/blocks/**/*.css', generateDetails);
}

gulp.task('watch', watchStyles);