@extends("default.default")
@section('content')
      
 <section class="main_section">

            <section class="pos_top">
                <div class="slider">
                    <div class="items">
                        <a href="#" title="#">
                            <img src="/frontend/img/c1.jpg" alt="#" />
                        </a>
                    </div>
                    <div class="items">
                        <a href="#" title="#">
                            <img src="/frontend/img/c2.jpg" alt="#" />
                        </a>
                    </div>
                    <div class="items">
                        <a href="#" title="#">
                            <img src="/frontend/img/c3.jpg" alt="#" />
                        </a>
                    </div>
                </div>
                <div class="main-visual-sweets__text">
                    <h1 class="main-visual-sweets__title">{{$detail['namec']}}<span>INFORMATION</span></h1>
                </div>
            </section>
            <div id="breadcrumbList">
                <ul>
                    <li><a href="/" title="ホーム">ホーム</a></li>
                    @if(!empty($cate))
                    <li><a href="{{route('news.cate',['alias'=>$cate['alias']])}}" title="{{$cate['name']}}">{{$cate['name']}}</a></li>
                    @endif
                    <li>{{$detail['name']}}</li>
                </ul>
            </div>
            <div id="contents" class="main-contents">
                <div id="main" class="main-contents__inner infox_3">
                    <article class="main-article message">
                        <section id="content" class="wow bounceInDown infox infox_2" data-wow-duration="1s" data-wow-delay="1s">
                            <section class="pageTitle">
                                <div class="pageTitleIn">
                                    @if(!empty($cate))
                                    <div class="h2">INFORMATION
                                        <div class="span">{{$cate['name']}}</div>
                                    </div>
                                    @endif
                                </div>
                            </section>
                            <div id="mainContents">
                                <h2 class="h3_tit01">
                                    <a href="javascript:;" title="{{$detail['name']}}">

                                        {{$detail['name']}}
                                    </a>
                                </h2>
                                <article>
                                    {!!$detail['content']!!}
                                </article>

                                <div class="wp-block-image human-intro__relations">
                                    <figure class="aligncenter size-large">

                                        <img decoding="async" fetchpriority="high" width="1024" height="672" src="/frontend/img/img_relationship.jpg"></figure>
                                </div>
                            </div>
                              @include("default.news.sidebar")   
                        </section>
                    </article>
                </div>
            </div>
        </section>
       @include("default.element.contact")
@endsection
