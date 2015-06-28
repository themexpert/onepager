const React 				= require('react');
const PureMixin 		= require('react/lib/ReactComponentWithPureRenderMixin');
const AdminActions 	= require('../../actions/AdminActions.js');

let Tabs = React.createClass({
	mixins: [PureMixin],

	handleTabChange(event){
		AdminActions.changeTab(parseInt(event.target.dataset.index));
	},
	
	render(){
		console.log("rendering Tabs");

		return (
				<ul className="nav nav-tabs">
				{this.props.tabs.map((tab, ii)=>{
					let classes = (ii===this.props.active) ? "active" : "";

					return <li key={tab.id} className={classes}>
						<a onClick={this.handleTabChange} data-index={ii} href="javascript:void(0)">
							{tab.name}
						</a>
					</li>;
				})}
				</ul>
		);
	}
});

module.exports = Tabs;