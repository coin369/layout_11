// JavaScript Document
//フィード読込関数
//htmlの読込みたい場所に<div id="feed"></div>を埋め込んで下さい
//発動関数のパラメータには下記が設定可能
//url: 'blog/feed' == 読み込む先のディレクトリ
//feedElement: '#feed' == 埋め込むエレメント
//
//記述例）

(function ($) {

    $(".slider").bxSlider({
        auto: true,
        autoControls: false,
        pager: true,
    });
    new WOW().init();
    $('#toggle').click(function () {
        $('nav').toggleClass("active");
        if ($("nav").hasClass("active")) {
            $("#toggle .nav_menu_off").css("display", "none");
            $("#toggle .nav_menu_on").css("display", "block");
        } else {
            $("#toggle .nav_menu_off").css("display", "block");
            $("#toggle .nav_menu_on").css("display", "none");
        }
    });
    feed = function (config) {
        var defaults = {
            url: 'blog',
            feedElement: '#feed',
            elementType: 'dl'
        };

        var options = $.extend(defaults, config);

        //日付変換関数
        var weeks = ['日', '月', '火', '水', '木', '金', '土'];

        function dateFormat(date) {
            // 日付の変換
            var dateStr = new Date(date);
            // 年の取得
            var year = dateStr.getFullYear();
            // 月の取得
            var month = ('00' + (dateStr.getMonth() + 1)).slice(-2);
            // 日の取得
            var day = ('00' + dateStr.getDate()).slice(-2);
            // 曜日の取得
            var week = dateStr.getDay();
            // 時の取得
            var hour = dateStr.getHours();
            // 分の取得
            var minute = dateStr.getMinutes();
            // 秒の取得
            var second = dateStr.getSeconds();
            return year + '.' + month + '.' + day;
        }

        //フィード読込み
        $.ajax({
            url: options.url + '/feed',
            type: 'get',
            dataType: 'xml',
            timeout: 5000,
            success: function (xml, status) {
                if (status === 'success') {
                    var row = 0;
                    var data = [];
                    var nodeName;
                    $(xml).find('item').each(function () {
                        data[row] = {};
                        $(this).children().each(function () { // 子要素を取得
                            nodeName = $(this)[0].nodeName; // 要素名
                            data[row][nodeName] = {}; // 初期化
                            attributes = $(this)[0].attributes; // 属性を取得
                            for (var i in attributes) {
                                data[row][nodeName][attributes[i].name] = attributes[i].value; // 属性名 = 値
                            }
                            data[row][nodeName]['text'] = $(this).text();
                        });
                        row++;
                    });
                    if (options.elementType == 'dl') {
                        /*
                                                $(options.feedElement).wrapInner('<div></div>');
                        */
                        for (i in data) {
                            $(options.feedElement) /*.find('div')*/.append('<dl><dt>' + dateFormat(data[i].pubDate.text) + '</dt><dd><a href="' + data[i].link.text + '">' + data[i].title.text + '</a></dd></dl>');
                        }
                    } else {
                        $(options.feedElement).wrapInner('<ul></ul>');
                        for (i in data) {
                            $(options.feedElement).find('ul').append('<li><a href="' + data[i].link.text + '">' + data[i].title.text + '</a></li>');
                        }
                    }

                    $(options.feedElement).mCustomScrollbar({
                        scrollInertia: 300,
                        advanced: {
                            updateOnContentResize: true
                        }
                    });
                }
            }
        });
    }

})(jQuery);
