const React = require('react');
const _ = require('underscore');
const Alert = require('react-bootstrap/lib/Alert');
const Button = require('react-bootstrap/lib/Button');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const Block = require('./Block.jsx');
const Select = require("../../../shared/components/form/Select.jsx");
// const AppStore  = require('../../stores/AppStore');

function orderGroups(blocks, groupOrder) {
  let groups = _.unique(blocks.reduceRight(function (groups, block) {
    return groups.concat(block.groups);
  }, [])).sort();

  let foundGroups = _.intersection(groupOrder, groups);

  groups = (foundGroups).concat(_.difference(groups, foundGroups));
  groups.unshift('all');

  return groups;
}

function orderBlocks(blocks, groups) {
  function getBlocksByGroup(blocks, group) {
    let blocksTop = blocks.filter( block => block.groups.indexOf(group) !== -1);

    let remGroups = _.without(groups, group);

    let blocksBottom = remGroups.map(function(remGroup){
      return blocksTop.filter( block => block.groups.indexOf(remGroup) !== -1);
    });

    blocksBottom = [].concat.apply([], blocksBottom);
    blocks = _.unique(blocksBottom.concat(blocksTop));

    return blocks;
  }

  /** get blocks by groups order */
  blocks = groups.map(getBlocksByGroup.bind(null, blocks));

  /** blocks are like [[1,3,2], [2,3], [1,3]] */
  blocks =  _.flatten(blocks, true);

  /**
   * blocks are like [1,3,2, 2,3, 1,3]
   * We have duplicate blocks now so take the unique blocks
   */
  blocks = _.unique(blocks);

  return blocks;
}

let BlockCollection = React.createClass({
  mixins: [PureMixin],

  propTypes: {
    blocks: React.PropTypes.array
  },

  getInitialState(){
    return {
      group: 'all'
    };
  },

  handleChange(){
    let group = this.refs.group.getValue();

    this.setState({group: group});
  },

  render() {
    console.log("rendering blocks");

    let groups = orderGroups(this.props.blocks, onepager.groupOrder);

    /** remove the currently selected group from groups */
    let blocks = orderBlocks(
      this.props.blocks,
      _.without(groups, this.state.group)
    );

    /**
     * get the active blocks
     */
    blocks = blocks.filter(block => {
      /**
       * if group is all then is active
       * else if block belongs to this group its active
       * @type {boolean}
       */
      let active = (this.state.group === "all") || block.groups.indexOf(this.state.group) !== -1;

      return active ? block : false;
    });

    let msg = (blocks.length === 0) ? <Alert bsStyle="warning"> <strong>You have no blocks</strong> </Alert> : '';
 

    return (
      <div>
        <Select type="select" ref="group"
                defaultValue={this.state.group}
                options={_.object(groups, groups)}
                onChange={this.handleChange}/>
        <div>
          {blocks.map(block => <Block key={block.slug} block={block}/>)}
          {msg}
        </div>
      </div>
    );

  }
});

module.exports = BlockCollection;
