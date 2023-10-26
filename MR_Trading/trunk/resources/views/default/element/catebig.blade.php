
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mb-5">
                        <div class="">
                            <div class="img-holder-1">
                               <a href="{{route('cate',['parent'=>$my_cate['alias'] ,'alias'=>$cate['alias']] )}}" title="{{$cate['name']}}">
                                <img class="lazy" src="data:image/png;base64,R0lGODlhAQABAJEAAAAAAP///////wAAACH5BAEAAAIALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset_cdn('/upload/cate/big/'.$cate['picture'])}}"   alt="{{$cate['name']}}" title="{{$cate['name']}}"
                                width="570" 
                                height="423" 
                               
                                />
                            </a>

                               
                            </div>
                       
                            <div class="text-holder " >
                                <div class="inner-content-cate inner-content ">
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>
                                                <a href="{{route('cate',['parent'=>$my_cate['alias'] ,'alias'=>$cate['alias']] )}}" title="{{$cate['name']}}">
                                                {{$cate['name']}}
                                            </a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>