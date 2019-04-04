import stripClassesFromHTML from './../../lib/transformer/html/stripClassesFromHTML.js';
import {unserializeControls}  from './controls.js';
import toolbelt from './../../lib/toolbelt.js';
import unifySection from './block2section.js';

function sectionUnserializer(section, block) {
	// what if a block disappears
	if ( ! block) {
		return false;
	}

	block = toolbelt.copy( block );
	block.id = section.id;
	block.title = section.title;
	block.style = section.style;
	block.content = stripClassesFromHTML( block.livemode, section.content );
	block.contents = unserializeControls( section.contents, block.contents );
	block.settings = unserializeControls( section.settings, block.settings );
	block.styles = unserializeControls( section.styles, block.styles );

	block = unifySection( block );

	return block;
}

export default sectionUnserializer;
