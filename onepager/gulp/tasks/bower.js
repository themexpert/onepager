var gulp = require('gulp'),
  mainBowerFiles = require('main-bower-files'),
  gulpFilter = require('gulp-filter'),
  less = require('gulp-less'),
  uglify = require('gulp-uglify'),
  minify = require('gulp-minify-css'),
  config = require('../config').bower;

/**
 * Filters for bower main files
 */
var jsFilter = gulpFilter('**/*.js'),
  lessFilter = gulpFilter('**/*.less'),
  cssFilter = gulpFilter('**/*.css'),
  fontFilter = gulpFilter(['**/*.svg', '**/*.eot', '**/*.woff', '**/*.ttf']),
  imgFilter = gulpFilter(['**/*.png', '**/*.gif', '**/*.jpg']);

gulp.task('bower', function () {
  'use strict';

  return gulp.src(mainBowerFiles())

    .pipe(jsFilter)
    // .pipe(sourcemaps.init())
    .pipe(uglify())
    // .pipe(concat('lib.min.js'))
    // .pipe(sourcemaps.write())
    .pipe(gulp.dest(config.js))
    .pipe(jsFilter.restore())

    .pipe(cssFilter)
    .pipe(minify())
    .pipe(gulp.dest(config.css))
    .pipe(cssFilter.restore())

    .pipe(lessFilter)
    .pipe(less())
    .pipe(minify())
    .pipe(gulp.dest(config.css))
    .pipe(lessFilter.restore())

    .pipe(imgFilter)
    .pipe(gulp.dest(config.images))
    .pipe(imgFilter.restore())

    .pipe(fontFilter)
    .pipe(gulp.dest(config.fonts))
    .pipe(fontFilter.restore());
});
