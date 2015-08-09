import React from 'react';
import Preset from './Preset.jsx';

const Presets = React.createClass({
  propTypes: {
    palettes: React.PropTypes.array,
    activate: React.PropTypes.func
  },

  getDefaultProps(){
    return {
      palettes: []
    };
  },

  render(){
    let {palettes, activate} = this.props;

    let els = palettes.map((palette)=>{
      return (
        <Preset activate={activate} colors={palette} />
      );
    });

    return (
      <div>
        {els}
      </div>
    );
  }
});






export default Presets;

