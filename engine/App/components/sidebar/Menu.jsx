import React from 'react';
import PanelGroup from 'react-bootstrap/lib/PanelGroup';
import Panel from 'react-bootstrap/lib/Panel';
import Input from '../../../shared/components/form/Input.jsx';
import AddToMenu from './AddToMenu.jsx';

import "./menu.less";

const Menu = React.createClass({
  getInitialState(){
    return{
      menu: null
    }
  },

  handleMenu(){
    this.setState({menu: this.refs.menu.getValue()});
  },

  render() {
    let menu = {
      type    : 'menu',
      value   : '',
      label   : 'Menu Position',
      onChange: this.isFormValid
    };

    let {sections} = this.props;

    return (
      <div className="onepager-menu">
        <Input ref='menu' options={menu} onChange={this.handleMenu}/>

        {this.state.menu ?
          <PanelGroup accordion>
          { sections.map((section, index)=>{
              return (
                <Panel header={section.title} eventKey={index}>
                  <AddToMenu index={index} menu={this.state.menu} title={section.title} id={section.id}></AddToMenu>
                </Panel>
              );
            }) }
          </PanelGroup> :
          <p>Please select a Menu</p>
        }
      </div>
    );
  }
});

export default Menu;
