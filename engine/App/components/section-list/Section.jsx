const React      = require('react');
const swal       = require('sweetalert');
const Input      = require('react-bootstrap/lib/Input');
const cx         = require('classnames');
const PureMixin  = require('../../../shared/mixins/PureMixin.js');
const AppActions = require('../../flux/AppActions.js');
const scrollIntoView  = require('../../../shared/plugins/scrollview.js');
const SectionTitle = require("./SectionTitle.jsx");

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

let Section = React.createClass({
  mixins: [PureMixin],

  propTypes: {
    active: React.PropTypes.bool,
    id: React.PropTypes.string,
    index: React.PropTypes.number,
    title: React.PropTypes.string,
    slug: React.PropTypes.string
  },

  getInitialState(){
    return {
      titleEditState: false
    };
  },

  handleRemoveSection(){
    confirmDelete(()=> {
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

  handleAddToMenu(){
    AppActions.activateSection(this.props.index);
    this.props.openMenuScreen();
  },

  handleScrollIntoView(){
    AppActions.activateSection(this.props.index);
    if(document.getElementById(this.props.id) != null){
      scrollIntoView(document.getElementById(this.props.id));
    }
  },

  render() {
    let {title, index, slug} = this.props;

    let classes = cx('section', {
      'active'    : this.props.active
    });

    return (
      <div className={classes}>
        <SectionTitle title={title} index={index} >
          <h3 title={slug} onClick={this.handleScrollIntoView}>
            <span className="section-handle">
              <span className="fa fa-arrows"></span>
            </span>
            {title}
          </h3>
          <div className="action-btns">
            <span className="fa fa-edit" onClick={this.handleEditSection} data-toggle="tooltip" title="Edit"></span>
            <span className="fa fa-copy" onClick={this.handleDuplicateSection} data-toggle="tooltip" title="Copy"></span>
            <span className="fa fa-trash-o" onClick={this.handleRemoveSection} data-toggle="tooltip" title="Delete"></span>
          </div>
        </SectionTitle>
      </div>
    );
  }
});

module.exports = Section;
