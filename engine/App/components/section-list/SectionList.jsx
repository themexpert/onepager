const _               = require('underscore');
const React           = require('react');
const cx              = require('classnames');
const SortableMixin   = require('sortablejs/react-sortable-mixin');
const Button          = require('react-bootstrap/lib/Button');
const SectionLi       = require('./Section.jsx');
const BlockCollection = require('../blocks/BlockCollection.jsx');
const AppStore        = require('../../AppStore.js');
const AppActions      = require('../../AppActions.js');
// const PureMixin           = require('../../../mixins/PureMixin.js');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const Footer    = require('./Footer.jsx');
const AddToMenu = require('../sidebar/AddToMenu.jsx');


function setBodyClass(sections){
  if (sections === 0) {
    jQuery('body').addClass('txop-noblock');
  } else {
    jQuery('body').removeClass('txop-noblock');
  }
}

let SectionList = React.createClass({
  //TODO: need pure mixin
  mixins: [SortableMixin],

  propTypes: {
    activeSectionIndex: React.PropTypes.number,
    blocks: React.PropTypes.array,
    sections: React.PropTypes.array
  },

  getInitialState(){
    return {
      screen: "home"
    };
  },

  componentDidMount(){
    setBodyClass(this.props.sections.length);
  },

  componentDidUpdate(){
    setBodyClass(this.props.sections.length)
  },

  sortableOptions: {
    ref: "sections",
    handle: ".section-handle"
  },

  handleEnd(e) {
    if (e.oldIndex === undefined || e.newIndex === undefined) {
      return;
    }

    let sections = _.copy(this.props.sections);
    sections     = _.move(sections, e.oldIndex, e.newIndex);

    sections[e.oldIndex].key = _.randomId('s_');
    sections[e.newIndex].key = _.randomId('s_');

    AppStore.reorder(sections, e.newIndex);
  },

  updateSection(index, section){
    AppActions.updateSection(index, section);
  },

  showBlocksScreen(){
    this.setState({screen: "blocks"});
  },

  showHomeScreen(){
    this.setState({screen: "home"});
  },

  showMenuScreen(){
    this.setState({screen: "menu"});
  },

  render() {
    let sections = this.props.sections;
    let activeSectionIndex = this.props.activeSectionIndex;
    let activeSection = sections[activeSectionIndex];
    let blocks   = this.props.blocks;

    let blocksClass = cx("list-blocks", {
      "hidden" : this.state.screen !== "blocks"
    });

    let sectionsClass = cx("list-sections", {
      "hidden" : this.state.screen !== "home"
    });

    let menuClasses = cx("add-to-menu-screen", {
      "hidden" : this.state.screen !== "menu"
    });

    return (
      <div>
        <div className={sectionsClass}>
          <Button bsStyle='primary' className="btn-block" onClick={this.showBlocksScreen}>
            <span className="fa fa-plus"></span> Add Block
          </Button>

          <div ref="sections">
            {sections.map((section, index)=> {
              return (
                <SectionLi
                  openMenuScreen={this.showMenuScreen}
                  active={activeSectionIndex === index}
                  id={section.id}
                  title={section.title}
                  key={section.key}
                  index={index}/>
              );
            })}
          </div>
          <Footer />
        </div>

        <div className={blocksClass}>
          <BlockCollection closeBlocks={this.showHomeScreen} blocks={blocks}/>
        </div>

        <div className={menuClasses}>
        {
          activeSectionIndex !== null ?
            <AddToMenu closeMenuScreen={this.showHomeScreen} section={activeSection} index={activeSectionIndex}/> : <div>:/</div>
        }
        </div>

      </div>
    ); //end jsx
  } //end render
});

module.exports = SectionList;
