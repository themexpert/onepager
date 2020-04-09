const _ = require('underscore');
const swal = require('sweetalert');
const React = require('react');
const Tab = require('./Tab.jsx');
const TabPane = require('../../../shared/components/TabPane.jsx');
const OptionActions = require('../../../Optionspanel/OptionActions.js');
const SectionTransformer = require('../../../shared/onepager/sectionTransformer.js');
const ODataStore = require('../../../shared/onepager/ODataStore.js');
const AppActions = require('../../flux/AppActions.js');
const AppStore = require('../../AppStore.js');
const SectionList = require('../section-list/SectionList.jsx');
const SectionControls = require('./SectionControls.jsx');
const Settings = require("./Settings.jsx");
const Menu = require("./Menu.jsx");
const $ = jQuery;
// const Footer = require('./../section-list/Footer.jsx');
const BlockCollection = require('../blocks/BlockCollection.jsx');
const PopupModal = require('../../../shared/components/PopupModal.jsx');

import notify from '../../../shared/plugins/notify.js';
import cx from "classnames";
import './assets/overlay.less';

let Sidebar = React.createClass({
  // we need to optimize this with immutability
  // mixins: [PureMixin],

  collapseSidebar(){
    AppActions.collapseSidebar(!this.props.collapseSidebar)
  },

  componentDidMount(){
    this._unsavedAlert();
    this._initNiceScroll();
    $('body #onepager-preview').find('iframe#onepager-iframe').wrap("<div id='preview-frame-wrapper'></div>");

  },

  getInitialState(){
    return {
      saving: false,
      collapse: false,
      isSettingsDirty: false
    };
  },
  /**
   * handle section update
   */
  handleSave(){
    let updated = AppStore.save(); // return a promise
    this.setState({saving: true});

    updated.then(()=> {
      this.setState({saving: false});
    }, ()=> {
      this.setState({saving: false});
      swal('could not save');
    });
  },
  /**
   * handle global settings
   * Need to move this function 
   * to another part of this application
   */
  handleGlobalSettingsSave(){
    let serializedSections = SectionTransformer.serializeSections(this.props.sections);
    let isSectionsDirty = AppStore.isDirty();

    let updated = OptionActions.syncWithSections
      .triggerPromise(serializedSections, (sections)=> {
        AppStore.settingsChanged(sections, isSectionsDirty);
      });

    this.setState({saving: true});

    updated.then(()=> {
      this.setState({isSettingsDirty: false, saving: false});
    }, ()=> {
      this.setState({saving: false});
      swal('could not save');
    });
  },
  /**
   * handle page settings option panel
   * update the database
   */
  handlePageSettingsSave(){
    let serializedSections = SectionTransformer.serializeSections(this.props.sections);
    let isSectionsDirty = AppStore.isDirty(); // return a promise
    let updated = OptionActions.syncPageWithSections
      .triggerPromise(serializedSections, (sections)=> {
        AppStore.settingsChanged(sections, isSectionsDirty);
      });
    this.setState({saving: true});

    updated.then(()=> {
      this.setState({isSettingsDirty: false, saving: false});
    }, ()=> {
      this.setState({saving: false});
      swal('could not save');
    });
  },
  /**
   * handle page settings option panel
   * let know the builder 
   * when any changes happen
   */
  whenSettingsDirty(){
    //FIXME: why the! should I use a promise here?
    OptionActions
      .isDirty
      .triggerPromise()
      .then(isSettingsDirty=> this.setState({isSettingsDirty}));
  },

  handleResponsiveToggle(){
    $('.op-footer-wrapper .responsive-check-panel').find('.responsive-devices').toggleClass('open');
    // $('body #onepager-preview').find('iframe#onepager-iframe').wrap("<div id='preview-frame-wrapper'></div>");
    // if($('.op-footer-wrapper .responsive-check-panel').find('.responsive-devices').hasClass('open')){
    //   $('body #onepager-preview').find('iframe#onepager-iframe').wrap("<div id='preview-frame-wrapper'></div>");
    // }else{
    //   $('body #onepager-preview').find('iframe#onepager-iframe').unwrap();
    // }
  },
  
  handleResponsiveFrame(device){
    if( ($('body').hasClass('iframe-desktop')) || ($('body').hasClass('iframe-tablet')) || ($('body').hasClass('iframe-mobile')) ){
      $('body').removeClass('iframe-desktop iframe-tablet iframe-mobile');
    }
    let previewDevice = 'iframe-' + device;
    $('body').addClass(previewDevice);

  },


  _unsavedAlert(){
    jQuery(window).on('beforeunload', ()=> {
      if (this.state.isSettingsDirty) {
        AppStore.setTabState({active: 'op-settings'});

        return "You haven't saved your settings changes and by leaving the page they will be lost.";
      }
    });
  },

  _initNiceScroll(){
//    let tabContents = React.findDOMNode(this.refs.tabContents);

//    $(function () {
//      $(tabContents).niceScroll({cursorcolor: '#ddd', cursorborder: '0'});
//    });
  },

  handleTabClick(id){
    AppStore.setTabState({active: id});
  },
  /**
   * handle the popup
   * to insert the block to page
   */
  handlePopupModal(){
    var modalElement = document.querySelector('#onepager-builder .popup-modal');
    modalElement.classList.toggle('open');
  },
  _renderTabs(){
    let handleTabClick = this.handleTabClick;
    let activeTab = this.props.sidebarTabState.active;

    return (
      <ul className='tx-nav tx-nav-tabs'>
        <Tab onClick={handleTabClick} id='op-sections' icon="cubes" title='Layout' active={activeTab}
             icon2="arrow-left" parent={true }/>
        <Tab onClick={handleTabClick} id='op-contents' icon='sliders' title='Contents' active={activeTab}/>
        <Tab onClick={handleTabClick} id='op-blocks' icon='cube' title='Blocks' active={activeTab}/>
        <Tab onClick={handleTabClick} id='op-menu' icon='link' title='Menu' active={activeTab}
             visibleOn="op-sections"/>
        <Tab onClick={handleTabClick} id='op-settings' icon='cog' title='Page Settings' active={activeTab}
             visibleOn="op-sections"/>
             {/* visibleOn=""/> */}
      </ul>
    );
  },

  render() {
    let {sections, blocks, activeSectionIndex, activeSection, pageSettingOptions} = this.props;
    let sectionEditable = activeSectionIndex !== null;
    let activeTab = this.props.sidebarTabState.active;
    let sectionSettings = activeSection ? _.pick(activeSection, ['settings', 'contents', 'styles']) : {};

    let handleTabClick = this.handleTabClick;
    let handlePopupModal = this.handlePopupModal;

    let update = (key, fields)=> {
      let section = _.copy(sections[activeSectionIndex]);
      section[key] = fields;
      AppActions.updateSection(activeSectionIndex, section);
    };
    
    /**
     * live page update
     */
    let pagUpdate = (key, fields)=> {
      AppActions.updatePageSettigs(key, fields);
    };
    
    let isSettingsDirty = this.state.isSettingsDirty;
    let {isDirty} = this.props;
    let buildModeUrl = ODataStore.disableBuildModeUrl;
    let dashboardUrl = ODataStore.dashboardUrl;
    let getUpdatePlugins = ODataStore.getUpdatePlugins;
    let pluginUpdateUrl = ODataStore.pluginUpdateUrl;
    let onepagerProLoaded = ODataStore.onepagerProLoaded;
    let proUpgradeLink = ODataStore.proUpgradeLink;
    let saveButtonIcon = cx({
      "fa fa-refresh fa-spin": this.state.saving,
      "fa fa-check": !this.state.saving
    });

    let classes = cx({
      "fa fa-chevron-left": !this.props.collapseSidebar,
      "fa fa-chevron-right": this.props.collapseSidebar
    });

    let overlayClasses = cx({
      "saving-overlay": this.state.saving
    });

    return (
      <div className="builder-wrapper">

        <div className="op-sidebar op-ui clearfix">
          <header className="op-header-wrapper">
            <nav className="uk-navbar uk-navbar-container">
              <div className="uk-navbar-left"><a className="uk-logo op-btn-with-logo uk-light" href="#">OnePager</a></div>
              
              <div className="uk-navbar-right">
                {
                  getUpdatePlugins? 
                  <a className="new-update-status" href={pluginUpdateUrl}>New Update Available</a>
                  : null
                }
                <a href={buildModeUrl} target="_blank" className="uk-button uk-button-text uk-button-small uk-margin-right uk-light">
                  View
                </a>
                <a href={buildModeUrl} className="uk-button uk-button-text uk-button-small uk-margin-right uk-light">
                  <span className="fa fa-close"></span>
                </a>
              </div>
            </nav>
          </header>
          
          <main className="op-content-wrapper" ref='tabContents'>
            {this._renderTabs()}

            <div className='tab-content'>
              <div className={overlayClasses}/>

              <TabPane id='op-sections' active={activeTab}>
                <SectionList
                  openBlocks={handleTabClick.bind(this, 'op-blocks')}
                  openPopup={handlePopupModal}
                  activeSectionIndex={activeSectionIndex}
                  blocks={blocks}
                  sections={sections}/>
              </TabPane>

              <TabPane id="op-blocks" active={activeTab}>
                <BlockCollection blocks={blocks}/>
              </TabPane>

              <TabPane id='op-menu' active={activeTab}>
                <Menu sections={sections}/>
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
                <Settings pagUpdate={pagUpdate} whenSettingsDirty={this.whenSettingsDirty}/>
              </TabPane>

              {/* {activeTab === "op-sections" ? <Footer /> : null } */}

            </div>
          </main>
          
          <footer className="op-footer-wrapper uk-position-bottom">
            {! onepagerProLoaded ? 
            <div className="upgrade-to-pro">
              <p>Unlock more layouts, blocks and features you could imagine.</p>
              <a href={proUpgradeLink} target="_blank">
                Upgrade to PRO
              </a>
            </div>
            : null}
            
            <nav className="uk-navbar uk-navbar-container">
              <div className="uk-navbar-left"><a href={dashboardUrl}>Exit to Dashboard</a></div>
              <div className="responsive-check-panel">
                <a href="#" onClick={this.handleResponsiveToggle}><i className="fa fa-desktop responsive-check-button"></i></a> 
                <ul className="responsive-devices">
                  <li onClick={() => this.handleResponsiveFrame('desktop')}><i className="fa-fw fa fa-desktop"></i> Desktop</li>
                  <li onClick={() => this.handleResponsiveFrame('tablet')}><i className="fa-fw fa fa-tablet"></i> Tablet (768px)</li>
                  <li onClick={() => this.handleResponsiveFrame('mobile')}><i className="fa-fw fa fa-mobile-phone"></i> Mobile (360px)</li>
                </ul>
              </div>
              <div className="uk-navbar-right">
                {
                  activeTab === 'op-settings' ?
                    // <button disabled={!isSettingsDirty} onClick={this.handleGlobalSettingsSave}
                    <button disabled={!isSettingsDirty} onClick={this.handlePageSettingsSave}
                            className='uk-button uk-button-primary uk-button-small'>
                      <span className={saveButtonIcon}></span> Update
                    </button> :
                    <button disabled={!isDirty} onClick={this.handleSave} className='uk-button uk-button-primary uk-button-small'>
                      <span className={saveButtonIcon}></span> Update
                    </button>
                }
              </div>
            </nav>
          </footer>
          
          <div className="op-sidebar-control" onClick={this.collapseSidebar}>
            <span className={classes}></span>
          </div>
        </div>
        
        <div className="popup-modal">
          <PopupModal blocks={blocks}/>
        </div>

      </div>

    );
  }
});

module.exports = Sidebar;
