function storage(){
	function get(key){
		let value = window.localStorage.getItem( key );

		try {
			return JSON.parse( value );
		} catch (e) {
			return value;
		}
	}

	function set(key, value){
		window.localStorage.setItem( key, JSON.stringify( value ) );
	}

	return {
		get,
		set
	}
}

export default storage;
