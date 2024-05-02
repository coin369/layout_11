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
                            <strong>Lịch sử vận đơn</strong>
                        </li>

                    </ul>
                </div>
            </div>
        </section>


        <div class="container article-wraper padding-top-40">
            <div class="row">
                <section class="right-content col-md-9 col-md-push-3" id="rate_rate" class="content_wrap">
                    <div class="box-heading">
                        <h1 class="title-head">CHI TIẾT VẬN ĐƠN AH123455</h1>
                    </div>

                    <div class="contact_form" id="contact">
                        <form method="POST" name="contact" action="" role="form" enctype="multipart/form-data">
                            <div class="danh_gia_nhan_vien">
                                <div class="two_div">
                                    <article>

                                        <h3 class="title_dg_after">
                                            Nhân viên giao hàng
                                        </h3>
                                        <div class="icon_nv">
                                            <div class="info_nv">
                                                <span class="cv_nv">Dương Văn Chánh</span><br>

                                                <span class="cv_nv">59K2-56789</span><br>
                                                <span class="cv_nv">Honda-Wave Alpha</span><br>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="show_itemlist">
                                    <section class="box_steps_pr">

                                        <div class="box_steps active">
                                            <div class="step"><span>1</span></div>
                                            <div class="intro_step">
                                                <p>
                                                    <strong>Đã đặt đơn</strong>
                                                    <span>
                                                        24/03/2024 10:09:00
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="box_steps active">
                                            <div class="step"><span>2</span></div>
                                            <div class="intro_step">
                                                <p>
                                                    <strong>Đã lên lịch lấy hàng</strong>
                                                    <span>
                                                        24/03/2024 12:09:00
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="box_steps active">
                                            <div class="step"><span>3</span></div>
                                            <div class="intro_step">
                                                <p>
                                                    <strong>Đang di chuyển địa điểm lấy hàng</strong>
                                                    <span>
                                                        24/03/2024 12:45:00
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="box_steps active">
                                            <div class="step"><span>4</span></div>
                                            <div class="intro_step">
                                                <p>
                                                    <strong>Đã lấy hàng</strong>
                                                    <span>
                                                        24/03/2024 13:09:00
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="box_steps active">
                                            <div class="step"><span>5</span></div>
                                            <div class="intro_step">
                                                <p>
                                                    <strong>Đang giao hàng đến điểm giao</strong>
                                                    <span>
                                                        24/03/2024 13:15:00
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="box_steps">
                                            <div class="step"><span>6</span></div>
                                            <div class="intro_step">
                                                <p>
                                                    <strong>Đã giao hàng</strong>
                                                    <span>
                                                        24/03/2024 15:00:00
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </form>

                    </div>

                </section>

               @include("default.customer.sidebar")

            </div>
        </div>
    </main>

@endsection