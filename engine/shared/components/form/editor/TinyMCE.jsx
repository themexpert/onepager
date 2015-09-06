const React      = require('react');
const PureMixin  = require('react/lib/ReactComponentWithPureRenderMixin');

const $         = jQuery;
const dom       = React.findDOMNode;

import "./style.less";


function initializeTinyMCE(id, onChange){
  $(function(){
    tinymce.init({
      selector: "#"+id,
      setup: ed=> {
        ed.on('keyup', e => onChange(ed));
        ed.on('change', e => onChange(ed));
      }
    });
  });
}

let TinyMCE = React.createClass({
  mixins: [PureMixin],

  propTypes: {
    label: React.PropTypes.string,
    value: React.PropTypes.string,
    onChange: React.PropTypes.func
  },

  getInitialState(){
    return { value : this.props.defaultValue};
  },

  componentDidMount() {
    let id = _.uniqueId('tiny-mce-');
    $(dom(this)).find('textarea').attr('id', id);

    initializeTinyMCE(id, this.onChange);
  },

  onChange(ed) {
    this.setState({value: ed.getContent()});
    this.props.onChange();
  },

  getValue(){
    return this.state.value;
  },

  render() {
    return (
      <div className="op-editor">
        <label>{this.props.label}</label>
        <textarea className="source" rows="10">{this.state.value}</textarea>
        <br/>
      </div>
    );
  }
});

module.exports = TinyMCE;
