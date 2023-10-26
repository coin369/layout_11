@extends("default.default")
@section("content")
	
	 <section class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary bg-pt lazy" data-bg="url(/assets/images/bg-crum.jpg)">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h2 class="text-white">Dịch vụ Susu Spa & Clinic</h2>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{route('home')}}" title="Trang chủ">Trang chủ</a></li>
							<li>Dịch vụ</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <div class="section-full content-inner-2">
                <div class="container">
                    <div class="row">		
						<div class="col-lg-9 col-md-8">
							<h1 class="m-t0 m-b10 fw6 titleh1">Dịch vụ chính</h1>
							<p>
                                Cung cấp dịch vụ Spa chuyên nghiệp tận tình phục vụ, giá cả hợp lý, trang thiết bị hiện đại sẽ giúp bạn trải nghiệm dịch vụ tốt nhất và đạt hiệu quả cao.
                            </p>
                            <div class="row boxproduct2">
                            	@foreach($TService as $service)
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="item item-box m-b10">
                                        <div class="service-box text-center">
                                            <div class="service-images m-b15">
                                            	<a href='{{route("service.detail",["alias"=>$service["alias"]])}}' title="  {{$service['description']}}">
	                                                <img class='lazy' data-src="{{asset_cdn('public/upload/service/'.$service['picture'])}}" alt="  {{$service['name']}}"/>
	                                            </a>
                                            </div>
                                            <div class="service-content">
                                                <h3 class="text-uppercase">
                                                	<a href='{{route("service.detail",["alias"=>$service["alias"]])}}' class="text-primary1" title="  {{$service['description']}}">  {{$service['name']}}</a></h3>
                                                <p>
                                                    {{$service['description']}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               	@endforeach
                        </div>
                        </div>
						@include("default.service.side")	
					</div>
				</div>
            </div>
        </div>
        <!-- contact area END -->
    </section>           

@endsection