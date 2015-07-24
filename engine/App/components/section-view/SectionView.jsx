const $ = jQuery; //jshint ignore:line
const React      = require('react');
const cx         = require('classnames');
const AppActions = require('../../AppActions.js');
const PureMixin  = require('../../../shared/mixins/PureMixin.js');
const scrollIntoView  = require('../../../shared/lib/scrollview.js');

let Section = React.createClass({
  mixins: [PureMixin],

  componentDidMount(){
    this.setSectionContent();
  },

  componentDidUpdate(){
    if (!this.props.active) {
      return false;
    }

    this.scrollIntoView();
    this.setSectionContent();
  },

  setSectionContent(){
    let content = this.props.section.content;

    $(React.findDOMNode(this)).html(content);
  },

  scrollIntoView(){
    //TODO: find a way to scroll natively with animation
    // React.findDOMNode(this).scrollIntoView();
    // jQuery animation is costly cpu calculation
    // also need to optimize it at a later time when speed is crucial
    // TODO: SPEED
    scrollIntoView(React.findDOMNode(this))
  },

  handleClick(){
    AppActions.editSection(this.props.index);
  },

  render() {
    console.log("re rendering section view");

    let classes = cx({
      'op-section-view': true,
      'active'         : this.props.active
    });

    return <section className={classes} onClick={this.handleClick}/>;
  }
});

module.exports = Section;
