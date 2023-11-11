@extends("default.default")
@section("content")
  
        @if(!empty($TSlide))
        <div class="slider">
            @foreach($TSlide as $slide)
            <div class="items">
                <a  href="{{$slide['links']}}"   title="{{$slide['name']}}" >
                    <img src="/upload/slideshow/{{$slide['picture']}}" alt="{{$slide['name']}}" />
                </a>
            </div>
            @endforeach
        </div>
        @endif

        <div class="main_section">
            
           
        
        {!!$THome['content']!!}

        <section class="main_section">

            @include("default.element.news.list")


            @include("default.element.contact")
            
        </section>

        
@endsection