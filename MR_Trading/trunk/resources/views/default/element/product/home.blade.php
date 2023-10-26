
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="single-service-style1">
                            <a href="{{route('detail',['alias'=>$product['alias']] )}}" title="{{$product['name']}}">
                                    <div class="img-holder-1">
                                        <img class="lazy" src="{{asset_cdn('public/upload/product/big/'.$product['picture'])}}" title="{{$product['name']}}"  alt="{{$product['name']}}"/>

                                       
                                    </div>
                                    <div class="text-holder">
                                        <div class="inner-content">
                                            <div class="bottom">
                                                <div >
                                                    <h3 class="title">
                                                        {{$product['name']}}
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </a>
                        </div>
                    </div>