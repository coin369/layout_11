@extends("default.default")
@section("content")
           
 <section class="main_section">
            <section class="pos_top">
                @include("default.element.slideshow")
                <div class="main-visual-sweets__text">
                    <h1 class="main-visual-sweets__title">人材総合支援事業<span>ミャンマー人材のトータルソリューションサービス</span></h1>
                </div>
            </section>
            <div id="breadcrumbList">
                <ul>
                    <li><a href="/" title="#">ホーム</a></li>
                    <li>人材総合支援事業</li>
                </ul>
            </div>
            <?php $x=explode("#ELEMENTNEWS",$THome['content'])?>

            @if(!empty($x[0]))
                     {!!$x[0]!!}
            @endif

            @include("default.element.news.list")

             @if(!empty($x[1]))
                 {!!$x[1]!!}
            @endif


            @include("default.element.contact")
        </section>

  @endsection