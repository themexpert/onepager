var AppDispatcher = require('../dispatchers/AppDispatcher');
var Constants     = require('../constants/AppConstants');

module.exports = {
  addSection (section) {
    AppDispatcher.handleViewAction({
      type: Constants.ActionTypes.ADD_SECTION,
      section: section
    });
  },

  editSection (index){
    AppDispatcher.handleViewAction({
      type: Constants.ActionTypes.EDIT_SECTION,
      index: index
    });
  },
  closeSection (index){
    AppDispatcher.handleViewAction({
      type : Constants.ActionTypes.CLOSE_SECTION,
      index: index
    });
  },

  updateSection (index, section){
    AppDispatcher.handleViewAction({
      type   : Constants.ActionTypes.UPDATE_SECTION,
      index  : index,
      section: section,
    });
  },

  removeSection (index){
    AppDispatcher.handleViewAction({
      type : Constants.ActionTypes.REMOVE_SECTION,
      index: index
    });
  },

  duplicateSection (index){
    AppDispatcher.handleViewAction({
      type : Constants.ActionTypes.DUPLICATE_SECTION,
      index: index
    });
  },

  sectionSynced(index, res){
    AppDispatcher.handleViewAction({
      type : Constants.ActionTypes.SECTIONS_SYNCED,
      index: index,
      res  : res
    });
  }

};
