const React = require('react');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const AppActions = require('../../flux/AppActions.js');
const AppStore = require('../../AppStore.js');

import notify from '../../../shared/plugins/notify';

let Template = React.createClass({
  mixins: [PureMixin],

  propTypes: {
    template: React.PropTypes.object
  },

  render() {
    console.log("rendering template");
    let template = this.props.template;

    return (
      <li>
        <span className="name">{template.name}</span>
        <span className="type">{template.type}</span>
        <span className="user">{template.created_by === '1' ? 'Admin' : null}</span>
        <span className="date">{template.created_at}</span>
        <span className="insert"><button>Insert</button></span>
      </li>
    );
  }
});

module.exports = Template;
