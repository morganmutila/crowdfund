// Load Lodash
window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

// Load Popper.js and Bootstrap js
 try {
    window.Popper = require('@popperjs/core').default;
    require('bootstrap');
} catch (e) {}

//Load Axios
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';