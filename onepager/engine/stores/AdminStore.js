const _               = require('underscore');
const Reflux          = require('reflux');
const Immutable       = require('immutable');
const ODataStore      = require('./ODataStore.js');
const AdminActions    = require('../actions/AdminActions');


require('../lib/_mixins');

function transformer(fields){
  fields.forEach(field=>{
    field.ref = _.uniqueId("ref_");
  });

  return fields;
}

//add refs to controsl
let _optionPanel  = _.map(_.copy(ODataStore.optionPanel), (panel)=>{
	panel.fields = transformer(panel.fields);
	return panel;
});

//get tabs
let _tabs  = _.map(_optionPanel, tab=>{
  return {id: tab.id, name: tab.name};
});

//implement immutable js
_optionPanel = Immutable.fromJS(_optionPanel);

let AdminStore   = Reflux.createStore({
  listenables: [AdminActions],
  
  data: {
    tabs: _tabs,
    optionPanel: _optionPanel,
    activeTabIndex: 0
  },
  
  getInitialState(){
    return this.data;
  },

  init() {
  },

  onChangeTab(tabIndex){
    let data = {
      activeTabIndex: tabIndex
    };

    this.trigger(data);
  },
  onSaveTab(index, panel){
  	_optionPanel = _optionPanel.set(index, panel);

  	this.trigger({optionPanel: _optionPanel});
  }

});

module.exports = AdminStore;