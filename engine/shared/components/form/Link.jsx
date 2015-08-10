import React from 'react';
import Immutable from 'immutable';
import LinkedStateMixin from 'react/lib/LinkedStateMixin';

let Link  = React.createClass({
  mixins: [LinkedStateMixin],

  propTypes: {
    label: React.PropTypes.string,
    link: React.PropTypes.string,
    target: React.PropTypes.string
  },

  getInitialState(){
    return {
      label: this.props.label,
      link: this.props.link,
      target: this.props.target
    }
  },

  getValue(){
    return this.state;
  },

  onChange(){
    let state = {
      link: React.findDOMNode(this.refs.link).value,
      label: React.findDOMNode(this.refs.label).value,
      target: React.findDOMNode(this.refs.target).checked
    };

    this.setState(state);
    this.props.onChange();
  },

  render() {
    return (
      <div>
        <label className="control-label">Link</label>

        <div className="form-group" style={{marginBottom: 0}}>
          <div className="input-group">
            <span className="input-group-addon">label</span>
            <input defaultValue={this.props.label} className="form-control" onChange={this.onChange} ref="label" type="text" placeholder="label"/>
          </div>
        </div>
        <div className="form-group">
          <div className="input-group">
            <span className="input-group-addon" style={{width: 55}}>link</span>
            <input defaultValue={this.props.link} className="form-control" onChange={this.onChange} ref="link" type="text" placeholder="link"/>
            <span className="input-group-addon">target</span>
            <span className="input-group-addon">
              <input checked={this.props.target} ref="target" onChange={this.onChange} type="checkbox"/>
            </span>
          </div>
        </div>
      </div>
    );
  }
});

export default Link;
