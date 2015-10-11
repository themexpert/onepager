const React = require('react');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const AppActions = require('../../flux/AppActions.js');
const AppStore = require('../../AppStore.js');

import notify from '../../../shared/plugins/notify';

let Block = React.createClass({
  mixins: [PureMixin],

  propTypes: {
    block: React.PropTypes.object
  },

  handleCreateSection() {
    AppActions.addSection(this.props.block);

    //FIXME: return a promise from addSection then hook this success
    notify.success('New section added');

    // AppStore.setTabState({active: 'op-contents'});
  },

  render() {
    console.log("rendering block");
    let block = this.props.block;

    return (
      <div className="thumbnail" onClick={this.handleCreateSection}>
        <img src={block.image} alt={block.name} style={{width: "100%"}} data-toggle="tooltip"
             title="+ Click to add block" data-placement="top"/>
        <span className="label label-default">{block.name}</span>
      </div>
    );
  }
});

module.exports = Block;
