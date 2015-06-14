const React       = require('react');
const PureMixin   = require('react/lib/ReactComponentWithPureRenderMixin');
const AppActions  = require('../../actions/AppActions');
const AppStore    = require('../../stores/AppStore');

let Block = React.createClass({
  mixins: [PureMixin],

  propTypes: {
    block: React.PropTypes.object
  },

  handleCreateSection() {
    AppActions.addSection(this.props.block);
    AppStore.setTabState({active: 'op-contents'});
    this.props.closeBlocks();
  },

  render() {
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
