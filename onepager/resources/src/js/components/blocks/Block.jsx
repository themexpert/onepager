const React = require('react');
const AppActions = require('../../actions/AppActions');
const AppStore = require('../../stores/AppStore');
const ReactComponentWithPureRenderMixin = require('react/lib/ReactComponentWithPureRenderMixin');

let Block = React.createClass({
  mixins: [ReactComponentWithPureRenderMixin],
  propTypes: {
    block: React.PropTypes.object
  },

  handleCreateSection() {
    AppActions.addSection(this.props.block);
    AppStore.setBlockState({open:true});
    document.querySelector('body').classList.add('op-edit-section'); //jshint ignore:line
    document.querySelector('body').classList.remove('op-blocks-in'); //jshint ignore:line
  },

  render() {
    //console.log('rendering block: ', this.props.block.name);

    let block = this.props.block;

    return (
      <div 
        className={"block mix "+block.groups.join(" ")} 
        data-myorder={this.props.index} 
        onClick={this.handleCreateSection}>
        <img src={block.image} alt={block.name} />
      </div>
    );
  }
});

module.exports = Block;
