                           @if(count($product->Promotion() ) >0 )
                            <div class="items">
                                           <div class="single_product">
                                                <div class="product_thumb">
                                                    <a href="{{route('detail',['cate'=>$product->Cate()['alias'],'alias'=>$product['alias']])}}" title="{{$product['name']}}">
                                                        <img class='lazy' data-src="{{asset(PUBLIC_URL.'upload/product/big/'.$product['picture'])}}" src="data:image/png;base64,R0lGODlhAQABAJEAAAAAAP///////wAAACH5BAEAAAIALAAAAAABAAEAAAICTAEAOw=="  alt="{{$product['name']}}" title="{{$product['name']}}">
                                                    </a>
                                                    @if($percent=App\MrData::Percent($product->PromotionProduct()['price'],$product->PromotionProduct()['saleprice']))
                                                        <div class="product_discount">
                                                            <span>-{{$percent}}%</span>
                                                        </div>
                                                    @endif
                                                    <div class="product_flag_sale">
                                                        <span>SALE</span>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_timing">
                                                        <div data-countdown="{{date('Y/m/y H:i:s',strtotime($product->Promotion()[0]->date_to))}}"></div>
                                                    </div>

                                                    <div class="small_product_name">
                                                        <a href="{{route('detail',['cate'=>$product->Cate()['alias'],'alias'=>$product['alias']])}}" title="{{$product['name']}}">
                                                            {{$product['name']}}    
                                                        </a>
                                                    </div>
                                                    <div class="small_product_price">
                                                        <span class="new_price"> {{App\MrData::toPrice($product->PromotionProduct()['price'])}}</span>
                                                        <span class="old_price"> {{App\MrData::toPrice($product->PromotionProduct()['saleprice'])}} </span>
                                                    </div>
                                                </div>
                                            </div>
                                       </div>
                            @endif