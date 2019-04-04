var gulp = require('gulp'),
		browserSync = require('browser-sync').create(),
		sass = require('gulp-sass'),
		sourcemaps = require('gulp-sourcemaps');


// Static Server + watching scss/html files
gulp.task('serve', function() {

	browserSync.init({
			server: "./",
			notify: false
	});

	gulp.watch("*.scss", ['sass']);
	gulp.watch("*.html").on('change', browserSync.reload);
	gulp.watch("js/*.js").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
	return gulp.src("*.scss")
		.pipe(sourcemaps.init())
		.pipe(sass({indentType: 'tab', indentWidth: 1 }).on('error', sass.logError))
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest("css"))
		.pipe(browserSync.stream());
});

gulp.task('default', ['sass', 'serve']);

/* note: 
Command to run if you don't have admin access, e.g. lab builds, is 
npm run gulp
*/