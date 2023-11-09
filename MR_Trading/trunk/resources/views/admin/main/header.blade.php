 <?php $is_side= (empty($is_side))  ? 'seo': $is_side?>
 <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">☰</button>
        <a style="background-image:url({{asset('/upload/banner/logo1.jpg')}});background-size:auto 93%" class="navbar-brand" href="/" target="_black"></a>
        <button class="navbar-toggler sidebar-minimizer d-md-down-none" type="button">☰</button>
       
        <ul class="nav navbar-nav d-md-down-none">
                
 
              
            <li class="nav-item px-2">
                <a class="btn btn-sm {{$is_side=='general'?'btn-success':'btn-primary'}}" href="/admin/index/index">
                    <i class='fa fa-info'></i>
                Information    </a>
            </li>
          
            
            <li class="nav-item px-2">
                <a class="btn btn-sm {{$is_side=='seo'?'btn-success':'btn-primary'}}" href="/seo/dashboard">
                   <i class="fa fa-cog" aria-hidden="true"></i>
                 SEO  </a>
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