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
var gulpShell = require('gulp-shell');
var runSequence = require('gulp-run-sequence');
var clean = require('gulp-clean');
var wrench = require('wrench');
var path = require('path');
var Promise = require('bluebird');
var shell = require("shelljs");

var ROOT_PATH = path.resolve(__dirname);

var dest = './assets';
var src = './engine';

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
    src: [src + '/*.js', src + '/lithium/*.js'],
    dest: dest + '/'
  },
  images: {
    src: src + '/lithium/images/**/*',
    dest: dest + '/images'
  },
  fonts: {
    src: src + '/fonts/**/*',
    dest: dest + '/fonts'
  },
  bower: {
    js: dest + '/js',
    css: dest + '/css',
    images: dest + '/images',
    fonts: dest + '/fonts'
  },
  watch: {
    src: src + '/**/*.*',
    less: src + '/lithium/**/*.less',
    js: src + '/*.js',
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
var jsFilter = gulpFilter('**/*.js'),
cssFilter = gulpFilter('**/*.css'),
lessFilter = gulpFilter('**/*.less'),
fontFilter = gulpFilter(['**/*.svg', '**/*.eot', '**/*.woff', '**/*.ttf']),
imgFilter = gulpFilter(['**/*.png', '**/*.gif', '**/*.jpg']);

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
gulp.task('webpack-production', gulpShell.task(['webpack  -p --color --progress']));
gulp.task('webpack-watch', gulpShell.task(['webpack  --watch --color --progress']));


/**
 * Package build section
 */
gulp.task('package-build', function (cb) {
  return runSequence('build', 'webpack-production', cb);
});

/**
 * Default tasks
 */
gulp.task('default', function () {
  runSequence('build', ['webpack-watch', 'watch']);
});

gulp.task('package', ['package-build'], function () {
  var files = ['app', 'assets', 'blocks', 'src', 'vendor', 'presets', 'tx-onepager.php', 'uninstall.php', 'readme.txt', 'CHANGELOG.md'];

  packager("tx-onepager", files, ROOT_PATH);
});

function packager(name, files, root) {
  var tmpPath = ".op" + Math.ceil(Math.random() * 100).toString();
  var archiveName = name + ".zip";

  copier(root, tmpPath, files);

  shell.exec('sudo find ' + tmpPath + ' -type d -exec chmod 755 {} \\;');
  shell.exec('sudo find ' + tmpPath + ' -type f -exec chmod 644 {} \\;');

  zipper(archiveName, tmpPath, name)
    .then(function () {
      wrench.rmdirSyncRecursive(tmpPath, true);
    });
}


function copier(root, dest, src) {
  function includePattern(f, p) {
    var file = path.resolve(p, f);

    return files.filter(function (white) {
      return file.indexOf(white) !== -1;
    }).length ? true : false;
  }

  var files = src.map(function (file) {
    return path.resolve(root, file);
  });

  //remove previous one
  wrench.rmdirSyncRecursive(dest, true);

  //copy files
  wrench.copyDirSyncRecursive(root, dest, {
    forceDelete: true,
    include: includePattern
  });
}

function zipper(packageName, localDirectory, destinationDirectory) {
  var output = fs.createWriteStream(packageName);
  var archive = archiver.create('zip', {}); // or archiver('zip', {});

  //create the archive if it does not exists
  if (!fs.existsSync(packageName)) {
    fs.writeSync(packageName);
  }

  //add package directory to the zip file
  archive.directory(localDirectory, destinationDirectory);

  //pipe out the output
  archive.pipe(output);
  archive.finalize();

  return new Promise(function (resolve, reject) {
    output.on('close', function () {
      console.log(archive.pointer() + ' total bytes');
      console.log('built package: ' + packageName);

      resolve();
    });
  });
}
