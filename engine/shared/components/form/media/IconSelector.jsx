const $         = jQuery;
const React     = require('react');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const dom       = React.findDOMNode;

require("../../../../../assets/css/icon-selector.bootstrap.min.css");

let IconSelector = React.createClass({
  mixins: [PureMixin],

  getValue(){
    return dom(this.refs.input).value;
  },

  componentDidMount() {
    let buttonEl = dom(this.refs.select);
    let inputEl  = dom(this.refs.input);

    $(buttonEl).iconSelector({input: inputEl, size: this.props.size});
    $(inputEl).on("icon:inserted", this.props.onChange);
  },

  componentWillUnmount(){
    $(dom(this.refs.select)).unbind();
    $(dom(this.refs.input)).unbind();
  },

  render() {
    let classes = "form-control icon-input " + this.props.className;

    return (
      <div className="form-group">
        <label>{this.props.label}</label>

        <div className="input-group">
          <input {...this.props} type="text" className={classes} ref="input"/>

          <span className="input-group-btn">
            <button className="btn btn-default" ref="select" type="button">
              <span className="fa fa-diamond"></span> Icon
            </button>
          </span>

        </div>

        <div className="media-preview"></div>
      </div>
    );
  }
});

module.exports = IconSelector;
