
        <footer id="footerWrap">
            <div id="footer">
                <div id="accessContent">
                    <h2>
                        <a href="{{route('home')}}" title=" 千葉県柏市南増尾2丁目 "><img src="/upload/banner/logo1.jpg" alt="logo"></a>
                    </h2>
                    <p class="accessText">〒277-0054
                        <br> 千葉県柏市南増尾2丁目 14-45 <br> TEL/FAX : 0473-69-7071
                    </p>
                    <p class="accessText"> 有料職業紹介事業許可/厚生労働大臣許可 10-ユ-300378<br> 登録支援機関/法務省·出入国在留管理庁登録 20登-004711<br> 菓子製造業/群馬県指令太保 第006114-00000037号<br> 飲食店営業（一般）/群馬県指令太保 第006114-00000039号</p>
                    <p id="copyright">Copyright © OTA FACTORY, all rights reserved </p>
                    <!-- /footerRight -->
                </div>
                <div id="footerList">
                    <ul id="footerList01">
                        <li><a href="{{route('company')}}" title="会社案内">会社案内</a></li>
                        <li><a href="{{route('sweets')}}" title="食品製造販売事業">食品製造販売事業</a></li>
                        <li><a href="{{route('news.index')}}" title="お知らせ">お知らせ</a></li>
                    </ul>
                    <ul id="footerList02">
                        <li><a href="{{route('contact')}}" title="#">お問い合わせ</a></li>
                        @foreach($TPage as $page)
                        <li><a href="{{route('page',['alias'=>$page['alias']])}}" title="{{$page['name']}}">プライバシーポリシー</a></li>
                        @endforeach
                        <li><a href="{{route('human')}}" title="#">OTA FACTORYの強み</a></li>
                        <li><a href="{{route('human')}}" title="#">ジョブダイアリー</a></li>
                    </ul>
                    
                    <ul id="footerList03">
                        <li><a href="{{route('human')}}" title="#">お客様の声</a></li>
                        <li><a href="{{route('human')}}" title="#">料金</a></li>
                        <li><a href="{{route('human')}}" title="#">よくある質問</a></li>
                        <li><a href="{{route('human')}}" title="#">特定技能について</a></li>
                    </ul>
                    <!-- /footerRight -->

                    <p class="partners_b">
                        @foreach($DTBanner as $banner):
                        <a href="{{$banner['link']}}" title="{{$banner['name']}}">
                            <img src="/upload/banner/{{$banner['picture']}}" alt="{{$banner['name']}}" />
                        </a>
                        @endforeach
                    </p>
                </div>


                <!-- /footer -->
            </div>
        </footer>