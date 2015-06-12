const React = require('react');
const ReactComponentWithPureRenderMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const Input = require('./form/Input.jsx');
const Divider = require('./Divider.jsx');
const Repeater = require('./repeater/Repeater.jsx');
const AppActions = require('../../actions/AppActions');
const AppStore = require('../../stores/AppStore');
const _ = require("underscore");

let SectionControls = React.createClass({
  mixins: [ReactComponentWithPureRenderMixin],
  updateSection(){
    let sectionIndex = this.props.sectionIndex;
    let controls = _.copy(this.props.controls);
    let section = _.copy(AppStore.get(sectionIndex));

    section.fields = controls.map(control=>{
      let ref = this.refs[control.ref];

      switch(control.type){
        case "divider":
          break;
        case "repeater":
          control.fields = ref.getFields();
          break;
        default: control.value = ref.getValue();
      }

      return control;
    });

    AppActions.updateSection(sectionIndex, section);
  },

  render() {
    console.log('rendering section controls');

    let {sectionIndex, controls} = this.props;

    let controlsHTML = controls.map((control, ii)=>{
      let props = {
        onChange: this.updateSection,
        options: control,
        ref: control.ref,
        controlIndex: ii,
        repeatIndex: ii,
        sectionIndex: sectionIndex,
        key: sectionIndex+"-"+ii
      };

      switch(control.type){
        case "repeater": return <Repeater {...props}/>;
        case "divider": return <Divider key={sectionIndex+"-"+ii} label={control.label} />;
        default: return <Input {...props} />;
      }
    });

    return (
        <div> {controlsHTML} </div>
    );
  }
});

module.exports = SectionControls;
