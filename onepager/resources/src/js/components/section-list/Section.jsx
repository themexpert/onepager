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
    //proceed on enter
    if(e.which !== 13) {
      return;
    }

    //immutable please
    let section   = _.copy(this.props.section);
    let title     = this.refs.title.getValue();

    section.title = title;

    this.props.update(section);
    this.setState({titleEditState: false});
  },


  render() {
    let section = this.props.section;

    return (
      <div style={{backgroundColor: "red", "padding": 10, "margin": "10px 0"}}>
        { this.state.titleEditState ?
          <Input type="text" ref="title" onKeyUp={this.closeEditTitle} defaultValue={section.title} /> :
          <div onClick={this.handleEditSection}>{section.title}</div>
        }
        <div>
          <button className="fa fa-edit" onClick={this.handleEditTitle} ></button>
          <button className="fa fa-copy" onClick={this.handleDuplicateSection} ></button>
          <button className="fa fa-close" onClick={this.handleRemoveSection} ></button>
        </div>
      </div>
    );
  }
});

module.exports = Section;
