import React from 'react';
import PureRenderMixin from 'react/lib/ReactComponentWithPureRenderMixin.js';

const Note = React.createClass({
  mixins: [PureRenderMixin],
  propTypes: {
    label: React.PropTypes.string
  },
  render() {
    return (
      <p className="field_note">{this.props.label}</p>
    );
  }
});

export default Note;
