const React = require('react');
const App   = require('./components/App.jsx');

require("../assets/css/toastr.css");
require("../assets/css/sweetalert.css");
require("../assets/css/icon-selector.min.css");
require("./lithium/lithium.less");


require("underscore");
require("./lib/_mixins");


React.render(<App />, document.getElementById('onepager-mount'));