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
                            <strong>Tin tức</strong>
                        </li>

                    </ul>
                </div>
            </div>
        </section>
        <div class="container article-wraper padding-top-40">
            <div class="row">
                <section class="right-content col-md-12 col-md-push-3">
                    <div class="box-heading">
                        <h1 class="title-head">Tin tức</h1>
                    </div>

                    <section class="list-blogs blog-main">
                        <div class="row">
                                    @foreach($TNews as $news):
                                            @include("default.element.news.news")
                                    @endforeach

                                     {!!$TNews->links("default.element.paginate")!!}

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="text-xs-left padding-edit">

                                    <nav class="text-center">
                                        <ul class="pagination clearfix">

                                            <li class="page-item disabled"><a class="page-link" href="#">«</a></li>

                                            <li class="active page-item disabled"><a class="page-link" href="#">1</a></li>

                                            <li class="page-item"><a class="page-link" href="#">2</a></li>

                                            <li class="page-item"><a class="page-link" href="#">»</a></li>

                                        </ul>
                                    </nav>

                                </div>
                            </div>
                        </div>
                    </section>

                </section>

               

            </div>
        </div>
    </main>

@endsection