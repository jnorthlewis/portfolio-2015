var gulp = require ('gulp');
var sass = require ('gulp-sass');

//here we define a list of things to happen when we run gulp styles
gulp.task('styles', function() {
		gulp.src('wp-content/themes/portfolio/*.scss')
			.pipe(sass({
						errLogToConsole: true
						}))
			.pipe(gulp.dest('wp-content/themes/portfolio/'))
	});

gulp.task('watch', function() {
		//we give it an array because sometimes we'll have more than one function.
		gulp.watch('wp-content/themes/portfolio/*.scss', ['styles']);
	});