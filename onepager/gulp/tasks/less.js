var gulp = require('gulp');
var less = require('gulp-less');
var connect = require('gulp-connect');
var config = require('../config.js').less;

gulp.task('less', function () {
  'use strict';

  gulp.src(config.src)
    .pipe(less(config.settings))
    .pipe(gulp.dest(config.dest))
    .pipe(connect.reload());
});
