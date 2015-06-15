const $           = jQuery; //jshint ignore:line
const React       = require('react');
// const PureMixin   = require('react/lib/ReactComponentWithPureRenderMixin');
const AppActions  = require('../../actions/AppActions');

let Section = React.createClass({
  // mixins: [PureMixin],
  shouldComponentUpdate(nextProps){
    //if content changed
    let contentChanged  = this.props.section.content===nextProps.section.content;

    //if reordered
    let keyChanged      = this.props.section.key === nextProps.section.key;
    
    return  !contentChanged || !keyChanged;
  },
  
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
    console.log("re rendering section view");
    return <section onClick={this.handleClick} />;
  }
});

module.exports = Section;
