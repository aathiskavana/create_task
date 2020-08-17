window._ = require('lodash');

/**
<<<<<<< HEAD
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
=======
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

<<<<<<< HEAD
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

=======
>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
<<<<<<< HEAD
=======

//let token = document.head.querySelector(meta[name="csrf-token"])

//if (token) {
//    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token
//} else {
//    console.error('CSRF token not found: https://laravel.com/docs')
//}

window.toastr = require('toastr');
>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e
