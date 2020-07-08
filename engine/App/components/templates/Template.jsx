const React = require('react');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const AppActions = require('../../flux/AppActions.js');
const AppStore = require('../../AppStore.js');
const {opi18n:i18n} = onepager;

import notify from '../../../shared/plugins/notify';



let Template = React.createClass({
  mixins: [PureMixin],
  getInitialState(){
    return {
      // saving: false,
      templateMergeLoading:false,
      deleteTemplateLoading:false,
      templateExportLoading:false,
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
    var confirm = window.confirm(i18n.user_input.merge_layout_text);
    if(confirm){
      /**
       * old style 
       * uncomment below 4 line for old style
       */
      // AppActions.mergeSections(this.props.template.data);
      //FIXME: return a promise from addSection then hook this success
      // notify.success('Template Added Successfully');
      // AppStore.setTabState({active: 'op-contents'});
      /**
       * promise based insert
       */
      this.setState({templateMergeLoading:true});
      /**
       * send only clicked template json data 
       */
      let savedTemplateMergePromise = AppStore.mergeSavedTemplateWithPage(this.props.template.data);
      this.props.loadingState(true);
      savedTemplateMergePromise.then(res => {
        if(res){
          notify.success(i18n.success.template_added);
          this.setState({templateMergeLoading:false});
          this.props.loadingState(false);
          document.querySelector('#onepager-builder .popup-modal').classList.remove('open');
        }
      }).catch(rej => {
        notify.error(i18n.error.insert);
        this.setState({templateMergeLoading:false});
        this.props.loadingState(false);
      });
    }
  },
  /**
   * Delete Layout 
   */
  handleDeleteLayout(){
    var confirm = window.confirm(i18n.user_input.delete_layout_text);
    const {id, name, type} = this.props.template;
    this.setState({deleteTemplateLoading: true});
    this.props.loadingState(true);

    if(confirm){
      let deletedPromise = AppStore.deleteTemplate(id, name, type); // return a promise
      deletedPromise.then( res => {
        if(res.success){
          console.log('layout deleted. Need to sync library');
          AppStore.syncLibraryAfterDelete(id);
          this.setState({deleteTemplateLoading: false})
          this.props.loadingState(false);
        }
      }).catch( rej => {
        console.log('reject .....', rej);
        this.props.loadingState(false);
      })
    }else{
      this.setState({deleteTemplateLoading: false})
    }
  },
  /**
   * Export Layout
   */  
  handleExportLayout(){
    this.setState({templateExportLoading: true})
    const { data, id, name, type} = this.props.template;
    
    let trimmedTitle = name.replace(/\s+/g, '');
    var donwloadFileName = 'onepager' + trimmedTitle + id + Date.now(); 
		var templateName = trimmedTitle;
    var screenshot = templateName + ".jpg";

    this.exportTemplateAsJson({
      name: name,
      screenshot: screenshot,
      file:donwloadFileName,
      identifier: 'txonepager',
      type:type,
      sections: data
    });

  },
  /**
   * data hold all section data of this page
   * @param {data} 
   */
  exportTemplateAsJson(data) {
    var dataStr = "data:text/json;charset=utf-8," + encodeURIComponent( JSON.stringify( data, null, 2 ) );
		var dlAnchorElem = document.getElementById( 'exportLayoutAnchorElem' );

    var downloadName = data.name ? data.name.replace(/\s+/g, '') : data.file;

    dlAnchorElem.setAttribute( "href", dataStr );
    dlAnchorElem.setAttribute( "download", downloadName + ".json" );
    setTimeout(() => {
      dlAnchorElem.click();
      this.setState({templateExportLoading: false})
    }, 500)

	},


  render() {
    let template = this.props.template;

    return (
      <tr>
        {/* <td className="id">{template.id}</td> */}
        <td className="name">{template.name}</td>
        <td className="type">{template.type}</td>
        <td className="user">{template.created_by === '1' ? i18n.tbody.admin : null}</td>
        <td className="date">{template.created_at}</td>
        <td className="insert">
          <span className="insert-layout" onClick={this.handleMergeSection}>
            {/* <i className="fa fa-download"></i> */}
            {this.state.templateMergeLoading ? <i className="fa fa-refresh fa-spin"></i> : <i className="fa fa-download"></i>}
            <span>{i18n.tbody.insert}</span>
          </span>
        </td>
        <td className="export-delete">
          <span className="delete-layout" onClick={this.handleDeleteLayout}>
            {this.state.deleteTemplateLoading ? <i className="fa fa-refresh fa-spin"></i> : <i className="fa fa-trash"></i>}
          </span>
          <span className="export-layout" onClick={this.handleExportLayout}>
            <span>{i18n.tbody.export}</span>
            {this.state.templateExportLoading ? <i className="fa fa-refresh fa-spin"></i> : <i className="fa fa-sign-out"></i>}
          </span>
        </td>
      </tr>
    );
  }
});

module.exports = Template;
