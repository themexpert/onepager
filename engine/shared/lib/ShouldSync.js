import _ from 'underscore';
import toolbelt from './toolbelt.js';

function ShouldSync(initialData, name) {
	let lastData = toolbelt.copy( initialData ); // immutable please

	function check(newData) {
		return new Promise(
			(resolve, reject) => {
            let dataChanged = toolbelt.costlyIsEqual( lastData, newData );
            if (dataChanged) {
					return reject( `${name} did not change so no need to sync now` );
				}
            lastData = toolbelt.copy( newData );
            console.log( `${name} changed so we should sync now` );
            return resolve();
			}
		);
	}

	return check;
}

module.exports = ShouldSync;
