const React = require('react');
const ContainedSelectorMixin = require("../../../mixins/ContainedSelectorMixin");
const ReactComponentWithPureRenderMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const $ = jQuery;

let ImageIconSelector = React.createClass({
  mixins: [ContainedSelectorMixin, ReactComponentWithPureRenderMixin],

  getInitialState() {
    return {};
  },

  getValue(){
    return React.findDOMNode(this.refs.input).value;
  },

  wpMedia(btn, cb){
    // Prepare the variable that holds our custom media manager.
    let tgmMediaFrame;

    // Bind to our click event in order to open up the new media experience.
    $(btn).click(function(e){
      // Prevent the default action from occurring.
      e.preventDefault();

      // If the frame already exists, re-open it.
      if ( tgmMediaFrame ) {
          tgmMediaFrame.open();
          return;
      }

      tgmMediaFrame = wp.media.frames.tgm_media_frame = wp.media({});

      tgmMediaFrame.on('select', function(){
          // Grab our attachment selection and construct a JSON representation of the model.
          let mediaAttachment = tgmMediaFrame.state().get('selection').first().toJSON();

          // Send the attachment URL to our custom input field via $.
          cb(mediaAttachment.url);
      });

      // Now that everything has been set, let's open up the frame.
      tgmMediaFrame.open();
    });
  },

  componentDidMount() {
    let iconButtonEl = this.getSelector(".icon-selector-button");
    let imgButtonEl = this.getSelector(".image-selector-button");

    let inputEl = this.getSelector(".media-input");

    $(iconButtonEl).iconSelector({input: inputEl});

    this.wpMedia(imgButtonEl, (imageSrc)=>{
      $(inputEl).val(imageSrc);
      this.props.onChange();
    });

    $(inputEl).on("icon:inserted", this.props.onChange);
  },

  componentWillUnmount(){
    let iconButtonEl = this.getSelector(".icon-selector-button");
    let imgButtonEl = this.getSelector(".image-selector-button");
    let inputEl = this.getSelector(".media-input");

    $(iconButtonEl).unbind();
    $(imgButtonEl).unbind();
    $(inputEl).unbind();
  },


  render() {
      //console.log('rendering icon selector: ', this.props.ref);

      return (
        <div ref="container" className="icon-selector">
          <div className="form-group">
            <label>{this.props.label}</label>
            <div className="input-group">
              <input {...this.props} type="text" className={"form-control media-input "+this.props.className} ref="input"/>
              <span className="input-group-btn">
                <button className="btn btn-primary image-selector-button" type="button" ref="img-btn"><span className="fa fa-picture-o"></span></button>
                <button className="btn btn-primary icon-selector-button" ref="icon-btn" type="button"><span className="fa fa-flag-o"></span></button>
              </span>
            </div>
            <div className="media-preview"></div>
          </div>
        </div>
      );
  }
});

module.exports = ImageIconSelector;
