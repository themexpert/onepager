const React     = require('react');
const _         = require('underscore');
const Alert     = require('react-bootstrap/lib/Alert');
const Button    = require('react-bootstrap/lib/Button');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const Block     = require('./Block.jsx');
const Select    = require("../edit/form/Select.jsx");
// const AppStore  = require('../../stores/AppStore');


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
    let {blocks} = this.props;

    let groups = _.unique(blocks.reduceRight(function(groups, block){
      return groups.concat(block.groups);
    }, ['all']));


    let groupOptions = groups.reduce(function(o, v) {
      o[v] = v;
      return o;
    }, {});


    if (blocks.length === 0) {
      return (
        <Alert bsStyle="warning">
          <strong>You have no blocks</strong>
        </Alert>
      );
    }

    let groupStyles = {background: "red", color: "white", display:"inline-block", padding: 10, margin: 5};


    return (
      <div>
        <Button bsStyle='primary' onClick={this.props.closeBlocks}>Close</Button>
        
        <div>
          {groups.map(group => {
            return (
              <span key={group} style={groupStyles} onClick={()=>this.setState({group})}>{group}</span>
            );
          } )}
        </div>

        <Select type="select" label="Select Group" ref="group"
          defaultValue={this.state.group}
          options={groupOptions} 
          onChange={this.handleChange} />

        <div>
          {blocks.map((block) => {
            let active = (this.state.group === "all") || block.groups.indexOf(this.state.group) !==-1;
            return active ? <Block closeBlocks={this.props.closeBlocks} key={block.slug} block={block} /> : "";
          } )}
        </div>
		  </div>
    );

  }
});

module.exports = BlockCollection;
