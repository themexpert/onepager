const _ = require('underscore');


_.mixin({
  copy(obj) {
    return JSON.parse(JSON.stringify(obj));
  },

  randomId(prefix) {
    prefix = prefix || "";
    return _.uniqueId(prefix + Math.ceil(Math.random() * 1000000));
  },

  move(array, fromIndex, toIndex) {
    let arr = _.copy(array);
    arr.splice(toIndex, 0, arr.splice(fromIndex, 1)[0]);
    return arr;
  },

  pushAt(arr, index, item){
    let spliced = arr.splice(index);
    arr.push(item);
    
    return arr.concat(spliced);
  }
});
