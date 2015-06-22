const React = require('react');
const Admin = require('./components/Admin.jsx');
require("./styles/flex.less");
require("./styles/lithium.less");

let mount = document.getElementById("onepager-settings-mount");

if(mount){
	React.render(<Admin />, mount);
}