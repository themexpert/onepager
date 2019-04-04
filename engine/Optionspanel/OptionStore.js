import _ from 'underscore';
import Reflux from 'reflux';
import Immutable, {fromJS} from 'immutable';
import notify from './../shared/plugins/notify.js';
import ShouldSync from '../shared/lib/ShouldSync.js';
import toolbelt from './../shared/lib/toolbelt.js';

import ODataStore from './../shared/onepager/ODataStore.js';
import OptionActions from './OptionActions.js';
import Sync from './OptionsPanelSync.js';
const SectionTransformer = require( './../shared/onepager/sectionTransformer' );

import LocalState from '../shared/lib/localState.js';

let componentLocalState = LocalState( 'onepager_settings_ui_state' )();

let options = ODataStore.options;
let sync = Sync( ODataStore.ajaxUrl, ODataStore.page );

function transformer(fields, panelId) {
	return fields.map(
		field => {
        field.ref = _.uniqueId( "ref_" );
        if (options && options[panelId] && options[panelId][field.name] !== undefined) {
				field.value = options[panelId][field.name];
			}
        return field;
		}
	);
}

// add refs to control
let _optionPanel = _.map(
	toolbelt.copy( ODataStore.optionPanel ),
	(panel) => {
    panel.fields = transformer( panel.fields, panel.id );
    return panel;
	}
);

let AppState = {
	// FIXME: this is source of potential bug
	activeTabIndex: componentLocalState.get( 'activeTabIndex', 0 ),
	synced: fromJS( _optionPanel ),
	optionPanel: fromJS( _optionPanel )
};

// get tabs
AppState.tabs = AppState.optionPanel.map(
	tab => {
    return {id: tab.get( 'id' ), name: tab.get( 'name' )};
	}
).toList();

let OptionsPanelStore = Reflux.createStore(
	{
		listenables: [OptionActions],
		data: AppState,

		getInitialState(){
			return this.data;
		},

		onChangeTab( tabIndex ){
			componentLocalState.set( {'activeTabIndex':tabIndex} );
			this.trigger( {activeTabIndex: tabIndex} );
		},

		onUpdate( keyPath, data ){
			this.data.optionPanel = this.data.optionPanel.setIn( keyPath, data );
			this.trigger( {optionPanel: this.data.optionPanel} );
		},


		onIsDirty(){
			let dirty = ! Immutable.is( this.data.synced, this.data.optionPanel );
			OptionActions.isDirty.completed( dirty );
		},

		setSyncedOptions() {
			this.data.synced = fromJS( this.data.optionPanel.toJS() );
			this.trigger( {synced: this.data.synced} );
			notify.success( 'Settings updated' );
		},

		onSyncWithSections( sections, callback ){
			let options = this._prepareOptionsForSync();
			let update = sync( options, sections );

			// FIXME: move this to UI
			update.then(
				(res) => {
                callback( res.sections );
                this.setSyncedOptions();
                OptionActions.syncWithSections.completed();
				},
				OptionActions.syncWithSections.failed
			);
		},

		onSync(){
			let options = this._prepareOptionsForSync();
			let update = sync( options );

			// FIXME: move this to UI
			update.then(
				() => {
                this.setSyncedOptions();
                OptionActions.sync.completed();
				},
				OptionActions.sync.failed
			);
		},

		_prepareOptionsForSync(){
			let options = {}, panels = this.data.optionPanel.toJS();

			panels.map(
				function (panel) {
					options[panel.id] = panel.fields.reduce(
						(map, control) => {
                        map[control.name] = control.value;
                        return map;
						},
						{}
					);
				}
			);

		return options;
		}

	}
);

module.exports = OptionsPanelStore;
