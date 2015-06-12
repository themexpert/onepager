const React       = require('react');
const AppActions  = require('../../actions/AppActions');
const AppStore    = require('../../stores/AppStore');
const $           = jQuery; //jshint ignore:line
const swal        = require('sweetalert');

let Section = React.createClass({
  shouldComponentUpdate(nextProps){
    //if content changed
    let contentChanged  = this.props.section.content===nextProps.section.content;

    //if reordered
    let keyChanged      = this.props.section.key === nextProps.section.key;
    
    return  !contentChanged || !keyChanged;
  },

  componentDidMount(){
    console.log("section mounted");
    this.setSectionContent();
  },

  componentDidUpdate(){
    console.log("section updated!!");
    this.setSectionContent();
  },

  setSectionContent(){
    let content = this.props.section.content;

    $(React.findDOMNode(this.refs.content)).html(content);
  },

  handleRemoveSection(){
    swal({
      title: "Are you sure?",
      text: "Time travel is still hard and there is no way back",
      type: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, delete it",
      closeOnConfirm: true,
      confirmButtonColor : '#d32f2f'
    }, ()=>{
      AppActions.removeSection(this.props.index);
      swal("Deleted!", "Section has been deleted.");
      document.querySelector('body').classList.remove('op-edit-section'); //jshint ignore:line
    });
  },

  handleDuplicateSection(){
    AppActions.duplicateSection(this.props.index);
    AppActions.editSection(AppStore.getAll().sections.length-1);
  },

  handleCloseSection(){
    AppActions.editSection(null);
  },

  handleEditSection(){
    AppActions.editSection(this.props.index);
    //TODO: bad pattern
    document.querySelector('body').classList.add('op-sidebar-open'); //jshint ignore:line
  },
  handleAddMenu(){
    let section = this.props.section;
    let title   = section.fields[0].value ? section.fields[0].value : "menu name";
    let id      = section.id;


    AppStore.setMenuState(id, title, this.props.index);

    //TODO: bad pattern
    document.querySelector('body').classList.add('op-edit-section'); //jshint ignore:line
  },

  render() {

    return (
      <div className="section" data-index={this.props.index}>
        <div ref="content" />
        <div className="section__actions">
          <span className="fa fa-gear"     onClick={this.handleEditSection} ></span>
          <span className="fa fa-link" onClick={this.handleAddMenu} ></span>
          <span className="fa fa-close"  onClick={this.handleRemoveSection} ></span>
        </div>
      </div>
    );
  }
});

module.exports = Section;
