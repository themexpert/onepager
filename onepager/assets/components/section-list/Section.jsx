const React       = require('react');
const swal        = require('sweetalert');
const Input       = require('react-bootstrap/lib/Input');
const AppActions  = require('../../actions/AppActions');
const cx          = require('classnames');
const PureMixin   = require('../../mixins/PureMixin.js');

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
  mixins: [PureMixin],
  
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

  updateEditTitle(e){
    //proceed on enter
    if(e.which !== 13) {
      return;
    }

    let title     = this.refs.title.getValue();

    if(this.props.title === 'untitlted section'){
      this.props.id  = this.props.getUniqueSectionId(this.props.index, title);
    }

    this.props.updateTitle(title);

    this.setState({titleEditState: false});
  },


  render() {
    let title = this.props.title;
    
    let classes = cx({
      'txop-cards' : true,
      'active'     : this.props.active
    });

    return (
      <div className={classes}>
        { this.state.titleEditState ?
          <div>
            <Input type="text" ref="title" onKeyUp={this.updateEditTitle} defaultValue={title} /> 
            <span className="label label-default">Enter</span>
          </div> :
          <div><h3 onClick={this.handleEditSection}>{title}</h3> <span className="fa fa-pencil" onClick={this.handleEditTitle}></span></div>
        }
        <div className="action-btns">
          <span className="fa fa-copy" onClick={this.handleDuplicateSection} ></span>
          <span className="fa fa-close" onClick={this.handleRemoveSection} ></span>
        </div>
      </div>
    );
  }
});

module.exports = Section;
