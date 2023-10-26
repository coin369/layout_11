@extends("default.default")
@section("content")
   


  <main>
        <div class="ps-categogy">
            <section class="project-ask">
                <div class="pro-ask-content">
                    <h2 data-aos="slide-in-left">{{$detail['name']}}</h2>

                </div>
            </section>
            <div class="container">
                <ul class="ps-breadcrumb">
                    <li class="ps-breadcrumb__item"><a href="/" title="#">Trang chủ</a>/</li>
                    <li class="ps-breadcrumb__item"><a href="/du-an" title="#">Dự án</a></li>

                </ul>
            </div>
            <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                                {!!$detail['content']!!}
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection