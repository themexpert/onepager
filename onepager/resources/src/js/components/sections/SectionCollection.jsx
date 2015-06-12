const SortableMixin = require('sortablejs/react-sortable-mixin');
const _             = require('underscore');
const React         = require('react');
const Section       = require('./Section.jsx');
const AppStore      = require('../../stores/AppStore.js');

// const AppActions    = require('../../actions/AppActions');
// const ReactComponentWithPureRenderMixin = require('react/lib/ReactComponentWithPureRenderMixin');

let SectionCollection = React.createClass({
  mixins: [
    //collection updates on every section control change must do something
    // ReactComponentWithPureRenderMixin, 
    SortableMixin
  ],

  componentDidUpdate(){
    console.log("section collection updated!!");
    let section = AppStore.get(this.props.activeSectionIndex);

    if(!section) {
      return false;
    }

    let el        = document.getElementById(section.id); //jshint ignore:line
    let position  = _.getPosition(el);

    React.findDOMNode(this).style.transform = "translate3d(0,-"+position.y+"px,0)";
  },

  handleEnd(e) {
    if(e.oldIndex  === undefined || e.newIndex === undefined) {
      return;
    }

    let sections  = _.copy(this.props.sections);
    sections      = _.move(sections, e.oldIndex, e.newIndex);
    sections[e.oldIndex].key  = _.randomId('s_');
    sections[e.newIndex].key  = _.randomId('s_');

    AppStore.setSections(sections);
    AppStore.reorder();
  },

  render() {
    let sections = this.props.sections;

    return (
      <div id="sections">
        {
          sections.map((section, index)=> {
            return <Section section={section} key={section.key} index={index}/>;
          })
        }
      </div>
    ); //end jsx
  } //end render
});

module.exports = SectionCollection;
