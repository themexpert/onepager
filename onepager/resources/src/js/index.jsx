const React = require('react');
const App = require('./components/App.jsx');

require("underscore");
require("./lib/_mixins");


React.render(<App />, document.getElementById('onepager-mount'));