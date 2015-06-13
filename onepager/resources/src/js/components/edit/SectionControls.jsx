const React       = require('react');
const _           = require("underscore");
const PureMixin   = require('react/lib/ReactComponentWithPureRenderMixin');
const Divider     = require('./Divider.jsx');
const Input       = require('./form/Input.jsx');
const Repeater    = require('./repeater/Repeater.jsx');

let SectionControls = React.createClass({
  mixins: [PureMixin],

  updateSection(){
    let controls  = _.copy(this.props.controls);

    let fields = controls.map(control=>{
      let ref = this.refs[control.ref];

      switch(control.type){
        case "divider":
          //we do not need to compute anything for a divider
          break;
        
        case "repeater":
          control.sections = ref.getFields();
          break;

        default: 
          //normal input
          control.value = ref.getValue();
      }

      return control;
    });

    this.props.update(fields);
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
