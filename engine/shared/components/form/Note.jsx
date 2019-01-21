import React from 'react';
import PureRenderMixin from 'react/lib/ReactComponentWithPureRenderMixin.js';

const Note = React.createClass({
  mixins: [PureRenderMixin],
  propTypes: {
    label: React.PropTypes.string
  },
  render() {
    return (
      <h6 className="uk-heading-line uk-text-center uk-text-uppercase uk-text-muted"><span>{this.props.label}</span></h6>
    );
  }
});

export default Note;
