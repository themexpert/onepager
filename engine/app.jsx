const React = require('react');
const App   = require('./components/App.jsx');


require("../assets/css/sweetalert.css");
require("./lithium/lithium-builder.less");


require("./lib/_mixins");


React.render(<App />, document.getElementById('onepager-mount'));
