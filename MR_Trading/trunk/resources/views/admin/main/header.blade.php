 <?php $is_side= (empty($is_side))  ? 'seo': $is_side?>
 <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">☰</button>
        <a style="background-image:url({{asset_cdn('/upload/banner/logo.png')}});background-size:auto 93%" class="navbar-brand" href="/" target="_black"></a>
        <button class="navbar-toggler sidebar-minimizer d-md-down-none" type="button">☰</button>
       
        <ul class="nav navbar-nav d-md-down-none">
            <li class="snav-item px-1">
                <a class="btn btn-sm {{$is_side=='product'?'btn-success':'btn-primary'}}" href="/admin/product/lists">
                        <i class="fa fa-product-hunt"></i>
                    Quản lý Sản phẩm   </a>
            </li>
           
              <li class="nav-item px-2">
                <a class="btn btn-sm {{$is_side=='news'?'btn-success':'btn-primary'}}" href="/admin/news/lists">
                  <i class="fa fa-newspaper-o" aria-hidden="true"></i>

                Quản lý tin tức  </a>
            </li>
            @if(false)

            <li class="snav-item px-1">

<a class="btn btn-sm {{$is_side=='order'?'btn-success':'btn-primary'}}" href="/admin/order/index"> 
         <i class='fa fa-cart-plus'></i>
Đơn hàng   </a>
</li>
           
             <li class="snav-item px-1">
                <a class="btn btn-sm {{$is_side=='promotion'?'btn-success':'btn-primary'}}" href="/admin/promotion/lists?option=1"> 
                    <i class='fa fa-gift'></i>
                Khuyến mãi   </a>
            </li>
          

         
            @endif

                <li class="snav-item px-1">
                <a class="btn btn-sm {{$is_side=='filter'?'btn-success':'btn-primary'}}" href="/admin/type/lists"> 
                         <i class='fa fa-filter'></i>
                Bộ lọc  </a>
            </li>
 
              <li class="snav-item px-1">
                <a class="btn btn-sm {{$is_side=='info'?'btn-success':'btn-primary'}}" href="/admin/cooperate/index"> 
                         <i class='fa fa-info'></i>
                Thông tin công ty  </a>
            </li>
            <li class="nav-item px-2">
                <a class="btn btn-sm {{$is_side=='general'?'btn-success':'btn-primary'}}" href="/admin/index/index">
                    <i class='fa fa-info'></i>
                Quản lý thông tin website  </a>
            </li>
          
            
            <li class="nav-item px-2">
                <a class="btn btn-sm {{$is_side=='seo'?'btn-success':'btn-primary'}}" href="/seo/dashboard">
                    <i class='fa fa-seo'></i>
                Quản lý SEO  </a>
            </li>
          
          
            
        </ul>
        <ul class="nav navbar-nav ml-auto">
            
            <li class="nav-item ">
                <a class="nav-link nav-link" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">
                   
                    <span class="d-md-down-none">{{@Auth::user()['name']}}</span> |
                </a>
                
            </li>

             <li class="nav-item ">
                <a class="nav-link  nav-link" href="/logout" >
                  
                    <span class="d-md-down-none"> Thoát </span>
                </a>
                
            </li>
        </ul>
     

    </header>