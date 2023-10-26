          <?php $my_promotion=$product->Promotion();  ?>

                                           <div class="col-lg-3 col-md-3 col-sm-6">
                                            <div class="single_product categorie s_product_three">
                                                    <div class="product_thumb">
                                                        <a href="{{route('detail',['cate'=>$product->Cate()['alias'],'alias'=>$product['alias']])}}" title="{{$product['name']}}">
                                                            <img class='lazy' data-src="{{asset_cdn('public/upload/product/big/'.$product['picture'])}}" src="data:image/png;base64,R0lGODlhAQABAJEAAAAAAP///////wAAACH5BAEAAAIALAAAAAABAAEAAAICTAEAOw=="  alt="{{$product['name']}}" title="{{$product['name']}}">
                                                        </a>
                                                        
                                                      @if( count($my_promotion) >0 )
                                                                <div class="product_flag_sale">
                                                                    <span>SALE</span>
                                                                </div>
                                                                                  
                                                        @else
                                                            @if($product['is_new']=='1')
                                                                <div class="product_flag_new">
                                                                    <span>MỚI</span>
                                                                </div>
                                                            @endif
                                                        @endif
                                                           
                                                      @if($percent=App\MrData::Percent($product->PromotionProduct()['price'],$product->PromotionProduct()['saleprice']))
                                                            <div class="product_discount">
                                                                <span>-{{$percent}}%</span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="product_content p_content_three">
                                                        <div class="small_product_name">
                                                            <a href="{{route('detail',['cate'=>$product->Cate()['alias'],'alias'=>$product['alias']])}}" title="{{$product['name']}}">
                                                                {{$product['name']}}    
                                                            </a>
                                                        </div>
                                                        <div class="small_product_price s_price_three">
                                                            <span class="new_price">
                                                                
                                                                  @if( count($my_promotion) >0 )
                                                                {{App\MrData::toPrice($product->PromotionProduct()['price'])}}
                                                                                  
                                                                                @else
                                                              {{App\MrData::toPrice($product['price'])}}
                                                                                @endif
                                                            </span>
                                                            <span class="old_price">  @if( count($my_promotion) >0 )
                                                                {{App\MrData::toPrice($product->PromotionProduct()['saleprice'])}}
                                                                                  
                                                                                @else
                                                                    {{App\MrData::toPrice($product['saleprice'])}}
                                                                                @endif</span>
                                                        </div>
                                                    </div>
                                                     <div class="small_product_price footer_product">
                                                         @if( count($my_promotion) >0 )

                                                            @if($percent=App\MrData::Percent($product->PromotionProduct()['price'],$product->PromotionProduct()['saleprice']))
                                                                <div class="my_product_discount">
                                                                    <span>-{{$percent}}%</span>
                                                                </div>
                                                            @endif
                                                        @else
                                                          
                                                             @if($percent=App\MrData::Percent($product['price'],$product['saleprice']))
                                                                <div class="my_product_discount">
                                                                    <span>-{{$percent}}%</span>
                                                                </div>
                                                            @endif
                                                        @endif

                                                        <div class="my_product_detail">
                                                                  <a href="{{route('detail',['cate'=>$product->Cate()['alias'],'alias'=>$product['alias']])}}" title="{{$product['name']}}">
                                                                    Xem chi tiết
                                                                 </a>
                                                        </div>
                                                    </div>
                            </div>
                        </div>
                                        