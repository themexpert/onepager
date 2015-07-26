const _ = require('underscore');
var slugify = require("underscore.string/slugify");
var trim = require("underscore.string/trim");

_.mixin({
  copy(obj){
    return JSON.parse(JSON.stringify(obj));
  },

  randomId(prefix){
    prefix = prefix || "";
    return _.uniqueId(prefix + Math.ceil(Math.random() * 1000000));
  },

  move(array, fromIndex, toIndex) {
    let arr = _.copy(array);
    arr.splice(toIndex, 0, arr.splice(fromIndex, 1)[0]);
    return arr;
  },

  dasherize(str){
    return slugify(trim(str));
  },

  getPosition(element) {
    var xPosition = 0;
    var yPosition = 0;

    while (element) {
      xPosition += (element.offsetLeft - element.scrollLeft + element.clientLeft);
      yPosition += (element.offsetTop - element.scrollTop + element.clientTop);
      element = element.offsetParent;
    }
    return {x: xPosition, y: yPosition};
  },

  pushAt(arr, index, item){
    let spliced = arr.splice(index);
    arr.push(item);
    return arr.concat(spliced);
  },

  isUniqueInArrayExcept(items, item, index){
    //remove given element
    items.splice(index, 1);

    return items.indexOf(item) === -1;
  },

  isUniquePropInArray(list, index, propName, id){
    let props = _.map(list, function (item) {
      return item[propName];
    });

    return _.isUniqueInArrayExcept(props, id, index);
  }
});
