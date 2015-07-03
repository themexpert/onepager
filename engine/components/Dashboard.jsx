const React 				= require('react');
// const Reflux  			= require('reflux');
// const PureMixin 		= require('react/lib/ReactComponentWithPureRenderMixin');

let Dashboard = React.createClass({
	getInitialState(){
		return {
			tab: "dashboard"
		};
	},
	render(){
		console.log("rendering Dashboard");
		const tabs = [
			{id: 'dashboard', name: "Dashboard"},
			{id: 'tutorial', name: "Getting Started"},
			{id: 'addNew', name: "Add new"},
			{id: 'pages', name: "Pages"},
			{id: 'update', name: "Update Onepager"}
		];

		return (
			<div className="row">
				<div className="col-md-10 col-md-offset-1" style={{marginTop: 50}}>
					<nav>
						<ul className="nav nav-tabs">
						{tabs.map((tab)=>{
							return(
								<li key={tab.id} onClick={()=>this.setState({tab:tab.id})} className={this.state.tab === tab.id ? "active":""}>
									<a href="javascript:void(0)">{tab.name}</a> 
								</li>
							);
						})}
						</ul>
					</nav>
				</div>
			</div>
		);
	}
});

module.exports = Dashboard;