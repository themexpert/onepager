const React     = require('react');
const _         = require('underscore');
const Input     = require('./../form/Input.jsx');
const Heading   = require('./RepeatGroupHeading.jsx');
const cx        = require('classnames');
const PureMixin = require('../../../mixins/PureMixin.js');

let RepeatGroup = React.createClass({
  mixins: [PureMixin],

  getId(){
    return 'repeat-group-'+this.props.parentId+"-"+this.props.index;
  },

  getFields(){
    let rGroup = _.copy(this.props.options);

    rGroup = rGroup.map(rControl=>{
      rControl.value = this.refs[rControl.ref].getValue();
      return rControl;
    });

    return rGroup;
  },


  getGroupTitle(){
    //TODO: get the first text type field
    let rGroups = this.props.options;

    let title = _.find(rGroups, {'name':'title'}); 
    if(title) {
      return title.value || "Untitled";
    }
    
    let name = _.find(rGroups, {'name':'name'});
    if(name) {
      return name.value || "Untitled";
    }

    return this.props.options[0].value || "Untitled";
  },

  render() {
    console.log('rendering repeater group');

    let id        = this.getId();
    let title     = this.getGroupTitle();
    let rGroup    = this.props.options;
    let classes   = cx({
      "panel-collapse collapse": true,
      "in": this.props.active
    });

    let controls  = rGroup.map((rControl)=>{
      return <Input onChange={this.props.onChange} ref={rControl.ref} key={rControl.ref} options={rControl} />;
    });

    return (
      <div className="panel panel-default">
        <Heading 
          id={id} 
          parentId={this.props.parentId} 
          title={title} 
          remove={this.props.remove} 
          duplicate={this.props.duplicate} />

        <div id={id} className={classes} role="tabpanel">
          <div className="panel-body">{controls}</div>
        </div>

      </div>
    );
  }
});

module.exports = RepeatGroup;
