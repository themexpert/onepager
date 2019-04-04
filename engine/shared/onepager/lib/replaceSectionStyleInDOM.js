const $ = jQuery;

function replaceSectionStyleInDOM (sectionId, style) {
	$( `#style - ${sectionId}` ).remove();
	$( "head" ).append( style );
}

export default replaceSectionStyleInDOM;
