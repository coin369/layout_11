@extends("default.default")
@section("content")
    
        <!--Start breadcrumb area-->
        <section class="breadcrumb-area style2" style="background-image: url({{asset_cdn('/assets/images/slde11-l.jpg')}});display:none;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="breadcrumb-menu">
                                <ul class="clearfix">
                                <li><a href="{{route('home')}}" title="{{$detail['name']}}">Trang chủ</a></li>
							
							            <li>{{$detail['name']}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start blog area-->
        <section id="blog-area" class="blog-large-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                        <div class="blog-post">
                            <h1 class="tith1">
                                {{$detail['name']}}
                            </h1>
                            <article class="desc_blog">
                                 {!!$detail['content']!!}
                            </article>
                        </div>
                    </div>

                    <!--Start sidebar Wrapper-->
                    @include("default.service.side")


                  
                    <!--End Sidebar Wrapper-->

                </div>
            </div>
        </section>
        <!--End blog area-->
@endsection