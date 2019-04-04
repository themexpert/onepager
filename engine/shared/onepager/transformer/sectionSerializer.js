import {serializeControls}  from './controls.js';

function serializeSection(section) {
	return {
		id: section.id,
		slug: section.slug,
		title: section.title,
		contents: serializeControls( section.contents ),
		settings: serializeControls( section.settings ),
		styles: serializeControls( section.styles )
	};
}

export default serializeSection;
