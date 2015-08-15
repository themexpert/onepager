const $ = jQuery; //jshint ignore: line
const PureComponent = require("react/lib/ReactComponentWithPureRenderMixin");
const React = require("react");
const _ = require("underscore");
const Button = require("react-bootstrap/lib/Button");
const Input = require("../../../shared/components/form/Input.jsx");
const ODataStore = require("../../../shared/lib/ODataStore.js");
const notify = require("../../../shared/lib/notify.js");
const AppStore = require("../../AppStore.js");
const AppActions = require("../../AppActions.js");


let AddToMenu = React.createClass({
//  mixins: [PureComponent],
  propTypes: {
    menu: React.PropTypes.number,
    index: React.PropTypes.number,
    id: React.PropTypes.string,
    title: React.PropTypes.string
  },


  getInitialState(){
    return {
      isValid: true
    };
  },

  componentDidUpdate(prevProps, prevState) {
    this.isFormValid();
  },

  isFormValid(){
    let itemId = this.refs.itemId.getValue();
    let sections = _.map(AppStore.getAll().sections, function (section) {
      return section.id;
    });

    sections.splice(this.props.index, 1);
    let isValid = sections.indexOf(itemId) === -1 && this.props.menu ? true : false;

    this.setState({isValid});
  },

  handleSubmit(){
    let sectionIndex = this.props.index;
    let data = {
      action: "onepager_menu_add",
      menuId: this.props.menu,
      itemId: this.refs.itemId.getValue(),
      itemTitle: this.refs.itemTitle.getValue()
    };

    let section = _.copy(AppStore.getAll().sections[sectionIndex]);
    section.id = data.itemId;
    section.title = data.itemTitle;
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
    let {title, id} = this.props;

    let fields = [
      {
        type: "text",
        id: "name",
        value: title,
        label: "Menu name",
        ref: "itemTitle",
        placeholder: "Item name",
        onChange: this.isFormValid
      },
      {
        type: "text",
        id: "id",
        value: id,
        label: "Menu ID",
        ref: "itemId",
        addonBefore: "#",
        placeholder: "Item Id",
        onChange: this.isFormValid
      }
    ];

    return (
      <div>
        {
          fields.map(field=> {
            return <Input key={field.value+field.id} ref={field.ref} options={field} onChange={field.onChange}/>;
          })
        }

        <Button bsStyle="primary" disabled={!this.state.isValid} onClick={this.handleSubmit}>Add to Menu</Button>
      </div>
    );
  }
});

module.exports = AddToMenu;
