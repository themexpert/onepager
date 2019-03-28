const $ = jQuery;
import toolbelt from '../shared/lib/toolbelt.js';
import ODataStore from './../shared/onepager/ODataStore.js';

module.exports = function (ajaxUrl, page) {
  let data = {
    action: 'onepager_save_options',
    page: page
  };

  function send(data){
    data['page'] = window.settings_type;
    data['pageID'] = ODataStore.pageId;

    return new Promise((resolve, reject)=> {
      $.post(ajaxUrl, data, (res)=> {
        window.settings_type = 'onepager';

        return res.success ? resolve(res) : reject(res);
      });
    });
  }

  function sync(options, sections=null) {
    let payload = toolbelt.copy(data);
    payload.options = options;


    if(sections) payload.sections = sections;

    return send(payload);
  }

  return sync;
};
