<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->

    <title>LOGIN  </title>

    <!-- Icons -->
    <link href="{{asset(PUBLIC_URL.'admin/admin/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset(PUBLIC_URL.'admin/admin/css/simple-line-icons.css')}}" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="{{asset(PUBLIC_URL.'admin/admin/css/style.css')}}" rel="stylesheet">

</head>

<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group mb-0">
                      <div class="card card-inverse card-primary py-5 x-d-md-down-none" style="width:100%">
                        <div class="card-block text-center">
                            <div>
                    <div class="card p-4">
                          @if(count($errors)>0)
                            <div class='alert alert-danger'>
                                    <ul>
                                    @foreach($errors->all() as $error)
                                        <li>
                                            {{$error}}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {!! Form::open(['method'=>'post'])!!}
                        <div class="card-block">
                          
                            <p class="text-muted">  </p>
                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-user"></i>
                                </span>
                                <input type="text" class="form-control" name='username' placeholder="Username">
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-addon"><i class="icon-lock"></i>
                                </span>
                                <input type="password" name='password' class="form-control" placeholder="Password">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary px-4"> Login </button>
                                </div>
                                <div class="col-6 text-right">
                                  
                                </div>
                            </div>
                        </div>
                        {!!Form::close()!!}
                    </div>
                  
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap and necessary plugins -->
    <script src="<?=PUBLIC_URL?>admin/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?=PUBLIC_URL?>admin/bower_components/tether/dist/js/tether.min.js"></script>
    <script src="<?=PUBLIC_URL?>admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>
