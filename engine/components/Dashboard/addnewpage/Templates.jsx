const React 				= require('react');
const cx = require("classnames");

let Template = React.createClass({
	getInitialState(){
		return {
			selected: null
		};
	},
	handleClick(templateId){
		this.setState({selected: templateId});
		this.props.handleClick(templateId);
	},
  render: function () {
		const templates = this.props.templates;
		const selected = this.state.selected;
		const handleClick = this.handleClick;

    return (
    	<div>
    		{ templates.map((template, ii)=>{
    			let classes = cx("col-md-4", {
    				"selected": template.id === selected
    			});
  				return (
		    		<div className={classes} key={ii}>
						  <div className="thumbnail">
				    			<img src={template.img} />
						      
						      <div className="caption">
						        <h3>{template.name}</h3>
						        <p> 
						        	<button onClick={()=>handleClick(template.id)} 
						        		className="btn btn-primary" type="button"
						        		data-toggle="modal" data-target=".page-title-modal">
						        		Select
						        	</button>
						        </p>
						      </div>
						    </div>
		    		</div>
  				);
    			})
    		}
    	</div>
    );
  }
});

module.exports = Template;