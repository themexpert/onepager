const $ = jQuery;
const React = require('react');
const ContainedSelectorMixin = require("../../../mixins/ContainedSelectorMixin");
const ReactComponentWithPureRenderMixin = require('react/lib/ReactComponentWithPureRenderMixin');

let IconSelector = React.createClass({
  mixins: [ContainedSelectorMixin, ReactComponentWithPureRenderMixin],

  getValue(){
    return React.findDOMNode(this.refs.input).value;
  },

  componentDidMount() {
    let buttonEl = this.getSelector(".icon-selector-button");
    let inputEl = this.getSelector(".icon-input");

    $(buttonEl).iconSelector({input: inputEl});
    $(inputEl).on("icon:inserted", this.props.onChange);
  },

  componentWillUnmount(){
    let buttonEl = this.getSelector(".icon-selector-button");
    let inputEl = this.getSelector(".icon-input");

    $(buttonEl).unbind();
    $(inputEl).unbind();
  },


  render() {
      return (
        <div ref="container" className="icon-selector">
          <div className="form-group">
            <label>{this.props.label}</label>
            <div className="input-group">
              <input {...this.props} type="text" className={"form-control icon-input "+this.props.className} ref="input"/>
              <span className="input-group-btn">
                <button className="btn btn-primary icon-selector-button" ref="icon-btn" type="button"><span className="fa fa-diamond"></span> Icon</button>
              </span>
            </div>
            <div className="media-preview"></div>
          </div>
        </div>
      );
  }
});

module.exports = IconSelector;
