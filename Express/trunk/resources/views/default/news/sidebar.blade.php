<div id="sideContents">
                                <ul id="bnrCommon">
                                    <li class="h3_tit01">
                                        <a href="{{route('news.index')}}" title="カテゴリー別の一覧">カテゴリー別の一覧</a>
                                    </li>

                                </ul>
                                <div class="tabControl">
                                    @foreach($TCate as $cate)
                                    <div class="">
                                        <a href="{{route('news.cate',['alias'=>$cate['alias']])}}" class="{{$alias_cate==$cate['alias']?'current':''}}"  >
                                                {{$cate['name']}}
                                        </a>
                                    </div>
                                    @endforeach
                                </div>

                            </div>