const React       = require('react');
const _           = require('underscore');
const cx          = require('classnames');
const PureMixin   = require('../../mixins/PureMixin.js');
const Input       = require('../form/Input.jsx');
const RepeatInput = require('../form/RepeatInput.jsx');
const Divider     = require('../form/Divider.jsx');
const Heading     = require('./RepeatGroupHeading.jsx');

let RepeatGroup = React.createClass({
  mixins: [PureMixin],

  getId(){
    return 'repeat-group-' + this.props.parentId + "-" + this.props.index;
  },

  getFields(){
    let rGroup = _.copy(this.props.options);

    rGroup = rGroup.map(rControl=> {
      rControl.value = this.refs[rControl.ref].getValue();
      return rControl;
    });

    return rGroup;
  },


  getGroupTitle(){
    //TODO: get the first text type field
    let rGroups = this.props.options;

    let title = _.find(rGroups, {'name': 'title'});
    if (title) {
      return title.value || "Untitled";
    }

    let name = _.find(rGroups, {'name': 'name'});
    if (name) {
      return name.value || "Untitled";
    }

    return this.props.options[0].value || "Untitled";
  },

  render() {
    console.log('rendering repeater group');

    let id      = this.getId();
    let title   = this.getGroupTitle();
    let rGroup  = this.props.options;
    let classes = cx({
      "panel-collapse collapse": true,
      "in"                     : this.props.active
    });

    let controls = rGroup.map((rControl, ii)=> {
      let props = {
        onChange: this.props.onChange,
        options : rControl,
        ref     : rControl.ref,
        id      : rControl.ref,
        key     : rControl.ref
      };

      let type = rControl.type;

      if (_.isArray(rControl.value)) {
        type = 'repeat-input';
      }
      switch (type) {
        case "repeat-input":
          let updateControl = (key, value)=> {
            this.props.updateGroupControl(ii, key, value);
          };
          return <RepeatInput updateControl={updateControl} {...props} />;
        case "divider":
          return <Divider key={ii} label={rControl.label}/>;
        default:
          return <Input {...props} />;
      }

    });

    return (
      <div className="panel panel-default">
        <Heading
          id={id}
          parentId={this.props.parentId}
          title={title}
          remove={this.props.remove}
          duplicate={this.props.duplicate}/>

        <div id={id} className={classes} role="tabpanel">
          <div className="panel-body">{controls}</div>
        </div>

      </div>
    );
  }
});

module.exports = RepeatGroup;
