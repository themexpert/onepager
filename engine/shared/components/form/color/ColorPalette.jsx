const _ = require("underscore");
const {Button} = require('react-bootstrap');
const {fromJS} = require("immutable");
const assign = require('object-assign');
const React = require('react');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');

const Activity = require('../../../lib/Activity.js');
const Color = require("./palette/Color.jsx");
const PalettePresets = require('./palette/Presets.jsx');
const PalettePicker = require("./palette/Picker.jsx");

require('./palette/palette.less');

let inactive = Activity(4000);
let completedUpdating = Activity(100);


/**
 * colors = {
 *  primary: red,
 *  secondary: blue
 * }
 */
function transformColorsObjArray(colors) {
  return _.map(colors, (color, key)=> {
    return {name: key, code: color};
  });
}

function transformColorArrayObj(colors) {
  return _.reduce(colors, (carry, color)=> {
    carry[color.name] = color.code;
    return carry;
  }, {});
}

const ColorPalette = React.createClass({
  mixins: [PureMixin],

  propTypes: {
    "label": React.PropTypes.string,
    "colors": React.PropTypes.array,
    "onChange": React.PropTypes.func
  },

  getInitialState(){
    let colors = transformColorsObjArray(this.props.colors);

    return {
      colors: fromJS(colors),
      active: null,
      color: '#fff'
    }
  },

  getValue(){
    return transformColorArrayObj(this.state.colors.toJS());
  },

  hideColorPickerIfInactive: function () {
    let active = null;
    //automatically hide the picker after inactivity
    inactive().then(
      this.setState.bind(this, {active}),
      (msg) => console.log(msg)
    );
  },

  changeIfCompletedUpdating: function () {
    //after its completed updating we will fire the onChange event
    completedUpdating().then(
      this.props.onChange,
      (msg)=>console.log(msg)
    );
  },

  handleUpdate(value){
    let {colors, active} = this.state;
    let color = colors.get(active);
    colors = colors.set(active, color.set('code', value));

    this.setState({colors});

    this.hideColorPickerIfInactive();
    this.changeIfCompletedUpdating();
  },

  handleActivate(ii){
    let state = {active: ii, color: this.state.colors.get(ii).get('code')};

    setTimeout(()=> {
      this.refs.colorpicker && this.refs.colorpicker.open();
    }, 50);

    this.setState(state);
  },

  getWidth(ii){
    let {active, colors} = this.state;
    let total = colors.count();
    let width = active !== null ? 100 / (total + 1) : 100 / total;
    return active === ii ? width * 2 : width;
  },

  _renderPaletteColorPicker() {
    let {color, active} = this.state;

    return active !== null ?
      <PalettePicker ref="colorpicker" color={color} update={this.handleUpdate}/> : null;
  },

  _renderPalette() {
    let {colors} = this.state;

    return colors.map((color, ii)=> {
      let activate = this.handleActivate.bind(this, ii);
      let width = this.getWidth(ii);

      return (
        <Color
          onClick={activate}
          width={width}
          name={color.get('name')}
          key={color.get('name')}
          color={color.get('code')}/>
      );
    });
  },

  render(){
    let {label} = this.props;

    return (
      <div className="color-palette">
        <label className="control-label">{label}</label>

        <div>
          { this._renderPalette() }

          { this._renderPaletteColorPicker() }
        </div>
      </div>
    );
  }
});

module.exports = ColorPalette;
