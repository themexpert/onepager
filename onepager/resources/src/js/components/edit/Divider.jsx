const React = require("react");
const ReactComponentWithPureRenderMixin = require('react/lib/ReactComponentWithPureRenderMixin');

let Divider = React.createClass({
  mixins: [ReactComponentWithPureRenderMixin],
  
  render(){
    return(
      <h3 className="form-divider">{this.props.label}</h3>
    );
  }
});

module.exports = Divider;
