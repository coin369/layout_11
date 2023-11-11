@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> Home </li>
                <li class="breadcrumb-item"><a href="/admin/customer/lists"> 
                User   </a>
                </li>
               
                <li class="breadcrumb-item"><a href=""> {{$data['name']}}     </a>
                </li>
               
            </ol>


        <div class="container-fluid">
                    

           {!! Form::open(['method'=>'post','files'=>true]) !!}
                   
            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong> Information    </strong>
                                        <small>Form</small>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                           
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name"> Name  </label>
 {!! Form::text('name',@$data['name'],['class'=>"form-control ", "placeholder"=>""  ]) !!}
    <span style="color:red">*</span>
                                                    
                                                   
                                                </div>
                                            </div>
                                          
                                            
                                           <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name">Email </label>
 {!! Form::text('email',@$data['email'],['class'=>"form-control ", "placeholder"=>""  ]) !!}
    <span style="color:red">*</span>
                                                    
                                                   
                                                </div>
                                            </div>

                                             <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name"> Phone   </label>
 {!! Form::text('phone',@$data['phone'],['class'=>"form-control ", "placeholder"=>""  ]) !!}
    <span style="color:red">*</span>
                                                    
                                                   
                                                </div>
                                            </div>


                                          

                                             


                                        </div>
                                       
                                    </div>
                                </div>

               
                            </div>

                            

                             <div class="col-sm-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <strong> Username    </strong>
                                        <small>Form</small>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name">Username </label>
 {!! Form::text('username',@$data['username'],['class'=>"form-control ", "placeholder"=>""  ]) !!}
    
                                                    
                                                   
                                                </div>
                                            </div>

                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name"> Password </label>
 {!! Form::password('password',['class'=>"form-control ", "placeholder"=>""  ]) !!}
    
                                                    
                                                   
                                                </div>
                                            </div>
                                             <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name"> Confirm  </label>
 {!! Form::password('password_confirmation',['class'=>"form-control ", "placeholder"=>""  ]) !!}
    
                                                    
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                            <div class="card-footer">
                                               
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Save</button>
                                               
                                            </div>
                                        </div>
                                    </div>
               
                            </div>
                    {!! Form::close() !!}

             </div>
    @endsection
    @section('script_js') 
     <script type="module"> 
            @if(count($errors)>0)
                
                        @foreach($errors->all() as $error)
                            window.toastr.error("{{$error}}");
                        @endforeach
                    
            @endif
            @if(!empty(session('success')))
                window.toastr.success("{{session('success')}}");
            @endif
            </script>
        <script type="text/javascript">
             document.getElementById('banner_name').addEventListener('change', handleFileSelectBanner, false);
        </script>
    @endsection