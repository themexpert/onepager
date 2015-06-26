const React     = require('react');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const Tab                 = require('./Tab.jsx');
const ODataStore          = require('../../stores/ODataStore.js');

require('./footer.less');

let Footer = React.createClass({
  mixins: [PureMixin],
  
  propTypes: {
    id: React.PropTypes.string,
    icon: React.PropTypes.string,
    title: React.PropTypes.string
  },

  getDefaultProps(){
    return {
      disabled: false,
      active: ''
    };
  },

  render() {
    return (
      <footer className="sidebar-footer">
        <ul className="nav nav-tabs">
          <li> <a href={ODataStore.disable}>Disable</a> </li> 
          <li> <a href={ODataStore.disable}>Tutorial</a> </li> 
        </ul>
      </footer>
    );
  }
});

module.exports = Footer;
