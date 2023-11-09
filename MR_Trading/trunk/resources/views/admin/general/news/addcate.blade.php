@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> 
                        <a href="/" target="_black">Home </a>
                 </li>

                  <li class="breadcrumb-item"> 
                        <a href="/admin/news/listscate" target="">Categories </a>
                 </li>
                <li class="breadcrumb-item"><a href="">  Add Categories     </a>
                </li>
               
              
            </ol>


        <div class="container-fluid">
                    
           {!! Form::open(['method'=>'post','files'=>true]) !!}

                  
            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Category   </strong>
                                        <small>Form</small>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                           
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name">Name  </label>
 {!! Form::text('name',@$data['name'],['class'=>"form-control "]) !!}
  
                                                        <span  class="text-danger">*</span>
                                                  
                                                  
                                                </div>
                                            </div>
                                          
                                            
                                          
                                            <div class="col-sm-10">

                                             <div class="form-group row">
                                                <div class='col-sm-3'>
                                                    <label for="name"> Status  </label>
                                                </div>
                                                <div class='col-sm-9'>
                                                    <div class="radio">
                                                            <label>
 {!! Form::radio('status','1', (($data['status']=='1')? true : false) ) !!} Active
                                                            </label>
                                                     </div>
                                                    <div class="radio">
                                                            <label>
 {!! Form::radio('status','2', (($data['status']=='2')? true : false) ) !!} Hidden   
                                                            </label>
                                                     </div>
                                                </div>
                                                   
                                                </div>

                                            </div>

                                            
                                           
                                            

                                        </div>
                                       
                                    </div>
                                </div>

               
                            </div>

                            
                             <div class="col-sm-12">
                                        <div class="card">
                                            
                                            <div class="card-footer">
                                               
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Save </button>
                                              
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
            
            initEditorSmall('content');
            
        </script>
    @endsection