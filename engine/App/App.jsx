import React from 'react';
import _ from 'underscore';
import cx from 'classnames';

import AppStore from './AppStore';
import AppActions from './AppActions';
import Sidebar from './components/sidebar/Sidebar.jsx';
import SectionViewCollection from './components/section-view/SectionViewCollection.jsx';

import localState from './../shared/onepager/localState.js';

let App = React.createClass({
  getInitialState() {
    return AppStore.getAll();
  },

  _onChange() {
    this.setState(AppStore.getAll());
  },

  componentDidUpdate: function (prevProps, prevState) {
    this._saveStateInLocalStorage();
    this._bindPlugins();

    if (this.state.collapseSidebar !== prevState.collapseSidebar) {
      this._setSidebarCollapseClass(this.state.collapseSidebar);
    }
  },

  _saveStateInLocalStorage(){
    let state = _.pick(this.state, 'activeSectionIndex', 'collapseSidebar', 'sidebarTabState');
    localState.set(state);
  },

  componentDidMount() {
    this._setSidebarCollapseClass(this.state.collapseSidebar);
    this._unsavedAlert();
    this._addBuildClassToBody();
    this._bindPlugins();

    AppStore.addChangeListener(this._onChange);
  },

  componentWillUnmount() {
    this._unbindPlugins();

    AppStore.removeChangeListener(this._onChange);
  },

  _bindPlugins(){
    jQuery('select.form-control').selectpicker();
    jQuery('[data-toggle="tooltip"]').tooltip()
  },

  _unbindPlugins(){
    jQuery('select.form-control').unbind();
    jQuery('[data-toggle="tooltip"]').unbind()
  },

  _unsavedAlert(){
    jQuery(window).on('beforeunload', ()=> {
      if (this.state.isDirty) {
        return "You haven't saved your changes and by leaving the page they will be lost.";
      }
    });
  },

  _addBuildClassToBody(){
    jQuery("body").addClass("op-build-active");
  },

  _setSidebarCollapseClass(collapse){
    if (collapse) {
      jQuery('body').addClass('op-sidebar-collapsed');
    } else {
      jQuery('body').removeClass('op-sidebar-collapsed');
    }
  },

  render() {
    let {sections, activeSectionIndex} = this.state;

    let viewSections = _.map(sections, function (section) {
      return _.pick(section, ['content', 'key']);
    });

    return (
      <div className="one-pager-app">
        <SectionViewCollection
          activeSectionIndex={activeSectionIndex}
          sections={viewSections}/>

        <Sidebar {...this.state}/>
      </div>
    );
  }
});

module.exports = App;
