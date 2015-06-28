const _               = require('underscore');
require('../lib/_mixins');

const Reflux          = require('reflux');
const Immutable       = require('immutable');
const ODataStore      = require('./ODataStore');
const AdminActions    = require('../actions/AdminActions');
const Sync 						= require("../components/Admin/Sync");
const notify					= require("../lib/notify");

let sync 							= Sync(ODataStore.ajaxUrl, ODataStore.page);

function transformer(fields){
  return fields.map(field=>{
    field.ref = _.uniqueId("ref_");
    return field;
  });
}

//add refs to controsl
let _optionPanel  = _.map(_.copy(ODataStore.optionPanel), (panel)=>{
	panel.fields = transformer(panel.fields);
	return panel;
});

let AppState = {
    activeTabIndex: 0,
		//implement immutable js
		optionPanel: Immutable.fromJS(_optionPanel),
};

//get tabs
AppState.tabs = AppState.optionPanel.map(tab=>{
  return {id: tab.get('id'), name: tab.get('name')};
}).toList();



let AdminStore   = Reflux.createStore({
  listenables: [AdminActions],
  data: AppState,
  getInitialState(){
    return this.data;
  },

  onChangeTab(tabIndex){
    this.trigger({activeTabIndex: tabIndex});
  },

  onUpdate(index, panel){
  	this.data.optionPanel = this.data.optionPanel.set(index, panel);
  	this.trigger({optionPanel: this.data.optionPanel});
  },

  onSync(){
		let options ={}, panels = this.data.optionPanel.toJS();

		panels.map(function(panel){
			options[panel.id] = panel.fields.reduce((map, control)=>{
				map[control.name] = control.value;
				return map;
			}, {});
		});

		let update = sync(options);
		update.then(notify.success.bind(this, 'successfully saved, %s'));
  }

});

module.exports = AdminStore;