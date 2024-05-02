//window.$ = window.jQuery = import("./jquery-2.2.3.js");


 import $ from "jquery";

 window.$ = window.jQuery = $;

window.$.owlCarousel=import("owl.carousel");


import("./bootstrap.js");
import("./main.js");

import toastr from 'toastr';
toastr.options.closeMethod = 'fadeOut';
toastr.options.closeDuration = 1000;
toastr.options.progressBar = true;
toastr.options.closeEasing = 'swing';
window.toastr = toastr;

