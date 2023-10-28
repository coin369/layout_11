@extends("default.default")
@section("content")
	 <main>
        <div class="ps-categogy">
            <section class="project-ask project-ask-news">
                <div class="container">
                    <div class="pro-ask-content">
                        <h2 data-aos="slide-in-left">Công trình - dự án</h2>

                    </div>
                </div>
            </section>
            <div class="container">
                <ul class="ps-breadcrumb">
                    <li class="ps-breadcrumb__item"><a href="#" title="#">Trang chủ</a>/</li>
                    <li class="ps-breadcrumb__item"><a href="#" title="#"><b>Dự án</b></a></li>
                </ul>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <section class="completed-project">
                            <div class="container">
                                <div class="recent-top">
                                    <h2>Dự án nổi bật</h2>
                                    <h3 class="color_big">Thi công thiết kế công trình xây dựng</h3>

                                </div>
                                <div class="recent-project">
                                  
                                    <div class="row big_project">
                                        @foreach($TEducate as $k=>$v)
                                            @if($k<3)
                                                <div class="col-md-4">
                                                    <div class="project-1">
                                                        <img src="/<?=PUBLIC_URL?>upload/educate/{{$v['picture']}}" alt="{{$v['name']}}">
                                                        <div class="prj-1-content prj-two">
                                                            <div class="p-icon">
                                                                <span class="flaticon-paint-roller ficon-pj-1 ficon-pj-2"></span>
                                                            </div>
                                                            <h3>
                                                                {{$v['name']}}
                                                            </h3>

                                                            <a href="{{route('educate.detail',['alias'=>$v['alias']])}}" title="{{$v['name']}}"> Xem thêm</a>
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                            @endif

                                        @endforeach

                                    </div>
                                  
                                    <div class="row small_project">

                                         @foreach($TEducate as $k=>$v)
                                            @if($k>2)
                                        <div class="col-md-3">
                                            <div class="project-1">
                                                <img src="/<?=PUBLIC_URL?>frontend/images/y4.jpg" alt="">
                                                <div class="prj-1-content prj-three">
                                                    <div class="p-icon">
                                                        <span class="flaticon-paint-roller ficon-pj-1 ficon-pj-3"></span>
                                                    </div>
                                                    <h3>NHÀ MÁY LỐP XE VIỆT LUÂN KCN PHƯỚC ĐÔNG DÙNG SƠN CỦA CHÚNG TÔI</h3>

                                                    <a href="#" title="#"> Xem thêm</a>
                                                </div>
                                            </div>
                                        </div>
                                            @endif
                                        @endforeach
                                       
                                        
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="ps-pagination">
                            {!!$TEducate->links("default.element.paginate")!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection