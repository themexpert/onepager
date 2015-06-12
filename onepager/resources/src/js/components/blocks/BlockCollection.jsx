const React = require('react');
const Block = require('./Block.jsx');
const Alert = require('react-bootstrap/lib/Alert');
const ReactComponentWithPureRenderMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const _ = require('underscore');
const AppStore = require('../../stores/AppStore');

let BlockCollection = React.createClass({
  mixins: [ReactComponentWithPureRenderMixin],
  propTypes: {
    blocks: React.PropTypes.array
  },

  componentDidMount(){
    jQuery(React.findDOMNode(this.refs.blocks)).mixItUp();
  },

  componentWillUnmount(){
    jQuery(React.findDOMNode(this.refs.blocks)).unbind();
  },

  close(){
    setTimeout(()=>AppStore.setBlockState({open:false}), 500);
    jQuery('body').removeClass('op-blocks-in');
  },

  handleClick(e){
    let children = e.target.parentNode.parentNode.childNodes;
    _.each(children, child=>child.classList.remove("active"));
    
    e.target.parentNode.classList.add('active');
  },

  render() {
    let {blocks} = this.props;

    let groups = _.unique(blocks.reduceRight(function(groups, block){
      return groups.concat(block.groups);
    }, []));

    if (blocks.length === 0) {
      return (
        <Alert bsStyle="warning">
          <strong>You have no blocks</strong>
        </Alert>
      );
    }


    return (
      <div id="blocks" className="op-ui clearfix">

        <ul className="tx-nav tx-nav-tabs clearfix">
          <li className="filter" onClick={this.handleClick} data-filter="all">
            <a href="javascript:void(0)">All</a>
          </li>
          {
            groups.map((group)=>{
              return (
                <li 
                  onClick={this.handleClick}
                  className="filter" key={group} 
                  data-filter={"."+group} >
                  <a href="javascript:void(0)">{group}</a>
                </li>
              );
            })
          }
          <li className="pull-right">
            <button onClick={this.close} className="btn btn-primary" type="button">
              <span className="fa fa-close"></span> Close
            </button>
          </li>
        </ul>

        <div ref="blocks">
          {blocks.map((block, ii) =>
            <Block key={block.slug} index={ii} block={block} />
          )}
        </div>
		  </div>
    );

  }
});

module.exports = BlockCollection;
