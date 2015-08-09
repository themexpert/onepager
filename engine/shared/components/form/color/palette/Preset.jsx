import React from 'react';
import Color from './Color.jsx';

let Preset = React.createClass({
  propTypes: {
    colors: React.PropTypes.obj,
    activate: React.PropTypes.func
  },

  getDefaultProps() {
    return {
      colors:{}
    };
  },

  render() {
    let {colors, activate} = this.props;
    colors = _.map(colors, (color, name)=>{
     return {
       name,
       code: color
     }
    });

    return (
      <div onClick={activate.bind(this, colors)}>
        {
          _.map(colors, (color)=>{
            return <Color key={color.name} activate={_.noop} name={color.name} color={color.code} width={100/colors.length}/>;
          })
        }
      </div>
    );
  }
});

export default Preset;
