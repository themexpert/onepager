const React = require('react');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const $ = jQuery;
const dom = React.findDOMNode;

let Media = React.createClass({
  mixins: [PureMixin],
  getInitialState() {
    return {
      focus: false
    };
  },

  getValue(){
    return dom(this.refs.input).value;
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
    let iconButtonEl = dom(this.refs.iconBtn);
    let imgButtonEl = dom(this.refs.imgBtn);
    let inputEl = dom(this.refs.input);
    $(iconButtonEl).iconSelector({input: inputEl, size: this.props.size});

    this.wpMedia(imgButtonEl, (imageSrc)=> {
      $(inputEl).val(imageSrc);
      this.props.onChange();
    });

    $(inputEl).on("icon:inserted", this.props.onChange);
  },

  componentWillUnmount(){
    $(dom(this.refs.iconBtn)).unbind();
    $(dom(this.refs.imgBtn)).unbind();
    $(dom(this.refs.input)).unbind();
  },


  render() {
    let classes = "form-control " + this.props.className;
    let {focus} = this.state;

    return (
      <div ref="container" className="icon-selector">
        <div className="form-group">
          <label>{this.props.label}</label>
          {
            focus ?
              <input onMouseLeave={setFocus} {...this.props} type="text" className={classes} ref="input"/>
              :

              <div className="input-group">
                <input {...this.props} type="text" className={classes} ref="input"/>
              <span className="input-group-btn">
                <button className="btn btn-default" ref="imgBtn" type="button"><span className="fa fa-picture-o"></span>
                </button>
                <button className="btn btn-default" ref="iconBtn" type="button"><span className="fa fa-flag-o"></span>
                </button>
              </span>
              </div>
          }
          <div className="media-preview"></div>
        </div>
      </div>
    );

  }
});

module.exports = Media;
