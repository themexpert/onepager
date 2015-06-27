const React 			= require('react');
const Reflux  		= require('reflux');
const AdminStore 	= require('../stores/AdminStore.js');
const AdminActions 	= require('../actions/AdminActions.js');
const _ = require("underscore");

const Content  		= require('./Admin/Content.jsx');

let Admin = React.createClass({
	mixins: [Reflux.connect(AdminStore)],

	handleTabChange(tabIndex){
		AdminActions.changeTab(tabIndex);
	},

	render(){
		console.log(this.state.activeTabOptions.toJS());

		return (
			<div>
				<ul>
				{this.state.tabs.map((tab, tabIndex)=>
					<li onClick={this.handleTabChange.bind(this, tabIndex)} key={tab.id} id={tab.id}>{tab.name}</li>
				)}
				</ul>

				<Content 
					activeTabName={this.state.activeTabName} 
					controls={this.state.activeTabOptions} />
			</div>
		);
	}
});

module.exports = Admin;