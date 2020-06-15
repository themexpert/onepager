const React = require('react');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const AppActions = require('../../flux/AppActions.js');
const AppStore = require('../../AppStore.js');

import notify from '../../../shared/plugins/notify';



let Template = React.createClass({
  mixins: [PureMixin],
  getInitialState(){
    return {
      // saving: false,
      deleteTemplateLoading:false,
      // exportLoading:false,
      // modalActiveTab:'',
      // savedTemplates:''
    };
  },

  propTypes: {
    template: React.PropTypes.object
  },
  /**
   * Merge layout to page
   */
  handleMergeSection() {
    var confirm = window.confirm('Merge with your page ?');
    if(confirm){
      AppActions.mergeSections(this.props.template.data);
      //FIXME: return a promise from addSection then hook this success
      notify.success('Template Added Successfully');
      // AppStore.setTabState({active: 'op-contents'});
    }
  },
  /**
   * Delete Layout 
   */
  handleDeleteLayout(){
    var confirm = window.confirm('Are you sure to delete ?');
    const {id, name, type} = this.props.template;
    this.setState({deleteTemplateLoading: true})
    if(confirm){
      let deletedPromise = AppStore.deleteTemplate(id, name, type); // return a promise
      deletedPromise.then( res => {
        this.setState({deleteTemplateLoading: false})
        if(res.success){
          console.log('layout deleted. Need to sync library');
          AppStore.syncLibraryAfterDelete(id);
        }
      }).catch( rej => {
        console.log('reject .....', rej);
      })
    }
  },
  /**
   * Export Layout
   */  
  handleExportLayout(){
    // var userTemplate = prompt("Enter template name", pageTitle);
    if(confirm){
      alert('Exported');
    }
  },


  render() {
    // console.log("rendering template");
    let template = this.props.template;

    return (
      <tr>
        {/* <td className="id">{template.id}</td> */}
        <td className="name">{template.name}</td>
        <td className="type">{template.type}</td>
        <td className="user">{template.created_by === '1' ? 'Admin' : null}</td>
        <td className="date">{template.created_at}</td>
        <td className="insert">
          <button className="uk-button uk-button-primary uk-button-small insert-layout" onClick={this.handleMergeSection}>Insert</button>
          <button className="uk-button uk-button-primary uk-button-small export-layout" onClick={this.handleExportLayout}>
            <i className="fa fa-download"></i>
          </button>
          <button className="uk-button uk-button-primary uk-button-small delete-layout" onClick={this.handleDeleteLayout}>
            {this.state.deleteTemplateLoading ? <i className="fa fa-refresh fa-spin"></i> : <i className="fa fa-trash"></i>}
          </button>
        </td>
      </tr>
    );
  }
});

module.exports = Template;
