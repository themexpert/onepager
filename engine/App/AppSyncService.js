const $     = jQuery;
const async = require('async');
const notify             = require('./../shared/plugins/notify');
const ODataStore         = require('./../shared/onepager/ODataStore');
const AppActions         = require('./flux/AppActions');

import {serializeSections}  from './../shared/onepager/sectionTransformer';

function AppSyncService(pageId, inactive, shouldSectionsSync) {

  let updateSection = function (sections, sectionIndex) {
    let payload = {
      pageId  : pageId,
      action  : 'onepager_save_sections',
      updated : sectionIndex,
      sections: serializeSections(sections)
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
        sections: serializeSections(sections)
      };

      let sync = function () {
        $.post(ODataStore.ajaxUrl, payload, (res)=> {
          if (!res || !res.success) {
            notify.error('Unable to save. Make sure you are logged in'); //bad message

            return reject('Unable to save. Make sure you are logged in'); //bad message
          }


          if (pageId) {
            notify.success('Page updated successfully');
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

  function updatePageSettings(sections){
    // debugger;
    return new Promise((resolve, reject)=>{
      let payload = {
        action: "onepager_save_page_settings",
        pageId: pageId
      };

      $.post(ODataStore.ajaxUrl, payload, (res)=> {
        if (!res || !res.success) {
          notify.error('Unable to save. Make sure you are logged in'); //bad message

          return reject('Unable to save. Make sure you are logged in'); //bad message
        }

        console.log('res', res);

        return resolve('i am new to onepager, dont fire me');
      });

    });
  }

  function reloadSections(sections){
    return new Promise((resolve, reject)=>{
      let payload = {
        action: "onepager_reload_sections",
        sections: sections
      };

      $.post(ODataStore.ajaxUrl, payload, (res)=> {
        if (!res || !res.success) {
          notify.error('Unable to save. Make sure you are logged in'); //bad message

          return reject('Unable to save. Make sure you are logged in'); //bad message
        }

        if (pageId) {
          notify.success('Page reloaded');
        }

        return resolve(res.sections);
      });

    });
  }

  function reloadBlocks(){
    let payload = {
      action  : 'onepager_reload_blocks'
    };
    // debugger;

    return new Promise((resolve, reject)=>{
      jQuery.post(ODataStore.ajaxUrl, payload, (res)=>{
        return res.success ? resolve(res.blocks) : reject("Could not load blocks");
      })
    });
  }

  function pageSyncServiceLive(sections, pageSettingOptions){
    let payload = {
      action : 'onepager_save_page_settings_live',
      pageId : pageId,
      options: pageSettingOptions,
      sections: sections, 
    };

    return new Promise( (resolve, reject) => {
      jQuery.post(ODataStore.ajaxUrl, payload, (res)=> {
        return res.success 
        ? resolve(res.optionStyleArr) 
        : reject('something went wrong');
      })
    });
  }

  return {
    reloadSections,
    reloadBlocks,
    updateSection,
    rawUpdate,
    updatePageSettings,
    pageSyncServiceLive
  };
}


module.exports = AppSyncService;
