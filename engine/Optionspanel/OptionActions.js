var Reflux = require('reflux');

var OptionsPanelActions = Reflux.createActions({
  "sync": { asyncResult: true },
  "update":{},
  "isDirty":{ asyncResult: true },
  "changeTab":{}
});


module.exports = OptionsPanelActions;
