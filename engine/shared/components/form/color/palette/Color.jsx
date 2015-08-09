const React     = require('react');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const getOppositeColor = require("./../oppositeColor");

const PaletteColor = React.createClass({
  mixins: [PureMixin],

  propTypes: {
    "onClick": React.PropTypes.func,
    "color": React.PropTypes.string,
    "width": React.PropTypes.number
  },

  render(){
    let {color, width, name, onClick} = this.props;

    let style = {
      backgroundColor: color,
      width: `${width}%`,
      display: 'inline-block'
    };

    return (
      <span style={style} onClick={onClick}>
        <span className="palette-label">{name}</span>
      </span>
    );
  }
});

module.exports = PaletteColor;

