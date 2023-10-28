<!DOCTYPE html>

<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
  @if($is_seo)
                 @seoTags()
  @else
    <meta name="keywords" content="群馬県太田市の企業です。高度技能を持った外国人材の支援事業を中心に">
    <meta name="description" content="群馬県太田市の企業です。高度技能を持った外国人材の支援事業を中心に、洋菓子の製造・販売や人材育成支援事業を行っています。">
    <title>群馬県太田市の企業です。高度技能を持った外国人材の支援事業を中心に、洋菓子の製造・販売や人材育成支援事業を行っています。
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="INDEX,FOLLOW" name="robots" />
    <meta name="copyright" content="Mr Trading" />
    <meta name="author" content="Mr Trading" />
    <meta name="GENERATOR" content="Mr Trading" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="product" />
    <meta property="og:image" content="../assets/img/logo1.jpg" />
    <meta property="og:url" content="/">
    <meta property="og:description" content="Mr Trading 群馬県太田市の企業です。高度技能を持った外国人材の支援事業を中心に、洋菓子の製造・販売や人材育成支援事業を行っています">
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
  
  @vite(['resources/assets/css/app.scss', 'resources/assets/js/app.js'])


</head>

<body>
    <main id="wrapper" style="">
       
        @include("default.main.header")
        

        @yield('content')

         @include("default.main.footer")

        <a id="scrollUp" href="#" style="position: fixed; z-index: 2147483647; display: none;"></a>


       
    </main>
 
   
</body>

</html>