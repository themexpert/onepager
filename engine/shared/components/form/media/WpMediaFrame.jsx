const React     = require('react');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const $         = jQuery;

require("../../../../../assets/css/icon-selector.bootstrap.min.css");

let WpMediaFrame = React.createClass({
  mixins: [PureMixin],

  getValue(){
    return React.findDOMNode(this.refs.input).value;
  },

  wpMedia(btn, cb){
    // Prepare the variable that holds our custom media manager.
    let opMediaFrame;

    // Bind to our click event in order to open up the new media experience.
    $(btn).click(function (e) {
      // Prevent the default action from occurring.
      e.preventDefault();

      // If the frame already exists, re-open it.
      if (opMediaFrame) {
        opMediaFrame.open();
        return;
      }

      opMediaFrame = wp.media.frames.opMediaFrame = wp.media({});

      opMediaFrame.on('select', function () {
        // Grab our attachment selection and construct a JSON representation of the model.
        let mediaAttachment = opMediaFrame.state().get('selection').first().toJSON();

        // Send the attachment URL to our custom input field via $.
        cb(mediaAttachment.url);
      });

      // Now that everything has been set, let's open up the frame.
      opMediaFrame.open();
    });
  },

  componentDidMount() {
    let buttonEl = React.findDOMNode(this.refs.select);
    let inputEl  = React.findDOMNode(this.refs.input);

    this.wpMedia(buttonEl, imageSrc=> {
      $(inputEl).val(imageSrc);
      this.props.onChange();
    });

  },

  componentWillUnmount(){
    $(React.findDOMNode(this.refs.select)).unbind();
  },

  handleReset(){
    React.findDOMNode(this.refs.input).value = "";
    this.props.onChange();
  },


  render() {
    let classes = this.props.className + " uk-input uk-form-width-large image-input";

    return (
      <div className="uk-form-stacked uk-margin">
        {this.props.label ? <label className="uk-form-label">{this.props.label}</label> : null }

        <div className="uk-grid uk-grid-collapse uk-margin-small-top">
          <div className="uk-width-2-3@m">
            <input {...this.props} type="text" className={classes} ref="input"/>
          </div>
          <div className="uk-width-1-3@m">
            <button className="uk-button uk-button-primary" data-uk-icon="icon: image" ref="select"></button>
          </div>
        </div>
      </div>
    );
  }
});

module.exports = WpMediaFrame;
