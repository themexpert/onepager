const dispatcher = require( './AppDispatcher.js' );
const actions = require( './AppConstants.js' ).ActionTypes;

module.exports = {
	openMenuScreen(){
		let type = actions.OPEN_MENU_SCREEN;
		dispatcher.handleViewAction( {type} );
	},

	addSection( section ) {
		let type = actions.ADD_SECTION;
		dispatcher.handleViewAction( {type, section} );
	},

	activateSection( index ){
		let type = actions.ACTIVATE_SECTION;
		dispatcher.handleViewAction( {type, index} );
	},

	editSection( index ){
		let type = actions.EDIT_SECTION;
		dispatcher.handleViewAction( {type, index} );
	},

	collapseSidebar( collapse ){
		let type = actions.COLLAPSE_SIDEBAR;
		dispatcher.handleViewAction( {type, collapse} );
	},

	updateSection( index, section ){
		let type = actions.UPDATE_SECTION;
		dispatcher.handleViewAction( {type, index, section} );
	},

	updateTitle( index, previousTitle, newTitle ){
		let type = actions.UPDATE_TITLE;
		dispatcher.handleViewAction( {type, index, previousTitle, newTitle} )
	},

	reloadSections() {
		let type = actions.RELOAD_SECTIONS;
		dispatcher.handleViewAction( {type} );
	},

	refreshSections( sections ){
		let type = actions.REFRESH_SECTIONS;
		dispatcher.handleViewAction( {type, sections} );
	},

	updateSections( sections ){
		let type = actions.UPDATE_SECTIONS;
		dispatcher.handleViewAction( {type, sections} );
	},

	removeSection( index ){
		let type = actions.REMOVE_SECTION;
		dispatcher.handleViewAction( {type, index} );
	},

	duplicateSection( index ){
		let type = actions.DUPLICATE_SECTION;
		dispatcher.handleViewAction( {type, index} );
	},

	sectionSynced( index, res ){
		let type = actions.SECTIONS_SYNCED;
		dispatcher.handleViewAction( {type, index, res} );
	},

	previewFrameLoaded(){
		let type = actions.PREVIEW_FRAME_LOADED;
		dispatcher.handleViewAction( {type} );
	}
};
