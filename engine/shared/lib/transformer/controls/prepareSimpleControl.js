/**
 * A simple control is only a key value pair
 * {title: "Simple Title"}
 *
 * So if we place the value inside the unserialized control voila
 * {name: "title", label: "Title", value: "Simple Title"}
 *
 * @param control
 * @param value
 * @returns {*}
 */
function prepareSimpleControl(control, value) {
	let name = control.get( 'name' );

	/**
	 * If an input type text is changed into input type single-repeater
	 * then we will not replace the text value inside single repeater
	 * we will use the default value
	 */
	if (typeof control.get( 'value' ) === typeof value) {
		return control.set( 'value', value );
	}

	return control;
}


export default prepareSimpleControl;
