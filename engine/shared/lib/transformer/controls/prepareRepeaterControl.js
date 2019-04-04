import prepareSimpleControl from './prepareSimpleControl.js';
import _ from 'underscore';

function prepareMergedRepeatGroups(groups, serializedGroups) {
	return groups.map(
		function (group, index) {
			let serializedGroup = serializedGroups.get( index );
			return prepareMergedRepeatGroup( group, serializedGroup );
		}
	);
}

function prepareMergedRepeatGroup(group, serializedGroup) {
	return group.map(
		control => {
			let name = control.get( 'name' );
			let value = serializedGroup.get( name );
			return prepareSimpleControl( control, value );
		}
	);
}


function prepareRepeaterControl(repeatControl, serializedControls) {
	let name = repeatControl.get( 'name' );
	let repeatGroups = repeatControl.get( 'fields' );
	let serializedRepeatGroups = serializedControls.get( name );

	/**
	 * If we have an empty fields slot then return as it is
	 */
	if (repeatGroups.size === 0) {
		return repeatControl;
	}

	/**
	 * It is possible that sometimes totalDbGroups is text, false
	 * and every imaginable value so even if it is not an array
	 * lets take it as an array and return 1
	 */
	let defaultTotalGroups = repeatGroups.size;
	let totalDbGroups = serializedRepeatGroups.size || 1; // at least one group is required

	/**
	 * say we have default 3 groups
	 * and user have deleted one
	 * so now we have 2 in database
	 * The number of groups lacking in unserialized groups
	 */
	let lackingGroups = totalDbGroups - defaultTotalGroups;
	let groupSchema = repeatGroups.get( 0 );

	if (lackingGroups > 0) {
		/*if unserialized list is lacking add those from schema */
		_.times( lackingGroups, () => repeatGroups = repeatGroups.push( groupSchema ) );
	} else {
		/*if unserialized has more lets slice it*/
		repeatGroups = repeatGroups.slice( 0, totalDbGroups );
	}

	repeatGroups = prepareMergedRepeatGroups( repeatGroups, serializedRepeatGroups );
	return repeatControl.setIn( ['fields'], repeatGroups );
}

export default prepareRepeaterControl;
