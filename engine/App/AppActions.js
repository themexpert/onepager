var AppDispatcher = require('./AppDispatcher.js');
var Constants     = require('./AppConstants.js');

module.exports = {
  addSection (section) {
    AppDispatcher.handleViewAction({
      type   : Constants.ActionTypes.ADD_SECTION,
      section
    });
  },

  activateSection(index){
    AppDispatcher.handleViewAction({
      type : Constants.ActionTypes.ACTIVATE_SECTION,
      index
    });
  },

  editSection (index){
    AppDispatcher.handleViewAction({
      type : Constants.ActionTypes.EDIT_SECTION,
      index
    });
  },

  updateSection (index, section){
    AppDispatcher.handleViewAction({
      type   : Constants.ActionTypes.UPDATE_SECTION,
      index,
      section
    });
  },

  updateTitle(index, previousTitle, newTitle){
    AppDispatcher.handleViewAction({
      type : Constants.ActionTypes.UPDATE_TITLE,
      index,
      previousTitle,
      newTitle
    })
  },

  reloadSections() {
    AppDispatcher.handleViewAction({
      type   : Constants.ActionTypes.RELOAD_SECTIONS
    });
  },

  updateSections(sections){
    AppDispatcher.handleViewAction({
      type: Constants.ActionTypes.UPDATE_SECTIONS,
      sections
    });
  },

  removeSection (index){
    AppDispatcher.handleViewAction({
      type : Constants.ActionTypes.REMOVE_SECTION,
      index
    });
  },

  duplicateSection (index){
    AppDispatcher.handleViewAction({
      type : Constants.ActionTypes.DUPLICATE_SECTION,
      index
    });
  },

  sectionSynced(index, res){
    AppDispatcher.handleViewAction({
      type : Constants.ActionTypes.SECTIONS_SYNCED,
      index,
      res
    });
  }
};
