const $ = jQuery;
import toolbelt from '../shared/lib/toolbelt.js';

module.exports = function (ajaxUrl, page) {
	let data = {
		action: 'onepager_save_options',
		page: page
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
