const React 				= require('react');

let About = React.createClass({
  render: function () {
    return (
    	<section id="about" className="row">

    		<section className="col-md-3">
					<div className="panel panel-default">
					  <div className="panel-heading">Onepager pages</div>
					  <div className="panel-body">
							<ul className="nav nav-pills nav-stacked">
								<li><a href="#">Page 1</a></li>
								<li><a href="#">Page 2</a></li>
								<li><a href="#">Page 3</a></li>
								<li><a href="#">Page 4</a></li>
								<li><a href="#">Page 5</a></li>
							</ul>
					  </div>
					  <div className="panel-footer">
					  	<button className="btn btn-primary">Add new page</button> 
					  </div>
					</div>
    		</section>

    		<section className="col-md-6">
					<div className="panel panel-default">
					  <div className="panel-heading">Theme and extensions</div>
					  <div className="panel-body">
					  	<p> Looking for a theme or plugin to achieve something unique with your website? Browse the massive Onepager Marketplace on Envato and take your site to the next level. </p>
					  	<p> Looking for a theme or plugin to achieve something unique with your website? Browse the massive Onepager Marketplace on Envato and take your site to the next level. </p>
					  </div>
					  <div className="panel-footer">
					  	<button className="btn btn-primary">Themes</button> &nbsp; 
					  	<button className="btn btn-primary">Extensions</button> 
					  </div>
					</div>
    		</section>

    		<section className="col-md-3">
					<div className="panel panel-default">
					  <div className="panel-heading">Quick tips</div>
					  <div className="panel-body">
							<ul className="nav nav-pills nav-stacked">
								<li><a href="#">Article 1</a></li>
								<li><a href="#">Article 2</a></li>
								<li><a href="#">Article 3</a></li>
								<li><a href="#">Article 4</a></li>
								<li><a href="#">Article 5</a></li>
							</ul>
					  </div>
					  <div className="panel-footer">
					  	<button className="btn btn-primary">Get more tips</button> 
					  </div>
					</div>
    		</section>


    		<section className="col-md-3">
					<div className="panel panel-default">
					  <div className="panel-heading">Onepager news</div>
					  <div className="panel-body">
							<ul className="nav nav-pills nav-stacked">
								<li><a href="#">News 1</a></li>
								<li><a href="#">News 2</a></li>
								<li><a href="#">News 3</a></li>
								<li><a href="#">News 4</a></li>
								<li><a href="#">News 5</a></li>
							</ul>
					  </div>
					</div>
    		</section>

    		<section className="col-md-3">
					<div className="panel panel-default">
					  <div className="panel-heading">Stay in the loop</div>
					  <div className="panel-body">
							<form action="#" method="post">
								<div className="form-group">
									<label className="control-label">Email Address</label>
									<input className="form-control" type="email" placeholder="john@smith.com" />
								</div>
								<button className="btn btn-primary" type="submit">Subscribe</button>
							</form>
					  </div>
					</div>
    		</section>

			</section>
    );
  }
});

module.exports = About;