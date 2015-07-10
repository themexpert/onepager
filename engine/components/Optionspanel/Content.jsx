<<<<<<< HEAD
const React     = require('react');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');

const Input               = require('../shared/form/Input.jsx');
=======
const React     = require("react");
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');

const Input               = require("./../shared/form/Input.jsx");
>>>>>>> 2a1be84b73334c64ade92e28d8a736c121b8847d
const Divider             = require('../shared/form/Divider.jsx');
const OptionsPanelActions = require('../../actions/OptionsPanelActions.js');


let Content = React.createClass({
  mixins: [PureMixin],
  update(){
    let controls = this.props.panel.get('fields');

    controls = controls.map(control=> {
      let ref  = this.refs[control.get('ref')];
      let type = control.get('type');

      switch (type) {
<<<<<<< HEAD
        case 'divider':
=======
        case "divider":
>>>>>>> 2a1be84b73334c64ade92e28d8a736c121b8847d
          //we do not need to compute anything for a divider
          break;
        default:
          //normal input
          return control.set('value', ref.getValue());
      }

      return control;
    });

    let panel = this.props.panel.set('fields', controls);
    OptionsPanelActions.update(this.props.index, panel);
  },

  render(){
<<<<<<< HEAD
    console.log('rendering Content');
=======
    console.log("rendering Content");
>>>>>>> 2a1be84b73334c64ade92e28d8a736c121b8847d

    let controls = this.props.panel.get('fields');

    let controlsHtml = controls.map((control, ii)=> {
      let props = {
        onChange: this.update,
        options : control.toJS(),
        ref     : control.get('ref'),
        key     : control.get('ref')
      };

      let type = control.get('type');

      switch (type) {
<<<<<<< HEAD
        case 'divider':
=======
        case "divider":
>>>>>>> 2a1be84b73334c64ade92e28d8a736c121b8847d
          return <Divider key={ii} label={control.get('label')}/>;
        default:
          return <Input {...props} />;
      }
    });

    return (
      <div>
        {controlsHtml}
      </div>
    );
  }
});

module.exports = Content;
