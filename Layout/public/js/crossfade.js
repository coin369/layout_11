$(function() {
    var $setElm = $('.crossfade_box'),
        fadeSpeed = 2000,
        switchDelay = 5000;

    $setElm.each(function(i) {
        var targetObj = $(this);
        var findUl = targetObj.find('ul');
        var findLi = targetObj.find('li');
        var findLiFirst = targetObj.find('li:first');

        var count = 500 * i;

        findLi.delay(count).css({ display: 'block', opacity: '1', zIndex: '99' });
        findLiFirst.delay(count).css({ zIndex: '100' }).stop().animate({ opacity: '0' }, fadeSpeed);

        setInterval(function() {
            var num = count;
            // console.log(num);
            findUl.find('li:first-child').delay(num).animate({ opacity: '1' }, fadeSpeed).next('li').delay(num).css({ zIndex: '100' }).animate({ opacity: '0' }, fadeSpeed).end().appendTo(findUl).css({ zIndex: '99' });
        }, switchDelay, count);
    });
});
