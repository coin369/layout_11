 



                    <div class="col-md-4 itemsblog">
                                <div class="img_blog">
                                    <a href="{{route('news.cate',['alias'=>$news['alias']])}}"  title="{{$news['name']}} Xem thêm" class="blog-two ">
                                        <img class="lazy" src="{{asset(PUBLIC_URL.'upload/news/'.$news['picture'])}}" alt="{{$news['name']}}" title="{{$news['name']}}">
                                    </a>
                                </div>
                                <div class="blog-one ">
                                    <div class="bo-hover-content">
                                        <span class="flaticon-paint-1 ficon-blg"></span>
                                    </div>
                                    <a href="{{route('news.cate',['alias'=>$news['alias']])}}"  title="{{$news['name']}} Xem thêm">
                                        <h3> {{$news['name']}}</h3>
                                    </a>
                                    <p>  {{$news['description']}}</p>
                                    <div class="btn-learn-2">
                                        <span class="learn-li"><a href="{{route('news.cate',['alias'=>$news['alias']])}}"  title="{{$news['name']}} Xem thêm">Xem chi tiết</a></span>
                                    </div>
                                </div>
                            </div>