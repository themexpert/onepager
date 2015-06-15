const _         = require('underscore');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const React     = require('react');
const Divider   = require('./Divider.jsx');
const Input     = require('./form/Input.jsx');
// const Tab       = require('../sidebar/Tab.jsx');
// const TabPane   = require('../sidebar/TabPane.jsx');

let SectionSettings = React.createClass({
  mixins: [PureMixin],

  update(){
    let controls  = _.copy(this.props.controls);

    controls = controls.map(control=>{
      let ref = this.refs[control.ref];

      switch(control.type){
        case 'divider':
          //we do not need to compute anything for a divider
          break;
        
        case 'repeater':
          control.fields = ref.getFields();
          break;

        default: 
          //normal input
          control.value = ref.getValue();
      }

      return control;
    });

    this.props.update(controls);
  },

  render(){
    let {sectionIndex, controls} = this.props;
    let tabs = _.pairs(_.groupBy(controls, 'tab'));

    let renderTabControls = tabControls=>{
      return tabControls.map((control, ii)=>{
        let props = {
          onChange      : this.update,
          options       : control,
          ref           : control.ref,
          controlIndex  : ii,
          repeatIndex   : ii,
          sectionIndex  : sectionIndex,
          key           : sectionIndex+'-'+ii
        };
        
        switch(control.type){
          case 'divider': return <Divider key={sectionIndex+'-'+ii} label={control.label} />;
          default: return <Input {...props} />;
        }
      });
    };

    return(
      <div>
        <ul className='nav nav-pills lm-nav-pills'>
          { tabs.map((tab, ii)=>{
              let tabName   = tab[0];
              let className = (ii===0)? 'active' : '';

              return (
                <li key={tabName} className={className}>
                  <a href={'#op-'+tabName} data-toggle='tab'>{tabName}</a>
                </li>
              );
          }) }
        </ul>

        <div className="tab-content">
          { tabs.map((tab, ii)=>{
              let tabName   = tab[0];
              let className = (ii===0)? 'active' : '';
              className    += 'tab-pane lm-tab-pane clearfix';
              
              return(
                <div key={tabName} id={'op-'+tabName} className={className}>
                  {renderTabControls(tab[1])}
                </div>
              );
          }) }

        </div>

      </div>
    );
  }
});


module.exports = SectionSettings;
