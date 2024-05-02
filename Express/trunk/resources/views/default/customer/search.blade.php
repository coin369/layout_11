@extends("default.default")
@section("content")
      
     
    <main>
        <section class="bread-crumb">
            <div class="container">
                <div class="title-command-wrapper">
                    <h1 class="title" title="#">Tìm kiếm đơn hàng </h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="/" title="Trang chủ">
                                <span>Trang chủ</span>
                            </a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>

                        <li>
                            <strong>Tìm kiếm đơn hàng </strong>
                        </li>

                    </ul>
                </div>
            </div>
        </section>
        <div class="container article-wraper padding-top-40">
            <div class="row">
                <section class="right-content col-md-9 col-md-push-3">
                    <div class="box-heading">
                        <h1 class="title-head">LỊCH SỬ VẬN ĐƠN</h1>
                    </div>

                    <section class="list-blogs blog-main">
                        <table>
                            <tr>
                                <th>Mã đơn</th>
                                <th>Trạng thái</th>
                                <th>Xem chi tiết</th>
                            </tr>
                            <tr>
                                <td>AH123455</td>
                                <td>Đã hoàn thành</td>
                                <td>
                                    <a href="tra-cuu.html">Tra cứu vận đơn</a>
                                </td>
                            </tr>
                            <tr>
                                <td>AH123455</td>
                                <td>Đã hoàn thành</td>
                                <td>
                                    <a href="tra-cuu.html">Tra cứu vận đơn</a>
                                </td>
                            </tr>
                            <tr>
                                <td>AH123455</td>
                                <td>Đã hoàn thành</td>
                                <td>
                                    <a href="tra-cuu.html">Tra cứu vận đơn</a>
                                </td>
                            </tr>
                            <tr>
                                <td>AH123455</td>
                                <td>Đã hoàn thành</td>
                                <td>
                                    <a href="tra-cuu.html">Tra cứu vận đơn</a>
                                </td>
                            </tr>
                        </table>
                    </section>

                </section>

               @include("default.customer.sidebar")

            </div>
        </div>
    </main>


@endsection