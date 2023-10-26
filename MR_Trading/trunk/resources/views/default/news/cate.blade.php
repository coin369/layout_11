@extends("default.default")
@section('content')



    <main>
        <div class="ps-categogy">
            <section class="project-ask project-ask-news">
                <div class="container">
                    <div class="pro-ask-content">
                        <h2 data-aos="slide-in-left">{{$cate['name']}}</h2>

                    </div>
                </div>
            </section>
            <div class="container">
                <ul class="ps-breadcrumb">
                    <li class="ps-breadcrumb__item"><a href="/" title="#">Trang chủ</a>/</li>
                    <li class="ps-breadcrumb__item"><a href="{{route('news.index')}}" title="#">Tin tức</a>/</li>
                     <li class="ps-breadcrumb__item"><a href="javascript:;" title="#"><b>{{$cate['name']}} </b></a></li>

                </ul>
            </div>
            <div class="container">
                <div class="row">
                  

                     @include("default.news.sidebar")

                    <div class="col-lg-9 col-md-12 box_frist">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 box_top_cate box_top_cate_news">
                                <h1 class="ps-categogy__name">
                                    {{$cate['name']}}
                                </h1>

                            </div>
                        </div>
                        <div class="row box_product box_product_news">
                                @foreach($TNews as $news)
                                        @include("default.element.news.news")
                                @endforeach
                            
                           
                        </div>
                        <div class="ps-pagination">
                          
                             {!!$TNews->links("default.element.paginate")!!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
        
         @include("default.main.youtube")
@endsection