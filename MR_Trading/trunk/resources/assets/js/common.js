// スクロールアップ
/* RollOver
=========================================== */


//下層ナビゲーションの表示


$(document).ready(function(){
   var rollover = {
        setInit: function() {
            rollover.p = new Object();
            $("img.over[src!='_on.']").each(function() {
                var n = this.src;
                var t = n.slice(n.lastIndexOf('.'));
                var o = n.replace('_no' + t, '_on' + t);

                var basename = n.substring(0, n.length - t.length);
                var check_o = basename.substring(basename.length - 2, basename.length);

                if (check_o != "_on") {
                    if (!rollover.p[n]) {
                        rollover.p[n] = new Image();
                        rollover.p[n].src = n;
                        rollover.p[o] = new Image();
                        rollover.p[o].src = o;
                    }
                    $(this).hover(
                        function() { this.src = rollover.p[o].src; },
                        function() { this.src = rollover.p[n].src; }
                    );
                }
            });
        }
    }

    rollover.setInit();
    
    

    function navCurrent(t, rootpath, ex) { // t = navigation element / n = exclude str
        var noText = ex,
            host = location.hostname,
            pathname = location.pathname,
            $nav = $(t),
            str = 'index.html',
            a = $nav.find('a');

        if (pathname.indexOf(str) != -1) {
            var pathname = location.pathname.replace(str, '');
        };

        if (pathname.indexOf(noText) != -1) {
            var pathname = pathname.replace(noText, '');
        };
        a.each(function(i) {
            var ahref = $(this).attr('href'),
                ahref = ahref.replace(/http:/g, ''),
                ahref = ahref.replace(/https:/g, ''),
                ahref = ahref.replace(noText, ''),
                ahref = ahref.replace(rootpath, ''),
                ahref = ahref.replace(location.host, ''),
                ahref = ahref.replace('../', ''),
                ahref = ahref.replace(/\./g, ''),
                ahref = ahref.replace('//', '').replace('//', '');

            if (ahref.slice(1) == '' && (pathname != '/')) {
                var ahref = ahref.replace('/', '');
            }
            // console.log(ahref);
            // console.log(pathname);
            if (ahref != "" && (pathname.indexOf(ahref) != -1)) {
                $(this).addClass('current')
            }

        });
    }
    navCurrent('.nav', '', '');


    $(window).scroll(function() {
        if ($(window).scrollTop() > 0) {
            $('#headerWrap').addClass('fixed');
        } else {
            $('#headerWrap').removeClass('fixed');
        }
    }).scroll();
});
