// var gulp = require('gulp');
const { series, src, dest, watch } = require('gulp');

const fs = require('fs');
const del = require('del');
const path = require('path');
const merge = require('merge-stream');
const run = require('gulp-run-command').default

const less = require('gulp-less');
const mainBowerFiles = require('main-bower-files');
const gulpFilter = require('gulp-filter');

const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const wpPot = require('gulp-wp-pot');
const gulpZip = require('gulp-zip');

const shell = require('gulp-shell');

const ROOT_PATH = path.resolve(__dirname);

const assetsPath = './assets';
const source = './engine';
const svnDir = "~/Documents/wordpress.org/tx-onepager";

const config = {
  less: {
    src: source + '/lithium/*.less',
    dest: assetsPath + '/css',
    settings: {
      javascriptEnabled: true,
      indentedSyntax: false, // Enable .less syntax?
      imagePath: '/images' // Used by the image-url helper
    }
  },
  js: {
    src: [source + '/*.js', source + '/lithium/*.js'],
    dest: assetsPath + '/'
  },
  images: {
    src: source + '/lithium/images/**/*',
    dest: assetsPath + '/images'
  },
  fonts: {
    src: source + '/fonts/**/*',
    dest: assetsPath + '/fonts'
  },
  bower: {
    js: assetsPath + '/js',
    css: assetsPath + '/css',
    images: assetsPath + '/images',
    fonts: assetsPath + '/fonts'
  },
  uikit: {
    js: assetsPath + '/js',
    css: assetsPath + '/css'
  },
  'bootstrap-datepicker': {
    js: assetsPath + '/js',
    css: assetsPath + '/css'
  },
  'bootstrap-timepicker': {
    js: assetsPath + '/js',
    css: assetsPath + '/css'
  },
  watch: {
    src: source + '/**/*.*',
    less: source + '/lithium/**/*.less',
    js: source + '/**/*.js',
    // js: [source + '/*.js', source + '/lithium/*.js'],
    tasks: ['build']
  }
};

function assets(){
  var lessPath = src(config.less.src)
    .pipe(less(config.less.settings))
    .pipe(cleanCSS())
    .pipe(dest(config.less.dest))

  var jsPath = src(config.js.src)
    .pipe(uglify())
    .pipe(dest(config.js.dest))

  var fontsPath = src(config.fonts.src)
    .pipe(dest(config.fonts.dest))

  var imagesPath = src(config.images.src)
    .pipe(dest(config.images.dest))
  // UiKit
  const uikitPath = './node_modules/uikit/dist';
  var uikitCss = src(uikitPath + '/css/uikit.css')
    .pipe(cleanCSS())
    .pipe(dest(config.uikit.css)) 

  var uikitJs = src([uikitPath + '/js/uikit.js', uikitPath + '/js/uikit-icons.js'])
    .pipe(uglify())
    .pipe(dest(config.uikit.js))

  //Bootstrap datepicker
  const bsDatePickerPath = './node_modules/bootstrap-datepicker/dist'
  var bsDatePickerJs = src([bsDatePickerPath + '/js/bootstrap-datepicker.js'])
    .pipe(uglify())
    .pipe(dest(config['bootstrap-datepicker'].js))
  var bsDatePickerCss = src([bsDatePickerPath + '/css/bootstrap-datepicker.css'])
    .pipe(cleanCSS())
    .pipe(dest(config['bootstrap-datepicker'].css))

  // BS timepicker
  const bsTimepickerPath = './node_modules/bootstrap-timepicker'
  var bsTimepickerJs = src([bsTimepickerPath + '/js/bootstrap-timepicker.js'])
    .pipe(uglify())
    .pipe(dest(config['bootstrap-timepicker'].js))

  var bsTimepickerCss = src([bsTimepickerPath + '/css/bootstrap-timepicker.css'])
    .pipe(cleanCSS())
    .pipe(dest(config['bootstrap-timepicker'].css))

  return merge(lessPath, jsPath, fontsPath, imagesPath, uikitCss, uikitJs, bsDatePickerCss, bsDatePickerJs, bsTimepickerCss, bsTimepickerJs)
}

/*** Filters for bower main files **/
var jsFilter = gulpFilter('**/*.js', { restore: true }),
cssFilter = gulpFilter('**/*.css', { restore: true }),
lessFilter = gulpFilter('**/*.less', { restore: true }),
fontFilter = gulpFilter(['**/*.svg', '**/*.eot', '**/*.woff', '**/*.woff2', '**/*.ttf'], { restore: true }),
imgFilter = gulpFilter(['**/*.png', '**/*.gif', '**/*.jpg'], { restore: true });

function bower(){
  return src(mainBowerFiles())

    .pipe(jsFilter)
    .pipe(uglify())
    .pipe(dest(config.bower.js))
    .pipe(jsFilter.restore)

    .pipe(lessFilter)
    .pipe(less())
    .pipe(dest(config.bower.css))
    .pipe(rename({extname: 'css'}))
    .pipe(lessFilter.restore)

    .pipe(cssFilter)
    // .pipe(cleanCSS())
    .pipe(dest(config.bower.css))
    .pipe(cssFilter.restore)

    .pipe(imgFilter)
    .pipe(dest(config.bower.images))
    .pipe(imgFilter.restore)

    .pipe(fontFilter)
    .pipe(dest(config.bower.fonts))
    .pipe(fontFilter.restore);
}

// function watch(){
//   gulp.watch(config.watch.less, ['less']);
//   gulp.watch(config.watch.js, ['js']);
// }
// gulp.task('watch', function () {
//   gulp.watch(config.watch.less, ['less']);
//   gulp.watch(config.watch.js, ['js']);
// });

function watcher(){
  var listenLessPath = src(config.less.src)
  .pipe(less(config.less.settings))
  .pipe(cleanCSS())
  .pipe(dest(config.less.dest));

  var listenJSPath = src(config.js.src)
    .pipe(uglify())
    .pipe(dest(config.js.dest));

  return merge(listenLessPath, listenJSPath)
}
function listen(){
    watch([config.watch.less, config.watch.js], series([watcher]));
}

function webpackProd(){
  return shell(['webpack  -p --color --progress'])
}
function webpackDev(){
  return shell(['webpack --color --progress'])
}
function webpackWatch(){
  return shell(['webpack  --watch --color --progress'])  
}

/**
 * Clean everything
 */
function clean(){
  return del([assetsPath, './temp']);
}
/**
 * Package build section
 */
function webpackBuild(cb){
  // return gulpRun('npm run build')
  async () => gulpRun('npm run build')()
  // return process.argv.indexOf('-dev') !== -1 ? webpackDev() : webpackProd();
  // var task = process.argv.indexOf('-dev') !== -1 ? 'webpackDev':'webpackProd';
  // return series(task, cb);
  // return webpackProd();
}

/**
 * Default tasks
 */
// gulp.task('default', function () {
//   runSequence('build', ['webpack-watch', 'watch']);
// });

// Copy files to /temp dir
function copy(cb){
  return src([
      './**',
      './*/**',
      '!./node_modules/**',
      '!./bower_components/**',
      '!./engine/**',
      '!./temp/**',
      '!gulpfile.js',
      '!package.json',
      '!*.json',
      '!*.yml',
      '!*.xml',
      '!*.zip',
      '!*.config.js',
      '!*.lock',
      '!*.gitignore',
  ]).pipe(dest('temp/tx-onepager'));
  cb();
}

function package(){
  var version = getOnepagerVersion();
  var archiveName = `tx-onepager-${version}.zip`;
  // Replace version num
  replaceVersion('./temp/tx-onepager/readme.txt', version);
  // create zip
  return src(['./temp/**', './temp/*/**',])
        .pipe(gulpZip(archiveName))
        .pipe(dest('./temp'))
}

exports.clean = clean
exports.assets = series(assets, bower)
/**
 * for windows release
 * 1. gulp ready
 * 2. npm run buildwin
 * 3. gulp releasewin
 * for windows dev
 * 1. gulp defaultwin
 * 2. npm run devwin
 */
exports.ready = series( clean, assets, bower)
exports.releasewin = series( copy, package)
exports.defaultwin = series( clean, assets, bower, listen)
/**
 * for MacOs
 */
exports.default = series( clean, assets, bower, run('npm run build'), listen)
exports.release = series( clean, assets, bower, run('npm run build'), copy, package)
/**
 * from gulp file command - gulp generatePot
 * with gulp command string inside js file can not convert to i18n
 * from cli command - wp i18n make-pot . languages/tx-onepager.pot
 * but with cli command string inside js file easily convert to i18n function
 * command must be run from onepager plugin directory. 
 */
function generatePot(){
    return src([
        './*.php',
        './*/**.php',
        './*/*/**.php',
        './*/*/*/**.php',
        './assets/*.js',
        './assets/**.js',
        '!./node_modules',
        '!./node_modules/**',
        '!./bower_components',
        '!./bower_components/**',
        '!./vendor',
        '!./vendor/**',
    ])
        .pipe(wpPot( {
            domain: 'tx-onepager',
            package: 'WPOnepager',
        } ))
        .pipe(dest('./languages/tx-onepager.pot'));
}
exports.generatePot = series( generatePot)

// gulp.task('svn', function(){
//   var version = getOnepagerVersion().replace("v", "");
//   var init = [
//     `cp tx-onepager.zip ${svnDir}`,
//     `cd ${svnDir}`,
//     `unzip tx-onepager.zip`,
//     `rm -rf trunk/*`,
//     `mv tx-onepager/* trunk`,
//     `rm -rf tx-onepager.zip tx-onepager`,
//     `svn add * --force`,
//     `svn rm $( svn status | sed -e '/^!/!d' -e 's/^!//' )`
//   ];

//   var tag = [ `cd ${svnDir}`, `svn cp trunk tags/${version}`, `svn ci -m '${version} released'` ];

//   shell.exec(init.join(" && "));
//   shell.exec(tag.join(" && "));
// });


function getOnepagerVersion(){
  var p = fs.readFileSync('tx-onepager.php', 'utf-8');
  return p.split("\n")[5].split(":")[1].trim();
}

function replaceVersion(file, version){
  var readme = fs.readFileSync(file, `utf-8`);
  readme = readme.replace("%version%", version);
  fs.writeFileSync(file, readme);
}
