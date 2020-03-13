const $ = jQuery; //jshint ignore: line
const _ = require('underscore');
const assign = require('object-assign');
const AppDispatcher = require('./flux/AppDispatcher.js');
const Constants = require('./flux/AppConstants.js');
const SectionTransformer = require('./../shared/onepager/sectionTransformer.js');
const ShouldSync = require('../shared/lib/ShouldSync.js');
const Activity = require('../shared/lib/Activity.js');
const ODataStore = require('./../shared/onepager/ODataStore.js');
const BaseStore = require('./flux/BaseStore.js');
const AppActions = require('./flux/AppActions.js');
const SyncService = require('./AppSyncService.js');

require('./../shared/onepager/lib/_mixins.js');

import toolbelt from '../shared/lib/toolbelt.js';
import storage from '../shared/lib/storage.js';
import localState from './../shared/onepager/localState.js';

let {serializeSections, unserializeSections} = SectionTransformer;
let {stripClassesFromHTML} = SectionTransformer;

// data storage
function sortBlocks(blocks){
  return blocks.sort(function (a, b) {
    return +(a.slug > b.slug) || +(a.slug === b.slug) - 1;
  });
}

function transformSections(sections){
  return SectionTransformer.unserializeSections(sections, _blocks);
}

let _blocks = sortBlocks(ODataStore.blocks);
let _sections = transformSections(ODataStore.sections);

// debugger;
console.log('sections', _sections);
let _menuState = {id: null, index: null, title: null};
let _savedSections = getSerializedSectionsAsJSON(_sections);
let AUTO_SAVE_DELAY = 150;
let _previewFrameLoaded = false;
let _pageID = ODataStore.pageId;
let _pageSettingOptions = ODataStore.pageSettingOptions;

let _collapseSidebar = localState.get('collapseSidebar', false);
let _activeSectionIndex = _sections[localState.get('activeSectionIndex')] ? localState.get('activeSectionIndex') : null;
let _sidebarTabState = _activeSectionIndex !== null ?
  localState.get('sidebarTabState', {active: 'op-sections'}) :
  {active: 'op-sections'};


let shouldLiveSectionsSync = ShouldSync(_sections, 'sections');
let shouldSectionsSync = ShouldSync(_sections, 'sections');

let syncService = SyncService(ODataStore.pageId, Activity(AUTO_SAVE_DELAY), shouldSectionsSync);
let liveService = SyncService(null, Activity(AUTO_SAVE_DELAY), shouldLiveSectionsSync);

function collapseSidebar(collapse) {
  _collapseSidebar = collapse;
}

function getSerializedSectionsAsJSON(section) {
  return JSON.stringify(serializeSections(section));
}

function getBlockBySlug(slug) {
  return _.find(_blocks, {slug});
}

// function to activate a section
function setActiveSection(index) {
  _activeSectionIndex = index;
}

function setPreviewFrameLoaded(){
  _previewFrameLoaded = true;
}

// function to add a section
function addSection(section) {
  let sectionIndex = _sections.length; //isn't it :p

  //its a row section to need to uni(quei)fy
  section = SectionTransformer.unifySection(section);
  _sections.push(section);
  setActiveSection(sectionIndex);

  liveService.updateSection(_sections, sectionIndex);
}


// function to update a section
function updateSection(sectionIndex, section) {
  _sections[sectionIndex] = section;
  liveService.updateSection(_sections, sectionIndex);
}

// function to duplicate a section
function duplicateSection(index) {
  let sectionIndex = _sections.length; //isn't it :p

  //its a row section to need to uni(quei)fy
  let section = SectionTransformer.unifySection(_sections[index], true);

  _sections = toolbelt.pushAt(toolbelt.copy(_sections), index + 1, section);

  liveService.updateSection(_sections, sectionIndex);

  setActiveSection(sectionIndex);
}

function removeSection(index) {
  _sections.splice(index, 1);
  liveService.rawUpdate(_sections); //bad pattern
  setActiveSection(null);
}


function updateTitle(index, previousTitle, newTitle) {
  let section = toolbelt.copy(_sections[index]);
  section.title = newTitle;

  if ('untitled section' === previousTitle) {
    section.id = getUniqueSectionId(_sections, index, newTitle);
  }

  updateSection(index, section);
}

function getUniqueSectionId(sections, index, title) {
  let id = toolbelt.dasherize(title); //make es4 compatible

  while (!toolbelt.isUniquePropInArray(sections, index, 'id', id)) {
    id = id + 1;
  }

  return id;
}

function sectionSynced(index, res) {
  let section;

  _sections[index] = toolbelt.copy(_sections[index]);
  section = _sections[index];

  section.content = stripClassesFromHTML(section.livemode, res.content);
  section.style = res.style;
}

function emitChange(){
  AppStore.emitChange();
}

function editSection(index) {
  setActiveSection(index);
  AppStore.setTabState({active: 'op-contents'});
}

function updateSections(sections) {
  _sections = unserializeSections(sections, _blocks);
}

function reloadSections(sections) {
  return liveService.reloadSections(sections).then(updateSections);
}

function reloadBlocks(){
  //FIXME: its not a place for business logic
  let reloadBlocksPromise = syncService.reloadBlocks();
  reloadBlocksPromise.then((blocks)=> {
    _blocks = sortBlocks(blocks);
  });

  return reloadBlocksPromise;
}


let dispatcherIndex = AppDispatcher.register(function (payload) {
  const actions = Constants.ActionTypes;
  const action = payload.action;

  switch (action.type) {
    case actions.ADD_SECTION:
      addSection(action.section);
      emitChange();
      break;

    case actions.EDIT_SECTION:
      editSection(action.index);
      emitChange();
      break;

    case actions.COLLAPSE_SIDEBAR:
      collapseSidebar(action.collapse);
      emitChange();
      break;

    case actions.ACTIVATE_SECTION:
      setActiveSection(action.index);
      emitChange();
      break;

    case actions.UPDATE_SECTION:
      updateSection(action.index, action.section);
      emitChange();
      break;

    case actions.REMOVE_SECTION:
      removeSection(action.index);
      emitChange();
      break;

    case actions.DUPLICATE_SECTION:
      duplicateSection(action.index);
      emitChange();
      break;

    case actions.SECTIONS_SYNCED:
      sectionSynced(action.index, action.res);
      emitChange();
      break;

    ///maybe do not need it
    case actions.RELOAD_SECTIONS:
      reloadSections(serializeSections(_sections));
      break;

    case actions.REFRESH_SECTIONS:
      reloadSections(action.sections);
      break;

    case actions.UPDATE_SECTIONS:
      updateSections(action.sections);
      emitChange();
      break;

    case actions.UPDATE_TITLE:
      updateTitle(action.index, action.previousTitle, action.newTitle);
      emitChange();
      break;

    case actions.PREVIEW_FRAME_LOADED:
      setPreviewFrameLoaded();
      emitChange();
      break;

    case actions.UPDATE_PAGE_SETTINGS:
      var a = 'page settings';
      debugger;
      emitChange();
      break;
      
    case actions.UPDATE_PAGE_STYLE:
      var b = 'page style';
      debugger;
      emitChange();
      break;

    case actions.UPDATE_PAGE_ADVANCE:
      var c = 'page advance';
      debugger;
      emitChange();
      break;

  }
});

// Facebook style store creation.
let AppStore = assign({}, BaseStore, {

  // public methods used by Controller-View to operate on data
  getAll() {
    return {
      isDirty: this.isDirty(),
      blocks: _blocks,
      sections: _sections,
      menuState: _menuState,
      activeSection: _sections[_activeSectionIndex],
      collapseSidebar: _collapseSidebar,
      sidebarTabState: _sidebarTabState,
      activeSectionIndex: _activeSectionIndex,
      previewFrameLoaded: _previewFrameLoaded,
      pageID: _pageID,
      pageSettingOptions: _pageSettingOptions,
    };
  },

  save(){
    let updated = syncService.rawUpdate(_sections);

    updated.then(this.setSectionsAsSavedSections);

    return updated;
  },

  pageSave(){
    let callingRoute = syncService.updatePageSettings();
    callingRoute.then( (res) => {
      console.log('hello, for appstorre')
    }).catch( (err) => {
      console.log('err', err);
    } );
    return callingRoute;
  },

  isDirty(){
    return getSerializedSectionsAsJSON(_sections) !== _savedSections;
  },

  setSectionsAsSavedSections(){
    _savedSections = getSerializedSectionsAsJSON(_sections); // return the changed json
    emitChange();
  },

  get(index){
    return _sections[index];
  },

  getBlock(slug){
    return getBlockBySlug(slug);
  },

  setTabState(state){
    _sidebarTabState = state;
    emitChange();
  },

  setSections(sections){
    _sections = sections;
    emitChange();
  },

  setMenuState(id, title, index){
    _menuState = {id, title, index};
    emitChange();
  },

  reorder(sections, index){
    setActiveSection(index);
    this.setSections(sections);
    liveService.rawUpdate(_sections);
  },

  /**
   * 
   * @param {sections} sections data comes for page specific section from db onepager_sections row of post_meta table
   * @param {*} isSectionsDirty 
   */
  settingsChanged(sections, isSectionsDirty){
    /** Horrible codes*/
    reloadBlocks().then(function(){
      reloadSections(sections).then(function(){
        if(!isSectionsDirty){
          AppStore.setSectionsAsSavedSections();
        }
      });
    });
  },

  loadPreset(sections){
    sections = transformSections(sections);
    this.setSections(sections);
  },

  rawUpdate(){
    liveService.rawUpdate(_sections);
  },

  // register store with dispatcher, allowing actions to flow through
  dispatcherIndex
});

module.exports = AppStore;
