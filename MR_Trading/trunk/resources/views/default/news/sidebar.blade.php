 
 


     <div class="col-lg-3 col-md-12 box_second">
                        <div class="blog-sidebar blg-sli-2">
                            <div class="sidebar-widget post-categories-wrapper">
                                <h4 class="sidebar-box-title">Danh mục tin tức</h4>
                                <ul class="category-list">
                                      @foreach($TNews_cate  as $cp)
                                        <li class="" idx=""> 

                                            <a href="{{route('news.cate',['alias'=>$cp['alias']])}}" title="{{$cp['name']}}" class="active_t"> <i class="fa fa-caret-right"></i> {{$cp['name']}} </a> 
                                        </li>
                                        @endforeach
                                </ul>
                            </div>
                            <div class="sidebar-widget popular-categories-wrapper">
                                <h4 class="sidebar-box-title">Tin tức nổi bật</h4>
                                  @foreach($TNews_hot as $news)
                                            @include("default.element.news.small")
                                    @endforeach
                            </div>

                            <div class="sidebar-widget popular-tag-wrapper">
                                <h4 class="sidebar-box-title"> Từ khóa nổi bật</h4>
                                <ul class="sidebar-tag-list">
                                     @foreach($DTTag as $tag)
                                        @if(!empty($tag['name']))
                                        <li><a href="/tim-kiem/{{$tag['alias']}}" title="{{$tag['name']}}">{{$tag['name']}}</a></li>
                                        @endif
                                        @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    