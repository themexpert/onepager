const _                   = require('underscore');
const React               = require('react');
const cx                  = require('classnames');
const SortableMixin       = require('sortablejs/react-sortable-mixin');
const Button              = require('react-bootstrap/lib/Button');
const SectionLi           = require('./Section.jsx');
const BlockCollection     = require('../blocks/BlockCollection.jsx');
const AppStore            = require('../../stores/AppStore.js');
const AppActions          = require('../../actions/AppActions.js');
// const PureMixin           = require('../../mixins/PureMixin.js');
const PureMixin   = require('react/lib/ReactComponentWithPureRenderMixin');

let SectionList = React.createClass({
  mixins: [SortableMixin, PureMixin],

  getInitialState(){
    return {
      showBlocks: false
    };
  },

  setBodyClass(){
    if(this.props.sections.length === 0){
      jQuery('body').addClass('txop-noblock');
    } else {
      jQuery('body').removeClass('txop-noblock');
    }
  },

  componentDidMount(){
    this.setBodyClass();
  },

  componentDidUpdate(){
    this.setBodyClass();
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

    AppStore.reorder(sections, e.newIndex);
  },

  updateSection(index, section){
    AppActions.updateSection(index, section);
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
      "list-blocks": true,
      "hidden": !this.state.showBlocks
    });

    let sectionsClass = cx({
      "list-sections": true,
      "hidden": this.state.showBlocks
    });

    return (
      <div>
        <div className={sectionsClass}>
          <Button bsStyle='primary' className="btn-block" onClick={this.showBlocks}>
            <span className="fa fa-plus"></span> Add Block
          </Button>
          
          <div ref="sections">
            {sections.map((section, index)=> {
              let updateTitle = (title)=>{
                let uSection   = _.copy(section);
                uSection.title = title;
                console.log('title is `%s`', title);
                
                this.updateSection(index, uSection);
              };

              return (
                <SectionLi
                  active={this.props.activeSectionIndex === index} 
                  getUniqueSectionId={this.props.getUniqueSectionId} 
                  updateTitle={updateTitle} 
                  title={section.title} 
                  key={section.key} 
                  index={index} />
              );
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

module.exports = SectionList;
