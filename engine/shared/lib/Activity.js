function Activity(AUTO_CALL_DELAY = 1000, msg='user is editing') {
	let _lastCallTime = new Date();

	return function () {
		return new Promise(
			(resolve, reject) => {
            _lastCallTime = new Date();
            setTimeout(
					() => {
                    let elapsedTime = new Date() - _lastCallTime;
                    return ( elapsedTime < AUTO_CALL_DELAY) ? reject( msg ) : resolve();
					},
					AUTO_CALL_DELAY
				); // end timeout
			}
		);
	};
}

module.exports = Activity;
