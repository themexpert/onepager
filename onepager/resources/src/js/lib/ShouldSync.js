const _ = require('underscore');

require('../lib/_mixins');


function ShouldSync(initialData, name){
  let lastData = _.copy(initialData); //immutable please


  function check(newData){
    let updatePromise = new Promise((resolve, reject)=>{

      if( JSON.stringify(lastData) === JSON.stringify(newData) ){
        return reject(`${name} did not change so no need to sync now`);
      }

      lastData  = _.copy(newData);
      
      console.log(`${name} changed so we should sync now`);
      return resolve();
    });

    return updatePromise;
  };

  return check;
}

module.exports = ShouldSync;