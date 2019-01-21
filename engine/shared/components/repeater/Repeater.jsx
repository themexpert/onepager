const _             = require('underscore');
const React         = require('react');
const RepeatGroup   = require('./RepeatGroup.jsx');
const swal          = require('sweetalert');
const SortableMixin = require('sortablejs/react-sortable-mixin');
const Button        = require('react-bootstrap/lib/Button');
const PureMixin     = require('../../mixins/PureMixin.js');

function confirmDelete(proceed) {
  swal({
    title             : "Are you sure?",
    text              : "Time travel is still hard and there is no way back",
    type              : "warning",
    showCancelButton  : true,
    confirmButtonText : "Yes, delete it",
    closeOnConfirm    : true,
    confirmButtonColor: '#d32f2f'
  }, proceed);
}


function resetRepeatInput(rControl){
  let input = rControl.inputs[0];
  input.value = "";

  rControl.inputs = [input];
  rControl.value = [input.value];

  return rControl;
}

let Repeater = React.createClass({
  mixins: [SortableMixin, PureMixin],

  sortableOptions: {
    ref   : "repeat-groups",
    handle: ".handle"
  },

  handleEnd(e){
    console.log("trying to reorder");

    let rGroups = _.copy(this.props.options.fields);
    rGroups     = _.move(rGroups, e.oldIndex, e.newIndex);

    rGroups[e.oldIndex].ref = _.randomId('rs_');
    rGroups[e.newIndex].ref = _.randomId('rs_');

    // TODO: need unique keys for each rGroup
    this.props.updateControl('fields', rGroups);
  },

  getGroupRef(ii){
    return "rGroup-" + ii;
  },

  getFields(){
    let rGroups = _.copy(this.props.options.fields);

    rGroups = rGroups.map((rGroup, ii)=> {
      let ref = this.getGroupRef(ii);
      return this.refs[ref].getFields();
    });

    return rGroups;
  },

  addRepeatGroup(duplicate = false, rgIndex = 0){
    let rControl = this.props.options;
    let rGroups  = _.copy(rControl.fields);
    let rGroup   = _.copy(rGroups[rgIndex]);

    rGroup.forEach((rControl)=> {
      rControl.ref = _.uniqueId('ref_');

      if (duplicate) {
        return;
      }

      if(_.isArray(rControl.value)){
        rControl = resetRepeatInput(rControl);
      } else {
        rControl.value = "";
      }
    });

    if (duplicate) {
      rGroups = _.pushAt(rGroups, rgIndex + 1, rGroup);
    } else {
      rGroups.push(rGroup);
    }

    this.props.updateControl('fields', rGroups);
  },

  removeRepeatGroup(rgIndex){
    let rControl = this.props.options;
    let rGroups  = _.copy(rControl.fields);

    if (rGroups.length <= 1) {
      alert("Sorry you can't delete this group");
      return;
    }

    confirmDelete(()=> {
      rGroups.splice(rgIndex, 1);
      this.props.updateControl('fields', rGroups);
    });
  },

  updateGroupControl(rgIndex, rControlIndex, key, value){
    let rControl = this.props.options;
    let rGroups  = _.copy(rControl.fields);

    rGroups[rgIndex][rControlIndex][key] = value;
    this.props.updateControl('fields', rGroups);
  },


  render() {
    console.log('rendering repeater');
    let rGroups = this.props.options.fields;
    let id      = this.props.id;

    return (
      <div ref="container" className="repeatable-control">

        <div ref="repeat-groups" className="panel-group" id={id} role="tablist" aria-multiselectable="true">
          { rGroups.map((rGroup, ii)=> {
            let active = (ii === (rGroups.length - 1) ? 1 : 0);

            return (
              <RepeatGroup
                options={rGroup}
                updateGroupControl={this.updateGroupControl.bind(this, ii)}
                duplicate={this.addRepeatGroup.bind(this, true, ii)}
                onChange={this.props.onChange}
                remove={this.removeRepeatGroup.bind(this, ii)}

                active={active}
                parentId={id}
                ref={this.getGroupRef(ii)}
                key={this.getGroupRef(ii)}
                index={ii}/>
            );
          }) }
        </div>
        <Button bsStyle="primary" className="btn--add-repeater btn-block"
                onClick={this.addRepeatGroup.bind(this, false, 0)}>
          <span className="fa fa-plus"/> Add New
        </Button>
        { /*panel-group*/ }

      </div>
    );
  }
});

module.exports = Repeater;
