const React = require('react');
const _ = require('underscore');
const Alert = require('react-bootstrap/lib/Alert');
const Button = require('react-bootstrap/lib/Button');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const Preset = require('./Preset.jsx');
const Select = require("../../../shared/components/form/Select.jsx");
// const AppStore  = require('../../stores/AppStore');


let PresetCollections = React.createClass({
  mixins: [PureMixin],

  propTypes: {
    pagePresets: React.PropTypes.array
  },

  render() {
    let pagePresets = this.props.pagePresets;

    return (
        <div className="preset-collection-lists-wrapper">
            {pagePresets.map(preset => <Preset preset={preset} />)}
        </div>
    );

  }
});

module.exports = PresetCollections;
