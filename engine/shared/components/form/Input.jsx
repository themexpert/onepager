const _ = require('underscore');
const React = require('react');
const Input = require('react-bootstrap/lib/Input');
const ColorPicker = require('./color/ColorPicker.jsx');
const ColorPalette = require('./color/ColorPalette.jsx');
const IconSelector = require('./IconSelector.jsx');
const Media = require('./Media.jsx');
const Switch = require('./Switch.jsx');
const WpMediaFrame = require('./WpMediaFrame.jsx');
const WpSelect = require('./WpSelect.jsx');
const Select = require('./Select.jsx');
const QuillEditor = require('./QuillEditor.jsx');
const PureMixin = require('../../mixins/PureMixin.js');
const Activity = require('../../lib/Activity.js');


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
                 onChange={this.onChange}/>;
        break;

      case "colorpicker":
        controlHtml =
          <ColorPicker ref="input"
                       className={control.class}
                       defaultValue={control.value}
                       label={control.label}
                       onChange={this.onChange}/>;
        break;
      case "colorpalette":
        controlHtml =
          <ColorPalette ref="input" colors={control.value} label={control.label} onChange={this.onChange}/>;
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
          <QuillEditor ref="input"
                       label={control.label}
                       className={control.class}
                       placeholder={control.placeholder}
                       defaultValue={control.value}
                       onChange={this.onChange}/>;
        break;

      case "text":
      case "textarea":
        let addons = _.pick(control, ['addonBefore', 'addonAfter']);
        if (control.type === "textarea") {
          addons.rows = 5;
        }
        controlHtml =
          <Input ref="input"
            {...addons}
                 type={control.type}
                 label={control.label}
                 className={control.class}
                 placeholder={control.placeholder}
                 defaultValue={control.value}
                 onChange={this.onChange}/>;
    }

    let classes = !this.props.visible ? "hidden" : "";
    return (
      <div className={classes}>{controlHtml}</div>
    );
  }
});

module.exports = InputControl;
