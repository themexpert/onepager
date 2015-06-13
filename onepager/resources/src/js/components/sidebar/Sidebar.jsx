const React               = require('react');
const Tab                 = require('./Tab.jsx');
const TabPane             = require('./TabPane.jsx');
const SectionList         = require('../section-list/SectionList.jsx');
const SectionControls     = require('../edit/SectionControls.jsx');
const SectionSettings     = require('../edit/SectionSettings.jsx');
const AddToMenu           = require('../menu/AddToMenu.jsx');

let Sidebar = React.createClass({
  componentDidMount(){
    jQuery('body').addClass('op-sidebar-open');
    jQuery('.op-sidebar').addClass('in');
  },

  render() {
    let {sections, blocks, activeSectionIndex, activeSection, menuState} = this.props;
    let sectionEditable = activeSectionIndex === null ? false : true;
    let activeTab       = this.props.sidebarTabState.active;

    return (
      <div className="op-sidebar op-ui clearfix fade"> {/*do we need fade ?*/}
        <ul className="tx-nav tx-nav-tabs">
          <Tab id="op-sections" icon="bars" title="Sections" active={activeTab}/>
          <Tab id="op-contents" icon="database" title="Contents" active={activeTab} disabled={!sectionEditable} />
          <Tab id="op-settings" icon="sliders" title="Settings" active={activeTab} disabled={!sectionEditable} />
          <Tab id="op-menu" icon="link" title="Menu" active={activeTab} disabled={!sectionEditable}/>
        </ul>

        <div className="tab-content">
          <TabPane id="op-sections" active={activeTab}>
            <SectionList blocks={blocks} sections={sections} />
          </TabPane>

          <TabPane id="op-contents" active={activeTab}>
          {sectionEditable ?
            <SectionControls 
              controls={activeSection.fields ? activeSection.fields: [] } 
              sectionIndex={activeSectionIndex} /> : "please select a section" }
          </TabPane> 

          <TabPane id="op-settings" active={activeTab}>
          {sectionEditable ?
            <SectionSettings 
              controls={activeSection.settings ? activeSection.settings: [] } 
              sectionIndex={activeSectionIndex} /> : "please select a section" }
          </TabPane> 

          <TabPane id="op-menu" active={activeTab}>
            {sectionEditable ? 
              <AddToMenu id={menuState.id} title={menuState.title} index={menuState.index} /> : "please select a section" }
          </TabPane> 

        </div>

      </div>
    );
  }
});

module.exports = Sidebar;
