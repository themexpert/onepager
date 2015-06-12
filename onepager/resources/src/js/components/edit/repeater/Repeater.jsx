const _ = require('underscore');
const React = require('react');
const AppStore = require('../../../stores/AppStore');
const AppActions = require('../../../actions/AppActions');
const RepeatGroup = require('./RepeatGroup.jsx');
const ContainedSelectorMixin = require("../../../mixins/ContainedSelectorMixin");
const ReactComponentWithPureRenderMixin = require("react/lib/ReactComponentWithPureRenderMixin");
const SortableMixin = require('sortablejs/react-sortable-mixin');


let Repeater = React.createClass({
  mixins: [ContainedSelectorMixin, ReactComponentWithPureRenderMixin, SortableMixin],

  sortableOptions: {
    ref: "repeat-groups"
  },

  handleEnd(event){
    let sectionIndex  = this.props.sectionIndex;
    let repeatIndex   = this.props.repeatIndex;
    let rGroups       = _.copy(this.props.options.fields);
    let section       = _.copy(AppStore.get(sectionIndex));

    rGroups = _.move(rGroups, event.oldIndex, event.newIndex);

    // TODO: need unique ids for each rGroup
    // rGroups[event.oldIndex].id = _.randomId('reorder_');
    // rGroups[event.newIndex].id = _.randomId('reorder_');

    section.fields[repeatIndex].fields = rGroups;
    AppActions.updateSection(sectionIndex, section);
  },

  getId(){
    return "repeater-"+ this.props.repeatIndex;
  },

  getGroupRef(ii){
    return "rGroup-"+ii;
  },

  getFields(){
    let rGroups = _.copy(this.props.options.fields);

    rGroups = rGroups.map((rGroup, ii)=>{
      let ref = this.getGroupRef(ii);
      return this.refs[ref].getFields();
    });

    return rGroups;
  },

   addNewRepeatGroup(rGroupIndex, duplicate=false){
     let repeatableControl  = this.props.options;
     let sectionIndex       = this.props.sectionIndex;
     let section  = _.copy(AppStore.get(sectionIndex));
     let rGroups  = _.copy(repeatableControl.fields);
     let rGroup   = _.copy(rGroups[rGroupIndex]);

     rGroup.forEach((rControl)=> {
      rControl.ref = _.uniqueId('ref_');
      if(!duplicate){
        rControl.value = "";
      }
     });

     rGroups.push(rGroup);

     section.fields[this.props.repeatIndex].fields = rGroups;

     AppActions.updateSection(sectionIndex, section);
   },

  removeRepeatGroup(index){
    let repeatableControl = this.props.options;
    let section = _.copy(AppStore.get(this.props.sectionIndex));
    let rGroups = _.copy(repeatableControl.fields);

    if(rGroups.length <= 1) {
      alert("Sorry you can't delete this group");
      return;
    }

    let proceed = window.confirm("There is no way back, really want to delete?");

    if(proceed){
      rGroups.splice(index, 1);

      section.fields[this.props.repeatIndex].fields = rGroups;

      AppActions.updateSection(this.props.sectionIndex, section);
    }
  },



  render() {
      console.log('rendering repeater');

      let rGroups = this.props.options.fields;
      let addNewRepeatGroup = this.addNewRepeatGroup.bind(this, rGroups.length-1);

      //TODO: there has to e a better way
      let id = this.getId();

      return (
        <div ref="container" className="repeatable-control">

          <button className="btn btn-primary add-button" onClick={addNewRepeatGroup}>
            <span className="fa fa-plus"></span> Add New
          </button>

          <div ref="repeat-groups" className="panel-group" id={id} role="tablist" aria-multiselectable="true">
          { rGroups.map((rGroup, ii)=>{
              let collapse = (ii === (rGroups.length-1)?1:0);
              return (
                <RepeatGroup parentId={id}
                  collapse={collapse} duplicate={this.addNewRepeatGroup.bind(this, ii, true)}
                  remove={this.removeRepeatGroup.bind(this, ii)} onChange={this.props.onChange}
                  options={rGroup} ref={this.getGroupRef(ii)} key={ii} index={ii} />
              );
          }) }
          </div> { /*panel-group*/ }

        </div>
      );
  }
});

module.exports = Repeater;
