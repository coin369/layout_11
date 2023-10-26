@extends("default.default")
@section("content")
           

    
     <main>
        <div class="ps-categogy">
            <section class="project-ask project-ask-news">
                <div class="container">
                    <div class="pro-ask-content">
                        <h2 data-aos="slide-in-left">Liên hệ</h2>

                    </div>
                </div>
            </section>
            <div class="container">
                <ul class="ps-breadcrumb">
                    <li class="ps-breadcrumb__item"><a href="#" title="#">Trang chủ</a>/</li>
                    <li class="ps-breadcrumb__item"><a href="#" title="#"><b>Liên hệ</b></a></li>
                </ul>
            </div>
            <section class="contact-us">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <h3>
                                Chi nhánh 1
                            </h3>
                        </div>
                        <div class="col-md-4">
                            <div class="single-contact scp-2">
                                <span class="flaticon-placeholder bg-placeholder"></span>
                                <div class="sc-icon-inner">
                                    <span class="flaticon-placeholder"></span>
                                </div>
                                <h5>Địa chỉ</h5>
                                <p>
                                    1067 - 1069 Phạm Văn Đồng, Hải Phòng
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-contact scp-2">
                                <span class="flaticon-phone bg-phone"></span>
                                <div class="sc-icon-inner">
                                    <span class="flaticon-phone"></span>
                                </div>
                                <h5>Hotline</h5>
                                <p>0919 000 114</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-contact scp-2">
                                <span class="flaticon-envelope bg-envelope"></span>
                                <div class="sc-icon-inner">
                                    <span class="flaticon-envelope"></span>
                                </div>
                                <h5>Email</h5>
                                <p><a href="mailto:test@company.com.vn" class="__cf_email__" data-cfemail="">test@company.com.vn</a></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="map">

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3730.608791559449!2d106.73794769999999!3d20.766644600000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a6e3b0be7dbb5%3A0x11fa922a0be40143!2zMTA2NyBQaOG6oW0gVsSDbiDEkOG7k25nLCBI4bqjaSBUaMOgbmgsIETGsMahbmcgS2luaCwgSOG6o2kgUGjDsm5n!5e0!3m2!1svi!2s!4v1679671467330!5m2!1svi!2s"
                                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>


                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <h3>
                                Chi nhánh 2
                            </h3>
                        </div>
                        <div class="col-md-4">
                            <div class="single-contact scp-2">
                                <span class="flaticon-placeholder bg-placeholder"></span>
                                <div class="sc-icon-inner">
                                    <span class="flaticon-placeholder"></span>
                                </div>
                                <h5>Địa chỉ</h5>
                                <p>
                                    93 - 95 Khu dân cư Tân Thuận, Biên Hòa, Đồng Nai
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-contact scp-2">
                                <span class="flaticon-phone bg-phone"></span>
                                <div class="sc-icon-inner">
                                    <span class="flaticon-phone"></span>
                                </div>
                                <h5>Hotline</h5>
                                <p>0919 000 114</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-contact scp-2">
                                <span class="flaticon-envelope bg-envelope"></span>
                                <div class="sc-icon-inner">
                                    <span class="flaticon-envelope"></span>
                                </div>
                                <h5>Email</h5>
                                <p><a href="mailto:test@company.com.vn" class="__cf_email__" data-cfemail="">test@company.com.vn</a></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15668.530481391297!2d106.8562663!3d10.9533533!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174ddd389248fb1%3A0x3c6dd0411179e3f2!2zS2h1IGTDom4gY8awIFTDom4gVGh14bqtbg!5e0!3m2!1svi!2s!4v1679671620787!5m2!1svi!2s"
                                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>


                    </div>
                    <div class="row" id="my_form">
                        <div class="col-md-12 mt-4">
                            <h1 class="title-detail">Nội dung liên hệ</h1>

@if(count($errors)>0)                      
@foreach($errors->all() as $error)
                     <p class="text text-danger">
                                                {{$error}}
                                        </p>
                    @endforeach
@endif

@if(!empty(session('success')))                      
<h4 class="form-messege text-success text">
                                                  Cảm ơn bạn đã liên hệ đến chúng tôi. Chúng tôi sẽ phản hồi đến bạn một cách sớm nhất.
                                                </h4>
@endif
                            <div class="message-box meb-2" >
                                   <form action="{{route('postcontact')}}" method="post" class="default-form" >
                  {{ csrf_field() }}

                     <input type="hidden" name="my_token" value="{{$my_token}}">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Họ tện *</label>
                                           {!!Form::text('name',null,['placeholder'=>"Họ và tên *","class"=>"form-control"])!!} 
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Số điện thoại *</label>
                                        
                                              {!!Form::text('phone',null,['placeholder'=>"Số điện thoại","class"=>"form-control"])!!} 
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Nội dung</label>
                                         

{!!Form::textarea('message',null,['placeholder'=>"Nhập nội dung cần liên hệ","class"=>"form-control","rows"=>6])!!} 
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <button type="submit" id="submit" name="submit" class="cf-btn btn btn-dark">GỬI NGAY</button>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <div class="cf-msg"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    


  @endsection