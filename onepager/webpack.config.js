var webpack = require('webpack');
var path    = require('path');

// webpack.config.js
var config = {
  entry: {
     admin: ['./engine/admin.jsx'],
     app: ['./engine/app.jsx'],
  },
  output: {
    filename: '[name].bundle.js',
    path: __dirname + '/assets',
  },
  module: {
    loaders: [
      // The module to load. "babel" is short for "babel-loader"
      { test: /\.jsx?$/, loaders: ['babel'], include: path.join(__dirname, '/engine')},
      // use ! to chain loaders
      { test: /\.css$/, loader: 'style!css' },
      { test: /\.less$/, loader: 'style!css!less' },
      // inline base64 URLs for <=8k images, direct URLs for the rest
      { test: /\.(png|jpg)$/, loader: 'url?limit=8192'},

    ]
  },
  // Require the webpack and react-hot-loader plugins
  plugins: [
    // new webpack.HotModuleReplacementPlugin(),
    new webpack.NoErrorsPlugin()
  ],
};


module.exports = config;
