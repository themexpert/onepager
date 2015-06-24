'use strict';

const Reflux  			= require('reflux');
const _ 						= require('underscore');

const ODataStore  	= require('./ODataStore.js');
const AdminActions 	= require('../actions/AdminActions');


let OptionStore 	= Reflux.createStore({
    listenables: [AdminActions],

    init() {
      this.options = _.copy(ODataStore.options);
      
    },


    getDefaultData() {
        return {
            options: this.options,
        };
    }

});

module.exports = OptionStore;