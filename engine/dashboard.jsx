const React = require('react');
const Dashboard   = require('./components/Dashboard.jsx');


require("../assets/css/sweetalert.css");
require("./lithium/lithium-builder.less");


require("./lib/_mixins");

React.render(<Dashboard />, document.getElementById('dashboard-mount'));
