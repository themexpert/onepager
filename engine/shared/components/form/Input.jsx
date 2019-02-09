const _ = require('underscore');
const React = require('react');
const Input = require('react-bootstrap/lib/Input');
const ColorPicker = require('./color/ColorPicker.jsx');
const ColorPalette = require('./color/ColorPalette.jsx');
const IconSelector = require('./media/IconSelector.jsx');
const Media = require('./media/Media.jsx');
const Switch = require('./Switch.jsx');
const WpMediaFrame = require('./media/WpMediaFrame.jsx');
const WpSelect = require('./WpSelect.jsx');
const Select = require('./Select.jsx');
const Link = require('./Link.jsx');
const Font = require('./font/index.jsx');
const Date = require('./date/index.jsx');
const Time = require('./time/index.jsx');
const TinyMCE = require('./editor/TinyMCE.jsx');
const PureMixin = require('../../mixins/PureMixin.js');
const Activity = require('../../lib/Activity.js');

import './input.less';

let inactive = Activity(100); //jshint ignore:line

let InputControl = React.createClass({
  mixins: [PureMixin],

  propTypes: {
    options: React.PropTypes.object,
    onChange: React.PropTypes.func
  },

  getValue(){
    if (this.refs.input) {
      return this.refs.input.getValue();
    } else {
      console.log("unknown input type");
    }
  },

  onChange(){
    inactive().then(
      ()=> this.props.onChange(),
      (msg)=> console.log(msg)
    );
  },

  render() {
    let controlHtml, control = this.props.options;
    

    switch (control.type) {
      case "icon":
        controlHtml =
          <IconSelector ref="input"
                        className={control.class}
                        defaultValue={control.value}
                        label={control.label}
                        size={control.size || ""}
                        onChange={this.onChange}/>;
        break;

      case "font":
        controlHtml =
          <Font ref="input"
                        label={control.label}
                        className={control.class}
                        defaultValue={control.value}
                        label={control.label}
                        onChange={this.onChange}/>;
        break;

      case "date":
        controlHtml =
          <Date ref="input"
                        label={control.label}
                        className={control.class}
                        defaultValue={control.value}
                        label={control.label}
                        onChange={this.onChange}/>;
        break;

      case "time":
        controlHtml =
          <Time ref="input"
                        label={control.label}
                        className={control.class}
                        defaultValue={control.value}
                        label={control.label}
                        onChange={this.onChange}/>;
        break;

      case "image":
        controlHtml =
          <WpMediaFrame ref="input"
                        className={control.class}
                        defaultValue={control.value}
                        label={control.label}
                        onChange={this.onChange}/>;
        break;

      case "media":
        controlHtml =
          <Media ref="input"
                 className={control.class}
                 defaultValue={control.value}
                 label={control.label}
                 size={control.size || ""}
                 onChange={this.onChange}/>;
        break;

      case "color":
        controlHtml =
          <ColorPicker ref="input"
                       className={control.class}
                       defaultValue={control.value}
                       label={control.label}
                       onChange={this.onChange}/>;
        break;
      case "colorpalette":
        controlHtml =
          <ColorPalette
            basePreset={onepager.basePreset}
            presets={onepager.presets[control.presets]}
            ref="input"
            colors={control.value}
            label={control.label}
            onChange={this.onChange}/>;
        break;

      case "link":
        controlHtml =
          <Link ref="input"
                onChange={this.onChange}
                label={control.label}
                text={control.value.text || ""}
                url={control.value.url || ""}
                target={control.value.target || false} />;
        break;

      case "menu":
      case "page":
      case "category":
        controlHtml =
          <WpSelect ref="input" type={control.type}
                    className={control.class}
                    label={control.label}
                    defaultValue={control.value}
                    onChange={this.onChange}/>;
        break;

      case "select":
        controlHtml =
          <Select ref="input"
                  className={control.class}
                  type={control.type}
                  options={control.options}
                  defaultValue={control.value}
                  label={control.label}
                  onChange={this.onChange}/>;
        break;

      case "switch":
        controlHtml =
          <Switch ref="input"
                  className={control.class}
                  name={control.name}
                  label={control.label}
                  defaultChecked={control.value}
                  onChange={this.onChange}/>;
        break;

      case "editor":
        controlHtml =
          <TinyMCE ref="input"
                       label={control.label}
                       className={control.class}
                       placeholder={control.placeholder}
                       defaultValue={control.value}
                       onChange={this.onChange}/>;
        break;

      case "text":
      case "textarea":
        let addon = _.pick(control, ['addonBefore', 'addonAfter']);
        if (control.type === "textarea") {
          addon.rows = 5;
        }
        controlHtml =
          <Input ref="input"
            {...addon}
            type={control.type}
            label={control.label}
            className="uk-input"
            placeholder={control.placeholder}
            defaultValue={control.value}
            onChange={this.onChange}/>;
    }

    let classes = this.props.hidden ? "hidden" : control.type+'-control';
    return (
      <div className={classes}>{controlHtml}</div>
    );
  }
});

module.exports = InputControl;
