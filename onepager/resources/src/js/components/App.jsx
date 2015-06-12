const React             = require('react');
const AppStore          = require('../stores/AppStore');
const SectionCollection = require('./sections/SectionCollection.jsx');
const BlockCollection   = require('./blocks/BlockCollection.jsx');
const EditScreen        = require('./edit/EditScreen.jsx');
const AddToMenu         = require('./menu/AddToMenu.jsx');

let App = React.createClass({
  getInitialState() {
    return AppStore.getAll();
  },

  _onChange() {
    this.setState(AppStore.getAll());
  },

  componentDidMount() {
    AppStore.addChangeListener(this._onChange);
  },

  componentWillUnmount() {
    AppStore.removeChangeListener(this._onChange);
  },
  showBlocksBar(){
    AppStore.setBlockState({open:true});

    //TODO: bad pattern fix it
    document.getElementById('sections').style.transform = "none"; //jshint ignore:line
    jQuery('body').addClass('op-blocks-in'); //jshint ignore:line
  },
  render() {
    let {sections, blocks, activeSectionIndex, activeSection, menuState} = this.state;


    return (
      <div /**className="one-pager-app"*/>
        <a id="react-add-block" href="javascript:void(0)" //jshint ignore:line
          onClick={this.showBlocksBar} 
          className="action-add-blocks hidden">Add Block </a>
          
        { (this.state.blockState.open === false) ? "" :
          <BlockCollection blocks={blocks} />
        }

        <SectionCollection activeSectionIndex={activeSectionIndex} sections={sections} />

        { (activeSectionIndex === null) ? "" :
          <EditScreen sectionIndex={activeSectionIndex} section={activeSection} /> }

        { (menuState.id === null) ? "" :
          <AddToMenu id={menuState.id} title={menuState.title} index={menuState.index} /> }
      </div>
    );
  }
});

module.exports = App;
