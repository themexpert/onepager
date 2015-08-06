const React      = require('react');
const PureMixin  = require('react/lib/ReactComponentWithPureRenderMixin');
const ReactQuill = require('react-quill');
require("./quill-editor.less");

function transformDivIntoP(str){
  return str.split("div>").join("p>");
}

let QuillControl = React.createClass({
  mixins: [PureMixin],

  getInitialState(){
    return { value : transformDivIntoP(this.props.defaultValue) };
  },

  getValue(){
    return transformDivIntoP(this.state.value);
  },

  onChange(value) {
    this.setState({value: value});
    this.props.onChange();
  },

  render() {
    return (
      <div>
        <label>{this.props.label}</label>
        <ReactQuill theme="snow" value={this.props.defaultValue} onChange={this.onChange}/>
      </div>
    );
  }
});

module.exports = QuillControl;
