


import toastr from 'toastr';

toastr.options.closeMethod = 'fadeOut';
toastr.options.closeDuration = 1000;
toastr.options.progressBar = true;
toastr.options.closeEasing = 'swing';
window.toastr = toastr;
