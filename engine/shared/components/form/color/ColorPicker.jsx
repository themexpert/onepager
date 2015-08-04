const React     = require('react');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const getOppositeColor = require("./oppositeColor");
const $         = jQuery; //jshint ignore:line


let ColorPicker = React.createClass({
  mixins: [PureMixin],

  getInitialState(){
    let bgColor = this.props.defaultValue;

    return {
      textColor: getOppositeColor(bgColor),
      bgColor  : bgColor
    };
  },

  getValue(){
    return React.findDOMNode(this.refs.input).value;
  },

  onChange(){
    let bgColor   = this.getValue();
    let textColor = getOppositeColor(bgColor);

    this.setState({textColor, bgColor});
    this.props.onChange();
  },

  componentDidMount() {
    $(React.findDOMNode(this.refs.input))
      .colorpicker({
        sliders: {
          saturation: {maxLeft: 140, maxTop: 140},
          hue       : {maxTop: 140},
          alpha     : {maxTop: 140}
        }
      })
      .on("changeColor.colorpicker, .color-icon", this.onChange);
  },

  componentWillUnmount(){
    $(React.findDOMNode(this.refs.input)).unbind();
  },

  render() {
    let style = {background: this.state.bgColor, color: this.state.textColor};
    return (
      <div className="form-group" ref="container">
        <label className="control-label">{this.props.label}</label>

        <div className="cp-container">
          <input
            {...this.props}
            style={style}
            ref="input"
            type="text"
            className={"form-control op-colorpicker "+this.props.className}/>
          <span style={style} className="fa fa-tint color-icon"></span>
        </div>
      </div>
    );
  }
});

module.exports = ColorPicker;
