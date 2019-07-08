import _ from 'underscore';

function groupControls(group){
	return _.chain( group )
	.map( control => [control.name, simpleControl( control )] )
	.object()
	.value();
}

function simpleControl(control){
	return control.value;
}

function repeaterControl(control){
	return _.map( control.fields, groupControls );
}

export default function (controls) {
	return _.reduce(
		controls,
		function (collection, control) {
			let name = control.name;

			/**
			 * If a control does not have a name
			 * return the collection
			 *
			 * (divider, note)
			 */
			if ( ! name) {
				return collection;
			}

			if (control.type === "repeater") {
				collection[name] = repeaterControl( control );
			} else {
				collection[name] = simpleControl( control );
			}

			// return simplified obj
			return collection;
		},
		{}
	);
}
