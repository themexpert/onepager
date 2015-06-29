const React 				= require('react');
const Reflux  			= require('reflux');
const PureMixin 		= require('react/lib/ReactComponentWithPureRenderMixin');

const AdminStore 		= require('../../stores/AdminStore.js');
const Content  			= require('../Admin/Content.jsx');
const Tabs  				= require('../Admin/Tabs.jsx');

let Admin = React.createClass({
	mixins: [PureMixin, Reflux.connect(AdminStore)],
	
	render(){
		console.log("rendering Admin");

		return (
			<div>
				<Tabs 
					active={this.state.activeTabIndex} 
					tabs={this.state.tabs} />

				<Content 
					index={this.state.activeTabIndex} 
					panel={this.state.optionPanel.get(this.state.activeTabIndex)} />
			</div>
		);
	}
});

module.exports = Admin;