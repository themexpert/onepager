// const swal            = require('sweetalert');
const $               = jQuery; //jshint ignore: line
const PureComponent   = require('react/lib/ReactComponentWithPureRenderMixin');
const React           = require("react");
const _               = require("underscore");
const Button          = require('react-bootstrap/lib/Button');
const Input           = require("../../shared/form/Input.jsx");
const ODataStore      = require('../../../stores/ODataStore');
const notify          = require('../../../lib/notify');
const AppStore        = require('../../../stores/AppStore');
const AppActions      = require('../../../actions/AppActions');


let AddToMenu = React.createClass({
  mixins: [PureComponent],

  getInitialState(){
    return {
      isUnique: true
    };
  },

  handleCloseMenu(){
    AppStore.setMenuState(null, null);
    document.querySelector('body').classList.remove('op-edit-section'); //jshint ignore:line
  },

  isItemIdUnique(){
    let itemId    = this.refs.itemId.getValue();
    let sections  = _.map(AppStore.getAll().sections, function(section){
      return section.id;
    });

    sections.splice(this.props.index, 1);

    let isUnique = sections.indexOf(itemId) === -1;

    this.setState({isUnique});
  },

  handleSubmit(){
    let sectionIndex = this.props.index;
    let data = {
      action     : 'onepager_menu_add',
      menuId     : this.refs.menuId.getValue(), //jshint ignore:line
      itemId     : this.refs.itemId.getValue(), //jshint ignore:line
      itemTitle  : this.refs.itemTitle.getValue() //jshint ignore:line
    };

    let section = _.copy(AppStore.getAll().sections[sectionIndex]);
    section.id  = data.itemId;
    section.key = data.itemId;


    $.post(ODataStore.ajaxUrl, data, (res)=>{
      if(res && res.success){
        notify.success("successfully added menu");
        AppActions.updateSection(sectionIndex, section);
      } else {
        notify.warning("failed to add menu");
      }
    });

  },

  render(){
    let section = this.props.section;
    let title   = section.title;
    let id      = section.id;

    let fields = [
      {
        type  : "menu",
        id    : "menu",
        value : "",
        label : "Menu Position",
        ref   : "menuId",
        onChange: ()=>{}
      },
      {
        type  : "text",
        id    : "name",
        value : title,
        label : "Menu name",
        ref   : "itemTitle",
        placeholder: "Item name",
        onChange: ()=>{}
      },
      {
        type  : "text",
        id    : "id",
        value : id,
        label : "Menu ID",
        ref   : "itemId",
        addonBefore: "#",
        placeholder: "Item Id",
        onChange: this.isItemIdUnique
      }
    ];

    return(
      <div>
        {
          fields.map(field=>{
            return <Input key={field.value+field.id} ref={field.ref} options={field} onChange={field.onChange}/>;
          })
        }

        <h1>{this.state.isUnique ? "unique":"not unique"}</h1>

        <Button bsStyle='primary' disabled={!this.state.isUnique} onClick={this.handleSubmit}>Add to Menu</Button>
      </div>
    );
  }
});

module.exports = AddToMenu;
