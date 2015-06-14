const _                   = require('underscore');
const React               = require('react');
const cx                  = require('classnames');
const SortableMixin       = require('sortablejs/react-sortable-mixin');
const Button              = require('react-bootstrap/lib/Button');
const Section             = require('./Section.jsx');
const BlockCollection     = require('../blocks/BlockCollection.jsx');
const AppStore            = require('../../stores/AppStore.js');
const AppActions          = require('../../actions/AppActions.js');


let SectionCollection = React.createClass({
  mixins: [SortableMixin],

  getInitialState(){
    return {
      showBlocks: false
    };
  },

  setBodyClass(){
    if(this.props.sections.length === 0){
      jQuery('body').addClass('no-op-sections');
    } else {
      jQuery('body').removeClass('no-op-sections');
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

    AppStore.setSections(sections);
    AppStore.reorder();
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
          <Button bsStyle='primary' className="btn-block" onClick={this.showBlocks}><span className="fa fa-plus"></span> Add Block</Button>
          
          <div ref="sections">
            {sections.map((section, index)=> {
              return <Section update={this.updateSection.bind(this, index)} section={section} key={section.key} index={index}/>;
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
