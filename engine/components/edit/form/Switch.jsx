const React         = require('react');
const PureMixin     = require('react/lib/ReactComponentWithPureRenderMixin');
require("../../../../assets/css/bootstrap-switch.css");

let SwitchControl = React.createClass({
  mixins: [PureMixin],
  
  getValue(){
    return React.findDOMNode(this.refs.input).checked;
  },

  componentDidMount(){
    let el = React.findDOMNode(this.refs.input);
    jQuery(el).bootstrapSwitch();
    jQuery(el).on("switchChange.bootstrapSwitch", this.props.onChange);
  },

  componentWillUnmount(){
    jQuery(React.findDOMNode(this.refs.input)).unbind();
  },

  render() {
    let props = {
      name: this.props.name,
      type: 'checkbox',
      defaultChecked: this.props.defaultChecked === true,
      onChange: this.props.onChange
    };

    return (
      <div className="form-group">
          <label className="control-label">{this.props.label}</label>
          <input ref="input" data-size="small" data-label-width="10" {...props} />
      </div>
    );
  }
});

module.exports = SwitchControl;
