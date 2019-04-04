const $ = jQuery;
const _ = require( 'underscore' );

function stripClassesFromHTML(list, content) {
	let $section = $( "<div />", {html: content} );

	_.each(
		list,
		function (classNames, selector) {
			_.each(
				classNames,
				function (className) {
					$section.find( selector ).removeClass( className );
				}
			);
		}
	);

	return $section.html();
}

export default stripClassesFromHTML;
