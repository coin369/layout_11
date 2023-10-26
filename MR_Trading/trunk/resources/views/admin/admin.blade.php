
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="{{asset_cdn('public/img/favicon.png')}}">
    <title> @yield('title','BANCKEND - ADMIN  ')	</title>

    <!-- Icons -->
    <link href="{{asset_cdn('public/admin/admin/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset_cdn('public/admin/admin/css/simple-line-icons.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}')}}">
    <!-- Main styles for this application -->
    <link href="{{asset_cdn('public/admin/admin/css/style.css')}}" rel="stylesheet">


   
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
   	
	@include("admin.main.header")


    <div class="app-body">
    	 <!-- SIDE -->
        @include("admin.main.side")

        <!-- Main content -->
       
          <main class="main"  style="margin-top: 0px">
          
         
          	@yield('content')
           
           </main>

    </div>

    

    <script type="text/javascript" src="{{asset_cdn('public/admin/bower_components/jquery/dist/jquery.js')}}"></script>
 
    <script type="text/javascript" src="{{asset_cdn('public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
   

    <script type="text/javascript"  src="{{asset_cdn('public/admin/admin/js/app.js')}}"></script>

    <script type="text/javascript" src="{{asset_cdn('public/admin/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset_cdn('public/admin/ckeditor/function.js')}}"></script>


    @include("admin.main.footer")


     <script  src='<?= asset_cdn("public/admin/admin.js")?>'>
       
    </script>
    
</body>

</html>