const $               = jQuery; //jshint ignore: line
const React           = require("react");
const _               = require("underscore");
const swal            = require('sweetalert');
const Button          = require('react-bootstrap/lib/Button');
const Input           = require("../edit/form/Input.jsx");
const ODataStore      = require('../../stores/ODataStore');
const notify          = require('../../lib/notify');
const AppStore        = require('../../stores/AppStore');
const AppActions      = require('../../actions/AppActions');
const PureComponent   = require('react/lib/ReactComponentWithPureRenderMixin');


let AddToMenu = React.createClass({
  mixins: [PureComponent],

  handleCloseMenu(){
    AppStore.setMenuState(null, null);
    document.querySelector('body').classList.remove('op-edit-section'); //jshint ignore:line
  },

  handleSubmit(){
    let sectionIndex = this.props.index;
    let data = {
      action     : 'onepager_menu_add',
      menuId     : this.refs.menuId.getValue(), //jshint ignore:line
      itemId     : this.refs.itemId.getValue(), //jshint ignore:line
      itemTitle  : this.refs.itemTitle.getValue() //jshint ignore:line
    };

    let sections = _.map(AppStore.getAll().sections, function(section){
      return section.id;
    });

    sections.splice(sectionIndex, 1);


    if(sections.indexOf(data.itemId) !== -1){ //jshint ignore:line
      swal("such a menu exists");
      return;
    }


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
    let fields = [
      {
        type  : "menu",
        id    : "menu",
        value : "",
        label : "Menu Position",
        ref   : "menuId",
      },
      {
        type  : "text",
        id    : "name",
        value : this.props.title,
        label : "Menu name",
        ref   : "itemTitle",
        placeholder: "Item name"
      },
      {
        type  : "text",
        id    : "id",
        value : this.props.id,
        label : "Menu ID",
        ref   : "itemId",
        addonBefore: "#",
        placeholder: "Item Id"
      }
    ];

    return(
      <div>
        {
          fields.map(field=>{
            return <Input key={field.id+this.props.index} ref={field.ref} options={field} onChange={()=>{}}/>;
          })
        }

       <Button bsStyle='primary' onClick={this.handleSubmit}>Add to Menu</Button>
      </div>
    );
  }
});

module.exports = AddToMenu;
