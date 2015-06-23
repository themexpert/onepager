const React     = require('react');
const Input     = require('./Input.jsx');
const _         = require("underscore");
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const swal      = require('sweetalert');


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

function generateNewInput(input){
    let newInput = _.copy(input);
    newInput.ref   = _.uniqueId('ir-');
    newInput.value = "";

    return newInput;
}

let RepeatInput = React.createClass({
  mixins: [PureMixin],
  
  getValue(){
    return this.props.options.inputs.map((control)=>{
      return this.refs[control.ref].getValue();
    });
  },

  add(ii){
    let inputs  = _.copy(this.props.options.inputs);
    let input   = generateNewInput(this.props.options.inputs[0]);

    inputs = _.pushAt(inputs, ii+1, input);

    this.props.updateControl('inputs', inputs);
    setTimeout(this.props.onChange, 100); //buggy need a better solution
  },
  
  remove(ii){
    let inputs = _.copy(this.props.options.inputs);

    if(inputs.length <= 1) {
      swal("Sorry you can't delete this");
      return;
    }

    confirmDelete(()=>{
      inputs.splice(ii, 1);
      this.props.updateControl('inputs', inputs);
      setTimeout(this.props.onChange, 100); //buggy need a better solution
    });
  },

  // update(){
  //   let value = this.getValue();

  //   this.props.updateControl('value',value);
  // },

  render() {
    let options = this.props.options;

    return (
      <div className="form-group">
        <label>{options.label}</label> 
      {
        _.map(options.inputs, (control, ii)=>{

          return (
            <div className="input-group" key={control.ref}>
              <Input 
                ref={control.ref} 
                type={this.props.type}
                options={control}
                onChange={this.props.onChange}/>
            

              <span className="input-group-btn">
                <button className="btn btn-primary" onClick={this.add.bind(this, ii)} type="button"><span className="fa fa-plus"></span></button>
                <button className="btn btn-primary" onClick={this.remove.bind(this, ii)} type="button"><span className="fa fa-minus"></span></button>
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
