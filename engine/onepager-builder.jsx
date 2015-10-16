const React = require('react');
const App   = require('./App/App.jsx');


require("../assets/css/sweetalert.css");
require("./shared/onepager/lib/_mixins");

window.AppStore = require('./App/AppStore');
window.AppActions = require('./App/flux/AppActions');

React.render(<App />, document.getElementById('onepager-builder'));
