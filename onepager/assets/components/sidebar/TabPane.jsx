const React     = require('react');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const cx        = require('classnames');

let TabPane = React.createClass({
  mixins: [PureMixin],
  
  propTypes: {
    id: React.PropTypes.string,
    icon: React.PropTypes.string,
    title: React.PropTypes.string
  },

  getDefaultProps(){
    return {
      disabled: false,
      active: ""
    };
  },


  render() {
    let id      = this.props.id;
    let classes = cx({
      'tab-pane': true,
      "disabled": this.props.disabled,
      "active": this.props.active === this.props.id && !this.props.disabled,
    });



    return (
      <div id={id} className={classes}>
        {this.props.children}
      </div>
    );
  }
});

module.exports = TabPane;
