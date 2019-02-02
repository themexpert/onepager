import React from 'react';
import Immutable from 'immutable';
import LinkedStateMixin from 'react/lib/LinkedStateMixin';

let Link  = React.createClass({
  mixins: [LinkedStateMixin],

  propTypes: {
    text: React.PropTypes.string,
    label: React.PropTypes.string,
    url: React.PropTypes.string,
    target: React.PropTypes.bool
  },

  getInitialState(){
    return {
      text: this.props.text,
      url: this.props.url,
      target: this.props.target
    }
  },

  getValue(){
    return this.state;
  },

  onChange(){
    let state = {
      url: React.findDOMNode(this.refs.url).value,
      text: React.findDOMNode(this.refs.text).value,
      target: React.findDOMNode(this.refs.target).checked
    };

    this.setState(state);
    this.props.onChange();
  },

  render() {
    let {label, text, url, target} = this.props;

    return (
      <div className="uk-form-stacked">
        <label className="uk-form-label">{label}</label>

        <div className="uk-margin-small-top">
          <div className="uk-inline">
            <span className="uk-form-icon" data-uk-icon="icon: pencil"></span>
            <input defaultValue={text}
                   className="uk-input uk-form-width-large"
                   onChange={this.onChange}
                   ref="text"
                   type="text"/>
          </div>
        </div>

        <div className="uk-margin-small-top">
          <div className="uk-inline">
            <span className="uk-form-icon" data-uk-icon="icon: link"></span>
            <input
              onMouseEnter={()=>this.setState({focus: true})}
              defaultValue={url}
              className="uk-input uk-form-width-large"
              onChange={this.onChange}
              ref="url"
              type="text"/>
          </div>
          <div className="uk-margin-small-top">
            <label><input className="uk-checkbox" checked={target} ref="target" onChange={this.onChange} type="checkbox"/> Open in a new window</label>
          </div>
        </div>
        
      </div>
    );
  }
});

export default Link;
