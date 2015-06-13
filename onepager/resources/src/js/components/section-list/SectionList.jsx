const _             = require('underscore');
const React         = require('react');
const cx            = require('classnames');
const SortableMixin = require('sortablejs/react-sortable-mixin');
const Section       = require('./Section.jsx');
const AppStore      = require('../../stores/AppStore.js');
const Button              = require('react-bootstrap/lib/Button');
const BlockCollection     = require('../blocks/BlockCollection.jsx');

let SectionCollection = React.createClass({
  mixins: [SortableMixin],

  getInitialState(){
    return {
      showBlocks: false
    };
  },

  sortableOptions: {
    ref: "sections"
  },

  handleEnd(e) {
    if(e.oldIndex  === undefined || e.newIndex === undefined) {
      return;
    }

    let sections  = _.copy(this.props.sections);
    sections      = _.move(sections, e.oldIndex, e.newIndex);
    sections[e.oldIndex].key  = _.randomId('s_');
    sections[e.newIndex].key  = _.randomId('s_');

    AppStore.setSections(sections);
    AppStore.reorder();
  },

  showBlocks(){
    this.setState({showBlocks: true});
  },

  closeBlocks(){
    this.setState({showBlocks: false});
  },

  render() {
    let sections = this.props.sections;
    let blocks   = this.props.blocks;

    let blocksClass = cx({
      "blocks-mode": true,
      "hidden": !this.state.showBlocks
    });

    let sectionsClass = cx({
      "list-mode": true,
      "hidden": this.state.showBlocks
    });

    return (
      <div>
        <div className={sectionsClass}>
          <Button bsStyle='primary' onClick={this.showBlocks}>Add Block</Button>
          
          <div ref="sections">
            {sections.map((section, index)=> {
              return <Section section={section} key={section.key} index={index}/>;
            })}
          </div>
        </div>

        <div className={blocksClass}>
          <BlockCollection closeBlocks={this.closeBlocks} blocks={blocks} />
        </div>
      </div>
    ); //end jsx
  } //end render
});

module.exports = SectionCollection;
