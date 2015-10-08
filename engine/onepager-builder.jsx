const React = require('react');
const App   = require('./App/App.jsx');


require("../assets/css/sweetalert.css");
//require("./lithium/lithium-builder.less");


require("./shared/onepager/lib/_mixins");


React.render(<App />, document.getElementById('onepager-builder'));

window.AppStore = require('./App/AppStore');
window.AppActions = require('./App/AppActions');
