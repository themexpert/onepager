import immutableUnserializeControls from './../../lib/transformer/controls/unserialize-controls.js';
import serializeControls from './../../lib/transformer/controls/serialize-controls.js';
import {fromJS} from 'immutable';

function unserializeControls(persistedControls, sourceControls){
	let serializedControls = fromJS( persistedControls );
	let unserializedControls = fromJS( sourceControls );

	return immutableUnserializeControls( serializedControls, unserializedControls ).toJS();
}

export {
	unserializeControls,
	serializeControls
};
