@extends("default.default")
@section("content")
  
        @if(!empty($TSlide)):
        <div class="slider">
            @foreach($TSlide as $slide)
            <div class="items">
                <a  href="{{$slide['links']}}"   title="{{$slide['name']}}" >
                    <img src="/upload/slideshow/{{$slide['picture']}}" alt="{{$slide['name']}}" />
                </a>
            </div>
            @endforeach
        </div>
        @endif
        <section class="main_section">
            <div id="informationWrap" class="informationWrap container_n">
                <div class="info">
                    <h2><img src="/upload/banner/h2_information.png" width="152" height="53" alt="INFORMATION お知らせ"></h2>
                    <div id="feed" class="scroll_pane mCustomScrollbar _mCS_1 mCS_no_scrollbar">
                        <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                            <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                <dl>
                                    <dd>
                                        <strong>OTA FACTORY</strong> 株式会社は、「食・仕事・環境を通じて豊かな人生を創造する」を合言葉に、食べる楽しみの提供や多様化する働き方に適応した雇用の創出、そして一人ひとりのやりたいことや、なりたい自分を見つけられる居場所づくりに力を入れております。
                                    </dd>
                                </dl>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section id="messageWrap" class="view view-slideup show on wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">

                <div id="message">

                    <section class="pageTitle">
                        <div class="pageTitleIn">
                            <h2>MESSAGE<span>メッセージ</span></h2>
                        </div>
                    </section>
                    <p class="">
                        現在、日本は少子高齢化の一途をたどり、労働力不足や経済格差、待機児童問題や社会保障制度への影響等様々な課題により国民の社会不安は募る一方です。このような社会問題を、当時私は市職員という立場で目の当たりにしてきました。そして、長年勤めた市役所を退職した今、
                        <br>
                        <br> これまでの経験を活かし地域社会のために何か出来ることはないか・・・<br/><br> 私に出来ることは何か・・・<br>
                        <br/> 考え抜いた結果、地元である群馬県太田市の人材・歴史・文化・自然を資源として、地産地消と地域の雇用の場をつくりまちおこしのきっかけにしたい。老若男女問わずみんながやりたいこと、できること、やれそうなことに挑戦する新しいコミュニティーをつくって地元から少しでも多くの元気を発信したいと強く思うようになり、OTA FACTORY株式会社を設立しました。<br/><br> 設立当初は農業体験や料理教室等さまざまなイベントを企画し、地域住民が憩う交流の場として活動をして参りました。その後、焼き菓子の製造販売や、農場で採れた野菜の販売を開始し、地域の皆様に支えていただき当法人もおかげ様で4期目を迎えることができました。
                        <br/>今は志を共にする仲間も増え、我々は「食・仕事・環境を通じて豊な人生を創造する」を合言葉に、食べる楽しみの提供や多様化する働き方に適応した雇用の創出、一人ひとりが自分の役割を認識し、やりたいことやなりたい自分を見つけられる居場所づくりに力を入れております。
                        <a href="#" title="#" class="more_info">>>></a>
                    </p>
                    <figure class=""><img src="/upload/banner/img_message1.png" alt="代表取締役 会長 綿貫 英和"></figure>

                </div>

            </section>
            <section id="mainBanner" class="wow slideInRight" data-wow-duration="1s" data-wow-delay="1s">
                <section class="pageTitle">
                    <div class="pageTitleIn">
                        <h2>OUR SERVICE<span>会社情報</span></h2>
                    </div>
                </section>
                <ul>
                    <li class="view banner show on">
                        <a href="#" title="#" class="">
                            <figure>
                                <img src="/upload/banner/b111.jpg" alt="">
                            </figure>

                            <h3>人材総合支援事業</h3>
                            <p class="txtBanner">弊社はミャンマー人材のトータルソリューションサービスをご提供し、これからの時代に即した組織づくりや人材活用法をご提案しております。外国人との協働は単に雇用の安定化や経営のグローバル化といった側面だけではなく、企業内に新たな価値や発想をもたらし、日々変化するビジネス環境に迅速かつ柔軟に対応するための組織づくりにおいても非常に有効であると考えられます。</p>
                        </a>
                    </li>
                    <li class="view banner show on">
                        <a href="#" title="#" class="">
                            <figure>
                                <img src="/upload/banner/b1_1.jpg" alt="">
                            </figure>

                            <h3>食品製造販売事業</h3>
                            <p class="txtBanner">自分達がおいしいと感じるもの、良いと思うものだけをお客様に提供したいという思いから、地元で生産された厳選素材を生かしたオリジナルスイーツの開発やショップ運営に取り組んでおります。</p>
                        </a>
                    </li>
                </ul>
            </section>
            <section id="youtubeWrap" class="view view-slideup show on wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">
                <section class="pageTitle">
                    <div class="pageTitleIn">
                        <h2>COMPANY<span>会社情報</span></h2>
                    </div>
                </section>

                <ul>
                    <li>
                        <a href="#" title="#"><img alt="#" src="/upload/banner/a1.jpg" /></a>
                        <h5>会社案内</h5>
                    </li>
                    <li>
                        <a href="#" title="#"><img alt="#" src="/upload/banner/a2.jpg" /></a>
                        <h5>採用情報</h5>
                    </li>
                </ul>
            </section>

            <section id="content" class="wow bounceInDown infox" data-wow-duration="1s" data-wow-delay="1s">
                <section class="pageTitle">
                    <div class="pageTitleIn">
                        <h2>INFORMATION<span>お知らせ</span></h2>
                    </div>
                </section>
                <div id="mainContents">
                    <div class="div_box01">
                        <ul class="inc-information__tax-list">
                            <li class="inc-information__tax-item infotax_human">総合人材支援</li>
                        </ul>
                        <div class="inc-information__date">2022.09.14</div>
                        <h3 class="h3_tit01">
                            <a href="#" title="#">日本の労働者人口について</a></h3>
                        <a href="#" title="#" class="information__date_a">
                            >>>
                        </a>
                    </div>
                    <div class="div_box01">
                        <ul class="inc-information__tax-list">
                            <li class="inc-information__tax-item infotax_human">総合人材支援</li>
                        </ul>
                        <div class="inc-information__date">2022.09.14</div>
                        <h3 class="h3_tit01"><a href="#" title="#">日本の労働者人口について</a></h3>
                        <a href="#" title="#" class="information__date_a">
                            >>>
                        </a>
                    </div>
                    <div class="div_box01">
                        <ul class="inc-information__tax-list">
                            <li class="inc-information__tax-item infotax_human">総合人材支援</li>
                        </ul>
                        <div class="inc-information__date">2022.09.14</div>
                        <h3 class="h3_tit01"><a href="#" title="#">日本の労働者人口について</a></h3>
                        <a href="#" title="#" class="information__date_a">
                            >>>
                        </a>
                    </div>
                    <div class="div_box01">
                        <ul class="inc-information__tax-list">
                            <li class="inc-information__tax-item infotax_human">総合人材支援</li>
                        </ul>
                        <div class="inc-information__date">2022.09.14</div>
                        <h3 class="h3_tit01"><a href="#" title="#">日本の労働者人口について</a></h3>
                        <a href="#" title="#" class="information__date_a">
                            >>>
                        </a>
                    </div>
                </div>
            </section>
            <div class="bnr">
                <a href="#" target="_blank" rel="noopener" class="imgHover07 a_more">
                    お知らせの一覧を見る >>>
                </a>
            </div>
            <section id="contactWrap">
                <div id="contact">
                    <h2><img src="/upload/banner/h2_contact.png" alt="CONTACT" width="137" height="36"> </h2>
                    <p id="contactTel">
                        <b><img src="/upload/banner/tel_header_sub2.png" alt="0473-69-7071" class="is-top is-hotline"><strong>0473-69-7071</strong></b><br>
                        <span>受付時間：平日 9:00～18:00</span>
                    </p>
                    <p id="contactBtn">
                        <a href="#" title="#" class="imgHover07"><img src="/upload/banner/btn_contact1.png" alt="採用エントリー・お問い合わせ"></a>
                    </p>
                    <p class="img_contact"><img src="/upload/banner/img_contact.png" alt="" width="230" height="206"> </p>
                </div>
            </section>
        </section>

        
@endsection