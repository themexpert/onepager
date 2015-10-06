const React = require('react');
const App   = require('./App/Preview.jsx');


require("../assets/css/sweetalert.css");
//require("./lithium/lithium-builder.less");


require("./shared/onepager/lib/_mixins");

jQuery(function(){
  React.render(<App />, document.getElementById('onepager-preview'));
});
