const React       = require('react');
const swal        = require('sweetalert');
const AppActions  = require('../../actions/AppActions');
const AppStore    = require('../../stores/AppStore');

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

let Section = React.createClass({
  handleRemoveSection(){
    confirmDelete(()=>{
      AppActions.removeSection(this.props.index);
      swal("Deleted!", "Section has been deleted.");
    });
  },

  handleDuplicateSection(){
    //TODO: SHOULD ONLY DUPLICATE THE SECTION
    AppActions.duplicateSection(this.props.index);
  },

  handleEditSection(){
    AppActions.editSection(this.props.index);
  },
  
  handleAddMenu(){
    let section = this.props.section;
    let title   = section.fields[0].value ? section.fields[0].value : "menu name";
    let id      = section.id;

    console.log('we are here');

    AppStore.setMenuState(id, title, this.props.index);
    AppStore.setTabState({active: 'op-menu'});
  },

  render() {
    let section = this.props.section;
    let title   = section.fields[0].value ? section.fields[0].value : "menu name";


    return (
      <div style={{backgroundColor: "red", "padding": 10, "margin": "10px 0"}}>
        <div onClick={this.handleEditSection}>{title}</div>
        <div>
          <button className="fa fa-copy" onClick={this.handleDuplicateSection} ></button>
          <button className="fa fa-close" onClick={this.handleRemoveSection} ></button>
        </div>
      </div>
    );
  }
});

module.exports = Section;
