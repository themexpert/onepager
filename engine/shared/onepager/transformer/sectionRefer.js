import {addRefToControls} from './../../lib/transformer/controls/addRefToControls.js';

export default function(section){
	section = section.set( 'contents', addRefToControls( section.get( 'contents' ) ) );
	section = section.set( 'settings', addRefToControls( section.get( 'settings' ) ) );
	section = section.set( 'styles', addRefToControls( section.get( 'styles' ) ) );

	return section;
}
