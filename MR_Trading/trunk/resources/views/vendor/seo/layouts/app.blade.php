<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('app.name')}}</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          type="text/css"/>
    @yield('css')
    <style>
        body {
            padding-bottom: 50px !important;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset_cdn('css/dashboard.css')}}" type="text/css" rel="stylesheet">


       <link href="{{asset_cdn('public/admin/admin/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset_cdn('public/admin/admin/css/simple-line-icons.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}')}}">
    <!-- Main styles for this application -->
    <link href="{{asset_cdn('public/admin/admin/css/style.css')}}" rel="stylesheet">


</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden" style="margin-top: 0px;">
      @include("admin.main.header")


<div class="container-fluid mt-5">
    <div class="row">
        @include('seo::includes.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

                <h1 class="h3">
                    @yield('header')
                </h1>

                <div class="btn-toolbar mb-2 mb-md-0">
                    @yield('tools')
                </div>
            </div>
            @yield('content')

        </main>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

@yield('scripts')
</body>
</html>
