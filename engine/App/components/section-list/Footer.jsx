const React      = require('react');
const PureMixin  = require('react/lib/ReactComponentWithPureRenderMixin');
const Tab        = require('../../../shared/components/Tab.jsx');
const ODataStore = require('../../../shared/lib/ODataStore.js');


let Footer = React.createClass({
  mixins: [PureMixin],

  propTypes: {
    id   : React.PropTypes.string,
    icon : React.PropTypes.string,
    title: React.PropTypes.string
  },

  getDefaultProps(){
    return {
      disabled: false,
      active  : ''
    };
  },

  render() {
    return (
      <div className="footer flex flex-space-between" dangerouslySetInnerHTML={{__html: ODataStore.footer}}></div>
    );
  }
});

module.exports = Footer;
