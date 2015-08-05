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

  _setSidebarCollapseClass(collapse){
    if(collapse){
      jQuery('body').addClass('op-sidebar-collapsed');
    } else {
      jQuery('body').removeClass('op-sidebar-collapsed');
    }
  },

  componentDidUpdate: function(prevProps, prevState) {
    if(this.state.collapseSidebar !== prevState.collapseSidebar){
      this._setSidebarCollapseClass(this.state.collapseSidebar);
    }
  },

  componentDidMount() {
    this._setSidebarCollapseClass(this.state.collapseSidebar);

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
