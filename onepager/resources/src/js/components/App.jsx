const React                 = require('react');
const AppStore              = require('../stores/AppStore');
const Sidebar               = require('./sidebar/Sidebar.jsx');
const SectionViewCollection = require('./section-view/SectionViewCollection.jsx');
const _                     = require('underscore');
// const swal                  = require('sweetalert');

let App = React.createClass({
  getInitialState() {
    return AppStore.getAll();
  },

  _onChange() {
    this.setState(AppStore.getAll());
  },

  componentDidMount() {
    jQuery(window).on('beforeunload', ()=>{
      if(this.state.isDirty){
        return "You have unsaved changes!!";
      }
    });

    AppStore.addChangeListener(this._onChange);
  },

  componentWillUnmount() {
    AppStore.removeChangeListener(this._onChange);
  },

  render() {
    let {sections, activeSectionIndex} = this.state;

    let viewSections = _.map(sections, function(section){
      return _.pick(section, ['content', 'key']);
    });

    return (
      <div className="one-pager-app">
          <SectionViewCollection activeSectionIndex={activeSectionIndex} sections={viewSections} />
          <Sidebar {...this.state}/>
      </div>
    );
  }
});

module.exports = App;
