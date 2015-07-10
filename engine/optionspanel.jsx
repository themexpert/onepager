const React = require('react');
const Admin = require('./Optionspanel/OptionsPanel.jsx');
require("./shared/lib/_mixins");


require("../assets/css/sweetalert.css");
require("./ui/lithium/lithium.less");

let mount = document.getElementById("onepager-settings-mount");

if (mount) {
  React.render(<Admin />, mount);
}
