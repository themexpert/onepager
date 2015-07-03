const React 				= require('react');
// const Reflux  			= require('reflux');
// const PureMixin 		= require('react/lib/ReactComponentWithPureRenderMixin');
const Router 				= require('react-router');
const RouteHandler 	= Router.RouteHandler;
const Navbar = require('./Dashboard/Navbar.jsx');

require("./Dashboard/dashboard.less");

let DashboardApp = React.createClass({
	render(){
		console.log("rendering Dashboard");

		return (
			<div className="col-md-12" style={{marginTop: 50}}>
				<div style={{marginBottom:50}}>
					<Navbar />
				</div>

        <RouteHandler/>
			</div>
		);
	}
});

module.exports = DashboardApp;