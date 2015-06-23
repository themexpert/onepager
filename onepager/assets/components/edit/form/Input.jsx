const _             = require('underscore');
const React         = require('react');
const Input         = require('react-bootstrap/lib/Input');
const ColorPicker   = require('./ColorPicker.jsx');
const IconSelector  = require('./IconSelector.jsx');
const Media         = require('./Media.jsx');
const WpMediaFrame  = require('./WpMediaFrame.jsx');
const WpSelect      = require('./WpSelect.jsx');
const Select        = require('./Select.jsx');
const QuillEditor   = require('./QuillEditor.jsx');
const PureMixin     = require('../../../mixins/PureMixin.js');
const Activity      = require('../../../lib/Activity');

let inactive        = Activity(100); //jshint ignore:line

let InputControl = React.createClass({
  mixins: [PureMixin],
  
  propTypes: {
    options: React.PropTypes.object,
    onChange: React.PropTypes.func
  },


  getValue(){
    return this.refs.input.getValue();
  },

  onChange(){
    inactive().then( ()=> this.props.onChange() );
  },

  render() {
      let control, options = this.props.options; 

      switch(options.type){
        case "icon":
            <IconSelector ref="input"
              className={options.class}
              defaultValue={options.value}
              label={options.label}
              onChange={this.onChange}/>;
          break;

        case "image":
          control =
            <WpMediaFrame ref="input"
              className={options.class}
              defaultValue={options.value}
              label={options.label}
              onChange={this.onChange}/>;
          break;

        case "media":
          control =
            <Media ref="input"
              className={options.class}
              defaultValue={options.value}
              label={options.label}
              onChange={this.onChange}/>;
          break;

        case "colorpicker":
          control =
            <ColorPicker ref="input"
              className={options.class}
              defaultValue={options.value}
              label={options.label}
              onChange={this.onChange}/>;
          break;

        case "menu":
        case "page":
        case "category":
          control =
            <WpSelect ref="input" type={options.type}
              className={options.class}
              label={options.label}
              defaultValue={options.value}
              onChange={this.onChange}/>;
          break;

        case "select":
          control =
            <Select ref="input"
              className={options.class}
              type={options.type}
              options={options.options}
              defaultValue={options.value}
              label={options.label}
              onChange={this.onChange}/>;
          break;

        case "editor":
          control =
            <QuillEditor ref="input"
              label={options.label}
              className={options.class}
              placeholder={options.placeholder}
              defaultValue={options.value}
              onChange={this.onChange}/>;
          break;
          
        case "text":
        case "textarea":
          let addons = _.pick(options, ['addonBefore', 'addonAfter']);
          if(options.type === "textarea"){
            addons.rows = 5;
          }
          control =
            <Input ref="input"
              {...addons}
              type={options.type}
              label={options.label}
              className={options.class}
              placeholder={options.placeholder}
              defaultValue={options.value}
              onChange={this.onChange}/>;
      }

      return (
        <div>{control}</div>
      );
  }
});

module.exports = InputControl;
