const React     = require('react');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const cx        = require('classnames');
const AppStore  = require('../../stores/AppStore.js');

let Tab = React.createClass({
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

  handleClick(){
    if(!this.props.disabled){
      AppStore.setTabState({active: this.props.id});
    }
  },

  render() {
    let icon    = `fa fa-${this.props.icon}`;
    let title   = this.props.title;

    let classes = cx({
      "disabled": this.props.disabled,
      "active": this.props.active === this.props.id && !this.props.disabled,
    });

    return (
      <li className={classes}>
        <a href="javascript:void(0)" onClick={this.handleClick}>
          <span className={icon} data-toggle="tooltip" data-placement="bottom" title={title}></span>
        </a>
      </li>
    );
  }
});

module.exports = Tab;
