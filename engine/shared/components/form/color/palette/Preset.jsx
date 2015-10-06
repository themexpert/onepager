import React from 'react';
import Color from './Color.jsx';

let Preset = React.createClass({
  propTypes: {
    colors: React.PropTypes.object,
    activate: React.PropTypes.func
  },

  getDefaultProps() {
    return {
      colors:{}
    };
  },

  render() {
    let {activate} = this.props;
    let colors = _.map(this.props.colors, (color, name)=>{
     return {
       name,
       code: color
     }
    });

    return (
      <div onClick={activate.bind(this, this.props.colors)}>
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
