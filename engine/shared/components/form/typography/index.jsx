import React from 'react';
import Select from './../Select.jsx';

const fontFamilies = require('./font-family');
// const Option = Sele ct.Option;
const DEFAULT_FONT_WEIGHTS = ["100", "200", "300", "400", "500", "600", "700", "800", "900"];

let Typography = React.createClass({
  propTypes: {
   //
  },

  getInitialState() {
    const families = fontFamilies().map(function(font) {
      return { label: font.family, val: font.family };
    });

    return {
      value: '',
      fontFamilies: families,
      family: null,
    }
  },

  getValue() {
    return this.refs.input.getValue();
  },

  render() {
    return (
      <div className="uk-form-stacked">
        <Select
          ref="input"
          type="typography"
          defaultValue={this.props.defaultValue}
          label={this.props.label || 'Typography'}
          options={this.state.fontFamilies}
          onChange={this.props.onChange} />
      </div>
    );
  }
});

export default Typography;
