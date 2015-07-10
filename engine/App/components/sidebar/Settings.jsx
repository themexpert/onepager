const React     = require('react');
const Reflux    = require('reflux');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');

const OptionsPanelStore = require('../../../Optionspanel/OptionStore.js');
const Content           = require('../../../Optionspanel/Content.jsx');
const Tabs              = require('../../../Optionspanel/Tabs.jsx');

let Admin = React.createClass({
  mixins: [PureMixin, Reflux.connect(OptionsPanelStore)],

  render(){
    console.log("rendering Admin");

    return (
      <div>
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

module.exports = Admin;
