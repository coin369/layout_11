@extends("default.default")
@section("content")
   <section class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary bg-pt lazy" data-bg="url(/assets/images/bg-crum.jpg)">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h2 class="text-white">Tuyển dụng</h2>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{route('home')}}" title="Trang chủ">Trang chủ</a></li>
							<li>Tuyển dụng</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- inner page banner END -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- left part start -->

                    <div class="col-lg-8 col-md-7 col-sm-12">
                        <h1 class="m-t0 m-b10 fw6 titleh1">Tuyển dụng tại Susu Spa & Clinic</h1>
                        <!-- blog grid -->
                        <div class="row box_job">

                            @foreach($TRecuitment as $recuitment)
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <a class="price-tbl d-flex" href="{{route('recuitment.detail',['alias'=>$recuitment['alias']])}}" title="  {{$recuitment['name']}}">
                                    <div class="flex-grow-1">
                                        <h3 class="text-primary1">
                                            {{$recuitment['name']}}
                                        </h3>
                                        <p>Số lượng: {{$recuitment['quality']}}</p>
                                        <p>Hạn nộp: {{$recuitment['limited']}} </p>
                                    </div>
                                    <div class="price-val align-self-center">
                                        <h4 class="text-secondry">Mức lương: {{$recuitment['salary']}}</h4>
                                        <i>Làm việc tại: {{$recuitment['area']}}</i>
                                    </div>
                                </a>
                            </div>
                            @endforeach

                        </div>
                        <!-- blog grid END -->
                        <!-- Pagination -->
                        {!!$TRecuitment->links("default.element.paginate")!!}
                        <!-- Pagination END -->
                    </div>
                    <!-- left part END -->
                    <!-- Side bar start -->
                   	@include("default.news.sidebar")
                    <!-- Side bar END -->
                </div>
            </div>
        </div>
        <!-- Left & right section END -->
        <!-- Content END-->    
    </section>
@endsection