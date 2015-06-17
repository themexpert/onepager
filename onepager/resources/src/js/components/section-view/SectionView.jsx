const $           = jQuery; //jshint ignore:line
const React       = require('react');
const cx          = require('classnames');
const AppActions  = require('../../actions/AppActions');
const PureMixin   = require('../../mixins/PureMixin.js');

let Section = React.createClass({
  mixins: [PureMixin],

  componentDidMount(){
    this.setSectionContent();
  },

  componentDidUpdate(){
    this.setSectionContent();
  },

  setSectionContent(){
    let content = this.props.section.content;

    $(React.findDOMNode(this)).html(content);
    
    // if(!this.props.active){
    //   return false;
    // }
    

    //TODO: find a way to scroll natively with animation
    // React.findDOMNode(this).scrollIntoView();
    // jQuery animation is costly cpu calculation
    // also need to optimize it at a later time when speed is crucial
    // TODO: SPEED
    jQuery('html, body').animate({
        scrollTop: jQuery(React.findDOMNode(this)).offset().top - 32 //32px wpadminbar height
    }, 1000);
    
  },

  handleClick(){
    AppActions.editSection(this.props.index);
  },

  render() {
    console.log("re rendering section view");

    let classes = cx({
      'op-section-view': true
      // 'active': this.props.active
    });

    return <section className={classes} onClick={this.handleClick} />;
  }
});

module.exports = Section;
