const _                  = require('underscore');
const swal               = require('sweetalert');
const React              = require('react');
const Tab                = require('../../../shared/components/Tab.jsx');
const TabPane            = require('../../../shared/components/TabPane.jsx');
const AdminActions       = require('../../../Optionspanel/OptionActions.js');
const SectionTransformer = require('../../../shared/lib/SectionTransformer.js');
const ODataStore         = require('../../../shared/lib/ODataStore.js');
const AppActions         = require('../../AppActions.js');
const AppStore           = require('../../AppStore.js');
const SectionList        = require('../section-list/SectionList.jsx');
const SectionControls    = require('./SectionControls.jsx');
const Settings           = require("./Settings.jsx");
const $                  = jQuery;

import cx from "classnames";

let Sidebar = React.createClass({
  // we need to optimize this with immutability
  // mixins: [PureMixin],

  collapseSidebar(){
    AppActions.collapseSidebar(!this.props.collapseSidebar)
  },

  componentDidMount(){
    let tabContents = React.findDOMNode(this.refs.tabContents);

    $(function () {
      $(tabContents).niceScroll({cursorcolor: '#2ab0ad', cursorborder: '0'});
      $('[data-toggle="tooltip"]').tooltip()
    })
  },

  getInitialState(){
    return {
      saving: false,
      collapse: false
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

  handleGlobalSettingsSave(){
    let updated = AdminActions.sync.triggerPromise();
    this.setState({saving: true});

    updated.then(()=> {
      this.setState({saving: false});
      AppActions.reloadSections();
      AppActions.reloadBlocks();
    }, ()=> {
      this.setState({saving: false});
      swal('could not save');
    });
  },

  render() {
    let {sections, blocks, activeSectionIndex, activeSection, isDirty} = this.props;
    let sectionEditable = activeSectionIndex !== null;
    let activeTab       = this.props.sidebarTabState.active;
    let sectionSettings = activeSection ? _.pick(activeSection, ['settings', 'contents', 'styles']) : {};

    let saveClasses = cx({
      "fa fa-refresh fa-spin": this.state.saving,
      "fa fa-check": !this.state.saving
    });

    let handleTabClick = function (id) {
      AppStore.setTabState({active: id});
    };

    let update = (key, fields)=> {
      let section  = _.copy(sections[activeSectionIndex]);
      section[key] = fields;
      AppActions.updateSection(activeSectionIndex, section);
    };

    let classes = cx({
      "fa fa-chevron-left": !this.props.collapseSidebar,
      "fa fa-chevron-right": this.props.collapseSidebar
    });


    return (
      <div className="txop-sidebar op-ui clearfix">
        <ul className='tx-nav tx-nav-tabs'>
          <Tab onClick={handleTabClick} id='op-sections' icon='cubes' title='Layout' active={activeTab}/>
          <Tab onClick={handleTabClick} id='op-contents' icon='sliders' title='Contents' active={activeTab}
               disabled={!sectionEditable}/>
          <Tab onClick={handleTabClick} id='op-settings' icon='cog' title='Settings' active={activeTab}/>

          <div className="btn-group">
          {
            activeTab === 'op-settings' ?
              <button onClick={this.handleGlobalSettingsSave} className='btn btn-primary btn--save'>
                <span className={saveClasses}></span>
              </button> :
              <button disabled={!isDirty} onClick={this.handleSave} className='btn btn-primary btn--save'>
                  <span className={saveClasses}></span>
              </button>
          }
          <a href={ODataStore.disable} className="btn btn-primary" data-toggle="tooltip"
             data-placement="bottom" title="Close">
            <span className="fa fa-close"></span>
          </a>
        </div>
        </ul>

        <div className='tab-content' ref='tabContents'>
          <TabPane id='op-sections' active={activeTab}>
            <SectionList
              activeSectionIndex={activeSectionIndex}
              blocks={blocks}
              sections={sections} />

          </TabPane>

          <TabPane id='op-contents' active={activeTab}>
            {sectionEditable ?
              <SectionControls
                update={update}
                title={sections[activeSectionIndex].title}
                sectionSettings={sectionSettings}
                sectionIndex={activeSectionIndex}/> :

              <h2>please select a section</h2>
            }
          </TabPane>

          <TabPane id='op-settings' active={activeTab}>
            <Settings />
          </TabPane>

        </div>

        <div className="op-sidebar-control" onClick={this.collapseSidebar}>
          <span className={classes}></span>
        </div>

      </div>
    );
  }
});

module.exports = Sidebar;
