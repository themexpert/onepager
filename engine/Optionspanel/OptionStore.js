const _ = require('underscore');
require('../shared/lib/_mixins.js');

const Reflux        = require('reflux');
const Immutable     = require('immutable');
const OptionActions = require('./OptionActions.js');
const Sync          = require("../shared/lib/OptionsPanelSync.js");
const notify        = require("../shared/lib/notify.js");

const ODataStore = require('../shared/lib/ODataStore.js');
let options      = ODataStore.options;
let sync         = Sync(ODataStore.ajaxUrl, ODataStore.page);

function transformer(fields, panelId) {
  return fields.map(field=> {
    field.ref = _.uniqueId("ref_");

    if (options && options[panelId] && options[panelId][field.name]) {
      field.value = options[panelId][field.name];
    }

    return field;
  });
}

//add refs to control
let _optionPanel = _.map(_.copy(ODataStore.optionPanel), (panel)=> {
  panel.fields = transformer(panel.fields, panel.id);
  return panel;
});

let AppState = {
  activeTabIndex: 0,
  optionPanel   : Immutable.fromJS(_optionPanel)
};

//get tabs
AppState.tabs = AppState.optionPanel.map(tab=> {
  return {id: tab.get('id'), name: tab.get('name')};
}).toList();


let OptionsPanelStore = Reflux.createStore({
  listenables: [OptionActions],
  data       : AppState,
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
    let options = {}, panels = this.data.optionPanel.toJS();

    panels.map(function (panel) {
      options[panel.id] = panel.fields.reduce((map, control)=> {
        map[control.name] = control.value;
        return map;
      }, {});
    });

    let update = sync(options);

    //FIXME: move this to UI
    update.then(()=>{
      notify.success('Successfully saved settings');
      OptionActions.sync.completed();
    }, ()=>{
      OptionActions.sync.failed();
    });
  }

});

module.exports = OptionsPanelStore;
