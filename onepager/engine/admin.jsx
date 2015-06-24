const React = require('react');
const Admin = require('./components/Admin.jsx');

// require("./lithium/flex.less");
// require("./lithium/lithium.less");

let mount = document.getElementById("onepager-settings-mount");

if(mount){
	React.render(<Admin />, mount);
}
