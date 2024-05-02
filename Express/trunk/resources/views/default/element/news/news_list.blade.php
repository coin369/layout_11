
                        <div class="col-md-4 col-sm-6 col-xs-6 col-100">
                                <article class="blog-item">
                                    <div class="blog-item-thumbnail">
                                        <a href="{{route('news.detail',['alias'=>$news['alias']])}}"  title="{{$news['name']}}" >

                                            <div class="blog-link__featured-image">
                                                 <img src="/upload/news/{{$news['picture']}}" alt="{{$news['name']}}" class="img-thumbnail img-responsive center-block" style="height: 100%;width:100%" />
                                            </div>
                                        </a>
                                    </div>
                                   
                                    <h3 class="blog-item-name">
                                        <a href="{{route('news.detail',['alias'=>$news['alias']])}}"  title="{{$news['name']}}">  {{$news['name']}}</a></h3>

                                    <p class="blog-item-summary margin-bottom-5">
                                    {{$news['description']}}
                                    </p>
                                </article>
                            </div>
