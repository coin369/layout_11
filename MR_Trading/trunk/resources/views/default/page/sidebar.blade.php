


                       <div class="top_sellers top_seller_two featured mb-40">
                                <div class="top_title">
                                    <h2> Nổi bật</h2>
                                </div>
                                <div class="small_product_active owl-carousel">
                                    <div class="small_product_item">
                                        @foreach($TProductHot->slice(0,4) as $product)
                                                @include("default.element.small")
                                        @endforeach
                                    </div>
                                    <div class="small_product_item">
                                       @foreach($TProductHot->slice(4,8) as $product)
                                                @include("default.element.small")
                                        @endforeach  
                                    </div>
                                </div>
                            </div>