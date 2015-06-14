const $           = jQuery; //jshint ignore:line
const React       = require('react');
const PureMixin   = require('react/lib/ReactComponentWithPureRenderMixin');
const AppActions  = require('../../actions/AppActions');

let Section = React.createClass({
  mixins: [PureMixin],

  componentDidMount(){
    this.setSectionContent();
  },

  componentDidUpdate(){
    this.setSectionContent();
  },

  setSectionContent(){
    let content = this.props.section.content;

    $(React.findDOMNode(this)).html(content);
  },

  handleClick(){
    AppActions.editSection(this.props.index);
  },

  render() {
    return <section onClick={this.handleClick} />;
  }
});

module.exports = Section;
