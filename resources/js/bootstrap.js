/**
 * UIkit js components
 * Load the necessary components that you will require
 */

// IMPORTS
// import Countdown from "uikit/dist/js/components/countdown";
// import Filter from 'uikit/dist/js/components/filter';
// import Lightbox from 'uikit/dist/js/components/lightbox';
// import LightboxPanel from 'uikit/dist/js/components/lightbox-panel';
// import Notification from 'uikit/dist/js/components/notification';
import Parallax from 'uikit/dist/js/components/parallax';
// import Slider from "uikit/dist/js/components/slider";
// import SliderParallax from 'uikit/dist/js/components/slider-parallax';
// import Slideshow from "uikit/dist/js/components/slideshow";
// import SlideshowParallax from "uikit/dist/js/components/slideshow-parallax";
// import Sortable from 'uikit/dist/js/components/sortable';
// import Tooltip from "uikit/dist/js/components/tooltip";
// import Upload from 'uikit/dist/js/components/upload';
import UIkit from "uikit";
import UIkitIcons from "uikit/dist/js/uikit-icons";

// USAGE
// UIkit.component('countdown', Countdown);
// UIkit.component('filter', Filter);
// UIkit.component('lightbox', Lightbox);
// UIkit.component('lightboxPanel', LightboxPanel);
// UIkit.component('notification', Notification);
UIkit.component('parallax', Parallax);
// UIkit.component('slider', Slider);
// UIkit.component('sliderParallax', SliderParallax);
// UIkit.component('slideshow', Slideshow);
// UIkit.component("slideshowParallax", SlideshowParallax);
// UIkit.component('sortable', Sortable);
// UIkit.component('tooltip', Tooltip);
// UIkit.component('upload', Upload);

UIkit.use(UIkitIcons);

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
UIkit.icon.add({
    logo: `<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 30" width="30px" height="30px">
<g id="surface14465931">
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(52.549022%,34.901962%,81.176472%);fill-opacity:1;" d="M 15 2 C 14.042969 2 13.085938 2.363281 12.355469 3.097656 L 9.929688 5.519531 L 15 10.585938 L 20.066406 5.519531 L 17.644531 3.097656 C 16.914062 2.363281 15.957031 2 15 2 Z M 8.515625 6.933594 L 3.09375 12.355469 C 1.632812 13.816406 1.632812 16.183594 3.09375 17.644531 L 5.515625 20.066406 L 13.585938 12 Z M 21.480469 6.933594 L 16.414062 12 L 20.5 16.085938 L 25.566406 11.015625 Z M 26.972656 12.441406 L 21.914062 17.5 L 24.480469 20.070312 L 26.902344 17.648438 C 28.339844 16.210938 28.355469 13.90625 26.972656 12.441406 Z M 15 13.414062 L 6.933594 21.484375 L 12.355469 26.90625 C 13.816406 28.367188 16.183594 28.367188 17.644531 26.90625 L 23.066406 21.484375 Z M 15 13.414062 "/>
</g>
</svg>`,
});
window.UIkit = UIkit;

export default UIkit;
