import toolbelt from '../../toolbelt.js';
import _ from 'underscore';

function getRef() {
	return toolbelt.randomId( "ref_" );
}

export function prepareSingleRepeaterInputs(schema, val) {
	let input = schema.set( 'ref', getRef() );
	return input.set( 'value', val );
}

export function addRefsToSingleRepeatControls(control) {
	let schema = control.delete( 'label' );
	return control.get( 'value' ).map( prepareSingleRepeaterInputs.bind( null, schema ) );
}

export function addRefsToGroupRepeaterControl(control) {
	let groups = control.get( 'fields' );

	if (groups.size === undefined) {
		let msg = control.get( 'name' ) + ' control is a group repeater but do not have any group of controls';
		throw new Error( msg );
	}

	groups = groups.map(
		function (group) {
			return group.map(
				function (gControl) {
					return addRefToSimpleControl( gControl );
				}
			);
		}
	);

	return control.set( 'fields', groups );
}

export function addRefToSimpleControl(control) {
	let value = control.get( 'value' );
	control = control.set( 'ref', getRef() );

	// value && --- because value might not exist in note, divider
	if (value && value.size !== undefined) {
		return control.set( 'inputs', addRefsToSingleRepeatControls( control ) );
	} else {
		return control;
	}
}

function addRefToControl(control) {
	let type = control.get( 'type' );
	control = control.set( 'ref', getRef() );

	if (type === "repeater") {
		return addRefsToGroupRepeaterControl( control );
	} else {
		return addRefToSimpleControl( control );
	}
}

export function addRefToControls(controls) {
	return controls.map( addRefToControl );
}
