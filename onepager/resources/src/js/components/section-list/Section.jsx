const React       = require('react');
const swal        = require('sweetalert');
const Input       = require('react-bootstrap/lib/Input');
const _           = require('underscore');
const AppActions  = require('../../actions/AppActions');

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
  getInitialState(){
    return {
      titleEditState: false
    };
  },

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
  

  handleEditTitle(){
    this.setState({titleEditState: true});
  },

  closeEditTitle(e){
    if(e.which !== 13) {
      return;
    }

    //immutable please
    let section = _.copy(this.props.section);
    let title   = this.refs.title.getValue();

    section.title = title;

    this.props.update(section);
    this.setState({titleEditState: false});
  },


  render() {
    let section = this.props.section;

    return (
      <div className="txop-cards">
        { this.state.titleEditState ?
          <Input type="text" ref="title" onKeyUp={this.closeEditTitle} defaultValue={section.title} /> :
          <div><h3 onClick={this.handleEditSection}>{section.title}</h3> <span className="fa fa-pencil" onClick={this.handleEditTitle}></span></div>
        }
        <div className="actions-btns">
          <span className="fa fa-copy" onClick={this.handleDuplicateSection} ></span>
          <span className="fa fa-close" onClick={this.handleRemoveSection} ></span>
        </div>
      </div>
    );
  }
});

module.exports = Section;
