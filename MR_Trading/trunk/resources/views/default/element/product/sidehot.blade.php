  <div class="item-widgets-box">
                                                            <div class="item-widgets-left">
                                                                <a href="{{route('detail',['cate'=>$product->Cate()['alias'],'alias'=>$product['alias']])}}" title="{{$product['name']}}">

                                                                	<img class="lazy" data-src="{{asset(PUBLIC_URL.'upload/product/small/'.$product['picture'])}}" src="data:image/png;base64,R0lGODlhAQABAJEAAAAAAP///////wAAACH5BAEAAAIALAAAAAABAAEAAAICTAEAOw=="  alt="{{$product['name']}}" title="{{$product['name']}}" style="width:67px" /></a>
                                                            </div>
                                                            <div class="item-widgets-body text-black">
                                                                <h6 class="item-title text-uppercase font-weight-500 m-t0">
                                                                	<a href="{{route('detail',['cate'=>$product->Cate()['alias'],'alias'=>$product['alias']])}}" title="{{$product['name']}}">{{$product['name']}}</a></h6>
                                                                <h6 class="item-price m-b0"> <span class="text-primary1">{{App\MrData::toPrice($product['price'])}}</span></h6>
                                                            </div>
                                                        </div>