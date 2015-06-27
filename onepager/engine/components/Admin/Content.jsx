const React 	= require("react");
const _ 			= require("underscore");
const Input 	= require("../edit/form/Input.jsx");
const Divider = require('../edit/Divider.jsx');

// const AdminActions 	= require('../../actions/AdminActions.js');


let Content = React.createClass({
  update(){
  	let controls = controls.map(control=>{
      let ref = this.refs[control.ref];
      let type = control.type;

      switch(type){
        case "divider":
          //we do not need to compute anything for a divider
          break;
        default:
          //normal input
          control.value = ref.getValue();
      }

      return control;
    });

    // this.props.update(tabName, controls);
  },

	render(){
		let controlsHtml = this.props.controls.map((control, ii)=>{
        let props = {
          onChange: this.update,
          options: control.toJS(),
          ref: control.get('ref'),
          key: control.get('ref')
        };

        let type = control.get('type');

        switch(type){
          case "divider":
            return <Divider key={ii} label={control.get('label')} />;
          default:
            return <Input {...props} />;
        }
	  });


		return (
			<div>{controlsHtml}</div>
		);
	}
});

module.exports = Content;