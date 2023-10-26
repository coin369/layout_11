



						<div class="col-xl-3 col-lg-4 col-md-7 col-sm-12">
                        <div class="sidebar-wrapper">
                            <!--Start single sidebar-->
                            <div class="single-sidebar categories-box">
                                <div class="sidebar-title">
                                    <div class="title">Danh mục</div>
                                </div>
                                <ul class="categories clearfix">
									@foreach($TCate  as $cp)
                                        <li class="" idx=""> 

                                            <a href="{{route('parent',['alias'=>$cp['alias']])}}" title="{{$cp['name']}}" class="active_t"> <i class="fa fa-caret-right"></i> {{$cp['name']}} </a> 
                                        </li>
                                        @endforeach
                                </ul>
                            </div>
                            <!--End single sidebar-->
                            <div class="single-sidebar">
                                <div class="sidebar-title">
                                    <div class="title">Đất Cảnh Group</div>
                                </div>
                                <ul class="recent-post">
									@foreach($TService as $ss)
	                               		

									 <li>
                                        <div class="img-holder">
                                            <a href='{{route("service.detail",["alias"=>$ss["alias"]])}}'  title="{{$ss['name']}}">
                                                <img src="/public/upload/service/{{$ss['picture']}}" alt="{{$ss['name']}}">
                                            </a>
                                        </div>
                                        <div class="title-holder">
                                            <span>{{date('d/m/Y',strtotime($ss['created_at']) ) }}</span>
                                            <h5 class="post-title">
											<a href='{{route("service.detail",["alias"=>$ss["alias"]])}}' class="text-primary1" title="  {{$ss['description']}}">  
												{{$ss['name']}}</a>
                                            </h5>
                                        </div>
                                    </li>
                           	    	@endforeach
                                </ul>
                            </div>
                            <!--Start single-sidebar-->
                            <div class="single-sidebar tag-box clerfix">
                                <div class="sidebar-title">
                                    <div class="title">Từ khóa</div>
                                </div>
                                <ul class="popular-tag clearfix">
                                    	@foreach($DTTag as $tag)
                                        @if(!empty($tag['name']))
                                        <li><a href="/tim-kiem/{{$tag['alias']}}" title="{{$tag['name']}}">{{$tag['name']}}</a></li>
                                        @endif
                                        @endforeach
                                </ul>
                            </div>
                            <!--End single-sidebar-->
                        </div>
                    </div>