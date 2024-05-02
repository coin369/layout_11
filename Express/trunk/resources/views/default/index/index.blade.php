@extends("default.default")
@section("content")
  
      



     <section class="awe-section-1">

            <div class="home-slider owl-carousel" data-md-items='1' data-sm-items='1' data-xs-items="1" data-margin='0'>
                
                @foreach($TSlide as $slide)
                <div class="item">

                    <a href="<?=$slide['links']?>" class="clearfix">
                        <div class="full_slider" style="background-image: url('<?='/upload/slideshow/'.$slide['picture']?>');"></div>
                    </a>
                </div>
                @endforeach


            </div>
            <!-- /.products -->

        </section>


        <section class="awe-section-2">
            <div class="section_service">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 service-bg">
                            <div class="row">

                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item">
                                        <div class="slz-icon-box-2 theme-style-3 ">
                                            <div class="icon-cell ">
                                                <div class="wrapper-icon-image">
                                                    <img src="/img/service_icon_129c9.png" class="slz-icon-img" alt="Tiếp nhận đơn hàng">
                                                </div>
                                            </div>
                                            <div class="service-content-wrap">
                                                <div class="content-cell">
                                                    <a class="title" href="javascript:;">Tiếp nhận đơn hàng</a>
                                                    <div class="wrapper-info">
                                                        <div class="description">Đăng nhập và đăng đơn hàng cho trung tâm điều vận của 79 Post Express qua hệ thống quản lý riêng.</div>
                                                        <a href="javascript:;" class="slz-btn">
                                                            <span class="text">Chi tiết</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item">
                                        <div class="slz-icon-box-2 theme-style-3 ">
                                            <div class="icon-cell ">
                                                <div class="wrapper-icon-image">
                                                    <img src="/img/service_icon_229c9.png" class="slz-icon-img" alt="Lấy hàng">
                                                </div>
                                            </div>
                                            <div class="service-content-wrap">
                                                <div class="content-cell">
                                                    <a class="title" href="javascript:;">Lấy hàng</a>
                                                    <div class="wrapper-info">
                                                        <div class="description">Nhân viên qua địa chỉ shop để lấy hàng tận nơi</div>
                                                        <a href="javascript:;" class="slz-btn">
                                                            <span class="text">Chi tiết</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item">
                                        <div class="slz-icon-box-2 theme-style-3 ">
                                            <div class="icon-cell ">
                                                <div class="wrapper-icon-image">
                                                    <img src="/img/service_icon_329c9.png" class="slz-icon-img" alt="Giao hàng">
                                                </div>
                                            </div>
                                            <div class="service-content-wrap">
                                                <div class="content-cell">
                                                    <a class="title" href="javascript:;">Giao hàng</a>
                                                    <div class="wrapper-info">
                                                        <div class="description">79 Post Express giao hàng cho khách hàng và thu hộ tiền trực tiếp (Cash on Delivery)</div>
                                                        <a href="javascript:;" class="slz-btn">
                                                            <span class="text">Chi tiết</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item">
                                        <div class="slz-icon-box-2 theme-style-3 ">
                                            <div class="icon-cell ">
                                                <div class="wrapper-icon-image">
                                                    <img src="/img/service_icon_429c9.png" class="slz-icon-img" alt="Hoàn tất đơn hàng">
                                                </div>
                                            </div>
                                            <div class="service-content-wrap">
                                                <div class="content-cell">
                                                    <a class="title" href="javascript:;">Đối soát và Hoàn tất</a>
                                                    <div class="wrapper-info">
                                                        <div class="description">đối soát trả tiền cho shop (3 lần/tuần) qua tài khoản ngân hàng. Đồng thời gửi biên bản đối soát định kì vào email.</div>
                                                        <a href="javascript:;" class="slz-btn">
                                                            <span class="text">Chi tiết</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="awe-section-3">
            <div class="section_about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="service-title text-center">
                                <h2>Về chúng tôi 79 Post Express</h2>
                                <div class="service-subtitle">
                                    Tận tâm với mỗi kiện hàng - Đưa niềm tin đến bạn
                                </div>
                            </div>
                            <div class="service-tab">
                                <div class="tab-list-wrapper">

                                    <ul class="nav nav-tabs" role="tablist">
                                        @foreach($DTMain_1 as $k=>$v)
                                        <li role="presentation" <?php echo ($k==0?'class="active"':'')?>>
                                            <a href="#home_<?=$v['id']?>" aria-controls="home_<?=$v['id']?>" role="tab" data-toggle="tab">
                                                <?=$v['name']?>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    @foreach($DTMain_1 as $k=>$v)
                                    <div role="tabpanel" class="tab-pane <?php echo ($k==0?'active':'')?>" id="home_<?=$v['id']?>">
                                        <div class="row">
                                            <div class="col-md-6 col-md-push-6">
                                                <img src="/img/about_image.jpg" class="img-responsive center-block" alt="Mua hàng Mỹ" />
                                            </div>
                                            <div class="col-md-6 col-md-pull-6">
                                                <?=$v['content']?>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="awe-section-4">
            <div class="section_why_choose">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="service-title text-center">
                                <h2>Vì sao chọn chúng tôi</h2>
                                <div class="service-subtitle">
                                    Dịch vụ ship hàng chuyên nghiệp hàng đầu
                                </div>
                            </div>
                            <div class="section_why_choose_content">
                                <div class="row">

                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="why_choose_item">
                                            <a href="javascript:;">
                                                <img src="/img/sec_service_image_1.svg" alt="Bảo hiểm hàng hóa" class="bottom20" />
                                                <div class="choose-right">
                                                    <h4 class="bottom10">Bảo hiểm hàng hóa</h4>
                                                    <p>Mức phí bảo hiểm là 5% giá trị lô hàng. Giúp bạn yên tâm, tiết kiệm hơn khi gởi hàng tại 79 Post Express</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="why_choose_item">
                                            <a href="javascript:;">
                                                <img src="/img/sec_service_image_2.svg" alt="Bồi thường 100%" class="bottom20" />
                                                <div class="choose-right">
                                                    <h4 class="bottom10">Bồi thường 100%</h4>
                                                    <p>Khi đặt cọc, nếu hàng hóa không đến tay bạn. Chúng tôi hoàn trả 100% tiền cọc & món quà thay lời xin lỗi</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="why_choose_item">
                                            <a href="javascript:;">
                                                <img src="/img/sec_service_image_3.svg" alt="Giá cước tiết kiệm" class="bottom20" />
                                                <div class="choose-right">
                                                    <h4 class="bottom10">Giá cước tiết kiệm</h4>
                                                    <p>79 Post Express luôn cố gắng loại bỏ những khâu trung gian để mang đến sản phẩm có chi phí hợp lý nhất</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>


                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="why_choose_item">
                                            <a href="javascript:;">
                                                <img src="/img/sec_service_image_4.svg" alt="Báo giá nhanh chóng" class="bottom20" />
                                                <div class="choose-right">
                                                    <h4 class="bottom10">Báo giá nhanh chóng</h4>
                                                    <p>Những yêu cầu báo giá, đặt hàng được phản hồi nhanh chóng giúp quý khách mua được hàng hóa ưng ý nhất</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>


                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="why_choose_item">
                                            <a href="javascript:;">
                                                <img src="/img/sec_service_image_5.svg" alt="Giao hàng tận nơi" class="bottom20" />
                                                <div class="choose-right">
                                                    <h4 class="bottom10">Giao hàng tận nơi</h4>
                                                    <p>Chúng tôi cung cấp các dịch vụ giao hàng tận nhà trong ngày. Giúp bạn tiết kiệm thời gian hơn</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="why_choose_item">
                                            <a href="javascript:;">
                                                <img src="/img/sec_service_image_6.svg" alt="Theo dõi xuyên suốt" class="bottom20" />
                                                <div class="choose-right">
                                                    <h4 class="bottom10">Theo dõi xuyên suốt</h4>
                                                    <p>Bạn luôn chủ động cập nhật toàn bộ thông tin, lịch sử, của đơn hàng từ lúc đặt cọc đến khi bạn nhận hàng</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="awe-section-5">
            <div class="section_price">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="service-title text-center">
                                <h2>Báo giá</h2>
                                <div class="service-subtitle">
                                    Chúng tôi báo giá trong vòng 30 phút!
                                </div>
                            </div>

                            <div class="form-price">
                                <form role="form" action="#" id="ant-booking-form">
                                    <div class="evo-alert alert alert-success alert-dismissible fade in" role="alert" style="display:none;">
                                        Cảm ơn bạn đã liên hệ với chúng tôi. Chúng tôi sẽ trả lời bạn sớm nhất có thể.
                                    </div>
                                    <div class="form-signup clearfix margin-top-20">
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <fieldset class="form-group">
                                                    <label>Họ tên<span class="required">*</span></label>
                                                    <input type="text" name="Họ tên" id="name" class="form-control  form-control-lg" data-validation-error-msg="Không được để trống" data-validation="required" required />
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <fieldset class="form-group">
                                                    <label>Email<span class="required">*</span></label>
                                                    <input type="email" name="Email" data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg="Email sai định dạng" id="email" class="form-control form-control-lg" required />
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-12 col-xs-12">
                                                <fieldset class="form-group">
                                                    <label>Điện thoại<span class="required">*</span></label>
                                                    <input type="tel" name="Điện thoại" data-validation="tel" data-validation-error-msg="Không được bỏ trống" id="tel" class="form-control form-control-lg" required />
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-12 col-xs-12">
                                                <fieldset class="form-group">
                                                    <label>Nội dung<span class="required">*</span></label>
                                                    <textarea name="Nội dung" id="comment" class="form-control form-control-lg" rows="5" data-validation-error-msg="Không được để trống" data-validation="required" required></textarea>
                                                </fieldset>
                                                <div class="pull-xs-left text-center" style="margin-top:20px;">
                                                    <button id="submit-formdd" class="btn btn-blues btn-style btn-style-active">Gửi tin nhắn</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="awe-section-6">
            <div class="section_statistic">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="service-title text-center">
                                <h2>Thống kê</h2>
                                <div class="service-subtitle">
                                    Tổng quan qua các con số
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="statistic-sub-title">
                                <h3>Công ty ship hàng, giao hàng chuyên nghiệp hàng đầu</h3>
                                <p>Chúng tôi mong muốn kết nối mọi người tại Việt Nam, giúp bạn giải quyết những khó khăn khi giao hàng, gửi hàng, vận chuyển hàng cũng như thủ tục vận chuyển phức tạp.</p>
                            </div>
                            <div class="statistic-main-number">

                                <span class="block progress-bar-text">Giao hàng đúng hẹn <em>(hơn 900.000 đơn/tháng)</em></span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                </div>

                                <span class="block progress-bar-text">Giao hàng nhanh <em>(hơn 300 đơn/ngày)</em></span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
                                </div>

                                <span class="block progress-bar-text">Khách hàng <em>(hơn 100.000 khách)</em></span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                                </div>

                                <span class="block progress-bar-text">Vận chuyển đường bộ <em>(hơn 50.000 km/tháng)</em></span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="statistic-image">
                                <a href="#">
                                    <img src="/img/b.jpg" alt="Thống kê" class="img-responsive center-block" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        @if(!empty($DTBanner))
        <section class="awe-section-7">
            <div class="section_index_brand">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="brand-owl owl-carousel not-dqowl">
                                @foreach($DTBanner as $banner)
                                <div class="item">
                                    <a href="<?=$banner['links']?>"  target="_blank">
                                        <picture>
                                            <img src="/upload/banner/<?=$banner['picture']?>" alt="Đối tác" class="img-responsive center-block" />
                                        </picture>
                                    </a>
                                </div>
                                @endforeach
                                

                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif

        <section class="awe-section-8">
            <section class="section-news">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="service-title text-center">
                                <h2>Tin tức</h2>
                                <div class="service-subtitle">
                                    Về Logistic & vận chuyển
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl_news owl-carousel not-dqowl">

                                @foreach($TNews as $news)
                                         @include("default.element.news.news")
                                @endforeach

                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
  

        
@endsection