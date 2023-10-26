$(document).ready(function() {


    var counter = 0;
    var c = 0;
    var i = setInterval(function() {
        $(".loading-page .counter h1").html(c + "%");
        $(".loading-page .counter hr").css("width", c + "%");
        //$(".loading-page .counter").css("background", "linear-gradient(to right, #f60d54 "+ c + "%,#0d0d0d "+ c + "%)");

        /*
        $(".loading-page .counter h1.color").css("width", c + "%");
        */
        counter++;
        c++;

        $("#wrapper").css({
            position: 'fixed',
            left: 0,
            right: 0,
            top: 0,
            bottom: 0,
            width: '100%',
            height: '100%'
        })
        if (counter == 101) {
            clearInterval(i);
            $("#wrapper").attr({
                style: ''
            });
            $(".loading-page").hide();
            setTimeout(function() {
                carousel();
                $(".banner").addClass("show");
                $(".p-index-kv__title").toggleClass("display");
            }, 1000)
        }
    }, 50);
});

$(window).bind('scroll', function() {
    var scrollPos = $(window).scrollTop();
    $('.para01').css('top', (284 - (scrollPos * 0.2)) + 'px');
    $('.para02').css('top', (0 - (scrollPos * -0.2)) + 'px');
    $('.para03').css('top', (600 - (scrollPos * -0.2)) + 'px');
    $('.para04').css('top', (0 - (scrollPos * -0.2)) + 'px');
});
/* slider
-------------------------------------------------------------------------------------------------------- */
var myIndex = 0;


function carousel() {
    var i;
    var x = $(".slider01 .mySlides");
    var y = $(".slider02 .mySlides");
    for (i = 0; i < x.length; i++) {
        // x[i].style.display = "none";
        x[i].className = x[i].className.replace(" block", "");
        x[i].className = x[i].className.replace(" show", "");
        y[i].className = y[i].className.replace(" block", "");
        y[i].className = y[i].className.replace(" show", "");
    }
    myIndex++;
    if (myIndex > x.length) {
        myIndex = 1
    }
    // x[myIndex - 1].className += " block";
    x[myIndex - 1].className += " block block show";
    // y[myIndex - 1].className += " block";
    y[myIndex - 1].className += " block block show";
    setTimeout(carousel, 4500); // Change image every 2 seconds
}



// var $picturesWrap = $('.crossfade'),
//     picLen = $picturesWrap.eq(0).children().length;
//
// $picturesWrap.each(function() {
//     var $eachPictures = $(this).children(),
//         i = 0;
//     setInterval(function() {
//         $eachPictures.eq((i - 1 + picLen) % picLen).removeClass('prevSlide');
//         $eachPictures.eq(i).removeClass('currentSlide').addClass('prevSlide');
//         $eachPictures.eq((i + 1) % picLen).addClass('currentSlide');
//         i = (i + 1) % picLen;
//     }, 6000);
// });


// (function($) {
//     $(window).on("load", function() {
//         var i = 100;
//         $("..p-index-kv__title").each(function(e, n) {
//             $(this).delay(i).queue(function() {
//                 $(this).addClass("show")
//             }), i += 0
//         })
//     })
// })(jQuery);
// $(document).ready(function() {
//     setTimeout(function() {
//         $(".p-index-kv__title").toggleClass("display")
//     }, 1500)
// });
/* Scroll Pane
-------------------------------------------------------------------------------------------------------- */
$(window).on("load", function() {
    $("#feed").mCustomScrollbar({
        scrollInertia: 300,
        advanced: {
            updateOnContentResize: true
        }
    });

    feed({
        url: 'blog',
        feedElement: '#feed02',
        elementType: 'dl'
    });
});


/* Calendar
-------------------------------------------------------------------------------------------------------- */
// (function($) {
//     var idx;
//
//     $('#listTab li').click(function() {
//         $('#listTab li').removeClass('on');
//         $(this).addClass('on');
//
//         idx = $(this).index() + 1;
//         $('.calendar').removeClass('on');
//         $('#cal0' + idx).addClass('on');
//     });
// })(jQuery);

(function($) {
    $(window).scroll(function() {
        if ($(window).scrollTop() > 0) {
            $('#contactFixed').fadeIn(400)
        } else {
            $('#contactFixed').fadeOut(400)
        }
    }).scroll()
})(jQuery)