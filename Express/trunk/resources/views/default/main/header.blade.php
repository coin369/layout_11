  <!-- Main content -->
    <header class="header">
        <div class="container">
            <div class="header-main">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-full-function">
                        <a class="link-toggle-slide-menu hidden-lg hidden-md"></a>
                        <div class="logo">
                            <a href="/" class="logo-wrapper ">
                                <img src="/img/logo.jpg" width="190px" alt="logo 79 Post Express">
                            </a>
                        </div>
                        <a href="tel:{{strip_tags($DTMain_4[0]['content'])}}" class="icon-option-cart hidden-lg hidden-md"></a>
                    </div>
                    <div class="col-lg-5 col-md-4">
                        <div class="search">
                            <div class="header_search search_form">
                                <form class="input-group search-bar search_form" action="/tim-kiem" method="get" role="search">
                                    <input type="search" name="s" value="" placeholder="Tìm kiếm... " class="input-group-field st-default-search-input search-text" autocomplete="off">
                                    <input type="hidden" class="form-control" name="type" value="" />
                                    <span class="input-group-btn">
                    <button class="btn icon-fallback-text">
                      <i class="fa fa-search"></i>
                    </button>
                  </span>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 hidden-sm hidden-xs">
                        <div class="top-fun">
                            <div class="hotline">
                                <img src="/img/hotline.svg" alt="Tổng đài miễn phí" />
                                <div class="hotline-text">

                                    <a href="tel:{{$DTMain_4[0]['content']}}">
                                        {{strip_tags($DTMain_4[0]['content'])}}
                                    </a>

                                    <span>Hotline liên hệ</span>
                                </div>
                            </div>
                            <div class="hotline">
                                <img src="/img/order_tracking_1.png" alt="Tra cứu đơn hàng" />
                                <div class="hotline-text">

                                    <a href="/tra-cuu" title="Tra cứu đơn hàng">Tra cứu đơn hàng</a>

                                    <span><a href="/quan-ly-tai-khoan" class="info_tk">Tài khoản: Minh Anh</a></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <ul id="nav" class="nav container">

                <li class="nav-item <?=$active=='home'?'active':''?>"><a class="nav-link" href="/">Trang chủ</a></li>

                <li class="nav-item <?=$active=='info'?'active':''?> "><a class="nav-link" href="/gioi-thieu">Giới thiệu</a></li>
                <li class="nav-item <?=$active=='service'?'active':''?> ">
                    <a href="/dich-vu" class="nav-link">Dịch vụ </a>

                </li>
                <li class="nav-item <?=$active=='customer'?'active':''?>">
                    <a href="/quan-ly-tai-khoan" class="nav-link">Tài khoản <i class="fa fa-angle-right" data-toggle="dropdown"></i></a>

                    <ul class="dropdown-menu">


                        <li class="dropdown-submenu nav-item-lv2">
                            <a class="nav-link" href="/dang-ky">Đăng ký </a>

                        </li>
                        <li class="dropdown-submenu nav-item-lv2">
                            <a class="nav-link" href="/dang-nhap">Đăng nhập </a>

                        </li>
                    </ul>

                </li>
                <li class="nav-item  <?=$active=='news'?'active':''?>"><a class="nav-link" href="/tin-tuc">Tin tức</a></li>
                <li class="nav-item  <?=$active=='contact'?'active':''?>"><a class="nav-link" href="/lien-he">Liên hệ</a></li>


            </ul>
        </nav>
        <!-- Mobi -->
        <div class="backdrop__body-backdrop___1rvky"></div>
        <div class="c-menu--slide-left">
            <div class="la-nav-top-login">
                <div class="la-avatar-nav p-relative text-center">
                    <a href="/dang-ky">
                        <img class="img-responsive" src="/img/av-none-user29c9.png" alt="avatar">
                    </a>
                    <div class="la-hello-user-nav ng-scope">Xin chào</div>
                    <img id="close-nav" class="c-menu__close" src="/img/ic-close-menu29c9.png" alt="close nav">
                </div>
                <div class="la-action-link-nav text-center">
                    Chào mừng quý khách đến với 79 Post Express
                </div>
            </div>
            <div class="la-scroll-fix-infor-user">
                <!--CATEGORY-->
                <div class="la-nav-menu-items">
                    <div class="la-title-nav-items">Tất cả danh mục</div>
                    <ul class="la-nav-list-items">


                        <li class="ng-scope">
                            <a href="/">Trang chủ</a>
                        </li>
                        <li class="ng-scope">
                            <a href="/gioi-thieu">Giới thiệu</a>
                        </li>
                        <li class="ng-scope ng-has-child1">
                            <a href="/dich-vu">Dịch vụ</i></a>

                        </li>
                        <li class="ng-scope ng-has-child1">
                            <a href="/quan-ly-tai-khoan">Tài khoản <i class="fa fa-plus fa1" aria-hidden="true"></i></a>
                            <ul class="ul-has-child1">


                                <li class="ng-scope ng-has-child2">
                                    <a href="/dang-ky">Đăng ký ></i></a>

                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="/dang-nhap">Đăng nhập</i></a>

                                </li>

                            </ul>
                        </li>
                        <li class="ng-scope">
                            <a href="/tin-tuc">Tin tức</a>
                        </li>

                        <li class="ng-scope">
                            <a href="/lien-he">Liên hệ</a>
                        </li>
                        <li class="ng-scope">
                            <a href="/tra-cuu">Tra cứu đơn hàng</a>
                        </li>
                    </ul>
                </div>
                <div class="la-nav-slide-banner">
                    <a href="#">
                        <img alt="79 Post Express" src="/img/left-menu-banner-129c9.jpg" />
                    </a>
                </div>
            </div>
        </div>
        <!-- Mobi -->
    </header>
