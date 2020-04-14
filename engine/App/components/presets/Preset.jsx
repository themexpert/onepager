const React = require('react');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const AppActions = require('../../flux/AppActions.js');
const AppStore = require('../../AppStore.js');

import notify from '../../../shared/plugins/notify';

let Preset = React.createClass({
  mixins: [PureMixin],

  propTypes: {
    preset: React.PropTypes.object
  },

  render() {
    console.log("rendering template");
    let preset = this.props.preset;

    return (
      <div className="uk-card uk-card-default uk-card-hover uk-margin-bottom">
        {preset.type 
        ? 
        <span className="txop-pro-badge">{preset.type}</span>
        : null
        }
        {preset.tag 
        ? 
        <span className={`txop-${preset.tag}-badge`} >{preset.tag}</span>
        : null
        }
        <img src={preset.screenshot} alt={preset.name} style={{width: "100%"}} data-toggle="tooltip"
             title="+ Click to insert preset" data-placement="top"/>
        <span className="uk-text-meta uk-hidden">{preset.name}</span>
      </div>
    );
  }
});

module.exports = Preset;
