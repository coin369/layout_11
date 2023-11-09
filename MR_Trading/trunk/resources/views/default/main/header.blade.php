
 <header id="headerWrap" class="">
            <div id="header">
                <div id="headerTop">
                    <h1 id="headerLogo">
                        <a href="{{route('home')}}" title="#">
                            <img src="/upload/banner/logo1.png" alt="mr group" class="off">
                            <img src="/upload/banner/logo1.jpg" alt="mr group" class="on">
                        </a>
                    </h1>
                    <div id="headerList">
                        <div id="headerTel">
                            <img src="/upload/banner/tel_header_sub2.png" alt="0473-69-7071" class="is-top is-hotline"><strong>0473-69-7071</strong>
                            <img src="../assets/img/tel_header_sub2.png" alt="0473-69-7071" class="is-sub">
                            <span>受付時間：平日9:00～18:00</span>
                        </div>
                        <div id="headerContact">
                            <a href="{{route('contact')}}" title="採用エントリー・お問い合わせ" class="imgHover07"><img src="/upload/banner/btn_contact_header1.png" alt="採用エントリー・お問い合わせ"></a>
                        </div>
                        <!-- /headerList -->
                    </div>
                </div>

                <div id="toggle">
                    <img src="../assets/img/btn_menu_header-off.png" alt="" class="nav_menu_off">
                    <img src="../assets/img/btn_menu_header-on.png" alt="" class="nav_menu_on">
                </div>
                <nav id="gNavi">
                    <ul class="nav topnav" id="myTopnav">
                        <li><a href="{{route('home')}}" class='{{$active=="home"?"current":""}}' title="ホーム">ホーム</a></li>
                        <li><a href="{{route('human')}}" class='{{$active=="human"?"current":""}}'  title="人材総合支援事業">人材総合支援事業</a></li>
                        <li><a href="{{route('sweets')}}" title="食品製造販売事業">食品製造販売事業</a></li>
                        <li><a href="{{route('company')}}" title="会社案内">会社案内</a></li>
                    </ul>
                    <!-- /gNaviWrap -->
                </nav>
            </div>
            <!-- /headerWrap -->
        </header>