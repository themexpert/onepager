const React                             = require('react');
const Select                            = require("./Select.jsx");
const ODataStore                        = require("../../onepager/ODataStore.js");
const ContainedSelectorMixin            = require("../../mixins/ContainedSelectorMixin.js");
const ReactComponentWithPureRenderMixin = require('react/lib/ReactComponentWithPureRenderMixin');

let WpSelect = React.createClass({
  mixins: [ContainedSelectorMixin, ReactComponentWithPureRenderMixin],

  getValue(){
    return this.refs.input.getValue();
  },

  render() {
    let options = [], type = this.props.type;

    switch (type) {
      case "menu":
        options = ODataStore.menus;
        break;
      case "page":
        options = ODataStore.pages;
        break;
      case "category":
        options = ODataStore.categories;
        break;
      case "woocategories":
        options = ODataStore.woocategories;
        break;
    }

    return (
      <Select
        ref="input"
        type="select"
        defaultValue={this.props.defaultValue}
        label={this.props.label}
        options={options}
        onChange={this.props.onChange}/>
    );
  }
});

module.exports = WpSelect;
