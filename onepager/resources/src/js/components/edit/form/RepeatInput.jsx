const React = require('react');
const Input = require('./Input.jsx');
const _ = require("underscore");
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const swal          = require('sweetalert');


function confirmDelete(proceed){
  swal({
    title: "Are you sure?",
    text: "Time travel is still hard and there is no way back",
    type: "warning",
    showCancelButton: true,
    confirmButtonText: "Yes, delete it",
    closeOnConfirm: true,
    confirmButtonColor : '#d32f2f'
  }, proceed);
}

let RepeatInput = React.createClass({
  mixins: [PureMixin],
  
  getValue(){
    let value = this.props.options.inputs.map((control)=>{
      return this.refs[control.ref].getValue();
    });

    return value;
  },

  add(ii){
    let inputs = _.copy(this.props.options.inputs);
    let input = _.copy(this.props.options.inputs[0]);
    input.value = "";
    input.ref = _.uniqueId('ir-');

    inputs = _.pushAt(inputs, ii, input);

    this.props.updateInput('inputs', inputs);
  },
  
  remove(ii){
    let inputs = _.copy(this.props.options.inputs);

    if(inputs.length <= 1) {
      swal("Sorry you can't delete this group");
      return;
    }

    confirmDelete(()=>{
      inputs.splice(ii, 1);
      this.props.updateInput('inputs', inputs);
    });
  },

  update(){
    let value = this.getValue();

    this.props.updateInput('value',value);
  },

  render() {
    let options = this.props.options;

    return (
      <div className="form-group">
        <label>{this.props.label}</label>
      {
        _.map(options.inputs, (control, ii)=>{
          console.log(control.value);

          return (
            <div className="input-group" key={control.ref}>

              <Input 
                ref={control.ref} 
                type={this.props.type}
                options={control}
                onChange={this.update.bind(this, ii)}/>
            
              <span>
                <button ref="minus" type="button" onClick={this.remove.bind(this, ii)}>
                  <span className="fa fa-minus"></span>
                </button>
                <button ref="add" type="button" onClick={this.add.bind(this, ii)}>
                  <span className="fa fa-plus"></span>
                </button>
              </span>

            </div>
          );
        })
      }
      </div>
    );
  }
});

module.exports = RepeatInput;
