var dest = './resources/dist';
var src = './resources/src';
// var gutil = require('gulp-util');

module.exports = {
  server: {
    settings: {
      root: dest,
      host: 'localhost',
      port: 8080,
      livereload: {
        port: 35929
      }
    }
  },
  sass: {
    src: src + '/styles/**/*.{sass,scss,css}',
    dest: dest + '/styles',
    settings: {
      indentedSyntax: false, // Enable .sass syntax?
      imagePath: '/images' // Used by the image-url helper
    }
  },
  less: {
    src: src + '/styles/*.less',
    dest: dest + '/styles',
    settings: {
      indentedSyntax: false, // Enable .less syntax?
      imagePath: '/images' // Used by the image-url helper
    }
  },
  browserify: {
    settings: {
      transform: ['reactify', 'babelify']
    },
    src: src + '/js/index.jsx',
    dest: dest + '/js',
    outputName: 'index.js',
    debug: false
    // debug: gutil.env.type === 'dev'
  },
  html: {
    src: 'src/*.html',
    dest: dest
  },
  images: {
    src: 'src/images/**/*',
    dest: dest + '/images'
  },
  fonts: {
    src: 'src/fonts/**/*',
    dest: dest + '/fonts'
  },
  bower: {
    js: dest + '/vendor/js',
    css: dest + '/vendor/css',
    images: dest + '/vendor/images',
    fonts: dest + '/vendor/fonts'
  },
  watch: {
    src: 'src/**/*.*',
    tasks: ['build']
  }
};
