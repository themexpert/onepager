const React 				= require("react");
const PureMixin 		= require('react/lib/ReactComponentWithPureRenderMixin');

const Input 				= require("../edit/form/Input.jsx");
const Divider 			= require('../edit/Divider.jsx');
const AdminActions 	= require('../../actions/AdminActions.js');


let Content = React.createClass({
	mixins: [PureMixin],
  update(){
		let controls = this.props.panel.get('fields');

  	controls = controls.map(control=>{
      let ref = this.refs[control.get('ref')];
      let type = control.get('type');

      switch(type){
        case "divider":
          //we do not need to compute anything for a divider
          break;
        default:
          //normal input
          return control.set('value', ref.getValue());
      }

      return control;
    });

    let panel = this.props.panel.set('fields', controls);
    AdminActions.saveTab(this.props.index, panel);
  },

	render(){
		console.log("rendering Content");

		let controls = this.props.panel.get('fields');

		let controlsHtml = controls.map((control, ii)=>{
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
			<div>
				<div className="col-md-6">
				{controlsHtml}
				</div>
				<pre  className="col-md-6">
				{JSON.stringify(this.props.panel.toObject(), null, 2)}
				</pre>
			</div>
		);
	}
});

module.exports = Content;