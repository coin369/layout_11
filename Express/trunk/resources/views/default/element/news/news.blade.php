


                         <div class="item">
                                    <article class="blog-item">
                                        <div class="blog-item-thumbnail">
                                            <a href="{{route('news.detail',['alias'=>$news['alias']])}}"  title="{{$news['name']}}" >

                                                <picture>

                                                    <img src="/upload/news/{{$news['picture']}}" alt="{{$news['name']}}" class="img-responsive center-block" />
                                                </picture>

                                            </a>
                                            <div class="articles-date">
                                                <span>{{date("d/m",strtotime($news['updated_at']))}}</span> {{date("Y",strtotime($news['updated_at']))}}
                                            </div>
                                        </div>
                                        <h3 class="blog-item-name margin-top-10">
                                            <a href="{{route('news.detail',['alias'=>$news['alias']])}}"  title="{{$news['name']}}">
                                                {{$news['name']}}
                                            </a></h3>
                                        <p class="blog-item-summary margin-bottom-5">{{$news['description']}}</p>
                                    </article>
                                </div>