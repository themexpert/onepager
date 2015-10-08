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

let SectionViewCollection = React.createClass({
  mixins: [PureMixin],

  componentDidMount(){
    setBodyClass(this.props.sections.length);
  },

  componentDidUpdate(){
    setBodyClass(this.props.sections.length);
  },

  render() {
    let sections = this.props.sections;

    return (
      <div>
        {
          sections.map((section, index)=> {
            let active        = this.props.activeSectionIndex === index;
            let simpleSection = _.pick(section, ['content', 'key']);

            return <SectionView active={active} section={simpleSection} key={section.key} index={index}/>;
          })
        }
      </div>
    ); //end jsx
  } //end render
});

module.exports = SectionViewCollection;
