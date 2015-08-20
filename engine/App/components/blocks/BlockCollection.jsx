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
  return _.unique(groups.map(function (group) {
    return blocks.filter(function (block) {
      return block.groups.indexOf(group) !== -1;
    });
  }).reduce(function (carry, blocks) {
    return carry.concat(blocks);
  }, []));
}

function arrayKeyMirror(groups) {
  return groups.reduce(function (o, v) {
    o[v] = v;
    return o;
  }, {});
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
    let blocks = orderBlocks(this.props.blocks, groups);


    if (blocks.length === 0) {
      return (
        <Alert bsStyle="warning">
          <strong>You have no blocks</strong>
        </Alert>
      );
    }


    return (
      <div>
        <Select type="select" ref="group"
                defaultValue={this.state.group}
                options={arrayKeyMirror(groups)}
                onChange={this.handleChange}/>


        <div>
          {blocks.map((block) => {
            let active = (this.state.group === "all") || block.groups.indexOf(this.state.group) !== -1;
            return active ? <Block key={block.slug} block={block}/> : null;
          })}
        </div>
      </div>
    );

  }
});

module.exports = BlockCollection;
