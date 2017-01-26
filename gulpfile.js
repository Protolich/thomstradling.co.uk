var gulp = require('gulp'),
	sass = require('gulp-ruby-sass'),
	watch = require('gulp-watch'),
	notify = require('gulp-notify'),
	postcss = require('gulp-postcss'),
	cssnano = require('gulp-cssnano'),
	rename = require('gulp-rename'),
	autoprefixer = require('autoprefixer'),
	browserSync = require('browser-sync').create();

gulp.task('old', function(){
	return sass('scss/styles.scss', { style: 'expanded' })
		.on('error', function(err){
			notify.onError({
				title: 'Error: sass',
				message: '<%= error.message %>'
			})(err);
			this.emit('end');
		})
		//.pipe(sourcemaps.write())
		// .pipe(postcss([ autoprefixer({ browsers: ['last 2 versions'] }) ]))
		.pipe(gulp.dest('css'))
		.pipe(notify({
			title: 'Success: sass',
			message: 'SASS compiled'
		}))
		.pipe(browserSync.reload({stream:true}));
});

gulp.task('sass', function(){
	return sass('assets/components/thomstradling.co.uk/scss/web.scss', { style: 'expanded' })
		.on('error', function(err){
			notify.onError({
				title: 'Error: sass',
				message: '<%= error.message %>'
			})(err);
			this.emit('end');
		})
		//.pipe(sourcemaps.write())
		// .pipe(postcss([ autoprefixer({ browsers: ['last 2 versions'] }) ]))
		.pipe(gulp.dest('assets/components/thomstradling.co.uk/css'))
		.pipe(rename({suffix: '.min'}))
		.pipe(cssnano())
		.pipe(gulp.dest('assets/components/thomstradling.co.uk/css'))
		.pipe(notify({
			title: 'Success: sass',
			message: 'SASS compiled'
		}))
		.pipe(browserSync.reload({stream:true}));
});
gulp.task('reload', function () {
	browserSync.reload();
});
gulp.task('default', ['sass'], function(){
	browserSync.init({
		server: {
			baseDir: './'
		}
	});
	gulp.watch(['scss/*.scss','scss/**/*.scss'], ['sass','csb']);
	gulp.watch('*.html', ['reload']);
	gulp.watch('*.js', ['reload']);
});
