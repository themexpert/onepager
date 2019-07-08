module.exports = {
	shouldComponentUpdate( nextProps, nextState ){
		// immutable please
		// TODO: speed
		let equalProps = JSON.stringify( nextProps ) === JSON.stringify( this.props );
		let equalState = JSON.stringify( nextState ) === JSON.stringify( this.state );

		return ! equalProps || ! equalState;
	},
};
