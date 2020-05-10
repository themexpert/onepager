const React = require('react');
const _ = require('underscore');
const Alert = require('react-bootstrap/lib/Alert');
const Button = require('react-bootstrap/lib/Button');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const Template = require('./Template.jsx');
const Select = require("../../../shared/components/form/Select.jsx");
// const AppStore  = require('../../stores/AppStore');


let SavedTemplates = React.createClass({
  mixins: [PureMixin],

  propTypes: {
    templates: React.PropTypes.array
  },

  render() {
    console.log("rendering saved templates");

    let templates = this.props.templates;
    console.log(templates);
 

    return (
      <div>
        <div className="template-collection-lists-wrapper">
        {templates.length > 0 ? ( 
        <table className="uk-table uk-table-divider">
          <thead>
              <tr>
                  {/* <th>ID</th> */}
                  <th>Name</th>
                  <th>Type</th>
                  <th>Created By</th>
                  <th>Created At</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
            {templates.map(template => <Template template={template} />)}
          </tbody>
        </table>
        ) : (
        <div className="no-template">
          <p className="icon"><span><i className="fa fa-smile-o"></i></span></p>
          <h4>Haven't saved templated Yet ? </h4>
          <p>
            <span>Your template should be here. Design, Save & Reuse it.  </span>
          </p>
        </div> 
        )}
        </div>
      </div>
    );

  }
});

module.exports = SavedTemplates;
