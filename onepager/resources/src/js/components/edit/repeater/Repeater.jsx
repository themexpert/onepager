const _             = require('underscore');
const React         = require('react');
const RepeatGroup   = require('./RepeatGroup.jsx');
// const PureMixin     = require("react/lib/ReactComponentWithPureRenderMixin");
const swal          = require('sweetalert');
const SortableMixin = require('sortablejs/react-sortable-mixin');
const Button        = require('react-bootstrap/lib/Button');

function confirmDelete(proceed){
  swal({
    title: "Are you sure?",
    text: "Time travel is still hard and there is no way back",
    type: "warning",
    showCancelButton: true,
    confirmButtonText: "Yes, delete it",
    closeOnConfirm: true,
    confirmButtonColor : '#d32f2f'
  }, proceed);
}


let Repeater = React.createClass({
  mixins: [SortableMixin],
  
  getInitialState(){

  },

  sortableOptions: {
    ref: "repeat-groups",
    handle: ".handle"
  },

  handleEnd(e){
    console.log("trying to reorder");

    let rGroups = _.copy(this.props.options.fields);
    rGroups     = _.move(rGroups, e.oldIndex, e.newIndex);

    rGroups[e.oldIndex].ref  = _.randomId('rs_');
    rGroups[e.newIndex].ref  = _.randomId('rs_');
    
    // TODO: need unique keys for each rGroup
    this.props.updateControl(rGroups);
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

   addRepeatGroup(duplicate=false, rgIndex=0){
    let rControl = this.props.options;
    let rGroups  = _.copy(rControl.fields);
    let rGroup   = _.copy(rGroups[rgIndex]);

    rGroup.forEach((rControl)=> {
      rControl.ref = _.uniqueId('ref_');

      if (duplicate) {
        return;
      }

      rControl.value = "";
    });

    if(duplicate){
      rGroups = _.pushAt(rGroups, rgIndex, rGroup);
    } else {
      rGroups.push(rGroup);
    }

    this.props.updateControl(rGroups);
   },

  removeRepeatGroup(rgIndex){
    let rControl  = this.props.options;
    let rGroups   = _.copy(rControl.fields);

    if(rGroups.length <= 1) {
      alert("Sorry you can't delete this group");
      return;
    }

    confirmDelete(()=>{
        rGroups.splice(rgIndex, 1);
        this.props.updateControl(rGroups);
    });
  },



  render() {
      console.log('rendering repeater');

      let rGroups = this.props.options.fields;

      //TODO: there has to be a better way
      let id = this.getId();

      return (
        <div ref="container" className="repeatable-control">

          <Button bsStyle="primary" className="btn--add-repeater" onClick={this.addRepeatGroup.bind(this, false, 0)}>
            <span className="fa fa-plus" /> Add New
          </Button>

          <div ref="repeat-groups" className="panel-group" id={id} role="tablist" aria-multiselectable="true">
          { rGroups.map((rGroup, ii)=>{
              let collapse = (ii === (rGroups.length-1)?1:0);

              return (
                <RepeatGroup parentId={id}
                  collapse={collapse} 
                  duplicate={this.addRepeatGroup.bind(this, true, ii)}
                  onChange={this.props.onChange}
                  remove={this.removeRepeatGroup.bind(this, ii)} 
                  options={rGroup} ref={this.getGroupRef(ii)} 
                  key={this.getGroupRef(ii)} 
                  index={ii} />
              );
          }) }
          </div> { /*panel-group*/ }

        </div>
      );
  }
});

module.exports = Repeater;
