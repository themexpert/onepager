const React = require('react');
const _ = require('underscore');
const Divider = require('../../../shared/components/form/Divider.jsx');
const Note = require('../../../shared/components/form/Note.jsx');
const Input = require('../../../shared/components/form/Input.jsx');
const RepeatInput = require('../../../shared/components/form/RepeatInput.jsx');
const Repeater = require('../../../shared/components/repeater/Repeater.jsx');
const PureMixin = require('../../../shared/mixins/PureMixin.js');
const Tab = require('../../../shared/components/Tab.jsx');
const TabPane = require('../../../shared/components/TabPane.jsx');
const SectionTitle = require("../section-list/SectionTitle.jsx");

import LocalState from '../../../shared/lib/localState.js';

let componentLocalState = LocalState('onepager_section_editor_ui_state')();

let SectionControls = React.createClass({
  //  mixins: [PureMixin],
  getInitialState(){
    return {
      activeTab: componentLocalState.get('activeTab', 'contents')
    };
  },

  componentDidUpdate() {
    componentLocalState.set(this.state);
  },

  update(tabName){
    let controls = _.copy(this.props.sectionSettings[tabName]);

    controls = controls.map(control=> {
      let ref = this.refs[control.ref];
      let type = control.type;

      switch (type) {
        case "divider":
        case "note":
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

    this.props.update(tabName, controls);
  },

  updateControl(tabName, controlIndex, key, value){
    let contentControls = _.copy(this.props.sectionSettings[tabName]);

    contentControls[controlIndex][key] = value;

    this.props.update(tabName, contentControls);
  },


  render() {
    console.log('rendering section contentControls');

    let {title, sectionIndex, sectionSettings} = this.props;


    let getControlsHTML = (tabName, controls)=> {
      return controls.map((control, ii)=> {
        let type = control.type;
        let hidden = false;


        if (_.isArray(control.value)) {
          type = 'repeat-input';
        }

        if (control.depends) {
          let depends = _.find(sectionSettings[tabName], {name: control.depends});
          if (!depends || depends.value !== true) {
            hidden = true;
          }
        }

        let props = {
          hidden,
          sectionIndex,
          onChange: this.update.bind(this, tabName),
          options: control,
          id: control.ref,
          ref: control.ref,
          key: control.ref
        };

        switch (type) {
          case "repeat-input":
            return <RepeatInput updateControl={this.updateControl.bind(this, tabName, ii)} {...props} />;
          case "divider":
            return <Divider key={sectionIndex+"-"+ii} label={control.label}/>;
          case "note":
            return <Note key={sectionIndex+"-"+ii} label={control.label}/>;
          case "repeater":
            let updateControl = this.updateControl.bind(this, tabName, ii);
            return <Repeater updateControl={updateControl} {...props}/>;
          default:
            return <Input {...props} />;
        }
      });
    };

    let handleTabClick = (id)=> this.setState({activeTab: id});
    let activeTab = this.state.activeTab;

    if (!sectionSettings[activeTab].length) {
      let tabs = ['contents', 'settings', 'styles'];
      tabs.splice(tabs.indexOf(activeTab), 1);

      if (sectionSettings[tabs[0]] && sectionSettings[tabs[0]].length) {
        activeTab = tabs[0];
      } else if (sectionSettings[tabs[1]] && sectionSettings[tabs[1]].length) {
        activeTab = tabs[1];
      } else {
        activeTab = tabs[2];
      }
    }

    return (
      <div>
        <h4>{this.props.title}</h4>
        <ul className="nav nav-pills">
          {sectionSettings.contents.length && (sectionSettings.settings.length !== 0 || sectionSettings.styles.length!== 0) ?
            <Tab onClick={handleTabClick} id="contents" title="Content" active={activeTab}/> : null}
          {sectionSettings.settings.length ?
            <Tab onClick={handleTabClick} id="settings" title="Settings" active={activeTab}/> : null}
          {sectionSettings.styles.length ?
            <Tab onClick={handleTabClick} id="styles" title="Styles" active={activeTab}/> : null}
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
