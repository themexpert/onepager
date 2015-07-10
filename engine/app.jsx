const React = require('react');
const App   = require('./App/App.jsx');


require("../assets/css/sweetalert.css");
require("./ui/lithium/lithium-builder.less");


require("./shared/lib/_mixins");


React.render(<App />, document.getElementById('onepager-mount'));
