const _         = require("underscore");
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const React     = require("react");
const Divider   = require('./Divider.jsx');
const Input     = require('./form/Input.jsx');
const Tab       = require('../sidebar/Tab.jsx');
const TabPane   = require('../sidebar/TabPane.jsx');

let SectionSettings = React.createClass({
  mixins: [PureMixin],

  update(){
    let controls  = _.copy(this.props.controls);

    let sections = controls.map(control=>{
      let ref = this.refs[control.ref];

      switch(control.type){
        case "divider":
          //we do not need to compute anything for a divider
          break;
        
        case "repeater":
          control.sections = ref.getFields();
          break;

        default: 
          //normal input
          control.value = ref.getValue();
      }

      return control;
    });

    this.props.update(sections);
  },

  render(){
    let {sectionIndex, controls} = this.props;
    let tabs = _.pairs(_.groupBy(controls, "tab"));

    let fn = tControls=>{
      return tControls.map((control, ii)=>{
        let props = {
          onChange: this.update,
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
              return <li key={tab[0]} className={ii===0?"active":""}><a href={"#op-"+tab[0]} data-toggle="tab">{tab[0]}</a></li>;
          }) }
        </ul>

        <div className="tab-content">
          { tabs.map((tab, ii)=>{
            return(
              <div key={tab[0]} id={"op-"+tab[0]} className={(ii===0?"active":"")+" tab-pane lm-tab-pane clearfix"}>
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
