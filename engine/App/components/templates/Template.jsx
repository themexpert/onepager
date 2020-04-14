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
      <tr>
        <td className="id">{template.id}</td>
        <td className="name">{template.name}</td>
        <td className="type">{template.type}</td>
        <td className="user">{template.created_by === '1' ? 'Admin' : null}</td>
        <td className="date">{template.created_at}</td>
        <td className="insert"><button>Insert</button></td>
      </tr>
    );
  }
});

module.exports = Template;
