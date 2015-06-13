var gulp = require('gulp');
var config = require('../config');

gulp.task('watch', function () {
  gulp.watch(config.less.src, ['less']);
  gulp.watch(config.html.src, ['html']);
  gulp.watch("resources/src/js/**/*.*", ['browserify']);
});
