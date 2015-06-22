const $               = jQuery; //jshint ignore: line
const SectionComputer = require('../lib/SectionComputer');
const notify          = require('../lib/notify');
const ODataStore      = require('./ODataStore');
const AppActions      = require('../actions/AppActions');
const async           = require('async');
//const _               = require('underscore');

require('../lib/_mixins');

function SyncService(pageId, inactive, shouldSectionsSync){

  let updateSection = function(sections, sectionIndex){
    let payload = {
      pageId  : pageId,
      action  : 'save_sections',
      updated : sectionIndex,
      sections: SectionComputer.simplifySections(sections),
    };

    let sync = function(){
      $.post(ODataStore.ajaxUrl, payload, (res)=>{
        if(!res || !res.success){
          return notify.error('Unable to sync. Make sure you are logged in');
        }

        //else
        AppActions.sectionSynced(sectionIndex, res);
        
        if(pageId){
          notify.success('Sync Successful');
        }

      });
    };

    async.series([
      (pass)=> inactive().then(pass),
      (pass)=> shouldSectionsSync(sections).then(pass),
      (pass)=> sync(pass)
    ]);
  };

  let rawUpdate = function(sections){
    
    return new Promise((resolve, reject)=>{

      let payload = {
        pageId  : pageId,
        action  : 'save_sections',
        updated : null,
        sections: SectionComputer.simplifySections(sections),
      };

      let sync = function(){
        $.post(ODataStore.ajaxUrl, payload, (res)=>{
          if(!res || !res.success){
            notify.error('Unable to save. Make sure you are logged in'); //bad message

            return reject('Unable to save. Make sure you are logged in'); //bad message
          }

          
          if(pageId){
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

  return {
    updateSection,
    rawUpdate
  };
}


module.exports = SyncService;
