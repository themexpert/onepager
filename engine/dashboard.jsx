const React 	= require('react');
const Router 	= require('react-router');
const Route 	= Router.Route;

const NewPage   			= require('./components/Dashboard/NewPage.jsx');
const About   				= require('./components/Dashboard/About.jsx');
const DashboardApp  	= require('./components/DashboardApp.jsx');
const GettingStarted  = require('./components/Dashboard/GettingStarted.jsx');
const Backup  				= require('./components/Dashboard/Backup.jsx');

// declare our routes and their hierarchy
const routes = (
  <Route handler={DashboardApp}>
    <Route path="dashboard" handler={About}/>
    <Route path="new-page" handler={NewPage}/>
    <Route path="getting-started" handler={GettingStarted}/>
    <Route path="backup" handler={Backup}/>
  </Route>
);

const mount = document.getElementById('dashboard-mount');
Router.run(routes, Router.HashLocation, (Root) => {
  React.render(<Root/>, mount);
});
