const _ = require( 'underscore' );
var slugify = require( "underscore.string/slugify" );
var trim = require( "underscore.string/trim" );

function rand(token){
	return Math.ceil( Math.random() * token );
}

function copy(obj) {
	return JSON.parse( JSON.stringify( obj ) );
}

function move(array, fromIndex, toIndex) {
	let arr = copy( array );
	arr.splice( toIndex, 0, arr.splice( fromIndex, 1 )[0] );
	return arr;
}

function dasherize(str){
	return slugify( trim( str ) );
}

function pushAt(arr, index, item){
	let spliced = arr.splice( index );
	arr.push( item );

	return arr.concat( spliced );
}

function randomId(prefix = "") {
	return _.uniqueId( prefix + rand( 1000000 ) );
}

function costlyIsEqual(a, b){
	return JSON.stringify( a ) === JSON.stringify( b );
}

function isUniqueInArrayExcept(items, item, index){
	// remove given element
	items.splice( index, 1 );

	return items.indexOf( item ) === -1;
}

function isUniquePropInArray(list, index, propName, id){
	let props = _.map(
		list,
		function (item) {
			return item[propName];
		}
	);

	return isUniqueInArrayExcept( props, id, index );
}

function prettyPrint(obj){
	console.log( JSON.stringify( obj, null, 2 ) );
}

export default {
	log: prettyPrint,
		prettyPrint,
		copy,
		rand,
		randomId,
		move,
		dasherize,
		pushAt,
		costlyIsEqual,
		isUniqueInArrayExcept,
		isUniquePropInArray
	};
