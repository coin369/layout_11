@extends("default.default")
@section('content')
      

        

          <main>
        <div class="ps-categogy">
            <section class="project-ask project-ask-news">
                <div class="container">
                    <div class="pro-ask-content">
                        <h2 data-aos="slide-in-left">{{$detail['name']}}</h2>

                    </div>
                </div>
            </section>
            <div class="container">
                <ul class="ps-breadcrumb">
                    <li class="ps-breadcrumb__item"><a href="#" title="#">Trang chủ</a>/</li>
                     <li class="ps-breadcrumb__item"><a href="{{route('news.cate',['alias'=>$detail->Cate()['alias']])}}" title="{{$detail->Cate()['name']}}">{{$detail->Cate()['name']}}</a>/</li>
                    
                    <li class="ps-breadcrumb__item"><a href="#" title="#"><b>{{$detail['name']}}</b></a></li>
                </ul>
            </div>
            <div class="container">
                <div class="row">
                   

                       @include("default.news.sidebar")
                    <div class="col-lg-9 col-md-12 box_frist">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 box_top_cate box_top_cate_detail">
                                <h1 class="ps-categogy__name">{{$detail['name']}}</h1>

                            </div>
                        </div>
                        <div class="row box_product box_product_news">
                            <div class="col-md-12">

                                <div class="blg-meta">
                                    <ul>
                                        <li><i class="fas fa-calendar"></i>&nbsp;{{date('d/m/Y',strtotime($detail['created_at']))}}</li>
                                        <li><i class="fas fa-eye"></i>&nbsp;{{$detail['viewer']}} lượt xem</li>
                                    </ul>
                                </div>
                                <article class="news_text">


                                        {!!$detail['content']!!}
                                </article>
                                <hr>
                                @if(false)
                                <div class="s-activities">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <h4>Chia sẻ :</h4>
                                            <ul class="share-icon">
                                                <li><a href="{{$my_shared['facebook']}}"><i class="fab fa-facebook-f"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
         @include("default.main.youtube")
        <!--End blog area-->
@endsection
