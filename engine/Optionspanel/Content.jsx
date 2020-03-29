const React = require("react");
const _ = require('underscore');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');

const Input = require("../shared/components/form/Input.jsx");
const Divider = require('../shared/components/form/Divider.jsx');
const Note = require('../shared/components/form/Note.jsx');
const OptionsPanelActions = require('./OptionActions.js');


let Content = React.createClass({
  mixins: [PureMixin],

  getDefaultProps(){
    return {
      whenSettingsDirty: _.noop
    };
  },

  propTypes: {
    whenSettingsDirty: React.PropTypes.func,
    panel: React.PropTypes.object //Immutable
  },

  update(){
    let controls = this.props.panel.get('fields');
    let controlKey = this.props.panel.get('id');

    controls = controls.map(control=> {
      let ref = this.refs[control.get('ref')];
      let type = control.get('type');

      switch (type) {
        case "divider":
        case "note":
          //we do not need to compute anything for a divider
          break;
        default:
          //normal input
          return control.set('value', ref.getValue());
      }

      return control;
    });

    OptionsPanelActions.update([this.props.index, 'fields'], controls);
    this.props.pagUpdate(controlKey, controls);

    this.props.whenSettingsDirty();
  },

  render(){
    console.log("rendering Content from content jsx");
    let controls = this.props.panel.get('fields');
    
    let controlsHtml = controls.map((control, ii)=> {
      let props = {
        onChange: this.update,
        options: control.toJS(),
        ref: control.get('ref'),
        key: control.get('ref')
      };

      let type = control.get('type');

      switch (type) {
        case "divider":
          return <Divider key={ii} label={control.get('label')}/>;
        case "note":
          return <Note key={sectionIndex+"-"+ii} label={control.label}/>;
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
