const React = require('react');
const Reflux = require('reflux');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');

const AdminActions = require('../actions/OptionsPanelActions');
const OptionsPanelStore = require('../stores/OptionsPanelStore.js');
const Content = require('./Optionspanel/Content.jsx');
const Tabs = require('./Optionspanel/Tabs.jsx');

let OptionsPanel = React.createClass({
  mixins: [PureMixin, Reflux.connect(OptionsPanelStore)],

  render(){
    console.log("rendering OptionsPanel");

    return (
      <div>
        <button onClick={AdminActions.sync} className="btn btn-primary">Save</button>

        <Tabs
          active={this.state.activeTabIndex}
          tabs={this.state.tabs}/>

        <Content
          index={this.state.activeTabIndex}
          panel={this.state.optionPanel.get(this.state.activeTabIndex)}/>
      </div>
    );
  }
});

module.exports = OptionsPanel;
