@extends("default.default")
@section('content')



    <section class="main_section">
             <section class="pos_top">
                @include("default.element.slideshow")
                <div class="main-visual-sweets__text">
                    <h1 class="main-visual-sweets__title">お知らせ<span>INFORMATION</span></h1>
                </div>
            </section>
            <div id="breadcrumbList">
                <ul>
                    <li><a href="{{route('home')}}" title="ホーム">ホーム</a></li>
                    <li>お知らせ</li>
                </ul>
            </div>
            <div id="contents" class="main-contents">
                <div id="main" class="main-contents__inner infox_3">
                    <article class="main-article message">
                        <section id="content" class="wow bounceInDown infox infox_2" data-wow-duration="1s" data-wow-delay="1s">
                            <section class="pageTitle">
                                <div class="pageTitleIn">
                                    <div class="h2">INFORMATION
                                        <div class="span">お知らせ</div>
                                    </div>
                                </div>
                            </section>
                            <div id="mainContents">
                                @foreach($TNews as $news):
                                        @include("default.element.news.news")
                                @endforeach
                            </div>
                             @include("default.news.sidebar")   
                        </section>
                    </article>
                </div>
            </div>
        </section>
        @include("default.element.contact")
@endsection