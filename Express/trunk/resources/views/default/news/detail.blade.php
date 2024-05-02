@extends("default.default")
@section('content')
     <main>
        <section class="bread-crumb">
            <div class="container">
                <div class="title-command-wrapper">
                    <h1 class="title" title="#">Tin tức</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="/" title="Trang chủ">
                                <span>Trang chủ</span>
                            </a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                         <li>
                            <a href="/news" title="Trang chủ">
                                <span>Tin tức</span>
                            </a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li>
                            <strong>
                                {{$detail['name']}}
                            </strong>
                        </li>

                    </ul>
                </div>
            </div>
        </section>
        <div class="container article-wraper padding-top-40">
            <div class="row">
                <section class="right-content col-md-9 col-md-push-3">
                    <article class="article-main">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="title-head">
                                    {{$detail['name']}}
                                </h1>

                                <div class="postby">
                                    <span><i class="fa fa-edit" aria-hidden="true"></i> Admin - <i class="fa fa-calendar" aria-hidden="true"></i> 
                                         {{date('d/m/Y',strtotime($detail['created_at']))}}
                                    </span>
                                </div>
                                <div class="article-details">
                                    <div class="article-content">
                                        <div class="rte">
                                            <div class="caption">
                                               {!!$detail['content']!!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(false)
                            <div class="col-md-12">
                                <div class="blog_related">
                                    <h2>Bài viết liên quan</h2>

                                    <article class="blog_entry clearfix">
                                        <h3 class="blog_entry-title"><a rel="bookmark" href="#" title="Dịch vụ chuyển phát nhanh USPS"><i class="fa fa-angle-right" aria-hidden="true"></i> Dịch vụ chuyển phát nhanh USPS</a></h3>
                                    </article>
                                    <article class="blog_entry clearfix">
                                        <h3 class="blog_entry-title"><a rel="bookmark" href="#" title="Dịch vụ chuyển phát nhanh USPS"><i class="fa fa-angle-right" aria-hidden="true"></i> Dịch vụ chuyển phát nhanh USPS</a></h3>
                                    </article>
                                    <article class="blog_entry clearfix">
                                        <h3 class="blog_entry-title"><a rel="bookmark" href="#" title="Dịch vụ chuyển phát nhanh USPS"><i class="fa fa-angle-right" aria-hidden="true"></i> Dịch vụ chuyển phát nhanh USPS</a></h3>
                                    </article>
                                    <article class="blog_entry clearfix">
                                        <h3 class="blog_entry-title"><a rel="bookmark" href="#" title="Dịch vụ chuyển phát nhanh USPS"><i class="fa fa-angle-right" aria-hidden="true"></i> Dịch vụ chuyển phát nhanh USPS</a></h3>
                                    </article>

                                </div>
                            </div>
                            @endif

                        </div>
                    </article>
                </section>

                <aside class="left left-content col-md-3 col-md-pull-9">

                    @if(false)
                    <aside class="aside-item collection-category blog-category">
                        <div class="heading">
                            <h2 class="title-head"><span><i class="fa fa-ship" aria-hidden="true"></i> Danh mục tin tức</span></h2>
                        </div>
                        <div class="aside-content">
                            <nav class="nav-category  navbar-toggleable-md">
                                <ul class="nav navbar-pills">

                                    <li class="nav-item "><a class="nav-link" href="/">Tin công ty</a></li>
                                    <li class="nav-item "><a class="nav-link active" href="/">Tin tức vận chuyển</a></li>
                                    <li class="nav-item "><a class="nav-link" href="/">Tin tức khuyến mãi </a></li>
                                    <li class="nav-item "><a class="nav-link" href="/">Tin tuyển dụng </a></li>
                                </ul>
                            </nav>
                        </div>
                    </aside>
                    @endif

                    <div class="aside-item">
                        <div class="heading">
                            <h2 class="title-head"><span><i class="fa fa-ship" aria-hidden="true"></i> Bài viết liên quan</span></h2>
                        </div>
                        <div class="list-blogs">
                            <div class="row">
                                @foreach($list as $n)
                                <article class="blog-item blog-item-list col-md-12">
                                    <a href="/news/detail/{{$n['alias']}}" class="panel-box-media">
                                        <img src="/upload/news/{{$n['picture']}}" width="70" height="70" alt="#"></a>
                                    <div class="blogs-rights">
                                        <h3 class="blog-item-name">
                                            <a href="/news/detail/{{$n['alias']}}" title="#">
                                            {{$n['name']}}
                                        </a></h3>
                                        <div class="post-time">
                                             {{date('d/m/Y',strtotime($n['created_at']))}}
                                        </div>
                                    </div>
                                </article>
                                @endforeach

                            </div>
                        </div>
                    </div>

                </aside>

            </div>
        </div>
    </main>

@endsection
