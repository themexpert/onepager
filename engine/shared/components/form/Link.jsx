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
      <div className="link-control">
        <label className="control-label">{label}</label>

        <div className="form-group" style={{marginBottom: 0}}>
          <div className="input-group">
            <span className="input-group-addon">Text</span>
            <input defaultValue={text}
                   className="form-control"
                   onChange={this.onChange}
                   ref="text"
                   type="text"/>
          </div>
        </div>
        <div className="form-group">
          <div className="input-group">
            <span className="input-group-addon" style={{width: 53}}>Url</span>
            <input
              onMouseEnter={()=>this.setState({focus: true})}
              defaultValue={url}
              className="form-control"
              onChange={this.onChange}
              ref="url"
              type="text"/>

            <span className="input-group-addon"
                  data-toggle="tooltip"
                  data-placement="top"
                  title="Open link in a new window">Target
            </span>

            <span className="input-group-addon">
              <input checked={target} ref="target" onChange={this.onChange} type="checkbox"/>
            </span>
          </div>

        </div>
      </div>
    );
  }
});

export default Link;
