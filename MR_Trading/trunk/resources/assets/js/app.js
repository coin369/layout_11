window.$ = window.jQuery = import("./jquery-2.2.0.min");
window.$.scrollUp=import("./jquery.scrollup.js");


import("./common.js");

window.$.bxSlider=import("./jquery.bxslider.min.js");


import("./feed.js");



import toastr from 'toastr';
toastr.options.closeMethod = 'fadeOut';
toastr.options.closeDuration = 1000;
toastr.options.progressBar = true;
toastr.options.closeEasing = 'swing';
window.toastr = toastr;

