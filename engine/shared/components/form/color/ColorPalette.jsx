const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const Immutable = require("immutable");
const React = require('react');
const _ = require("underscore");
const PaletteColor = require("./PaletteColor.jsx");
const PalettePicker = require("./PalettePicker.jsx");
const Activity = require('../../../lib/Activity.js');

let inactive = Activity(4000); //jshint ignore:line
let completedUpdating = Activity(1000);

require('./palette.less');

const ColorPalette = React.createClass({
  mixins: [PureMixin],

  propTypes: {
    "label": React.PropTypes.string,
    "colors": React.PropTypes.array,
    "onChange": React.PropTypes.func
  },

  getInitialState(){
    /**
     * colors = {
     *  primary: red,
     *  secondary: blue
     * }
     */
    let colors = this.props.colors;
    colors = _.map(colors, (color, key)=>{
      return { name: key, code: color };
    });

    return {
      colors: Immutable.fromJS(colors),
      active: null,
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
    inactive().then(
      ()=> {
        this.setState({active: null});
      },
      (msg)=> console.log(msg)
    );

    completedUpdating().then(this.props.onChange, (msg)=>console.log(msg));

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

  render(){
    const colors = this.state.colors;

    return (
      <div className="color-palette">
        <label className="control-label">{this.props.label}</label><br/>
        { colors.map((color, ii)=> {
          let activate = this.handleActivate.bind(this, ii);
          let width = this.getWidth(ii);

          return (
            <PaletteColor
              activate={activate}
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
