const React         = require('react');
const SectionView   = require('./SectionView.jsx');

let SectionViewCollection = React.createClass({
  render() {
    let sections = this.props.sections;
    return (
      <div id="sections">
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
