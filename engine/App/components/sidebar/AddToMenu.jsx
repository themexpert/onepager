// const swal            = require('sweetalert');
const $ = jQuery; //jshint ignore: line
const PureComponent = require('react/lib/ReactComponentWithPureRenderMixin');
const React         = require("react");
const _             = require("underscore");
const Button        = require('react-bootstrap/lib/Button');
const Input         = require("../../../shared/components/form/Input.jsx");
const ODataStore    = require('../../../shared/lib/ODataStore.js');
const notify        = require('../../../shared/lib/notify.js');
const AppStore      = require('../../AppStore.js');
const AppActions    = require('../../AppActions.js');



let AddToMenu = React.createClass({
  mixins: [PureComponent],

  getInitialState(){
    return {
      isValid: false
    };
  },

  isFormValid(){
    let itemId   = this.refs.itemId.getValue();
    let sections = _.map(AppStore.getAll().sections, function (section) {
      return section.id;
    });

    sections.splice(this.props.index, 1);

    let isValid = sections.indexOf(itemId) === -1 && this.refs.menuId.getValue();

    this.setState({isValid});
  },

  handleSubmit(){
    let sectionIndex = this.props.index;
    let data         = {
      action   : 'onepager_menu_add',
      menuId   : this.refs.menuId.getValue(), //jshint ignore:line
      itemId   : this.refs.itemId.getValue(), //jshint ignore:line
      itemTitle: this.refs.itemTitle.getValue() //jshint ignore:line
    };

    let section = _.copy(AppStore.getAll().sections[sectionIndex]);
    section.id  = data.itemId;
    section.key = data.itemId;


    $.post(ODataStore.ajaxUrl, data, (res)=> {
      if (res && res.success) {
        notify.success("successfully added menu");
        AppActions.updateSection(sectionIndex, section);
        AppActions.reloadSections();
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
        type    : "menu",
        id      : "menu",
        value   : "",
        label   : "Menu Position",
        ref     : "menuId",
        onChange: this.isFormValid
      },
      {
        type       : "text",
        id         : "name",
        value      : title,
        label      : "Menu name",
        ref        : "itemTitle",
        placeholder: "Item name",
        onChange   : this.isFormValid
      },
      {
        type       : "text",
        id         : "id",
        value      : id,
        label      : "Menu ID",
        ref        : "itemId",
        addonBefore: "#",
        placeholder: "Item Id",
        onChange   : this.isFormValid
      }
    ];

    return (
      <div>
        {
          fields.map(field=> {
            return <Input key={field.value+field.id} ref={field.ref} options={field} onChange={field.onChange}/>;
          })
        }

        <Button bsStyle='primary' disabled={!this.state.isValid} onClick={this.handleSubmit}>Add to Menu</Button>
      </div>
    );
  }
});

module.exports = AddToMenu;
