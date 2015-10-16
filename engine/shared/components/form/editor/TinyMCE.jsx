import PureMixin  from 'react/lib/ReactComponentWithPureRenderMixin';
import React, {findDOMNode} from 'react';
import _ from 'underscore';

const $ = jQuery;

import "./style.less";


function initializeTinyMCE(id, onChange) {
  $(function () {
    tinymce.init({
      selector: `#${id}`,
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
    return {value: this.props.defaultValue};
  },

  componentDidMount() {
    let id = _.uniqueId('tiny-mce-');
    $(findDOMNode(this)).find('textarea').attr('id', id);

    initializeTinyMCE(id, this.onChange);
  },

  onChange(ed) {
    let value = ed.getContent();
    this.setState({value});
    this.props.onChange();
  },

  getValue(){
    return this.state.value;
  },

  render() {
    return (
      <div className="op-editor">
        <label>{this.props.label}</label>
        <textarea className="source" rows="10" defaultValue={this.state.value}></textarea>
        <br/>
      </div>
    );
  }
});

module.exports = TinyMCE;
