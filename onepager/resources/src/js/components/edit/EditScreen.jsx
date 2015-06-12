const React                   = require('react');
const AppActions              = require('../../actions/AppActions');
const SectionControls         = require('./SectionControls.jsx');
const SectionSettings         = require('./SectionSettings.jsx');
const ContainedSelectorMixin  = require("../../mixins/ContainedSelectorMixin");

const ReactComponentWithPureRenderMixin = require('react/lib/ReactComponentWithPureRenderMixin');

let EditScreen = React.createClass({
  mixins: [ContainedSelectorMixin, ReactComponentWithPureRenderMixin],
  propTypes: {
    sectionIndex: React.PropTypes.number,
    section: React.PropTypes.object,
    open: React.PropTypes.bool
  },

  animateIn(){
    if(this.props.sectionIndex === null) {
      return;
    }

    let editScreen = document.getElementById("edit-screen");
    
    if(editScreen){
      document.getElementById("edit-screen").classList.add('in');
    }
  },

  closeSection(){
    document.getElementById("edit-screen").classList.remove('in');
    document.querySelector('body').classList.remove('op-sidebar-open');
    document.getElementById('sections').style.transform = "none";

    setTimeout(()=> AppActions.editSection(null), 200);
  },

  componentDidMount(){
    this.animateIn();
  },

  componentDidUpdate(){
    this.animateIn();
  },


  render() {
    //console.log('rendering edit screen');

    let {sectionIndex, section} = this.props;

    return (
      <div id="edit-screen" className="op-ui clearfix fade">
        <ul className="tx-nav tx-nav-tabs">
          <li className="active"><a href="#op-contents" data-toggle="tab"><span className="fa fa-cubes"></span> Contents</a></li>
          <li><a href="#op-settings" data-toggle="tab"><span className="fa fa-cog"></span> Settings</a></li>
          <li className="pull-right">
            <a onClick={this.closeSection} className="btn btn-primary"><span className="fa fa-close"></span></a>
          </li>
        </ul>

        <div className="tab-content">
          <div id="op-contents" className="tab-pane lm-tab-pane active">
           <SectionControls controls={section.fields} sectionIndex={sectionIndex} />
          </div>

          <div id="op-settings" className="tab-pane lm-tab-pane">
            <SectionSettings controls={section.settings ? section.settings: [] } sectionIndex={sectionIndex}/>
          </div>
        </div>

      </div>
    );
  }
});

module.exports = EditScreen;
