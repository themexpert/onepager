module.exports = function(ajaxUrl, page){
	let data = {
		action: 'onepager_save_options',
		page: page
	};

	function sync(options){
		data.options = options;

		let promise = new Promise((resolve, reject)=>{
      jQuery.post(ajaxUrl, data, (res)=>{
			  return res.success ? resolve(res) : reject(res);
		  });
		});

		return promise;
	};

	return sync;
};