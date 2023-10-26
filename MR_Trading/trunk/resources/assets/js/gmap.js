var map;
var cent = new google.maps.LatLng(33.9358028,131.257827); // 中心の座標
var MY_MAPTYPE_ID = 'cool';

function googleMaps(args) {

    if (args.elMap == null) { args.elMap = ""; }
    if (args.iconUrl == null) { args.iconUrl = ""; }
    if (args.mapTitle == null) { args.mapTitle = ""; }

    //***** デザインのカスタマイズ部分 *****//
    var stylez = [{
        "featureType": "all",
    }];

    var mapOptions = {
        zoom: 18, // マップの拡大値
        zoomControl: true,
        zoomControlOptions: {
            position: google.maps.ControlPosition.LEFT_CENTER
        },
        mapTypeControl: false, // 右上マップタイプ名を表示し、通常マップとの切替を可能にします。
        scaleControl: true, // 左下にスケールを表示します。
        center: cent,
        scrollwheel: false, //マウスホイール禁止
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
        },
        mapTypeId: MY_MAPTYPE_ID
    };
    map = new google.maps.Map(document.getElementById(args.elMap), mapOptions);
    var styledMapOptions = {
        name: args.mapTitle
    };
    var jayzMapType = new google.maps.StyledMapType(stylez, styledMapOptions);
    map.mapTypes.set(MY_MAPTYPE_ID, jayzMapType);
    var markerOpts = {
        position: new google.maps.LatLng(33.9358028,131.257827), // マーカの座標
        map: map,
        //title: "MAP",         // マップの名称
        icon: args.iconUrl // マーカーアイコンを画像に変更
    };
    var marker = new google.maps.Marker(markerOpts);
    var infowin = new google.maps.InfoWindow({
        content: args.mapTitle
    });
    google.maps.event.addListener(marker, 'click', function() {
        infowin.open(map, marker);
    });
}

function initialize() {
    var root = "ui/ishikawa_dc";
        name = "Ishikawa Dental Clinic";
        iconUrl = root + "/common/img/gmap_pin.png";
    //フッター用
    googleMaps({
        elMap: "mapCanvas",
        mapTitle: name,
    });
}
