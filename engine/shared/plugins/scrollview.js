const $ = jQuery;

// scrollTop: jQuery(el).offset().top - 32 //32px wpadminbar height
module.exports = function (el) {
	$( 'html, body' ).animate(
		{
			scrollTop: $( el ).offset().top
		},
		1000
	);
};
