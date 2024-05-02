@extends("default.default")
@section("content")
           
    <?php $error=$errors->all()?>
   <section class="main_section">
            <section class="pos_top">
                @include("default.element.slideshow")
                <div class="main-visual-sweets__text">
                    <h1 class="main-visual-sweets__title">お問い合わせ<span>CONTACT</span></h1>
                </div>
            </section>
            <div id="breadcrumbList">
                <ul>
                    <li><a href="/" title="#">ホーム</a></li>
                    <li>お問い合わせ</li>
                </ul>
            </div>
            <div id="myform" class="main-contents">
                <div id="informationWrap">
                    <div class="info">
                        <h2><img src="/frontend/img/h2_information.png" width="152" height="53" alt="INFORMATION お知らせ"></h2>
                        <div id="feed" class="scroll_pane mCustomScrollbar _mCS_1 mCS_no_scrollbar">
                            <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                                <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                    <dl>
                                        <dd>
                                            <strong>M&R TRADING</strong> へのお問い合わせは、お電話または下部のメールフォームよりお寄せください。 お送りいただく個人情報の取扱に関しましては、プライバシーポリシーをご覧ください。<br/>

                                            <img src="/frontend/img/tel_header_sub2.png" alt="0473-69-7071" class="is-top is-hotline"><strong class="size_big">0473-69-7071</strong>受付時間：平日9:00～18:00

                                        </dd>
                                    </dl>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="main" class="main-contents__inner">
                    <article class="main-article">
                        <section class="pageTitle">
                            <div class="pageTitleIn">
                                <h2>Contact Us
                                    <div class="span">お気軽にお問い合わせください</div>
                                </h2>
                            </div>
                        </section>
                        <section id="content">
                            <div id="mainContents">
                                <div class="div_box01">
                                    <div class="tabWrap">
                                        <ul class="tabContents">
                                            <li id="contactForm" style="display: block;">
                                              
                        {!! Form::open(['method'=>'post' ]) !!}
                                                    <div class="div_boxMin01">
                                                        <table class="table_02 wFull">
                                                            <tbody>
                                                                <tr>
                                                                    <th>
                                                                        お名前<span class="required">必須</span>
                                                                    </th>
                                                                    <td>
                        {!! Form::text('name',@$data['name'],[ "placeholder"=>"○○ ○○","required"=>"required"  ]) !!}

                        @if(!empty($error['name']))
                                                    <div class="invalid-feedback">
                                                        {{@$error['name']}}
                                                    </div>
                         @endif                                              
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        ふりがな
                                                                    </th>
                                                                    <td>
                        {!! Form::text('kana',@$data['kana'],[ "placeholder"=>"○○ ○○","required"=>"required" ]) !!}

                        @if(!empty($error['kana']))
                                                    <div class="invalid-feedback">
                                                        {{@$error['kana']}}
                                                    </div>
                         @endif                                                
                                                                       
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        年齢
                                                                    </th>
                                                                    <td>
                         <input type="number" name="old" placeholder="20">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        電話番号<span class="required">必須</span>
                                                                    </th>
                                                                    <td>
                         {!! Form::text('phone',@$data['phone'],[ "placeholder"=>"000-000-0000","required"=>"required","pattern"=>"[-\d\(\)]{5,15}"]) !!}

                        @if(!empty($error['phone']))
                                                    <div class="invalid-feedback">
                                                        {{@$error['phone']}}
                                                    </div>
                         @endif                                                     
                                                                       
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        メールアドレス<span class="required">必須</span>
                                                                    </th>
                                                                 <td>
                        {!! Form::text('email',@$data['email'],[ "placeholder"=>"XXX@XXX.com","required"=>"required" ]) !!}

                        @if(!empty($error['email']))
                                                    <div class="invalid-feedback">
                                                        {{@$error['email']}}
                                                    </div>
                         @endif     
                                                                       
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        自由記入欄
                                                                    </th>
                                                                    <td>
                        {!! Form::textarea('comment',@$data['comment'],[ "placeholder"=>"ご自由にご記入ください","required"=>"required" ]) !!}

                        @if(!empty($error['comment']))
                                                    <div class="invalid-feedback">
                                                        {{@$error['comment']}}
                                                    </div>
                         @endif     
                                       
                                                                       
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                            <!-- /table_01 -->
                                                        </table>
                                                        <input name="autoReply" type="hidden" value="1" checked="checked">
                                                        <div class="btnForm">
                                                            <button type="submit" class="btnConfirm">入力内容確認</button>
                                                        </div>
                                                        <!-- /.div_boxMin01 -->
                                                    </div>
                        {!! Form::close() !!}  

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- contentsLeft -->
                            </div>
                            <div id="sideContents">
                                <ul id="bnrCommon">
                                    <li class="h3_tit01">
                                        お名前
                                        <span>
                                            必須
                                        </span>
                                    </li>
                                    <li class="h3_tit01">
                                        お名前（かな）
                                        <span>
                                            必須
                                        </span>
                                    </li>
                                    <li class="h3_tit01">
                                        メールアドレス
                                        <span>
                                            必須
                                        </span>
                                    </li>
                                    <li class="h3_tit01">
                                        電話番号
                                        <span>
                                            任意
                                        </span>
                                    </li>
                                    <li class="h3_tit01">
                                        貴社名
                                        <span>
                                            任意
                                        </span>
                                    </li>
                                    <li class="h3_tit01">
                                        添付ファイル
                                        <span>
                                            任意
                                        </span>
                                    </li>
                                    <li class="h3_tit01">
                                        お問い合わせ内容
                                        <span>
                                            必須
                                        </span>
                                    </li>
                                </ul>

                            </div>
                        </section>
                    </article>
                </div>
            </div>
        </section>
       

       @include("default.element.contact")


        <script type="module">

       @if(count($errors)>0)
              
                        @foreach($errors->all() as $error)
                             window.toastr.error("{{$error}}");
                        
                        @endforeach
                  
            @endif
            @if(!empty(session('success')))
              window.toastr.success("{{session('success')}}");
            
            @endif
       
           
        </script>


  @endsection