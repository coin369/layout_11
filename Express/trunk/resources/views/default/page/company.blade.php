@extends("default.default")
@section("content")
           
 <section class="main_section">

            <section class="pos_top">
                @include("default.element.slideshow")
                <div class="main-visual-sweets__text">
                    <h1 class="main-visual-sweets__title">{{$THome['name']}}<span>COMPANY</span></h1>
                </div>
            </section>
            <div id="breadcrumbList">
                <ul>
                    <li><a href="/" title="">ホーム</a></li>
                    <li>{{$THome['name']}}</li>
                </ul>
            </div>

           {!!$THome['content']!!}
        </section>
  @endsection