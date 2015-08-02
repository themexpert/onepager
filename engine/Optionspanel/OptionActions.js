var Reflux = require('reflux');

var OptionsPanelActions = Reflux.createActions({
  "sync": { asyncResult: true },
  "update":{},
  "changeTab":{}
});


module.exports = OptionsPanelActions;
