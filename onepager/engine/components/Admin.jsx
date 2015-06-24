const React = require('react');
const Sidebar = require('./Admin/Sidebar.jsx');

let Admin = React.createClass({
	render(){
		return <div><Sidebar/></div>;
	}
});

module.exports = Admin;