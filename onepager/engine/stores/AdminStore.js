const _               = require('underscore');
const s               = require('string');
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

let iblet = {
	where(list, prop, val){
		return list.filter((item)=>{
			return item.get(prop) === val;
		});
	}
};

let _options  = transformer(_.copy(ODataStore.config));
let _tabs  = _.chain(_options).pluck('tab').unique().map((tab)=>{
  let id = s(tab.trim()).dasherize().s;
  return {id: id, name: tab};
}).value();

_options = Immutable.fromJS(_options);


let AdminStore   = Reflux.createStore({
  listenables: [AdminActions],
  
  data: {
    tabs: _tabs,
    options: _options,
    activeTab: _tabs[0].name,
	  activeTabOptions: iblet.where(_options, 'tab', _tabs[0].name)
  },
  
  getInitialState(){
    return this.data;
  },

  init() {

  },

  onChangeTab(tabIndex){
    let tab = _tabs[tabIndex];
    
    let data = {
      activeTab: tab.name,
      activeTabOptions: iblet.where(_options, 'tab', tab.name)
    };

    this.trigger(data);
  }

});

module.exports = AdminStore;