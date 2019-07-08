import {findDOMNode} from 'react';

module.exports = {
	getContainerReactId(){
		let el = findDOMNode( this.refs.container );
		if ( ! el) {
			return false;
		}

		return el.getAttribute( 'data-reactid' );
	},

	getSelector( selector ){
		let reactId = this.getContainerReactId();

		return "[data-reactid='" + reactId + "']" + " " + selector;
	}
};
