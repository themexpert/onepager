const React     = require('react');
const Reflux    = require('reflux');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');

const OptionsPanelStore = require('../../../Optionspanel/OptionStore.js');
const Content           = require('../../../Optionspanel/Content.jsx');
const Tabs              = require('../../../Optionspanel/Tabs.jsx');

let Admin = React.createClass({
  mixins: [Reflux.connect(OptionsPanelStore)],

  propTypes: {
    whenSettingsDirty: React.PropTypes.func,
    pagUpdate: React.PropTypes.func
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
    console.log("rendering Admin from settings file");
    let panel = this.state.optionPanel.get(this.state.activeTabIndex);
    
    return (
      <div>
        <Tabs
          active={this.state.activeTabIndex}
          tabs={this.state.tabs}/>

        {!panel? null:
          <Content
            whenSettingsDirty={this.props.whenSettingsDirty}
            pagUpdate={this.props.pagUpdate}
            index={this.state.activeTabIndex}
            panel={panel}/>
        }
      </div>
    );
  }
});

module.exports = Admin;
