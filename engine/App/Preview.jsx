import React from 'react';
import _ from 'underscore';
import SectionViewCollection from './components/section-view/SectionViewCollection.jsx';

let AppStore  = parent.AppStore;
let AppActions  = parent.AppActions;

let Preview = React.createClass({
  getInitialState() {
    return AppStore.getAll();
  },

  _onChange() {
    this.setState(AppStore.getAll());
  },

  componentDidMount() {
    AppActions.previewFrameLoaded();
    AppStore.addChangeListener(this._onChange);
  },

  componentWillUnmount() {
    AppStore.removeChangeListener(this._onChange);
  },

  render() {
    let {sections, activeSectionIndex, pageID} = this.state;
    
    let viewSections = _.map(sections, function (section) {
      return _.pick(section, ['content', 'key', 'style', 'id', 'page_style']);
    });

    return (
        <SectionViewCollection
          activeSectionIndex={activeSectionIndex}
          pageID = {pageID}
          sections={viewSections}/>
    );
  }
});

module.exports = Preview;
