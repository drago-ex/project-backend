// these JS + SCSS will be automatically available after installing the package
import "./core/base.js";

// registration naja extensions
function registerExtensions(...extensions) {
	extensions.forEach(Extension => {
		naja.registerExtension(new Extension());
	});
}
