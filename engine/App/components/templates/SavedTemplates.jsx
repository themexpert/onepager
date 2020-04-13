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
        <ul className="uk-list uk-list-striped">
            <li>
                <span>Name</span>
                <span>Type</span>
                <span>Created By</span>
                <span>Created At</span>
                <span>Action</span>
            </li>
          {templates.map(template => <Template template={template} />)}
        </ul>
        </div>
      </div>
    );

  }
});

module.exports = SavedTemplates;
