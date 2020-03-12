const React       = require('react');
const _           = require('underscore');
const SectionView = require('./SectionView.jsx');
const PureMixin   = require('../../../shared/mixins/PureMixin.js');
const cx          = require('classnames');

function setBodyClass(sections) {
  let noBlockClassName = 'txop-noblock';
  let $body = jQuery('body');

  if (sections === 0) {
    $body.addClass(noBlockClassName);
  } else {
    $body.removeClass(noBlockClassName);
  }
}
function setBodyClassForPageSettings(sections, pageID){
  let $body = jQuery('body');
  let bodyClassWithID = `txop-page-${pageID}`;
  if (sections === 0) {
    $body.removeClass(bodyClassWithID);
  } else {
    $body.addClass(bodyClassWithID);
  }
}

let SectionViewCollection = React.createClass({
  mixins: [PureMixin],

  componentDidMount(){
    setBodyClass(this.props.sections.length);
    setBodyClassForPageSettings(this.props.sections.length, this.props.pageID);
  },

  componentDidUpdate(){
    setBodyClass(this.props.sections.length);
    setBodyClassForPageSettings(this.props.sections.length, this.props.pageID);
  },

  render() {
    let sections = this.props.sections;
    // debugger;
    return (
      <div>
        {
          sections.map((section, index)=> {
            let active = this.props.activeSectionIndex === index;
            return <SectionView active={active} section={section} key={section.key} index={index}/>;
          })
        }
      </div>
    ); //end jsx
  } //end render
});

module.exports = SectionViewCollection;
