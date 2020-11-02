var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
// var uglify = require('gulp-uglify');
var iconfont = require('gulp-iconfont');
var iconfontCss = require('gulp-iconfont-css');
var svgSprite = require('gulp-svg-sprite');
var minify = require('gulp-minify');
var concat = require('gulp-concat');

var input = './assets/scss/*.scss';
var output = './assets/css';

var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'compressed'
};

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

var fontName = 'icons';

gulp.task('iconfont', function(){
    gulp.src(['assets/images/icons/*.svg'])
        .pipe(iconfontCss({
            fontName: fontName,
            path: 'assets/scss/templates/_icons.scss',
            targetPath: '../../scss/_icons.scss',
            fontPath: '../fonts/icons/',
            formats: ['svg', 'ttf', 'eot', 'woff', 'woff2']
        })).pipe(iconfont({
        fontName: fontName,
        normalize: true,
        formats: ['svg', 'ttf', 'eot', 'woff', 'woff2']
    }))
        .pipe(gulp.dest('assets/fonts/icons'));
});

// More complex configuration example
config					= {
    shape				: {
        dimension		: {			// Set maximum dimensions
            maxWidth	: 32,
            maxHeight	: 32
        },
        spacing			: {			// Add padding
            padding		: 10
        }
    },
    mode                : {
        symbol			: {
            dest            : 'images',
            sprite          : 'sprite.svg',
            scss            : {
                dest        : 'assets/scss/_sprite.scss'
            }
        }
    }
};

gulp.task('svgsprite', function () {
    gulp.src(['assets/images/icons/*.svg'])
        .pipe(svgSprite(config))
        .pipe(gulp.dest('assets'));
})


gulp.task('serve', ['sass'], function() {
    browserSync.init({
        notify: false,
        port: 9000,
        server: {
          baseDir: ['.tmp', './'],
          routes: {
            '/bower_components': 'bower_components'
          }
        }
      });

    gulp.watch("assets/scss/**/*.scss", ['sass']);
    gulp.watch('assets/images/icons/*.svg', ['iconfont','svgsprite']);
    gulp.watch("*.php").on('change', browserSync.reload);
    gulp.watch("*.html").on('change', browserSync.reload);
});

gulp.task('sass', function() {
    return gulp
        .src(input)
        /*.pipe(sourcemaps.init())*/
        .pipe(sass(sassOptions).on('error', sass.logError))
        /*.pipe(sourcemaps.write())*/
        .pipe(autoprefixer(autoprefixerOptions))
        .pipe(gulp.dest(output))
        .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);

gulp.task('prod', function () {
  return gulp
    .src(input)
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(gulp.dest(output))

});

gulp.task('scripts', function() {
	return gulp.src('./assets/js/*.js')
		.pipe(concat('all.js'))
		.pipe(minify())
		.pipe(gulp.dest('./dist/'));
});