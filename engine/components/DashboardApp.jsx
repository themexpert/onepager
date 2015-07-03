const React 				= require('react');
// const Reflux  			= require('reflux');
// const PureMixin 		= require('react/lib/ReactComponentWithPureRenderMixin');
const Router 				= require('react-router');
const RouteHandler 	= Router.RouteHandler;
const Navbar = require('./Dashboard/Navbar.jsx');

let DashboardApp = React.createClass({
	render(){
		console.log("rendering Dashboard");

		return (
			<div className="col-md-10 col-md-offset-1" style={{marginTop: 50}}>
				<Navbar />
        <RouteHandler/>
			</div>
		);
	}
});

module.exports = DashboardApp;