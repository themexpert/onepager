var gulp = require('gulp');
var less = require('gulp-less');
var mainBowerFiles = require('main-bower-files');
var gulpFilter = require('gulp-filter');
var concat = require('gulp-concat');
var minify = require('gulp-minify-css');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var archiver = require('archiver');
var fs = require('fs');
var shell = require('gulp-shell');


var dest  = './assets';
var src   = './engine';

var config = {
  less: {
    src: src + '/lithium/*.less',
    dest: dest + '/css',
    settings: {
      indentedSyntax: false, // Enable .less syntax?
      imagePath: '/images' // Used by the image-url helper
    }
  },
  js: {
    src: src+'/lithium/*.js',
    dest: dest + '/js'
  },
  images: {
    src: src+'/images/**/*',
    dest: dest + '/images'
  },
  fonts: {
    src: src+'/fonts/**/*',
    dest: dest + '/fonts'
  },
  bower: {
    js: dest + '/js',
    css: dest + '/css',
    images: dest + '/images',
    fonts: dest + '/fonts'
  },
  watch: {
    src: src+'/**/*.*',
    less: src+'/lithium/**/*.less',
    tasks: ['build']
  }
};


gulp.task('less', function () {
  return gulp.src(config.less.src)
    .pipe(less(config.less.settings))
    .pipe(gulp.dest(config.less.dest));
});

gulp.task('js', function(){
  return gulp.src(config.js.src)
  .pipe(uglify())
  .pipe(gulp.dest(config.js.dest));
});

gulp.task('fonts', function () {
  return gulp.src(config.fonts.src)
    .pipe(gulp.dest(config.fonts.dest));
});

gulp.task('images', function () {
  return gulp.src(config.images.src)
    .pipe(gulp.dest(config.images.dest));
});

/*** Filters for bower main files **/
var jsFilter = gulpFilter('**/*.js'),
  cssFilter = gulpFilter('**/*.css'),
  lessFilter = gulpFilter('**/*.less'),
  fontFilter = gulpFilter(['**/*.svg', '**/*.eot', '**/*.woff', '**/*.ttf']),
  imgFilter = gulpFilter(['**/*.png', '**/*.gif', '**/*.jpg']);

gulp.task('bower', function () {
  return gulp.src(mainBowerFiles())

    .pipe(jsFilter)
    // .pipe(sourcemaps.init())
    // .pipe(uglify())
    // .pipe(concat('lib.min.js'))
    // .pipe(sourcemaps.write())
    .pipe(gulp.dest(config.bower.js))
    .pipe(jsFilter.restore())

    .pipe(lessFilter)
    .pipe(less())
    .pipe(gulp.dest(config.bower.css))
    .pipe(rename({extname:"css"}))
    .pipe(lessFilter.restore())

    .pipe(cssFilter)
    // .pipe(minify())
    // .pipe(sourcemaps.init())
    // .pipe(concat('lib.min.css'))
    // .pipe(sourcemaps.write())
    .pipe(gulp.dest(config.bower.css))
    .pipe(cssFilter.restore())

    .pipe(imgFilter)
    .pipe(gulp.dest(config.bower.images))
    .pipe(imgFilter.restore())

    .pipe(fontFilter)
    .pipe(gulp.dest(config.bower.fonts))
    .pipe(fontFilter.restore());
});
gulp.task('watch', function () {
  return gulp.watch(config.watch.less, ['less']);
});

gulp.task('default', ['build', 'webpack-watch', 'watch']);

gulp.task('build', ['js', 'fonts', 'bower', 'images', 'less', 'webpack']);

gulp.task('webpack', shell.task(['webpack  -p']));
gulp.task('webpack-watch', shell.task(['webpack  --watch']));
gulp.task('package', ['build'], function(){
  var output  = fs.createWriteStream(__dirname + '/dist/wponepager.zip');
  var archive = archiver.create('zip', {}); // or archiver('zip', {});

  var dirs  = ['app', 'assets', 'blocks', 'src', 'vendor'];
  var files = ['wponepager.php'];

  dirs.map(function(dir){
    archive.directory(dir);
  });

  files.map(function(file){
    archive.file(file);
  });
  
  output.on('close', function() {
    console.log(archive.pointer() + ' total bytes');
    console.log('find built package dist/package.zip');
  });

  archive.pipe(output);
  archive.finalize();
});