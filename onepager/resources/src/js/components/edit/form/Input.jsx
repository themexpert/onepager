const _             = require('underscore');
const React         = require('react');
const Input         = require('react-bootstrap/lib/Input');
const ColorPicker   = require('./ColorPicker.jsx');
const IconSelector  = require('./IconSelector.jsx');
const ImageIcon     = require('./ImageIcon.jsx');
const WpMedia       = require('./WpMedia.jsx');
const Select        = require('./Select.jsx');
const WpSelect      = require('./WpSelect.jsx');

const ReactComponentWithPureRenderMixin = require('react/lib/ReactComponentWithPureRenderMixin');

let InputControl = React.createClass({
  mixins: [ReactComponentWithPureRenderMixin],

  getValue(){
    return this.refs.input.getValue();
  },

  //TODO: use activity here
  onChange(){
    let _lastChangeTime;
    let AUTO_SAVE_DELAY = 100; //100 good

    _lastChangeTime = new Date();

    let promise = new Promise((resolve, reject)=>{
      setTimeout(()=>{
        let elapsedTime = new Date() - _lastChangeTime;
        if( elapsedTime < AUTO_SAVE_DELAY){
          return reject();
        }

        resolve();
      }, AUTO_SAVE_DELAY);
    });

    promise.then(()=>{
      this.props.onChange();
    });

  },

  render() {
      //console.log('rendering input: ', this.props.options.name);

      let control, options = this.props.options; //because I need to mutate

      options.className = options.class; ///bad thing 

      switch(options.type){
        case "icon":
          control =
            <IconSelector ref="input"
              className={options.className}
              defaultValue={options.value}
              label={options.label}
              onChange={this.onChange}/>;
          break;

        case "image":
          control =
            <WpMedia ref="input"
              className={options.className}
              defaultValue={options.value}
              label={options.label}
              onChange={this.onChange}/>;
          break;

        case "imicon":
          control =
            <ImageIcon ref="input"
              className={options.className}
              defaultValue={options.value}
              label={options.label}
              onChange={this.onChange}/>;
          break;

        case "colorpicker":
          control =
            <ColorPicker ref="input"
              className={options.className}
              defaultValue={options.value}
              label={options.label}
              onChange={this.onChange}/>;
          break;

        case "menu":
        case "page":
        case "category":
          control =
            <WpSelect ref="input" type={options.type}
              className={options.className}
              label={options.label}
              defaultValue={options.value}
              onChange={this.onChange}/>;
          break;

        case "select":
          control =
            <Select ref="input"
              className={options.className}
              type={options.type}
              options={options.options}
              defaultValue={options.value}
              label={options.label}
              onChange={this.onChange}/>;
          break;

        case "text":
        case "textarea":
          let addons = _.pick(options, ['addonBefore', 'addonAfter']);
          control =
            <Input ref="input"
              {...addons}
              type={options.type}
              label={options.label}
              className={options.className}
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
