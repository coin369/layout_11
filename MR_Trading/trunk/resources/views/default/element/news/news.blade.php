<div class="div_box01">
                            <ul class="inc-information__tax-list">
                                <li class="inc-information__tax-item infotax_human">
                                    {{$news->Cate()['name']}}
                                </li>
                            </ul>
                            <div class="inc-information__date">{{date("Y.m.d",strtotime($news['updated_at']))}}</div>
                            <h3 class="h3_tit01">
                                <a href="{{route('news.detail',['alias'=>$news['alias']])}}" title=" {{$news['name']}}">
                                    {{$news['name']}}
                                </a></h3>
                            <a href="{{route('news.detail',['alias'=>$news['alias']])}}" title="{{$news['name']}}" class="information__date_a">
                                >>>
                            </a>
                        </div>