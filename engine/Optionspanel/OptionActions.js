var Reflux = require( 'reflux' );

var OptionsPanelActions = Reflux.createActions(
	{
		"sync": { asyncResult: true },
		"syncWithSections": { asyncResult: true },
		"isDirty":{ asyncResult: true },
		"update":{},
		"changeTab":{}
	}
);


module.exports = OptionsPanelActions;
