const keyMirror = require('react/lib/keyMirror');

module.exports = {

  ActionTypes: keyMirror({
    ADD_TASK         : null,
    ADD_SECTION      : null,
    REMOVE_SECTION   : null,
    EDIT_SECTION     : null,
    ACTIVATE_SECTION : null,
    UPDATE_SECTION   : null,
    CLOSE_SECTION    : null,
    DUPLICATE_SECTION: null,
    ADD_TO_MENU      : null,
    SECTIONS_SYNCED  : null,
    RELOAD_SECTIONS  : null,
    RELOAD_BLOCKS    : null,
    UPDATE_SECTIONS  : null,
    UPDATE_TITLE     : null
  }),

  ActionSources: keyMirror({
    SERVER_ACTION: null,
    VIEW_ACTION  : null
  })

};
