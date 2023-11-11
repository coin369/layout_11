@extends("default.default")
@section("content")
           
 <section class="main_section">

            <section class="pos_top">
                @include("default.element.slideshow")
                <div class="main-visual-sweets__text">
                    <h1 class="main-visual-sweets__title">{{$page['name']}}<span>Page</span></h1>
                </div>
            </section>
            <div id="breadcrumbList">
                <ul>
                    <li><a href="/" title="#">ホーム</a></li>
                    <li>{{$page['name']}}</li>
                </ul>
            </div>
            <div id="contents" class="main-contents">
                <div id="main" class="main-contents__inner">
                    <article class="main-article">
                        <div class="wp-block-group company-message is-layout-flow wp-block-group-is-layout-flow" style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                            <div class="wp-block-group__inner-container">
                                <section class="pageTitle">
                                    <div class="pageTitleIn">
                                        <div class="h2">{{$page['name']}}</div>
                                    </div>
                                </section>
                                <div class="wp-block-group is-layout-flow wp-block-group-is-layout-flow" style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                    <div class="wp-block-group__inner-container">
                                            {!!$page['content']!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </article>
                </div>
            </div>
        </section>
         @include("default.element.contact")
  @endsection