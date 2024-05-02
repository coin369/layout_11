<!DOCTYPE html>
<html lang="vi-VN">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

     @if($is_seo)
                 @seoTags()
     @else

        <title>
            79 Post Express - Tận tâm trong từng kiện hàng của bạn - Đưa niềm tin đến bạn
        </title>

        <!-- ================= Meta ================== -->
        <meta name="copyright" content="79 Post Express" />
        <meta name="author" content="79 Post Express" />
        <meta name="GENERATOR" content="79 Post Express" />
        <meta name="description" content="79 Post Express tận tâm trong từng kiện hàng của bạn, đưa niềm tin đến bạn, giao hàng nhanh, giá rẻ, chất lượng tốt">
        <meta name="keywords" content="79 Post Express, Express, giao hàng nhanh, post Express, tận tâm giao hàng, giao hàng giá rẻ, ship hàng, giao hàng giá tốt">
        <meta content="INDEX,FOLLOW" name="robots" />
        <!-- ================= Favicon ================== -->

       

        <!-- Facebook Open Graph meta tags -->

        <meta property="og:type" content="website">
        <meta property="og:site_name" content="79 Post Express">
        <meta property="og:title" content="79 Post Express">
      
        <meta property="og:description" content="">
        <meta property="og:url" content="/">
    @endif


        <?php 
          $canonical = ( strpos(url()->full(),"page" )  !== false ) ? true : false ;
            $my_page=  (int) (isset($_GET['page'] )? $_GET['page'] :0);
           
          ?>
          @if(!empty($canonical))
          <link rel="canonical" href="{{url()->current()}}" /> 
          @endif
           @if(!empty($canonical && $my_page != 0 ))
             <link rel="next" href="{{url()->current()}}?page={{$my_page+1}}" />
          @endif
           @if(!empty($canonical  && $my_page != 0 ))
            <link rel="prev" href="{{url()->current()}}?page={{$my_page-1}}" />
          @endif

      
    <link href="{{asset('/img/favicon.ico')}}" rel="shortcut icon">
    @vite(['resources/assets/css/app.scss' , 'resources/assets/js/app.js'])
   


</head>

<body>

    @include("default.main.header")
        
    <main>
      

        @yield('content')
    </main>

    @include("default.main.footer")

 

</body>



</html>