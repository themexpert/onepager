const $ = jQuery;
import toolbelt from '../shared/lib/toolbelt.js';

module.exports = function (ajaxUrl, page, pageID='') {
	let data = {
		// action: 'onepager_save_options',
		action: 'onepager_save_page_settings',
		page: page,
		pageID: pageID
	};

	function send(data){
		return new Promise(
			(resolve, reject) => {
            $.post(
					ajaxUrl,
					data,
					(res) => {
                    return res.success ? resolve( res ) : reject( res );
					}
				);
			}
		);
	}

	function sync(options, sections=null) {
		let payload = toolbelt.copy( data );
		payload.options = options;

		if (sections) {
			payload.sections = sections;
		}

		return send( payload );
	}

	return sync;
};
