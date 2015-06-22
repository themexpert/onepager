const React       = require('react');
const _           = require("underscore");
const Divider     = require('./Divider.jsx');
const Input       = require('./form/Input.jsx');
const Repeater    = require('./repeater/Repeater.jsx');
const PureMixin   = require('../../mixins/PureMixin.js');
const Tab         = require('../sidebar/Tab.jsx');
const TabPane     = require('../sidebar/TabPane.jsx');

let SectionControls = React.createClass({ 
  mixins: [PureMixin],

  getInitialState(){
    return {
      activeTab: 'contents'
    };
  },

  update(key){
    let controls  = _.copy(this.props.sectionSettings[key]);

    controls = controls.map(ocontrol=>{
      let control = _.copy(ocontrol);
      let ref = this.refs[control.ref];

      switch(control.type){
        case "divider":
          //we do not need to compute anything for a divider
          break;
        
        case "repeater":
          control.fields = ref.getFields();
          break;

        default: 
          //normal input
          control.value = ref.getValue();
      }

      return control;
    });

    this.props.update(key, controls);
  },

  updateControl(key, controlIndex, rGroups){
    let contentControls  = _.copy(this.props.sectionSettings[key]);

    contentControls[controlIndex].fields = rGroups;

    this.props.update(key, contentControls);
  },


  render() {
    console.log('rendering section contentControls');

    let {sectionIndex, sectionSettings} = this.props;


    let getControlsHTML = (key, controls)=>{

      return controls.map((control, ii)=>{
        
        let props = {
          onChange: this.update.bind(this, key),
          options: control,
          ref: control.ref,
          id: control.ref,
          key: control.ref,
          sectionIndex: sectionIndex,
        };
        

        switch(control.type){
          case "repeater": return <Repeater updateControl={this.updateControl.bind(this, key, ii)} {...props}/>;
          case "divider": return <Divider key={sectionIndex+"-"+ii} label={control.label} />;
          default: return <Input {...props} />;
        }
    });
    };

    let handleTabClick = (id)=> this.setState({activeTab: id});
    let activeTab = this.state.activeTab;
    
    if(!sectionSettings[activeTab].length){
      let tabs = ['contens', 'settings', 'styles'];
      tabs.splice(tabs.indexOf(activeTab), 1);

      if(sectionSettings[tabs[0]] && sectionSettings[tabs[0]].length){
        activeTab = tabs[0];
      } else if(sectionSettings[tabs[1]] && sectionSettings[tabs[1]].length)  {
        activeTab = tabs[1];
      }else{
        activeTab = tabs[2];
      }
    }

    return (
      <div>
        <ul className="nav nav-pills">
          {sectionSettings.contents.length ? 
            <Tab onClick={handleTabClick} id="contents" title="Content" active={activeTab} /> : ""}
          {sectionSettings.settings.length ? 
            <Tab onClick={handleTabClick} id="settings" title="Settings" active={activeTab} /> : ""}
          {sectionSettings.styles.length ? 
            <Tab onClick={handleTabClick} id="styles" title="Styles" active={activeTab}/> : ""}
        </ul>


        <div className="tab-content" ref="tabContents">
          <TabPane id="contents" active={activeTab}>
            {getControlsHTML('contents', sectionSettings.contents)}
          </TabPane>
          <TabPane id="settings" active={activeTab}>
            {getControlsHTML('settings', sectionSettings.settings)}
          </TabPane>
          <TabPane id="styles" active={activeTab}>
            {getControlsHTML('styles', sectionSettings.styles)}
          </TabPane>
        </div>

      </div>
    );
  }
});

module.exports = SectionControls;
