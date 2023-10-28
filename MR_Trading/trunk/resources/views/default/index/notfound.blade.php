@extends("default.default")
@section("content")
  


       
        <!--Start About Style2 Area-->
        <section class="about-style2-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-style2-text">
                            <div class="sec-title">
                                <h1 class="title"><span>Đất Cảnh Group</span><br/>
                                <span class="title-red">Đất Cảnh Group</span> </h1>
                            </div>
                            <div class="text">
                                <p>
                                    Không tìm thấy trang website.
                                </p>
                            </div>
                            <div class="button">
                                <a class="btn-one" title="thiết kế nội thất " href="/landing-page/thiet-ke-noi-that">Xem thêm<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-style2-image-box">
                            
                            <div class="image">
                                      <?php 
                                            $file='/assets/images/info1.jpg';
                                            if(!is_file(public_path($file.'.webp')) && is_file(public_path($file)) ){
                                                WebPConvert\WebPConvert::convert(
                                                        public_path($file) , 
                                                        public_path($file.".webp"),
                                                        []
                                                    );
                                            }
                                        ?>  
                                <img class="lazy" data-src="{{asset('/assets/images/info1.jpg.webp')}}" src="data:image/png;base64,R0lGODlhAQABAJEAAAAAAP///////wAAACH5BAEAAAIALAAAAAABAAEAAAICTAEAOw=="  alt="{{$TGeneral['name']}}">
                                <div class="overlay-box">
                                    <div class="title">
                                        <div class="row">
                                        <div class='t col-md-3'>15</div>
                                     
                                     </div>
                                    </div>
                                    <div class="button">
                                        <a href="{{route('page',['alias'=>'gioi-thieu'])}}" title="{{$TGeneral['name']}} "><span class="icon-back"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End About Style2 Area-->

      
       


@endsection