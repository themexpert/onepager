const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const React     = require('react');
const _         = require('underscore');
const Input     = require('./../form/Input.jsx');
const Heading   = require('./RepeatGroupHeading.jsx');

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

  onChange(){
    this.props.onChange();
  },


  getGroupTitle(){
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

    let rGroup    = this.props.options;
    let title     = this.getGroupTitle();
    let id        = this.getId();
    let collapse  = parseInt(this.props.collapse)? "in" : "";

    let controls  = rGroup.map((rControl)=>{
      return <Input {...this.props} onChange={this.onChange} ref={rControl.ref} key={rControl.ref} options={rControl} />;
    });



    return (
      <div data-index={this.props.index} className="panel panel-default">
        <Heading title={title} id={id} {...this.props} />

        <div id={id} className={"panel-collapse collapse "+collapse} role="tabpanel">
          <div className="panel-body">{controls}</div>
        </div>

      </div>
    );
  }
});

module.exports = RepeatGroup;
