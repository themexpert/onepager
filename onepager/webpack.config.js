var webpack = require('webpack');
var path    = require('path');

// webpack.config.js
var config = {
  entry: {
     admin: ['./assets/admin.jsx'],
     app: ['./assets/app.jsx'],
  },
  output: {
    filename: '[name].bundle.js', 
    path: __dirname + '/dist', 
  },
  module: {
    loaders: [
      // The module to load. "babel" is short for "babel-loader"
      { test: /\.jsx?$/, loaders: ['babel'], include: path.join(__dirname, '/assets')},
      // use ! to chain loaders
      { test: /\.less$/, loader: 'style-loader!css-loader!less-loader' }, 
      { test: /\.css$/, loader: 'style-loader!css-loader' },
      // inline base64 URLs for <=8k images, direct URLs for the rest
      { test: /\.(png|jpg)$/, loader: 'url-loader?limit=8192'}, 

    ]
  },
  // Require the webpack and react-hot-loader plugins
  plugins: [  
    new webpack.HotModuleReplacementPlugin(),
    new webpack.NoErrorsPlugin()
  ],
};


module.exports = config;