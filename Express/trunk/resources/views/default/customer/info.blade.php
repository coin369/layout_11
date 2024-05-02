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
                            <strong>Quản lý tài khoản</strong>
                        </li>

                    </ul>
                </div>
            </div>
        </section>
        <div class="container article-wraper padding-top-40">
            <div class="row">
                <section class="right-content col-md-9 col-md-push-3">
                    <div class="box-heading">
                        <h1 class="title-head">Thông tin tài khoản</h1>
                    </div>

                    <section class="list-blogs blog-main">
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
                                            <button type="submit" class="btn btn-blues btn-style btn-style-active"><strong>CẬP NHẬT</strong></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>

                </section>

                @include("default.customer.sidebar")

            </div>
        </div>
    </main>


@endsection