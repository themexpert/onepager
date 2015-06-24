const React = require("react");
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');

let Divider = React.createClass({
  mixins: [PureMixin],
  
  render(){
    return(
      <h3 className="form-divider">{this.props.label}</h3>
    );
  }
});

module.exports = Divider;
