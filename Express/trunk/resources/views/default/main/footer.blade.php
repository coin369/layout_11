
    <footer class="footer">
        <div class="site-footer">
            <div class="container">
                <div class="footer-inner padding-top-25 padding-bottom-10">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="footer-widget">
                                <h3><span>
                <a href="index.html">         
                  <img src="/img/logo.jpg" alt="logo Về chúng tôi">          
                </a>
                </span></h3>
                                <ul class="list-menu">
                                    @foreach($DTMain_2 as $m)
                                    <li>
                                        <p>
                                         
                                           <?php echo  strip_tags($m['content'])?>
                                        </p>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
                            <div class="footer-widget">
                                <h3><span>Giải pháp</span></h3>
                                <ul class="list-menu">

                                    <li><a href="/" title="#">Trang chủ</a></li>

                                    <li><a href="/gioi-thieu" title="#">Giới thiệu</a></li>

                                    <li><a href="/dich-vu" title="#">Dịch vụ</a></li>

                                    <li><a href="/tin-tuc" title="#">Tin tức</a></li>

                                    <li><a href="/lien-he" title="#">Liên hệ</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
                            <div class="footer-widget">
                                <h3><span>Chính sách</span></h3>
                                <ul class="list-menu">
                                    @foreach($TPage_2 as $page)
                                    <li><a href="/page/{{$page['alias']}}" title="{{$page['name']}}">
                                        {{$page['name']}}
                                    </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="footer-widget no-border">
                                <h3><span>Liên hệ</span></h3>
                                <ul class="widget-menu contact-info-page">

                                    <li><i class="fa fa-map-marker color-x" aria-hidden="true"></i> 
                                        {!!($DTMain_3[0]['content'])!!}
                                    </li>
                                    <li><i class="fa fa-phone color-x" aria-hidden="true"></i> <a href="tel:{{strip_tags($DTMain_3[1]['content'])}}">
                                         {{strip_tags($DTMain_3[1]['content'])}}
                                    </a></li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:{{strip_tags($DTMain_3[2]['content'])}}">
                                         {{strip_tags($DTMain_3[2]['content'])}}
                                    </a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright clearfix">
            <div class="container">
                <div class="inner clearfix">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <span>© Bản quyền thuộc về <b>79 Post Express</b> <span class="s480-f">

                        </div>
                    </div>
                </div>

                <div class="btn-wrapper back-to-top">
                    <a href="#top" class="btn btn-transparent"><i class="fa fa-angle-up"></i></a>
                </div>

            </div>
        </div>
    </footer>
  
    
    
    <div class="popup-sapo">
        <div class="icon">
      <a href="#" title="chat zalo">
        <img src="/img/Icon_of_Zalo.svg.webp" />
      </a>
        </div>
    </div>
    <a class="wolf-chat-plugin" href="#" target="_blank">
        <div style="margin-left: -2px; margin-right: 6px;">
            <div style="display: flex; align-items: center;">
        <img src="/img/Messenger-512.webp" alt="" style="max-width: 30px;" />
      </div>
        </div>
        <div style="color: white; display: flex; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 17px; font-style: normal; font-weight: 600; line-height: 22px; user-select: none; white-space: nowrap;">Chat</div>
    </a>