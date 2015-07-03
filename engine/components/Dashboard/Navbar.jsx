const React 				= require('react');

let Navbar = React.createClass({
	getInitialState(){
		var route = window.location.hash.substr(1);
		
		return {
			tab: `#${route}`
		};
	},

	render(){
		console.log("rendering Navbar");

		const tabs = [
			{href: '#/dashboard', name: "Dashboard"},
			{href: '#/getting-started', name: "Getting Started"},
			{href: '#/new-page', name: "Add new page"},
			{href: 'http://lost/test/wp/wp-admin/admin.php', name: "Pages"},
			{href: '#/backup', name: "Backup"},
			{href: 'http://lost/test/wp/wp-admin/admin.php?', name: "Update Onepager"}
		];

		return (
			<ul className="nav nav-tabs">
			{tabs.map((tab, ii)=>{
				const handleTabClick = ()=> this.setState({tab:tab.href});
				const classes = this.state.tab === tab.href ? "active":"";
				return(
					<li key={ii} onClick={handleTabClick} className={classes}> 
						<a href={tab.href}>{tab.name}</a> 
					</li>
				);
			})}
			</ul>
		);
	}
});

module.exports = Navbar;