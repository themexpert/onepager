const React      = require('react');
const PureMixin  = require('react/lib/ReactComponentWithPureRenderMixin');
const ReactQuill = require('react-quill');

const $         = jQuery;
const dom       = React.findDOMNode;

import ContainedSelectorMixin from '../../../mixins/ContainedSelectorMixin.js';

require("./quill-editor.less");

let QuillControl = React.createClass({
  mixins: [PureMixin, ContainedSelectorMixin],

  getInitialState(){
    return { value : this.props.defaultValue, visual: true};
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
      <div className="op-editor">
        <label>{this.props.label}</label>
        <button onClick={this._source}>Source</button> <button onClick={this._visual}>Visual</button>

        <textarea className="source" rows="8">{this.state.value}</textarea>
        <br/>
      </div>
    );
  }
});

module.exports = QuillControl;
