/**
 * -------------------------------------------------------------------------------------
 * WHY IS THIS?
 * -------------------------------------------------------------------------------------
 * -------------------------------------------------------------------------------------
 * A section is stored in server as a key value pair
 * {
 *  contents: {
 *    title: "This is title",
 *    description: "This is a description",
 *    slides: [
 *      {title: "Slide 1", description: "Description 1"},
 *      {title: "Slide 2", description: "Description 2"}
 *    ]
 *  },
 *  settings: {
 *    show_title: true,
 *  },
 *  styles: {
 *    background: red
 *  }
 * }
 *
 * We have other metadata for each control for example text field
 * {name: "title", label: "Title", placeholder: "title", value: "This is title"}
 *
 * Now we need to place the value of persisted key into the metadata that way
 * We wont need to stored the metadata into database. A memory save with other benefits.
 */

import {fromJS} from 'immutable';
import prepareSimpleControl from './prepareSimpleControl.js';
import prepareRepeaterControl from './prepareRepeaterControl.js';

/**
 * The main function that transforms a group of controls
 *
 * @returns {*}
 * @param serializedControls
 * @param unserializedControls
 */
export default function (serializedControls, unserializedControls) {
	/**
	 * There is no need to go beyond this checkpoint if there is no serialized data
	 * Imagine we have no persisted data and yet we want to pass an empty object
	 * In that case maybe we wanted the unserialized controls so lets return it
	 *
	 * TODO: Think of throwing an error later in v1.2
	 */
	if ( ! serializedControls || ! serializedControls.size) {
		return unserializedControls;
	}

	return unserializedControls.map(
		control => {
			if (control.get( 'type' ) === "repeater") {
				return prepareRepeaterControl( control, serializedControls );
			}
			let value = serializedControls.get( control.get( 'name' ) );
			return prepareSimpleControl( control, value );
		}
	);
}
