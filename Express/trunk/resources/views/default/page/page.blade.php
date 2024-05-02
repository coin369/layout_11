@extends("default.default")
@section("content")
      
    <main>
        <section class="bread-crumb">
            <div class="container">
                <div class="title-command-wrapper">
                    <h1 class="title">{{$page['name']}}</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="/" title="Trang chủ">
                                <span>Trang chủ</span>
                            </a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>

                        <li>
                            <strong>{{$page['name']}}</strong>
                        </li>

                    </ul>
                </div>
            </div>
        </section>
        <section class="page padding-top-40">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        
                        <div class="content-page rte margin-bottom-40 clearfix">
                            {!!$page['content']!!}
                        </div>
                    </div>
                </div>
            </div>
           
        </section>
    </main>


  @endsection