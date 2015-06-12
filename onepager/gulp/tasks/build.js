var gulp = require('gulp');
var connect = require('gulp-connect');
var config = require('../config').watch;

gulp.task('build', ['browserify', 'less', 'html'], function () {
  'use strict';
  gulp.src(config.src).pipe(connect.reload());
});
