const React     = require('react');
const _         = require('underscore');
const Alert     = require('react-bootstrap/lib/Alert');
const Button    = require('react-bootstrap/lib/Button');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const Block     = require('./Block.jsx');
const Select    = require("../../shared/form/Select.jsx");
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
    console.log("rendering blocks");

    let {blocks} = this.props;

    let groups = _.unique(blocks.reduceRight(function (groups, block) {
      return groups.concat(block.groups);
    }, [])).sort();

    let groupOrder = [
      "navbars",
      "headers",
      "contents",
      "portfolios",
      "teams",
      "testimonials",
      "blog",
      "sliders",
      "pricings",
      "footers",
      "themes"
    ];

    groups = (_.intersection(groupOrder, groups)).concat(_.difference(groups, _.intersection(groupOrder, groups)));
    groups.unshift('all');

    let groupOptions = groups.reduce(function (o, v) {
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


    return (
      <div>
        <div className="blocks-nav">
          <Select type="select" ref="group"
                  defaultValue={this.state.group}
                  options={groupOptions}
                  onChange={this.handleChange}/>

          <Button bsStyle='primary' className="btn--back" onClick={this.props.closeBlocks}>
            <span className="fa fa-arrow-left"></span> Back
          </Button>
        </div>

        <div>
          {blocks.map((block) => {
            let active = (this.state.group === "all") || block.groups.indexOf(this.state.group) !== -1;
            return active ? <Block closeBlocks={this.props.closeBlocks} key={block.slug} block={block}/> : "";
          })}
        </div>
      </div>
    );

  }
});

module.exports = BlockCollection;
