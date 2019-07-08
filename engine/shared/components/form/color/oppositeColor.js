const tinycolor = require( 'tinycolor2' );

function getOppositeColor(color){
	let rgb = tinycolor( color ).toRgb();

	if (rgb.a < 0.5) {
		return tinycolor(
			{
				r: 0,
				g: 0,
				b: 0
			}
		).toString();
	}

	return tinycolor(
		{
			r: 255 - rgb.r,
			g: 255 - rgb.g,
			b: 255 - rgb.b,
			a: 1
		}
	).toString();
}

module.exports = getOppositeColor;
