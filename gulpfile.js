var gulp           = require('gulp');
var less           = require('gulp-less');
var mainBowerFiles = require('main-bower-files');
var gulpFilter     = require('gulp-filter');
var concat         = require('gulp-concat');
var minify         = require('gulp-minify-css');
var uglify         = require('gulp-uglify');
var rename         = require('gulp-rename');
var archiver       = require('archiver');
var fs             = require('fs');
var shell          = require('gulp-shell');
var runSequence    = require('gulp-run-sequence');
var clean          = require('gulp-clean');

var dest = './assets';
var src  = './engine';

var config = {
  less  : {
    src     : src + '/lithium/*.less',
    dest    : dest + '/css',
    settings: {
      indentedSyntax: false, // Enable .less syntax?
      imagePath     : '/images' // Used by the image-url helper
    }
  },
  js    : {
    src : [src + '/*.js', src + '/lithium/*.js'],
    dest: dest + '/'
  },
  images: {
    src : src + '/lithium/images/**/*',
    dest: dest + '/images'
  },
  fonts : {
    src : src + '/fonts/**/*',
    dest: dest + '/fonts'
  },
  bower : {
    js    : dest + '/js',
    css   : dest + '/css',
    images: dest + '/images',
    fonts : dest + '/fonts'
  },
  watch : {
    src  : src + '/**/*.*',
    less : src + '/lithium/**/*.less',
    js   : src + '/*.js',
    tasks: ['build']
  }
};


gulp.task('less', function () {
  return gulp.src(config.less.src)
    .pipe(less(config.less.settings))
    .pipe(gulp.dest(config.less.dest));
});

gulp.task('js', function () {
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
var jsFilter   = gulpFilter('**/*.js'),
    cssFilter  = gulpFilter('**/*.css'),
    lessFilter = gulpFilter('**/*.less'),
    fontFilter = gulpFilter(['**/*.svg', '**/*.eot', '**/*.woff', '**/*.ttf']),
    imgFilter  = gulpFilter(['**/*.png', '**/*.gif', '**/*.jpg']);

gulp.task('bower', function () {
  return gulp.src(mainBowerFiles())

    .pipe(jsFilter)
    .pipe(uglify())
    .pipe(gulp.dest(config.bower.js))
    .pipe(jsFilter.restore())

    .pipe(lessFilter)
    .pipe(less())
    .pipe(gulp.dest(config.bower.css))
    .pipe(rename({extname: 'css'}))
    .pipe(lessFilter.restore())

    .pipe(cssFilter)
    .pipe(minify())
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
  gulp.watch(config.watch.less, ['less']);
  gulp.watch(config.watch.js, ['js']);
});


/**
 * Build section
 */
gulp.task('build-clean', function () {
  return gulp.src(dest).pipe(clean());
});

gulp.task('build', function (cb) {
  return runSequence('build-clean', ['js', 'fonts', 'bower', 'images', 'less'], cb);
});


/**
 * webpack section
 */
gulp.task('webpack-production', shell.task(['webpack  -p --color --progress']));
gulp.task('webpack-watch', shell.task(['webpack  --watch --color --progress']));
gulp.task('file-permission', shell.task([
  'sudo find . -type d -not -path "./node_modules/*" -and -not -path "./vendor/*" -and -not -path "./bower_components/*" -and -not -path "./.git/*" -exec chmod 755 {} \\;',
  'sudo find . -type f -not -path "./node_modules/*" -and -not -path "./vendor/*" -and -not -path "./bower_components/*" -and -not -path "./.git/*" -exec chmod 644 {} \\;'
]));


/**
 * Package build section
 */
gulp.task('package-build', function (cb) {
  return runSequence('build', 'webpack-production', 'file-permission', cb);
});

gulp.task('package', ['package-build'], function () {
  var buildPackage = {
    name: "onepager",
    dirs: ['app', 'assets', 'blocks', 'src', 'vendor', 'presets'],
    files: ['onepager.php', 'uninstall.php']
  };

  generateArchive(buildPackage.name, buildPackage.dirs, buildPackage.files);
});


/**
 * Default tasks
 */
gulp.task('default', function () {
  runSequence('build', ['webpack-watch', 'watch']);
});


function generateArchive(plugin, dirs, files) {
  var output  = fs.createWriteStream(__dirname + '/' + plugin + '.zip');
  var archive = archiver.create('zip', {}); // or archiver('zip', {});

  //create the archive
  //mac filesystem error
  if (!fs.existsSync(plugin + '.zip')) {
    fs.writeSync(plugin + '.zip');
  }

  //create parent directory
  if (!fs.existsSync(plugin)) {
    fs.mkdirSync(plugin);
  }

  //add parent directory to the zip file
  archive.directory(plugin);

  //add the zip files
  dirs.map(function (dir) {
    archive.directory(dir, plugin + '/' + dir);
  });

  //add the files
  files.map(function (file) {
    archive.file(file, {name: plugin + '/' + file});
  });

  //show message on close
  output.on('close', function () {
    console.log(archive.pointer() + ' total bytes');
    console.log('find built package /' + plugin + '.zip');
  });

  //pipe out the output
  archive.pipe(output);
  archive.finalize();

  //cleanup
  fs.rmdirSync(plugin);
}
