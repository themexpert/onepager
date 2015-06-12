const ReactComponentWithPureRenderMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const React = require("react");
const _ = require("underscore");
const Divider = require('./Divider.jsx');
const Input = require('./form/Input.jsx');
const AppActions = require('../../actions/AppActions');
const AppStore = require('../../stores/AppStore');

let SectionSettings = React.createClass({
  mixins: [ReactComponentWithPureRenderMixin],

  updateSection(){
    let sectionIndex = this.props.sectionIndex;
    let controls = _.copy(this.props.controls);
    let section = _.copy(AppStore.get(sectionIndex));

    section.settings = controls.map(control=>{
      let ref = this.refs[control.ref];

      switch(control.type){
        case "divider":
          break;
        case "repeater":
          control.fields = ref.getFields();
          break;
        default: control.value = ref.getValue();
      }


      return control;
    });

    AppActions.updateSection(sectionIndex, section);
  },
  render(){
    //console.log('rendering section settings');

    let {sectionIndex, controls} = this.props;
    let tabs = _.pairs(_.groupBy(controls, "tab"));

    let fn = tControls=>{
      return tControls.map((control, ii)=>{
        let props = {
          onChange: this.updateSection,
          options: control,
          ref: control.ref,
          controlIndex: ii,
          repeatIndex: ii,
          sectionIndex: sectionIndex,
          key: sectionIndex+"-"+ii
        };
        
        switch(control.type){
          case "divider": return <Divider key={sectionIndex+"-"+ii} label={control.label} />;
          default: return <Input {...props} />;
        }
      });
    };


    return(
      <div>
        <ul className="nav nav-pills lm-nav-pills">
          { tabs.map((tab, ii)=>{
              //TODO: key ii defeats the purpose
              return <li key={ii} className={ii===0?"active":""}><a href={"#op-"+tab[0]} data-toggle="tab">{tab[0]}</a></li>;
          }) }
        </ul>

        <div className="tab-content">
          { tabs.map((tab, ii)=>{
            //TODO: key ii defeats the purpose
            return(
              <div key={ii} id={"op-"+tab[0]} className={(ii===0?"active":"")+" tab-pane lm-tab-pane clearfix"}>
                {fn(tab[1])}
              </div>
              );
          }) }

        </div>

      </div>
    );
  }
});


module.exports = SectionSettings;
