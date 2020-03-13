const keyMirror = require( 'react/lib/keyMirror' );

module.exports = {
	ActionTypes: keyMirror(
		{
			ADD_TASK         : null,
			ADD_SECTION      : null,
			REMOVE_SECTION   : null,
			EDIT_SECTION     : null,
			ACTIVATE_SECTION : null,
			UPDATE_SECTION   : null,
			CLOSE_SECTION    : null,
			DUPLICATE_SECTION: null,
			OPEN_MENU_SCREEN : null,
			SECTIONS_SYNCED  : null,
			RELOAD_SECTIONS  : null,
			REFRESH_SECTIONS : null,
			RELOAD_BLOCKS    : null,
			UPDATE_SECTIONS  : null,
			UPDATE_TITLE     : null,
			COLLAPSE_SIDEBAR : null,
			PREVIEW_FRAME_LOADED : null,
			UPDATE_PAGE_SETTINGS : null,
			UPDATE_PAGE_STYLE : null,
			UPDATE_PAGE_ADVANCE : null,
		}
	),

ActionSources: keyMirror(
	{
		SERVER_ACTION: null,
		VIEW_ACTION  : null
	}
)

};
