const React       = require('react');
const _           = require('underscore');
const SectionView = require('./SectionView.jsx');
const PureMixin   = require('../../../shared/mixins/PureMixin.js');
const cx          = require('classnames');

let SectionViewCollection = React.createClass({
  mixins: [PureMixin],

  render() {
    let sections = this.props.sections;
    let classes = cx({
      'op-collapse-sidebar': this.props.collapseSidebar
    });

    return (
      <div className={classes} id="sections">
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
