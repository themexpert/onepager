const React      = require('react');
const Input      = require('react-bootstrap/lib/Input');
const PureMixin  = require('../../../shared/mixins/PureMixin.js');
const scrollIntoView  = require('../../../shared/plugins/scrollview.js');
const AppActions = require('../../flux/AppActions.js');

let Title = React.createClass({
  propTypes: {
    index: React.PropTypes.number,
    title: React.PropTypes.string
  },

  getInitialState(){
    return {
      edit: false
    };
  },

  componentDidUpdate(prevProps, prevState) {
    if(this.state.edit === true && prevState.edit === false){
      this.refs.title.getInputDOMNode().select();
    }
  },


  handleEditTitle(){
    this.setState({edit: true});
  },

  updateTitle() {
    let newTitle = this.refs.title.getValue();
    AppActions.updateTitle(this.props.index, this.props.title, newTitle);
    this.setState({edit: false});
  },

  updateTitleOnEnter(e){
    //proceed on enter
    if (e.which !== 13) {
      return;
    }

    this.updateTitle();
  },

  render() {
    let title = this.props.title;

    return (
      <div onDoubleClick={this.handleEditTitle} className="op-section-title">
        { this.state.edit ?
          (
            <div>
              <Input type="text" ref="title" onKeyUp={this.updateTitleOnEnter} defaultValue={title}/>
              <span onClick={this.updateTitle} className="uk-label uk-position-center-right">Save</span>
            </div>
          ) :
          (
            <div data-uk-tooltip="title: Double click to rename; pos: right">
              {this.props.children}
            </div>
          )
        }
      </div>
    );
  }
});

module.exports = Title;
