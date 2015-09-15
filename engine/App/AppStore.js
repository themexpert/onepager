const $ = jQuery; //jshint ignore: line
const _ = require('underscore');
const assign = require('object-assign');
const AppDispatcher = require('./AppDispatcher.js');
const Constants = require('./AppConstants.js');
const SectionTransformer = require('./../shared/onepager/sectionTransformer.js');
const ShouldSync = require('../shared/lib/ShouldSync.js');
const Activity = require('../shared/lib/Activity.js');
const ODataStore = require('./../shared/onepager/ODataStore.js');
const BaseStore = require('./BaseStore.js');
const SyncService = require('./AppSyncService.js');

require('./../shared/onepager/lib/_mixins.js');

import toolbelt from '../shared/lib/toolbelt.js';
import storage from '../shared/lib/storage.js';
import localState from './../shared/onepager/localState.js';

// data storage
let _blocks = ODataStore.blocks;
let _sections = SectionTransformer.unserializeSections(ODataStore.sections, _blocks);
let _menuState = {id: null, index: null, title: null};
let _savedSections = _prepareForDirtyCheck(_sections);
let AUTO_SAVE_DELAY = 500;

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

function _prepareForDirtyCheck(section) {
  return JSON.stringify(SectionTransformer.serializeSections(section));
}

function getBlockBySlug(slug) {
  return _.find(_blocks, {slug});
}

// function to activate a section
function setActiveSection(index) {
  _activeSectionIndex = index;
}

// function to add a section
function addSection(section) {
  let sectionIndex = _sections.length; //isn't it :p

  //its a row section to need to uni(quei)fy
  section = SectionTransformer.unifySection(section);
  _sections.push(section);

  liveService.updateSection(_sections, sectionIndex);

  setActiveSection(sectionIndex);
}


// function to update a section
function updateSection(sectionIndex, section) {
  //immutable please?
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


// function to remove section
function removeSection(index) {
  $(`#style-${_sections[index].id}`).remove();

  //immutable please
  _sections.splice(index, 1);

  //bad pattern
  liveService.rawUpdate(_sections);

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

  section.content = SectionTransformer.stripClassesFromHTML(section.livemode, res.content);
  SectionTransformer.replaceSectionStyleInDOM(section.id, res.style);
}

let dispatcherIndex = AppDispatcher.register(function (payload) {
  const actions = Constants.ActionTypes;
  const action = payload.action;

  switch (action.type) {
    case actions.ADD_SECTION:
      addSection(action.section);
      AppStore.emitChange();
      break;

    case actions.EDIT_SECTION:
      //FIXME: its not a place for business logic
      setActiveSection(action.index);
      AppStore.setTabState({active: 'op-contents'});
      AppStore.emitChange();
      break;

    case actions.COLLAPSE_SIDEBAR:
      collapseSidebar(action.collapse);
      AppStore.emitChange();
      break;

    case actions.ACTIVATE_SECTION:
      setActiveSection(action.index);
      AppStore.emitChange();
      break;

    case actions.UPDATE_SECTION:
      updateSection(action.index, action.section);
      AppStore.emitChange();
      break;

    case actions.REMOVE_SECTION:
      removeSection(action.index);
      AppStore.emitChange();
      break;

    case actions.DUPLICATE_SECTION:
      duplicateSection(action.index);
      AppStore.emitChange();
      break;

    case actions.SECTIONS_SYNCED:
      sectionSynced(action.index, action.res);
      AppStore.emitChange();
      break;

    ///maybe do not need it
    case actions.RELOAD_SECTIONS:
      liveService.reloadSections(SectionTransformer.serializeSections(_sections));
      break;

    case actions.REFRESH_SECTIONS:
      liveService.reloadSections(action.sections);
      break;

    case actions.RELOAD_BLOCKS:
      //FIXME: its not a place for business logic
      syncService.reloadBlocks().then((blocks)=> {
        _blocks = blocks;
        AppStore.emitChange();
      });
      break;

    case actions.UPDATE_SECTIONS:
      //FIXME: its not a place for business logic
      _sections = SectionTransformer.unserializeSections(action.sections, ODataStore.blocks);
      _sections.map(function(section){
        SectionTransformer.replaceSectionStyleInDOM(section.id, section.style);
      });
      AppStore.emitChange();
      break;

    case actions.UPDATE_TITLE:
      updateTitle(action.index, action.previousTitle, action.newTitle);
      AppStore.emitChange();
      break;
    // add more cases for other actionTypes...
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
      activeSectionIndex: _activeSectionIndex
    };
  },

  save(){
    let updated = syncService.rawUpdate(_sections);

    updated.then(()=> {
      _savedSections = _prepareForDirtyCheck(_sections);
      AppStore.emitChange();
    });

    return updated;
  },

  isDirty(){
    return _prepareForDirtyCheck(_sections) !== _savedSections;
  },

  get(index){
    return _sections[index];
  },

  getBlock(slug){
    return getBlockBySlug(slug);
  },

  setTabState(state){
    _sidebarTabState = state;
    this.emitChange();
  },

  setSections(sections){
    _sections = sections;
    this.emitChange();
  },

  setMenuState(id, title, index){
    _menuState = {id, title, index};
    this.emitChange();
  },

  reorder(sections, index){
    setActiveSection(index);
    this.setSections(sections);
    liveService.rawUpdate(_sections);
  },

  rawUpdate(){
    liveService.rawUpdate(_sections);
  },

  // register store with dispatcher, allowing actions to flow through
  dispatcherIndex
});

module.exports = AppStore;
