const React = require('react');
const cx = require('classnames');
const SortableMixin = require('sortablejs/react-sortable-mixin');
const Button = require('react-bootstrap/lib/Button');
const SectionLi = require('./Section.jsx');
const AppStore = require('../../AppStore.js');
const AppActions = require('../../flux/AppActions.js');
//const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');

import toolbelt from '../../../shared/lib/toolbelt.js';



function getKey() {
  return toolbelt.randomId('k_');
}

import "./style.less";

let SectionList = React.createClass({
  //TODO: need pure mixin
  mixins: [SortableMixin],

  propTypes: {
    openBlocks: React.PropTypes.func,
    openPopup: React.PropTypes.func,
    activeSectionIndex: React.PropTypes.number,
    blocks: React.PropTypes.array,
    sections: React.PropTypes.array
  },

  sortableOptions: {
    ref: "sections",
    handle: ".section-handle"
  },

  handleEnd(e) {
    if (e.oldIndex === undefined || e.newIndex === undefined) {
      return;
    }

    let sections = toolbelt.copy(this.props.sections);
    sections = toolbelt.move(sections, e.oldIndex, e.newIndex);

    sections[e.oldIndex].key = getKey();
    sections[e.newIndex].key = getKey();

    AppStore.reorder(sections, e.newIndex);
  },

  updateSection(index, section){
    AppActions.updateSection(index, section);
  },

  _renderSectionList(section, index){
    let active = this.props.activeSectionIndex === index;

    return (
      <SectionLi
        active={active}
        slug={section.slug}
        title={section.title}
        key={section.key}
        id={section.id}
        index={index}/>
    );
  },

  render() {
    let {sections, openBlocks, openPopup} = this.props;

    return (
      <div className="list-sections">
        {/* <Button bsStyle='primary' className="btn-block" onClick={openBlocks}>
          <span className="fa fa-plus"></span> Add Block
        </Button> */}
        <Button bsStyle='primary' className="btn-block" onClick={openPopup}>
          <span className="fa fa-plus"></span> Add Block
        </Button>

        <div ref="sections">
          {sections.map(this._renderSectionList)}
        </div>
      </div>
    ); //end jsx
  } //end render
});

module.exports = SectionList;
