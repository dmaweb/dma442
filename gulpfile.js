/* dependencies */
var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

/* options */
var sassOptions = { outputStyle: 'expanded' };
var autoprefixerOptions = { browsers: ['last 2 versions', '> 5%'] };

/* tasks */

gulp.task('browser-sync', ['sass'], function() {
	browserSync.init({
		server: {
			baseDir: './'
		}
	});
	gulp.watch("./**/*.scss", ['sass']);
  gulp.watch("./**/*.html").on('change', browserSync.reload);
});


gulp.task('sass', function() {
	return gulp
		.src('./**/*.scss')
		.pipe(sass(sassOptions).on('error', sass.logError))
		.pipe(gulp.dest('./'))
		.pipe(browserSync.stream());
});

/* default task, if you just type gulp in the terminal */
gulp.task('default', ['browser-sync']);
