import storage from './storage.js';

export default function (key){
	let state = storage().get( key );

	return function(){
		function get(key, def){
			/**
			 * if a key is not asked
			 * then return the whole state
			 */
			if ( ! key) {
				return state;
			}

			return state && (state[key] !== null || state[key] !== undefined) ? state[key] : def;
		}

		function set(value){
			return storage().set( key, value );
		}

		return {
			get,
			set
		};
	};
}
