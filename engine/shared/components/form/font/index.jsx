import React from 'react';
import Select from './../Select.jsx';

const fontFamilies = require('./font-family');
// const Option = Sele ct.Option;
const DEFAULT_FONT_WEIGHTS = ["100", "200", "300", "400", "500", "600", "700", "800", "900"];

let Font = React.createClass({
  propTypes: {
   //
  },

  getInitialState() {
    const families = fontFamilies().map(function(font) {
      return { label: font.family };
    });

    return {
      value: '',
      fontFamilies: families,
      family: null,
    }
  },

  getValue() {
    // dynamically google fonts loading.
    let value = this.refs.input.getValue();

    let font = this.state.fontFamilies[value].label;

    let fontNotLoaded = !jQuery('link[href="http://fonts.googleapis.com/css?family=' + font.replace(" ", "+") + '"]').length;
    
    if (fontNotLoaded) {
      try {
        document.querySelector('iframe').contentWindow.WebFont.load({
          google: {
            families: [`${font}`]
          }
        });
      } catch (e) {
        console.log('WebFont not loaded!', e);
      }
    }

    return value;
  },

  render() {
    return (
      <div className="uk-form-stacked">
        <Select
          ref="input"
          type="font"
          defaultValue={this.props.defaultValue}
          label={this.props.label || 'Font'}
          options={this.state.fontFamilies}
          onChange={this.props.onChange} />
      </div>
    );
  }
});

export default Font;
