const React      = require('react');
const PureMixin  = require('react/lib/ReactComponentWithPureRenderMixin');
const AppActions = require('../../AppActions.js');
const AppStore   = require('../../AppStore.js');

import "./assets/block.less";

let Block = React.createClass({
  mixins: [PureMixin],

  propTypes: {
    block: React.PropTypes.object
  },

  handleCreateSection() {
    AppActions.addSection(this.props.block);
    // AppStore.setTabState({active: 'op-contents'});
  },

  render() {
    console.log("rendering block");
    let block = this.props.block;

    return (
      <div className="thumbnail">
        <div className="flex flex-center flex-middle">
          <button className="btn btn-primary btn-add-block" onClick={this.handleCreateSection}>add</button>
        </div>
        <img src={block.image} alt={block.name} style={{width: "100%"}}/>
        <span className="label label-default">{block.name}</span>
      </div>
    );
  }
});

module.exports = Block;
