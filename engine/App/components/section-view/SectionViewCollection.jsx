const React       = require('react');
const _           = require('underscore');
const SectionView = require('./SectionView.jsx');
const PureMixin   = require('../../../shared/mixins/PureMixin.js');

let SectionViewCollection = React.createClass({
  mixins: [PureMixin],

  render() {
    let sections = this.props.sections;

    return (
      <div id="sections">
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
