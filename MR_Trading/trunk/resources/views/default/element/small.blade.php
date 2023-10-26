  
 <?php $my_promotion=$product->Promotion();  ?>
  <div class="small_product">
                                            <div class="small_product_thumb">
                                                 <a href="{{route('detail',['cate'=>$product->Cate()['alias'],'alias'=>$product['alias']])}}" title="{{$product['name']}}">
                                                        <img class='lazy' data-src="{{asset_cdn('public/upload/product/small/'.$product['picture'])}}" src="data:image/png;base64,R0lGODlhAQABAJEAAAAAAP///////wAAACH5BAEAAAIALAAAAAABAAEAAAICTAEAOw=="  title="{{$product['name']}}" alt="{{$product['name']}}">
                                                    </a>
                                            </div>
                                            <div class="small_product_content">
                                                <div class="small_product_name">
                                                    <a href="{{route('detail',['cate'=>$product->Cate()['alias'],'alias'=>$product['alias']])}}" title="{{$product['name']}}">
                                                            {{$product['name']}}    
                                                        </a>
                                                </div>
                                                <div class="small_product_price">
                                                    <span class="new_price"> 

                                                    @if( count($my_promotion) >0 )
                                                            {{App\MrData::toPrice($product->PromotionProduct()['price'])}}
                                                                              
                                                                            @else
                                                          {{App\MrData::toPrice($product['price'])}}
                                                                            @endif 
                                                    </span>
                                                </div>
                                            </div>
                                        </div>