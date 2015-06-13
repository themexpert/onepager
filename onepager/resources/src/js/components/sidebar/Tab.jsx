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


  render() {
    let id      = `#${this.props.id}`;
    let icon    = `fa fa-${this.props.icon}`;
    let title   = this.props.title;

    let classes = cx({
      "disabled": this.props.disabled,
      "active": this.props.active === this.props.id && !this.props.disabled,
    });

    return (
      <li className={classes}>
        <a href={id} data-toggle="tab" onClick={()=>{AppStore.setTabState({active: this.props.id});}}>
          <span className={icon} data-toggle="tooltip" data-placement="bottom" title={title}></span>
        </a>
      </li>
    );
  }
});

module.exports = Tab;
