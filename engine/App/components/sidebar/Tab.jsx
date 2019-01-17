const React = require('react');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const cx = require('classnames');

let Tab = React.createClass({
  mixins: [PureMixin],

  propTypes: {
    id: React.PropTypes.string,
    visibleOn: React.PropTypes.string,
    icon: React.PropTypes.string,
    icon2: React.PropTypes.string,
    title: React.PropTypes.string
  },

  getDefaultProps(){
    return {
      active: "",
      visibleOn: ""
    };
  },

  handleClick(){
    this.props.onClick(this.props.id);
  },

  getIcon() {
    let icon = this.isActive() ? this.props.icon : this.props.icon2 || this.props.icon;
    return `fa fa-${icon}`;
  },

  isActive(){
    return this.props.active === this.props.id;
  },

  isVisible(){
    return this.props.parent || this.isActive() ? true : this.props.visibleOn === this.props.active;
  },

  showTitle(){
    return !this.props.parent && this.isActive();
  },

  render() {
    let icon = this.getIcon();
    let title = this.props.title;

    let classes = {
      li: cx({
        "hidden": !this.isVisible(),
        "active": this.isActive()
      }),
      title: cx({
        hidden: !this.showTitle()
      })
    };


    return (
      <li className={classes.li}>
        <a href="javascript:void(0)" onClick={this.handleClick}>
          <span className={icon}> <span className={classes.title}>{title}</span></span>
        </a>
      </li>
    );
  }
});

module.exports = Tab;
