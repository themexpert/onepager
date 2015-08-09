const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const Immutable = require("immutable");
const React = require('react');
const _ = require("underscore");
const Color = require("./palette/Color.jsx");
const PalettePicker = require("./palette/Picker.jsx");
const Activity = require('../../../lib/Activity.js');
const Button = require('react-bootstrap/lib/Button');
const PalettePresets = require('./palette/Presets.jsx');

let inactive = Activity(4000);
let completedUpdating = Activity(1000);

require('./palette/palette.less');

/**
 * colors = {
     *  primary: red,
     *  secondary: blue
     * }
 */
function transformColors(colors){
  return _.map(colors, (color, key)=>{
    return { name: key, code: color };
  });
}
const ColorPalette = React.createClass({
  mixins: [PureMixin],

  propTypes: {
    "label": React.PropTypes.string,
    "colors": React.PropTypes.array,
    "presets": React.PropTypes.array,
    "onChange": React.PropTypes.func
  },

  getInitialState(){
    let colors = transformColors(this.props.colors);

    return {
      colors: Immutable.fromJS(colors),
      active: null,
      showPresets: false,
      color: '#fff'
    }
  },

  getValue(){
    return _.reduce(this.state.colors.toJS(), (carry, color)=>{
      carry[color.name] = color.code;
      return carry;
    }, {});
  },

  handleUpdate(value){
    //automatically hide the picker after inactivity
    inactive().then(
      ()=> this.setState({active: null}),
      (msg)=> console.log(msg)
    );

    //after its completed updating we will fire the onChange event
    completedUpdating().then(
      this.props.onChange,
      (msg)=>console.log(msg)
    );

    let colors = this.state.colors;
    let color = colors.get(this.state.active);
    colors = colors.set(this.state.active, color.set('code', value));

    this.setState({colors});
  },

  handleActivate(ii){
    let state = {active: ii, color: this.state.colors.get(ii).get('code')};

    setTimeout(()=>{
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

  handleSelectPreset(colors){
    let state = {active: null, colors: Immutable.fromJS(colors)};
    this.setState(state);
    this.closePresetsDrawer();
  },

  openPresetsDrawer(){
    this.setState({showPresets: true});
  },
  closePresetsDrawer(){
    this.setState({showPresets: false});
  },

  render(){
    const colors = this.state.colors;
    const presets = this.props.presets;

    return (
      <div className="color-palette">

        <label className="control-label">{this.props.label}</label> <br/>

        <Button bsStyle='primary' className="btn-block" onClick={this.openPresetsDrawer}>
          <span className="fa fa-search"></span> Select Preset
        </Button>

        <div style={{display: this.state.showPresets ? "block": "none"}}>
          <PalettePresets activate={this.handleSelectPreset} palettes={presets} />
        </div>

        { colors.map((color, ii)=> {
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
        })}

        {this.state.active !== null ?
          <PalettePicker ref="colorpicker" color={this.state.color} update={this.handleUpdate}/> : null }
      </div>
    );
  }
});

module.exports = ColorPalette;
