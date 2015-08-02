const React                 = require('react');
const AppStore              = require('./AppStore');
const AppActions            = require('./AppActions');
const Sidebar               = require('./components/sidebar/Sidebar.jsx');
const SectionViewCollection = require('./components/section-view/SectionViewCollection.jsx');
const _                     = require('underscore');
const cx = require('classnames');

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
        return "You haven't saved your changes and by leaving the page they will be lost.";
      }
    });

    jQuery("body").addClass("op-build-active");

    AppStore.addChangeListener(this._onChange);
  },

  componentWillUnmount() {
    AppStore.removeChangeListener(this._onChange);
  },

  collapseSidebar(){
    AppActions.collapseSidebar(!this.state.collapseSidebar);
  },

  render() {
    let {sections, activeSectionIndex, collapseSidebar} = this.state;

    let viewSections = _.map(sections, function (section) {
      return _.pick(section, ['content', 'key']);
    });

    let styles = {
      fontSize: 30,
      zIndex: 99999999999999999,
      color: "red",
      backgroundColor: 'blue',
      position: 'fixed',
      bottom: 0
    };

    let classes = cx({
      "fa fa-chevron-circle-left": !collapseSidebar,
      "fa fa-chevron-circle-right": collapseSidebar
    });

    return (
      <div className="one-pager-app">
        <SectionViewCollection
          collapseSidebar={collapseSidebar}
          activeSectionIndex={activeSectionIndex}
          sections={viewSections}/>

        <Sidebar {...this.state}/>

        <div className="restore-sidebar" style={styles}>
          <span onClick={this.collapseSidebar} className={classes}></span>
        </div>
      </div>
    );
  }
});

module.exports = App;
