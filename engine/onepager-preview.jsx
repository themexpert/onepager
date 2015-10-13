const React = require('react');
const App   = require('./App/Preview.jsx');

parent.jQuery(function(){
  React.render(<App />, document.getElementById('onepager-preview'));
});
