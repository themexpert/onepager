const React      = require('react');
const PureMixin  = require('react/lib/ReactComponentWithPureRenderMixin');
const ReactQuill = require('react-quill');

const $         = jQuery;
const dom       = React.findDOMNode;

import ContainedSelectorMixin from '../../../mixins/ContainedSelectorMixin.js';

require("./quill-editor.less");

function transformDivIntoP(str){
  return str;
}

let QuillControl = React.createClass({
  mixins: [PureMixin, ContainedSelectorMixin],

  getInitialState(){
    return { value : transformDivIntoP(this.props.defaultValue) };
  },

  componentDidMount() {
    let id = this.getContainerReactId();
    $(dom(this)).find('textarea').attr('id', id);

    $(()=>{
      tinymce.init({
        selector: "#"+id,
        setup: ed=> {
          ed.on('keyup', e => this.tinyMceChange(ed));
          ed.on('change', e => this.tinyMceChange(ed));
        }
      });
    });

  },

  tinyMceChange(ed) {
    this.setState({value: ed.getContent()});
    console.debug('Editor contents was modified. Contents: ' + ed.getContent());
    this.props.onChange();
  },

  getValue(){
    return this.state.value;
  },

  render() {
    return (
      <div>
        <label>{this.props.label}</label>
        <textarea>{this.state.value}</textarea>
        <br/>
      </div>
    );
  }
});

module.exports = QuillControl;
