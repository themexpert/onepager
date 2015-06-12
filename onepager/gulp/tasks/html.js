var gulp = require('gulp');
var config = require('../config').html;

gulp.task('html', function () {
  gulp.src("src/js/addons.json").pipe(gulp.dest("dist/js"));
  return gulp.src(config.src)
    .pipe(gulp.dest(config.dest));
});
