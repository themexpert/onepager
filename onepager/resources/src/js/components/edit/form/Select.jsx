const React = require('react');
const Input = require('react-bootstrap/lib/Input');
const _ = require("underscore");
const ReactComponentWithPureRenderMixin = require('react/lib/ReactComponentWithPureRenderMixin');

let SelectControl = React.createClass({
  mixins: [ReactComponentWithPureRenderMixin],
  
  getValue(){
    return this.refs.input.getValue();
  },
  
  isEmpty(str) {
    return (!str || 0 === str.length);
  },

  render() {
    let options = this.props.options;
    
    return (
      <Input type='select' ref="input"
        label={this.props.label} 
        onChange={this.props.onChange} 
        className={this.props.className} >
        {
          _.map(options, (label, val)=>{
            return <option key={val} value={val}>{this.isEmpty(label) ? val : label}</option>;
          })
        }
      </Input>
    );
  }
});

module.exports = SelectControl;
