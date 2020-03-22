const $ = jQuery; //jshint ignore:line
const React      = require('react');
const cx         = require('classnames');
//const AppActions = require('../../AppActions.js');
const scrollIntoView  = require('../../../shared/plugins/scrollview.js');

let AppActions  = parent.AppActions;

function removeSectionStyle(id) {
  $(`#style-${id}`).remove();
}

function replaceSectionStyle(id, style) {
  $(`#style-${id}`).remove();
  $("head").append(style);
}
function addStyleToPage(page_style){
  $("head").append(page_style);
}

let Section = React.createClass({
  shouldComponentUpdate(nextProps){
    let equalProps = JSON.stringify(nextProps) === JSON.stringify(this.props);

    return !equalProps;
  },

  componentDidMount(){
    this.setSectionContent();
    this.setSectionStyle();
  },

  componentDidUpdate(){
    this.scrollIntoView();
    this.setSectionContent();
    this.setSectionStyle();
  },

  componentWillUnmount(){
    let {id} = this.props.section;
    removeSectionStyle(id);
  },

  setSectionContent(){
    let {content} = this.props.section;
    $(React.findDOMNode(this)).html(content);
  },

  setSectionStyle(){
    let {id, style, page_style} = this.props.section;
    replaceSectionStyle(id, style);
    addStyleToPage( page_style);
  },

  scrollIntoView(){
    if (!this.props.active) {
      return false;
    }

    //TODO: find a way to scroll natively with animation
    // React.findDOMNode(this).scrollIntoView();
    // jQuery animation is costly cpu calculation
    // also need to optimize it at a later time when speed is crucial
    // TODO: SPEED
    scrollIntoView(React.findDOMNode(this));
  },

  handleClick(){
    AppActions.editSection(this.props.index);
    // AppActions.collapseSidebar(false);
    // AppActions.activateSection(this.props.index);
  },

  render() {
    console.log("re rendering section view");

    let classes = cx('op-section-view', {
      'active': this.props.active
    });

    return <section className={classes} onClick={this.handleClick}/>;
  }
});

module.exports = Section;
