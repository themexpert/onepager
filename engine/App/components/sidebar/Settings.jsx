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
