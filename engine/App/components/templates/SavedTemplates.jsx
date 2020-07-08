const React = require('react');
const _ = require('underscore');
const Alert = require('react-bootstrap/lib/Alert');
const Button = require('react-bootstrap/lib/Button');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const Template = require('./Template.jsx');
const Select = require("../../../shared/components/form/Select.jsx");
const {opi18n:i18n} = onepager;


let SavedTemplates = React.createClass({

  getInitialState(){
    return {
      templates: '',
      loading:false
    };
  },

  // propTypes: {
  //   templates: React.PropTypes.array
  // },

  componentDidMount(){
    this.setState({
      templates: this.props.templates
    });
  },
  componentWillReceiveProps (nextProps){
    this.setState({
      templates: nextProps.templates
    });
  },
  handleLoadingState(status){
    this.setState({loading:status})
  },

  render() {
    
    console.log("rendering saved templates");
    let templates = this.state.templates;    

    return (
      <div className="template-collection-lists">
        <div className="template-collection-lists-wrapper">
        <a id="exportLayoutAnchorElem"></a>
        <div className={this.state.loading ? 'loading-overlay loading': 'loading-overlay'}>
           {this.state.loading ? <i className="fa fa-refresh fa-spin"></i> : null }
        </div>
        {templates.length > 0 ? ( 
        <table className="uk-table uk-table-divider uk-table-middle">
          <thead>
              <tr>
                  {/* <th>ID</th> */}
                  <th className="uk-width-1-6">{i18n.thead.name}</th>
                  <th className="uk-width-1-6">{i18n.thead.type}</th>
                  <th className="uk-width-1-6">{i18n.thead.created_by}</th>
                  <th className="uk-width-1-6">{i18n.thead.created_at}</th>
                  <th className="uk-width-1-6">{i18n.thead.action}</th>
                  <th className="uk-width-1-6"></th>
              </tr>
          </thead>
          <tbody>
            {templates.map(template => <Template key={template.id} template={template} loadingState={this.handleLoadingState} />)}
          </tbody>
        </table>
        ) : (
        <div className="no-template">
          <p className="icon"><span><i className="fa fa-smile-o"></i></span></p>
          <p>{i18n.alert.no_save_template}</p>
          {/* <p>
            <span>Your template should be here. Design, Save & Reuse it.  </span>
          </p> */}
        </div> 
        )}
        </div>
      </div>
    );

  }
});

module.exports = SavedTemplates;
