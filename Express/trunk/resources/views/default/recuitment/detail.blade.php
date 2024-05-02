@extends("default.default")
@section("content")
	  <section class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary bg-pt lazy" data-bg="url(/assets/images/bg-crum.jpg)">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h2 class="text-white">{{$TRecuitment['name']}}</h2>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{route('home')}}" title="Trang chủ">Trang chủ</a></li>
							<li><a href="{{route('recuitment.index')}}" title="Tuyển dụng">Tuyển dụng</a></li>
							
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
                            <h1 class="m-t0 m-b10 fw6 titleh1">{{$TRecuitment['name']}}</h1>
                            <!-- blog grid -->
                            <div class="blog-post blog-single blog-style-1">
                                <div class="dlab-post-meta">
                                    <ul class="d-flex align-items-center">
                                        <li class="post-date">{{$TRecuitment['created_at']}}</li>
                                     
                                     
                                    </ul>
                                    <ul class="d-flex1 d-flex align-items-center">
                                        <li class="post-date">Số lượng: {{$TRecuitment['quality']}}</li>
                                        <li class="post-author">Làm việc tại: {{$TRecuitment['area']}}</li>
                                        <li class="post-comment">Mức lương: {{$TRecuitment['salary']}}</li>
                                    </ul>
                                </div>
                                <div class="dlab-post-text">
                                    <p>
                                        <div>
                                        	 {!!$TRecuitment['description']!!}
                                           {!!$TRecuitment['content']!!}
                                        </div>
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                        <!-- left part END -->
                        <!-- Side bar start -->
                       	@include("default.news.sidebar")
                        <!-- Side bar END -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Left & right section END -->
        <!-- Content END-->    
    </section>
@endsection