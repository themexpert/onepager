const async = require('async');
const $     = jQuery; //jshint ignore: line
const notify             = require('./../shared/lib/notify');
const ODataStore         = require('./../shared/lib/ODataStore');
const SectionTransformer = require('./../shared/lib/SectionTransformer');
const AppActions         = require('./AppActions');

require('./../shared/lib/_mixins');

function AppSyncService(pageId, inactive, shouldSectionsSync) {

  let updateSection = function (sections, sectionIndex) {
    let payload = {
      pageId  : pageId,
      action  : 'onepager_save_sections',
      updated : sectionIndex,
      sections: SectionTransformer.simplifySections(sections),
    };

    let sync = function () {
      $.post(ODataStore.ajaxUrl, payload, (res)=> {
        if (!res || !res.success) {
          return notify.error('Unable to sync. Make sure you are logged in');
        }

        //else
        AppActions.sectionSynced(sectionIndex, res);

        if (pageId) {
          notify.success('Sync Successful');
        }

      });
    };

    async.series([
      (pass)=> inactive().then(pass, (err)=>console.log(err)),
      (pass)=> shouldSectionsSync(sections).then(pass),
      (pass)=> sync(pass)
    ]);
  };

  let rawUpdate = function (sections) {

    return new Promise((resolve, reject)=> {

      let payload = {
        pageId  : pageId,
        action  : 'onepager_save_sections',
        updated : null,
        sections: SectionTransformer.simplifySections(sections)
      };

      let sync = function () {
        $.post(ODataStore.ajaxUrl, payload, (res)=> {
          if (!res || !res.success) {
            notify.error('Unable to save. Make sure you are logged in'); //bad message

            return reject('Unable to save. Make sure you are logged in'); //bad message
          }


          if (pageId) {
            notify.success('Database Update Successful');
          }
          return resolve();
        });
      };

      async.series([
        (pass)=> inactive().then(pass),
        (pass)=> shouldSectionsSync(sections).then(pass),
        (pass)=> sync(pass)
      ]);
    });

  };

  function reloadSections(sections){
    return new Promise((resolve, reject)=>{
      let payload = {
        action: "onepager_reload_sections",
        sections: SectionTransformer.simplifySections(sections)
      };

      $.post(ODataStore.ajaxUrl, payload, (res)=> {
        if (!res || !res.success) {
          notify.error('Unable to save. Make sure you are logged in'); //bad message

          return reject('Unable to save. Make sure you are logged in'); //bad message
        }

        AppActions.updateSections(res.sections);

        if (pageId) {
          notify.success('Page reloaded');
        }

        return resolve();
      });

    });
  }

  function reloadBlocks(){
    let payload = {
      action  : 'onepager_reload_blocks'
    };

    return new Promise((resolve, reject)=>{
      jQuery.post(ODataStore.ajaxUrl, payload, (res)=>{
        return res.success ? resolve(res.blocks) : reject("Could not load blocks");
      })
    });
  }

  return {
    reloadSections,
    reloadBlocks,
    updateSection,
    rawUpdate
  };
}


module.exports = AppSyncService;
