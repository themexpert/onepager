const _                   = require("underscore");
const React               = require('react');
const Tab                 = require('./Tab.jsx');
const TabPane             = require('./TabPane.jsx');
const SectionList         = require('../section-list/SectionList.jsx');
const SectionControls     = require('../edit/SectionControls.jsx');
const SectionSettings     = require('../edit/SectionSettings.jsx');
const AddToMenu           = require('../menu/AddToMenu.jsx');
const AppActions          = require('../../actions/AppActions');
const AppStore            = require('../../stores/AppStore');
const $s                  = require('string');

let Sidebar = React.createClass({

  render() {
    let {sections, blocks, activeSectionIndex, activeSection} = this.props;
    let sectionEditable = activeSectionIndex === null ? false : true;
    let activeTab       = this.props.sidebarTabState.active;

    let getUniqueSectionId = function(sections, index, title){
      let id = $s(title).dasherize().s;

      while(!_.arrIsUniqueProperty(sections, index, id, 'id')){
        id = id+1;
      }

      return id;
    };

    return (
      <div className="txop-sidebar op-ui clearfix">
        <ul className="tx-nav tx-nav-tabs">
          <Tab id="op-sections" icon="bars" title="Layout" active={activeTab}/>
          <Tab id="op-contents" icon="database" title="Contents" active={activeTab} disabled={!sectionEditable} />
          <Tab id="op-settings" icon="sliders" title="Settings" active={activeTab} disabled={!sectionEditable} />
          <Tab id="op-menu" icon="link" title="Menu" active={activeTab} disabled={!sectionEditable}/>

          <button onClick={AppStore.save} className="fa fa-save btn btn-primary btn--save"> &nbsp; Save</button>
        </ul>

        <div className="tab-content">
          <TabPane id="op-sections" active={activeTab}>
            <SectionList 
              blocks={blocks} 
              sections={sections} 
              getUniqueSectionId={(index, id)=>{
                return getUniqueSectionId(sections, index, id);
              }} />
          </TabPane>

          <TabPane id="op-contents" active={activeTab}>
          {sectionEditable ?
            <SectionControls
              update={(fields)=>{
                let section    = _.copy(sections[activeSectionIndex]);
                section.fields = fields;
                AppActions.updateSection(activeSectionIndex, section);
              }}
              controls={activeSection.fields ? activeSection.fields: [] } 
              sectionIndex={activeSectionIndex} /> : "please select a section" }
          </TabPane> 

          <TabPane id="op-settings" active={activeTab}>
          {sectionEditable ?
            <SectionSettings
              update={(settings)=>{
                let section       = _.copy(sections[activeSectionIndex]);
                section.settings  = settings;
                AppActions.updateSection(activeSectionIndex, section);
              }}
              controls={activeSection.settings ? activeSection.settings: [] } 
              sectionIndex={activeSectionIndex} /> : "please select a section" }
          </TabPane> 

          <TabPane id="op-menu" active={activeTab}>
            {sectionEditable ? 
              <AddToMenu section={activeSection} index={activeSectionIndex} /> : "please select a section" }
          </TabPane> 

        </div>

      </div>
    );
  }
});

module.exports = Sidebar;
