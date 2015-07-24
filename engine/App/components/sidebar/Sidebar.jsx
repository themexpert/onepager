const _                  = require('underscore');
const swal               = require('sweetalert');
const React              = require('react');
const Tab                = require('../../../shared/components/Tab.jsx');
const TabPane            = require('../../../shared/components/TabPane.jsx');
const SectionList        = require('../section-list/SectionList.jsx');
const SectionControls    = require('./SectionControls.jsx');
const AddToMenu          = require('./AddToMenu.jsx');
const AppActions         = require('../../AppActions.js');
const AdminActions       = require('../../../Optionspanel/OptionActions.js');
const SectionTransformer = require('../../../shared/lib/SectionTransformer.js');
const AppStore           = require('../../AppStore.js');
const ODataStore = require('../../../shared/lib/ODataStore.js');
// const PureMixin           = require('../../mixins/PureMixin.js');
const $s       = require('string');
const $        = jQuery;
const Settings = require("./Settings.jsx");


let Sidebar = React.createClass({
  // we need to optimize this with immutability
  // mixins: [PureMixin],

  componentDidMount(){
    let tabContents = React.findDOMNode(this.refs.tabContents);
    $(()=> $(tabContents).niceScroll({cursorcolor: '#2ab0ad', cursorborder: '0'}));
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  },

  getInitialState(){
    return {
      saving: false
    };
  },

  handleSave(){
    let updated = AppStore.save();
    this.setState({saving: true});

    updated.then(()=> {
      this.setState({saving: false});
    }, ()=> {
      this.setState({saving: false});
      swal('could not save');
    });
  },

  render() {
    let {sections, blocks, activeSectionIndex, activeSection, isDirty} = this.props;
    let sectionEditable = activeSectionIndex === null ? false : true;
    let activeTab       = this.props.sidebarTabState.active;


    let getUniqueSectionId = function (sections, index, title) {
      let id = $s(title.trim()).dasherize().s; //make es4 compitable

      //remove starting dash
      if(id && id.indexOf("-") === 0){
        id = id.replace("-", "", 1);
      }

      while (!_.arrIsUniqueProperty(sections, index, id, 'id')) {
        id = id + 1;
      }

      return id;
    };

    let handleTabClick = function (id) {
      AppStore.setTabState({active: id});
    };

    let update = (key, fields)=> {
      let section  = _.copy(sections[activeSectionIndex]);
      section[key] = fields;
      AppActions.updateSection(activeSectionIndex, section);
    };

    let sectionSettings = activeSection ? _.pick(activeSection, ['settings', 'contents', 'styles']) : {};

    return (
      <div className='txop-sidebar op-ui clearfix'>
        <ul className='tx-nav tx-nav-tabs'>
          <Tab onClick={handleTabClick} id='op-sections' icon='cubes' title='Layout' active={activeTab}/>
          <Tab onClick={handleTabClick} id='op-contents' icon='sliders' title='Contents' active={activeTab}
               disabled={!sectionEditable}/>
          <Tab onClick={handleTabClick} id='op-menu' icon='link' title='Menu' active={activeTab}
               disabled={!sectionEditable}/>
          <Tab onClick={handleTabClick} id='op-settings' icon='cog' title='Settings' active={activeTab}/>

          <div className="btn-group">

          {
            activeTab === 'op-settings' ?
                <button onClick={AdminActions.sync} className='btn btn-primary btn--save'>
                  <span className='fa fa-check'></span>
                </button> :
                <button disabled={!isDirty} onClick={this.handleSave}
                        className='btn btn-primary btn--save'>
                  {
                    this.state.saving ?
                      <span className='fa fa-refresh fa-spin'></span> : <span className='fa fa-check'></span>
                  }
                </button>
          }
          <a href={ODataStore.disable} className="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Close">
            <span className="fa fa-close"></span>
          </a>
        </div>
        </ul>

        <div className='tab-content' ref='tabContents'>
          <TabPane id='op-sections' active={activeTab}>
            <SectionList
              activeSectionIndex={activeSectionIndex}
              blocks={blocks}
              sections={sections}
              getUniqueSectionId={(index, id)=>{
                return getUniqueSectionId(sections, index, id);
              }}/>

          </TabPane>

          <TabPane id='op-contents' active={activeTab}>
            {sectionEditable ?
              <SectionControls
                update={update}
                sectionSettings={sectionSettings}
                sectionIndex={activeSectionIndex}/> :

              <h2>please select a section</h2>
            }
          </TabPane>


          <TabPane id='op-menu' active={activeTab}>
            {sectionEditable ?
              <AddToMenu section={activeSection} index={activeSectionIndex}/> : 'please select a section' }
          </TabPane>

          <TabPane id='op-settings' active={activeTab}>
            <Settings />
          </TabPane>

        </div>

      </div>
    );
  }
});

module.exports = Sidebar;
