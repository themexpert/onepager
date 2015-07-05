const React 				= require('react');

let Modal = React.createClass({
	getInitialState(){
		return {
			title: ""
		};
	},
	
	handleInputChange(e){
		this.setState({title: e.target.value});
	},
	
	handleProceed(){
		this.props.handleProceed(this.state.title);
	},

  render: function () {
  	let title = this.state.title;
  	let disabled = title === "";
  	let handleProceed = this.handleProceed;
  	let handleInputChange = this.handleInputChange;
    
    return (
			<div className="modal fade page-title-modal" tabIndex="-1" role="dialog">
			  <div className="modal-dialog modal-md">
			    <div className="modal-content">
			      <div className="modal-body">
			        <h4 className="modal-title">Page Title</h4>
				      <p><input defaultValue={title} type="text" onChange={handleInputChange} className="form-control" /></p>
			        <p><button disabled={disabled} onClick={handleProceed} type="button" className="btn btn-primary">Proceed to build mode</button> </p>
			      </div>
			    </div>
			  </div>
			</div>
    );
  }
});

module.exports = Modal;