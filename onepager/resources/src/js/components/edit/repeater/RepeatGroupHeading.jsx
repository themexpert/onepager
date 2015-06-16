const React = require("react");
const ReactComponentWithPureRenderMixin = require('react/lib/ReactComponentWithPureRenderMixin');

let RepeatGroupHeading = React.createClass({
  mixins: [ReactComponentWithPureRenderMixin],
  
  handleClick(){
    React.findDOMNode(this).scrollIntoView();
  },

  render(){
    return(
      <div onClick={this.handleClick} className="panel-heading" role="tab">
        <h4 className="panel-title">
          <span className="handle fa fa-ellipsis-v pull-left"/>  
          <a href={"#"+this.props.id} 
            data-toggle="collapse"  
            ref="title" 
            data-parent={"#"+this.props.parentId}>{this.props.title}</a>

          <div className="repeater-action-btns">
            <span onClick={this.props.duplicate} className="fa fa-copy" title="Duplicate"></span>
            <span onClick={this.props.remove} className="fa fa-trash-o" title="Remove"></span>
          </div>
        </h4>
      </div>
    );
  }
});

module.exports = RepeatGroupHeading;
