@extends("default.default")
@section('content')
     
        <section class="breadcrumb-area style2" style="background-image: url({{asset('/assets/images/slde11-l.jpg')}})">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="breadcrumb-menu">
                              

                                   <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                       

                         <ul class="list-inline" itemscope itemtype="https://schema.org/BreadcrumbList">
                          
                                    <li itemprop="itemListElement" itemscope
                  itemtype="https://schema.org/ListItem">

                                     
                                        
                              <a itemscope itemtype="https://schema.org/WebPage"
                   itemprop="item" itemid="{{route('home')}}"
                   href="{{route('home')}}" title="{{$TGeneral['sitename']}}">

                                         <span itemprop="name">Trang chủ</span>

                                    </a>
                                     <meta itemprop="position" content="1" />
                                    <i class="ml-2 fa fa-arrow-right "></i>
                                </li>







                                  <li itemprop="itemListElement" itemscope
                              itemtype="https://schema.org/ListItem">
                            <span itemprop="name">Kênh youtube - Hình ảnh thi công thực tế</span>
                            <meta itemprop="position" content="2" />
                          </li>
                         
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Start blog area-->
        <section id="blog-area" class="blog-large-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="blog-post">
                            <h1 class="tith1">
                                Thư viện Video
                            </h1>
                            <div class="row">
                                <!--Start single service style1-->
                                <div class="col-xl-12 col-lg-12 lib_video">
                                    <ul class="instagram-items clearfix">

                                     @foreach($Youtube as $you)
                                        <li>
                                             <a href="https://www.youtube.com/watch?v=YDVD_zv4yIQ" target="_blank" title="{{$you['name']}}" rel="external"> 
                                                    <div class="img-holder">
                                                             <div href="{{$you['youtube']}}" class="video-btn" data-toggle="modal" data-src="{{$you['youtube']}}" data-target="#myModal">
                                                               <img src="{{$you['keyword']}}" alt="{{$you['name']}} capture youtube">
                                                                <div class="overlay-style-two"></div>
                                                                <div class="overlay">
                                                                    <div class="box">
                                                                        <div class="link-icon">
                                                                             
                                                                          <span class="fa fa-toggle-right fa-2x"></span>
                                                                          
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                   
                                                        
                                                             <h4>

                                                        {{$you['name']}}
                                                        
                                                    </h4>
                                                </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                               
                                {!!$Youtube->links("default.element.paginate")!!}
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                    </div>


                </div>
            </div>
        </section>
        <!--End blog area-->


@endsection