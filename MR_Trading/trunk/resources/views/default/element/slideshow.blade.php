                
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