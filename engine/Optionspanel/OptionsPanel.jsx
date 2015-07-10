const React     = require('react');
const Reflux    = require('reflux');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');

const AdminActions      = require('./OptionActions');
const OptionsPanelStore = require('./OptionStore.js');
const Content           = require('./Content.jsx');
const Tabs              = require('./Tabs.jsx');

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
