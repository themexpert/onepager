const React = require('react');
const App   = require('./components/App.jsx');

require("./lithium/flex.less");
require("./lithium/lithium.less");

require("underscore");
require("./lib/_mixins");


React.render(<App />, document.getElementById('onepager-mount'));
