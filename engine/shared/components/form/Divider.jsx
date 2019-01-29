const React     = require("react");
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');

let Divider = React.createClass({
  mixins: [PureMixin],

  render(){
    return (
      <p className="uk-heading-line uk-text-center uk-text-uppercase uk-text-muted"><span>{this.props.label}</span></p>
    );
  }
});

module.exports = Divider;
