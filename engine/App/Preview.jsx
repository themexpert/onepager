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
    let {sections, activeSectionIndex} = this.state;

    let viewSections = _.map(sections, function (section) {
      return _.pick(section, ['content', 'key']);
    });

    return (
        <SectionViewCollection
          activeSectionIndex={activeSectionIndex}
          sections={viewSections}/>
    );
  }
});

module.exports = Preview;
