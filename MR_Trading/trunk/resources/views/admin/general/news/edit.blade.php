@extends("admin.admin")
 @section('content')

             <ol class="breadcrumb">
                <li class="breadcrumb-item"> 
                        <a href="/" target="_black">Home </a>
                 </li>

                 <li class="breadcrumb-item"> 
                        <a href="/admin/news/lists" target="_black">News </a>
                 </li>
                <li class="breadcrumb-item"><a href=""> Add a New     </a>
                </li>
               
              
            </ol>


        <div class="container-fluid">
                      
           {!! Form::open(['method'=>'post','files'=>true]) !!}
                  
            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong> News  </strong>
                                        <small>Form</small>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                           
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name"> Name    <span style="color:red">*</span>
                                      </label>
 {!! Form::text('name',@$data['name'],['class'=>!empty($error['name'])? "form-control  is-invalid":"form-control ", "placeholder"=>"Input..."  ]) !!}
                 

                                                  
                                                </div>
                                            </div>
                                          
                                             <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name"> Category    <span style="color:red">*</span>  </label>
 {!! Form::select('cid_cate',$cid_cate,@$data['cid_cate'],['class'=>!empty($error['name'])? "form-control  is-invalid":"form-control "  ]) !!}
  
                                                    
                                                  
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

                                            
                                            
                                             

                                              <div class="col-sm-10">

                                                <div class="form-group">
                                                  <label for="name"> Content </label>


                                                

                                                   {!!Form::textarea('content',@$data['content'],['class'=>'form-control','id'=>'contents'])!!}

                                                   <span style="color:red">*</span>
                                                  @if(!empty($error['contents']))
                                                    <div class="invalid-feedback">
                                                        {{@$error['contents']}}
                                                    </div>
                                                    @endif
                                                </div>

                                            </div>

                                        </div>
                                       
                                    </div>
                                </div>

               
                            </div>

                            
                            
                              <?php echo \SEO\Seo::form($model); ?>
                             <div class="col-sm-12">
                                        <div class="card">
                                            
                                          
                                            <div class="card-footer">
                                               
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Save  </button>
                                              
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
           // document.getElementById('picture_name').addEventListener('change', handleFileSelect, false);
           // document.getElementById('banner_name').addEventListener('change', handleFileSelectBanner, false);
            initEditor('contents');
          //  document.getElementById('galaxy_name').addEventListener('change', handleFileSelectMulti, false);
        </script>

         <script type="text/javascript" src="{{asset(PUBLIC_URL.'admin/bower_components/jquery-tag/src/jquery.tagsinput.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{asset(PUBLIC_URL.'admin/bower_components/jquery-tag/src/jquery.tagsinput.css')}}">
        <script type="text/javascript">
            $("#tag").tagsInput({width:'auto'});
        </script>
    @endsection