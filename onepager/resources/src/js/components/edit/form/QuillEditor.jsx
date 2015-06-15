const React       = require('react');
const PureMixin   = require('react/lib/ReactComponentWithPureRenderMixin');

let QuillControl = React.createClass({
  mixins: [PureMixin],

  getValue(){
    var editor = new Quill('.editor'); //jshint ignore:line
    return editor.getText();
  },

  componentDidMount(){
    var editor = new Quill('.editor'); //jshint ignore:line
    editor.addModule('toolbar', { container: '.toolbar' });
    editor.on('text-change', this.props.onChange);
  },

  render() {
    return (
      <div>
        <label>{this.props.label}</label>

        <div className="toolbar">
          <button className="ql-bold">Bold</button>
          <button className="ql-italic">Italic</button>
        </div>

        <div className="editor">
          <div dangerouslySetInnerHTML={{__html: this.props.defaultValue}} />
        </div>

      </div>
    );
  }
});

module.exports = QuillControl;
