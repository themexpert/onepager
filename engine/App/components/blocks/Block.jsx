const React      = require('react');
const PureMixin  = require('react/lib/ReactComponentWithPureRenderMixin');
const AppActions = require('../../AppActions.js');
const AppStore   = require('../../AppStore.js');

let Block = React.createClass({
  mixins: [PureMixin],

  propTypes: {
    block: React.PropTypes.object
  },

  handleCreateSection() {
    AppActions.addSection(this.props.block);
    AppStore.setTabState({active: 'op-contents'});
  },

  render() {
    console.log("rendering block");
    let block = this.props.block;

    return (
      <div className="thumbnail" onClick={this.handleCreateSection}>
        <img src={block.image} alt={block.name} style={{width: "100%"}}/>
        <span className="label label-default">{block.name}</span>
      </div>
    );
  }
});

module.exports = Block;
