<div class="col-lg-3 col-md-4 col-6 col-sm-6 padding_5">
                                                <div class="item col-md-12-items">
                                                    <div class="s-2-single-service">
                                                        <div class="s-2-image ">
                                                            <a href="{{route('detail',['alias'=>$product['alias']] )}}" title="{{$product['name']}}"><img src="{{asset_cdn('public/upload/product/big/'.$product['picture'])}}" title="{{$product['name']}}"  ></a>
                                                        </div>
                                                        <div class="ss-2-content ">
                                                            <h3>  {{$product['name']}}</h3>
                                                            <p>  {{$product['description']}}</p>
                                                            <a href="{{route('detail',['alias'=>$product['alias']] )}}" title="{{$product['name']}}">Xem chi tiết</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

