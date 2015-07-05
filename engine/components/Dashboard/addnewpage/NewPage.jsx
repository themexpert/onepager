const React 				= require('react');
const Modal 				= require('./Modal.jsx');
const Templates 				= require('./Templates.jsx');
const _ = require("underscore");

let NewPage = React.createClass({
	getInitialState(){
		return {
			templates : onepager.templates
		};
	},

	handleClick(templateId){
		this.setState({templateId});
	},

	handleProceed(title){
    let data = {
      action     : 'onepager_add_page',
      title: title,
      sections  : _.find(this.state.templates, {id: this.state.templateId}).sections
    };

    jQuery.post(onepager.ajaxUrl, data, (res)=>{
      if(res && res.id){
        location.href=res.url;
      } else {
      }
    });
	},

  render: function () {
  	const templates = this.state.templates;
  	const handleClick = this.handleClick;
  	const handleProceed = this.handleProceed;

    return (
    	<section>
    		<h2>Add new page</h2>
				<Templates handleClick={handleClick} templates={templates} />    		
				<Modal handleProceed={handleProceed}/>
    	</section>
    );
  }
});

module.exports = NewPage;