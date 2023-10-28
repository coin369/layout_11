
                                           

                                            <div class="item">
                                      <div class="blog-post blog-grid blog-style-1">
                                    <div class="dlab-post-media dlab-img-effect radius-sm"> 
                                        <a href="{{route('news.cate',['alias'=>$news['alias']])}}"  title="{{$news['name']}}">

                                            <img class='lazy' data-src="{{asset(PUBLIC_URL.'upload/news/big/'.$news['picture'])}}" src="data:image/png;base64,R0lGODlhAQABAJEAAAAAAP///////wAAACH5BAEAAAIALAAAAAABAAEAAAICTAEAOw=="  title="{{$news['name']}}" alt="{{$news['name']}}">
                                          </a> </div>
                                    <div class="dlab-info">
                                       <div class="dlab-post-meta">
                                        <ul class="d-flex align-items-center">
                                          <li class="post-date"> {{date('d/m/Y',strtotime($news['created_at']))}}</li>
                                          <li class="post-comment"><a href="{{$news['name']}}">{{$news['viewer']}} lượt xem</a> </li>
                                        </ul>
                                        </div>
                                        <div class="dlab-post-title ">
                                            <h5 class="post-title font-20"><a href="{{route('news.cate',['alias'=>$news['alias']])}}"  title="{{$news['name']}}">{{$news['name']}}</a></h5>
                                        </div>
                                        <div class="dlab-post-readmore blog-share"> 
                                          <a href="{{route('news.cate',['alias'=>$news['alias']])}}"  title="Xem thêm {{$news['name']}}" rel="bookmark" class="site-button-link border-link black">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>