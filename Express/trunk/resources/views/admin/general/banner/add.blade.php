@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> Banner chủ </li>
                <li class="breadcrumb-item"><a href=""> Thêm mới Banner     </a>
                </li>
               
              
            </ol>


        <div class="container-fluid">
           
           {!! Form::open(['method'=>'post','files'=>true]) !!}
                
            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong> Banner     </strong>
                                        <small>Form</small>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                           
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name">Name   <span style="color:red">*</span>  </label>
 {!! Form::text('name',@$data['name'],['class'=>!empty($error['name'])? "form-control  is-invalid":"form-control ", "placeholder"=>"Input..."  ]) !!}
   
                                                    
                                                 
                                                </div>
                                            </div>
                                         
                                       
                                              <div class="col-sm-10">

                                                      
                                                        <div class="form-group">
                                                            <label for="name"> Picture   <span style="color:red">*</span>  </label>
      {!! Form::file('picture',['class'=>'load_banner form-control','accept'=>'image/*','id'=>'banner_name']) !!}
                                                        

                                                    
                                                <div class="detail_banner"></div>
                                                        </div>
                                                       

                                                    </div>
                                                    

                                <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name">Link       <span style="color:red">*</span> </label>
 {!! Form::text('links',@$data['links'],['class'=>!empty($error['name'])? "form-control  is-invalid":"form-control "  ]) !!}
                                  
                                                    
                                                 
                                                </div>
                                            </div>
                                          

                                        </div>
                                       
                                    </div>
                                </div>

               
                            </div>

                            

                             <div class="col-sm-12">
                                       
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
             document.getElementById('banner_name').addEventListener('change', handleFileSelectBanner, false);
        </script>
    @endsection