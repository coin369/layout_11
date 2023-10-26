 <div class="col-md-4 col-6">
                                <div class="item col-md-12-items">
                                    <div class="s-2-single-service">
                                        <div class="s-2-image ">
                                           <a href="{{route('detail',['cate'=>$product->Cate()['alias'],'alias'=>$product['alias']])}}" title="{{$product['name']}}">

                                             <img class='lazy' src="{{asset_cdn('public/upload/product/big/'.$product['picture'])}}"  alt="{{$product['name']}}" title="{{$product['name']}}">

                                        </a>
                                        </div>
                                        <div class="ss-2-content ">
                                            <h3> {{$product['name']}}    </h3>
                                            <p> {{$product['description']}}    </p>
                                              <a href="{{route('detail',['cate'=>$product->Cate()['alias'],'alias'=>$product['alias']])}}" title="{{$product['name']}}">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


