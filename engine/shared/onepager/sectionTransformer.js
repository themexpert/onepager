import replaceSectionStyleInDOM from './lib/replaceSectionStyleInDOM.js';
import stripClassesFromHTML from './../lib/transformer/html/stripClassesFromHTML.js';
import unifySection from './transformer/block2section.js';

import unserializeSection from './transformer/sectionUnserializer.js';
import serializeSection from './transformer/sectionSerializer.js';

import _ from 'underscore';

function findBlockBySectionSlug(blocks, slug) {
	return _.find( blocks, {slug} );
}

function unserializeSections(sections, blocks) {
	return _.map(
		sections,
		function (section) {
			let block = findBlockBySectionSlug( blocks, section.slug );

			return unserializeSection( section, block );
		}
	).filter( Boolean );
}

function serializeSections(sections) {
	return _.map( sections, serializeSection );
}

export {
	serializeSections,
	unserializeSections,
	unifySection,
	stripClassesFromHTML,
	replaceSectionStyleInDOM
};
