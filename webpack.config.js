var path = require('path');
var merge = require('webpack-merge');
var webpack = require('webpack');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');

var TARGET = process.env.TARGET;
var ROOT_PATH = path.resolve(__dirname);

var isProduction = process.argv.indexOf('-p') !== -1;

var common = {
  entry: {
    optionspanel: ['./engine/optionspanel.jsx'],
    'onepager-builder': ['./engine/onepager-builder.jsx'],
    'onepager-preview': ['./engine/onepager-preview.jsx'],
    // generator: ['./engine/generator.jsx']
  },
  output: {
    filename: '[name].bundle.js',
    path: __dirname + '/assets'
  },
  module: {
    loaders: [
      // The module to load. "babel" is short for "babel-loader"
      {test: /\.jsx?$/, loaders: ['babel?stage=1'], include: path.resolve(ROOT_PATH, 'engine')},
      // use ! to chain loaders
      {test: /\.css$/, loader: 'style!css'},
      {test: /\.less$/, loader: 'style!css!less', options: { javascriptEnabled: true}},
      // inline base64 URLs for <=8k images, direct URLs for the rest
      {test: /\.(png|jpg)$/, loader: 'url?limit=10240'}
    ]
  }
};

if(isProduction){
  
  common.module.loaders.push({ test: /\.jsx?$/, loader: "strip-loader?strip[]=console.log" });
  common.plugins = [
   new webpack.optimize.UglifyJsPlugin({
     compress: {
       warnings: false
     }
   }),
    new webpack.DefinePlugin({
      'process.env': {
        // This has effect on the react lib size
        'NODE_ENV': JSON.stringify('production'),
      }
    }),
    new webpack.NoErrorsPlugin()
  ];
}

module.exports = merge(common, {

});
