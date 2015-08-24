const React     = require('react');
const Reflux    = require('reflux');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');

const OptionsPanelStore = require('../../../Optionspanel/OptionStore.js');
const Content           = require('../../../Optionspanel/Content.jsx');
const Tabs              = require('../../../Optionspanel/Tabs.jsx');

let Admin = React.createClass({
  mixins: [PureMixin, Reflux.connect(OptionsPanelStore)],

  propTypes: {
    whenSettingsDirty: React.PropTypes.func
  },
  componentDidMount: function() {
    this._bindPlugins();
  },

  componentDidUpdate: function(prevProps, prevState) {
    this._bindPlugins();
  },

  componentWillUnmount: function() {
    this._unbindPlugins();
  },

  _bindPlugins(){
    jQuery('select.form-control').selectpicker();
    jQuery('[data-toggle="tooltip"]').tooltip()
  },

  _unbindPlugins(){
    jQuery('select.form-control').unbind();
    jQuery('[data-toggle="tooltip"]').unbind()
  },
  render(){
    console.log("rendering Admin");

    return (
      <div>
        <Tabs
          active={this.state.activeTabIndex}
          tabs={this.state.tabs}/>

        <Content
          whenSettingsDirty={this.props.whenSettingsDirty}
          index={this.state.activeTabIndex}
          panel={this.state.optionPanel.get(this.state.activeTabIndex)}/>
      </div>
    );
  }
});

module.exports = Admin;
