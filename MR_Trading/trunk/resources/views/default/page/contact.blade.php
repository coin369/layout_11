@extends("default.default")
@section("content")
           
    <?php $error=$errors->all()?>
   <section class="main_section">
            <section class="pos_top">
                @include("default.element.slideshow")
                <div class="main-visual-sweets__text">
                    <h1 class="main-visual-sweets__title">{{$page['name']}}<span>CONTACT</span></h1>
                </div>
            </section>
            <div id="breadcrumbList">
                <ul>
                    <li><a href="/" title="#">ホーム</a></li>
                    <li>{{$page['name']}}</li>
                </ul>
            </div>
            <div id="myform" class="main-contents">
               
                {!!$page['content']!!}

                <div id="main" class="main-contents__inner">
                    <article class="main-article">
                        <section class="pageTitle">
                            <div class="pageTitleIn">
                                <div class="h2">Contact Us
                                    <div class="span">お気軽にお問い合わせください</div>
                                </div>
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