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

//implement immutable js
_optionPanel = Immutable.fromJS(_optionPanel);

//get tabs
let _tabs  = _optionPanel.map(tab=>{
  return {id: tab.get('id'), name: tab.get('name')};
}).toList();


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
  	this.trigger({optionPanel: this.data.optionPanel.set(index, panel)});
  }

});

module.exports = AdminStore;