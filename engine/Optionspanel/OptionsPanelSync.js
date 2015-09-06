const $ = jQuery;

module.exports = function (ajaxUrl, page) {
  let data = {
    action: 'onepager_save_options',
    page: page
  };

  function sync(options) {
    data.options = options;

    return new Promise((resolve, reject)=> {
      $.post(ajaxUrl, data, (res)=> {
        return res.success ? resolve(res) : reject(res);
      });
    });

  }

  return sync;
};
