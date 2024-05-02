@extends("default.default")
@section("content")
            <main>
        <section class="bread-crumb">
            <div class="container">
                <div class="title-command-wrapper">
                    <h1 class="title" title="#">Tài khoản</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="/" title="Trang chủ">
                                <span>Trang chủ</span>
                            </a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>

                        <li>
                            <strong>Đăng ký</strong>
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
                                <img src="../public/img/logo.jpg" alt="logo 79 Post Express" class="img-responsive" />
                            </a>

                        </div>
                        <p class="margin-top-10">
                            <strong>79 Post Express</strong> là giải pháp quản lý hàng hóa, nhận hàng và giao hàng, tiết kiệm nhanh chóng giá tốt tận tâm với từng kiện hàng đưa niềm tin đến khách hàng. Giúp khách hàng và doanh nghiệp phát triển kinh doanh
                            online hiệu quả hơn.
                        </p>
                        <!-- End .widget-title -->
                        <ul class="widget-menu contact-info-page">

                            <li><i class="fa fa-map-marker color-x" aria-hidden="true"></i> Lô G chung cư Hùng Vương Phương 11, Quận 5, TPHCM</li>
                            <li><i class="fa fa-phone color-x" aria-hidden="true"></i> <a href="tel:19006750">1900 6750</a></li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:support@online.vn">support@online.vn</a></li>

                        </ul>
                        <!-- End .widget-menu -->
                    </div>
                </div>
                <div class="col-md-9 col-md-pull-3">
                    <div class="page-login">
                        <div id="login">
                            <h1 class="title-head">Đăng ký</h1>
                            <span>Bạn hãy điền thông tin vào form dưới đây để đăng ký tài khoản.</span>
                            <form method="post" action="#" id="contact" accept-charset="UTF-8">

                                <div class="form-signup clearfix margin-top-20">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <fieldset class="form-group">
                                                <label>Họ tên<span class="required">*</span></label>
                                                <input type="text" name="contact[name]" id="name" class="form-control  form-control-lg" required />
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <fieldset class="form-group">
                                                <label>Tên đăng nhập<span class="required">*</span></label>
                                                <input type="text" name="contact[username]" id="username" class="form-control  form-control-lg" required />
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <fieldset class="form-group">
                                                <label>Email<span class="required"></span></label>
                                                <input type="email" name="contact[email]" id="email" class="form-control form-control-lg" />
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <fieldset class="form-group">
                                                <label>Số điện thoại<span class="required">*</span></label>
                                                <input type="text" name="contact[phone]" id="phone" class="form-control  form-control-lg" required />
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <fieldset class="form-group">
                                                <label>Tỉnh/Thành<span class="required">*</span></label>
                                                <select name="province" id="province">
                                                    <option value="0">Chọn</option>
                                                    <option value="1">Hồ Chí Minh</option>
                                                    <option value="2">An Giang</option>
                                                    <option value="3">Bến Tre</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <fieldset class="form-group">
                                                <label>Quận/huyện<span class="required">*</span></label>
                                                <select name="district" id="district">
                                                    <option value="0">Chọn</option>
                                                    <option value="1">Quận 1</option>
                                                    <option value="2">Quận 2</option>
                                                    <option value="3">Quận 3</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-12 col-xs-12">
                                            <fieldset class="form-group">
                                                <label>Địa chỉ<span class="required">*</span></label>
                                                <input type="text" name="contact[address]" class="form-control form-control-lg" required />
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <fieldset class="form-group">
                                                <label>Mật khẩu<span class="required">*</span></label>
                                                <input type="text" name="contact[address]" class="form-control form-control-lg" required />
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <fieldset class="form-group">
                                                <label>Nhập lại mật khẩu<span class="required">*</span></label>
                                                <input type="text" name="contact[address]" class="form-control form-control-lg" required />
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="pull-xs-left" style="margin-top:20px;">
                                                <button type="submit" class="btn btn-blues btn-style btn-style-active"><strong>ĐĂNG KÝ</strong></button>
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
    </main>
@endsection