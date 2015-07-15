var path = require('path');
var merge = require('webpack-merge');
var webpack = require('webpack');

var TARGET = process.env.TARGET;
var ROOT_PATH = path.resolve(__dirname);

var common = {
  entry: {
    optionspanel: ['./engine/optionspanel.jsx'],
    app: ['./engine/app.jsx'],
    generator: ['./engine/generator.jsx']
  },
  output: {
    filename: '[name].bundle.js',
    path: __dirname + '/assets'
  },
  module: {
    loaders: [
      { test: /\.jsx?$/, loader: "strip-loader?strip[]=console.log" },

      // The module to load. "babel" is short for "babel-loader"
      {test: /\.jsx?$/, loaders: ['babel?stage=1'], include: path.resolve(ROOT_PATH, 'engine')},
      // use ! to chain loaders
      {test: /\.css$/, loader: 'style!css'},
      {test: /\.less$/, loader: 'style!css!less'},
      // inline base64 URLs for <=8k images, direct URLs for the rest
      {test: /\.(png|jpg)$/, loader: 'url?limit=10240'}
    ]
  },
  plugins: [
//    new webpack.optimize.UglifyJsPlugin({
//      compress: {
//        warnings: false
//      }
//    }),
    new webpack.DefinePlugin({
      'process.env': {
        // This has effect on the react lib size
        'NODE_ENV': JSON.stringify('production'),
      }
    }),
    new webpack.NoErrorsPlugin()
  ]
};

module.exports = merge(common, {

});
