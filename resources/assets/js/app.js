// jQuery
require('jquery');

// Bootstrap
require('./bootstrap');

// FontAwesome Pro
require('@fortawesome/fontawesome-pro/js/fontawesome');
require('@fortawesome/fontawesome-pro/js/light');
require('@fortawesome/fontawesome-pro/js/regular');
require('@fortawesome/fontawesome-pro/js/solid');
require('@fortawesome/fontawesome-pro/js/brands');
require('@fortawesome/fontawesome-pro/js/v4-shims');

// Trumbowyg
const Trumbowyg = require('trumbowyg');
window.Trumbowyg = Trumbowyg;

// CSRF Header Snippet
require('./snippets/csrf-header');

// Trumbowyg icons snippet
require('./snippets/trumbowyg');