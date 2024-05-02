@extends("default.default")
@section("content")
      
        <script type="module" >

        	setTimeout(function(){
		           @if(count($errors)>0)
		              
		                        @foreach($errors->all() as $error)
		                             window.toastr.error("{{$error}}");
		                        
		                        @endforeach
		                  
		            @endif
		            @if(!empty(session('success')))
		              window.toastr.info("{{session('success')}}");
		            
		            @endif
            },1000);
       
           
        </script>
     
	 <main>
        <section class="bread-crumb">
            <div class="container">
                <div class="title-command-wrapper">
                    <h1 class="title" title="#">Liên hệ</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="/" title="Trang chủ">
                                <span>Trang chủ</span>
                            </a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>

                        <li>
                            <strong>Liên hệ</strong>
                        </li>

                    </ul>
                </div>
            </div>
        </section>
        <div class="container contact padding-top-40">
            <div class="row">
                <div class="col-md-3 col-md-push-9">
                    <div class="widget-item info-contact in-fo-page-content">
                        <div class="logos text-xs-left">

                            <a href="index.html" class="logo-wrapper ">
                                <img src="/img/logo.jpg" alt="logo 79 Post Express" class="img-responsive" />
                            </a>

                        </div>
                        <p class="margin-top-10">
                            <strong>79 Post Express</strong> là giải pháp quản lý hàng hóa, nhận hàng và giao hàng, tiết kiệm nhanh chóng giá tốt tận tâm với từng kiện hàng đưa niềm tin đến khách hàng. Giúp khách hàng và doanh nghiệp phát triển kinh doanh
                            online hiệu quả hơn.
                        </p>
                        <!-- End .widget-title -->
                        <ul class="widget-menu contact-info-page">

                            <li><i class="fa fa-map-marker color-x" aria-hidden="true"></i> 
                            	{!!($DTMain_3[0]['content'])!!}
                            </li>
                            <li><i class="fa fa-phone color-x" aria-hidden="true"></i> <a href="tel:{{strip_tags($DTMain_3[1]['content'])}}">{{strip_tags($DTMain_3[1]['content'])}}</a></li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:{{strip_tags($DTMain_3[2]['content'])}}">{{strip_tags($DTMain_3[2]['content'])}}</a></li>

                        </ul>
                        <!-- End .widget-menu -->
                    </div>
                </div>
                <div class="col-md-9 col-md-pull-3">
                    <div class="page-login">
                        <div id="login">
                            <h1 class="title-head">Liên hệ</h1>
                            <span>Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn sau khi nhận được.</span>
                         {!! Form::open(['method'=>'post' ]) !!}
                                <div class="form-signup clearfix margin-top-20">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <fieldset class="form-group">
                                                <label>Họ tên<span class="required">*</span></label>
                                             
                         {!! Form::text('name',@$data['name'],[ "required"=>"required" ,'class'=>"form-control  form-control-lg" ]) !!}

                        @if(!empty($error['name']))
                                                    <div class="invalid-feedback">
                                                        {{@$error['name']}}
                                                    </div>
                         @endif   
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <fieldset class="form-group">
                                                <label>Email<span class="required">*</span></label>
                                               
                         {!! Form::text('email',@$data['email'],[ "required"=>"required" ,"class"=>"form-control form-control-lg"]) !!}

                        @if(!empty($error['email']))
                                                    <div class="invalid-feedback">
                                                        {{@$error['email']}}
                                                    </div>
                         @endif   
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <fieldset class="form-group">
                                                <label>Số điện thoại<span class="required">*</span></label>

                                              
                         {!! Form::text('phone',@$data['phone'],[ "required"=>"required" ,"class"=>"form-control form-control-lg"]) !!}

                        @if(!empty($error['phone']))
                                                    <div class="invalid-feedback">
                                                        {{@$error['phone']}}
                                                    </div>
                         @endif   
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <fieldset class="form-group">
                                                <label>Địa chỉ<span class="required"></span></label>
                                               
                         {!! Form::text('address',@$data['address'],["class"=>"form-control form-control-lg" ]) !!}
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-12 col-xs-12">
                                            <fieldset class="form-group">
                                                <label>Nội dung<span class="required">*</span></label>
                                              
                        {!! Form::textarea('comment',@$data['comment'],[ "required"=>"required" ,"class"=>"form-control form-control-lg" ]) !!}
                                            </fieldset>
                                            <div class="pull-xs-left" style="margin-top:20px;">
                                                <button type="submit" class="btn btn-blues btn-style btn-style-active"><strong>Gửi tin nhắn</strong></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15754.900880838055!2d105.1198712472153!3d9.179240515397371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a1499d27d924b1%3A0xd2c231f04c58e6d2!2zMjU5IEzDvSBWxINuIEzDom0sIFBoxrDhu51uZyAxLCBUaMOgbmggcGjhu5EgQ8OgIE1hdSwgQ8OgIE1hdSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1712133466365!5m2!1svi!2s"
                width="100% " height="450 " frameborder="0 " style="border:0 " allowfullscreen></iframe>
        </div>
    </main>

    



@endsection