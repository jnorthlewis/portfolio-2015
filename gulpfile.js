var gulp = require ('gulp');
var sass = require ('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var minifyCSS = require('gulp-minify-css');
var minifyJS = require('gulp-minify');

//here we define a list of things to happen when we run gulp styles
gulp.task('styles', function() {
		gulp.src('wp-content/themes/portfolio/*.scss')
			.pipe(sass({
						errLogToConsole: true
						}))
			.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
			.pipe(minifyCSS())
			.pipe(gulp.dest('wp-content/themes/portfolio/'))
	});

gulp.task('compress', function() {
  gulp.src('wp-content/themes/portfolio/js/scripts.js')
    .pipe(minifyJS({
        exclude: ['tasks'],
        ignoreFiles: ['-min.js']
    }))
    .pipe(gulp.dest('wp-content/themes/portfolio/js/'))
});

gulp.task('default', function() {
		//we give it an array because sometimes we'll have more than one function.
		gulp.watch('wp-content/themes/portfolio/*.scss', ['styles']);
		gulp.watch('wp-content/themes/portfolio/js/scripts.js', ['compress']);
	});