const React                 = require('react');
const AppStore              = require('./AppStore');
const Sidebar               = require('./components/sidebar/Sidebar.jsx');
const SectionViewCollection = require('./components/section-view/SectionViewCollection.jsx');
const _                     = require('underscore');

let App = React.createClass({
  getInitialState() {
    return AppStore.getAll();
  },

  _onChange() {
    this.setState(AppStore.getAll());
  },

  componentDidMount() {
    jQuery(window).on('beforeunload', ()=> {
      if (this.state.isDirty) {
        return "You have unsaved changes!!";
      }
    });

    jQuery("body").addClass("op-build-active");

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
      <div className="one-pager-app">
        <SectionViewCollection activeSectionIndex={activeSectionIndex} sections={viewSections}/>
        <Sidebar {...this.state}/>
      </div>
    );
  }
});

module.exports = App;
