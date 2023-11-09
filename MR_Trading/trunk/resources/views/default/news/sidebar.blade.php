<div id="sideContents">
                                <ul id="bnrCommon">
                                    <li class="h3_tit01">
                                        <a href="{{route('news.index')}}" title="カテゴリー別の一覧">カテゴリー別の一覧</a>
                                    </li>

                                </ul>
                                <ul class="tabControl">
                                    @foreach($TCate as $cate)
                                    <li class="">
                                        <a href="{{route('news.cate',['alias'=>$cate['alias']])}}" class="{{$alias_cate==$cate['alias']?'current':''}}"  >
                                                {{$cate['name']}}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>

                            </div>