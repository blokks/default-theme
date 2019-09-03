var blokks = blokks || {};

(function() {
	var currentScript = document.querySelector('script[src*="launch.js"]');
	var isLegacyBrowser = !('noModule' in currentScript);

	// Add Polyfill for legacy browsers
	const useLegacy = isLegacyBrowser || (blokks.config && blokks.config.useLegacy);
	const usePolyfill = useLegacy || (blokks.config && blokks.config.usePolyfill);

	if (usePolyfill) {
		var polyfill = document.createElement('script');
		polyfill.crossorigin = 'anonymous';
		polyfill.src =
			'https://polyfill.io/v3/polyfill.min.js?features=Array.prototype.findIndex,Array.prototype.find,Array.prototype.filter,Array.prototype.forEach,Array.prototype.map,Array.prototype.includes,Object.values,Object.keys,Object.entries,URL,CustomEvent,Event,Promise';
		polyfill.setAttribute('blokks-script', '');
		document.body.appendChild(polyfill);
	}

	// Inject the main script to the end of the body
	var script = document.createElement('script');
	script.setAttribute('blokks-script', '');
	script.src = 'http://themes.blokks.localhost/' + (useLegacy ? 'legacy.js' : 'modern.js');
	document.body.appendChild(script);
})();
