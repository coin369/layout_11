@extends("admin.admin")
 @section('content')

             <ol class="breadcrumb">
                <li class="breadcrumb-item"> 
                        <a href="/" target="_black">Home </a>
                 </li>

                 <li class="breadcrumb-item"> 
                        <a href="/admin/index/index" target="_black"> Main </a>
                 </li>
               
              
            </ol>


        <div class="">
               
           {!! Form::open(['method'=>'post','files'=>true]) !!}
                  
            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong> Main  </strong>
                                        <small>Form</small>
                                    </div>
                                    <div class="card-body p-1" >
                                        <div class="row">

                                           
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name"> Name    <span style="color:red">*</span>
                                      </label>
 {!! Form::text('name',@$page['name'],['class'=>!empty($error['name'])? "form-control  is-invalid":"form-control ", "placeholder"=>"Input..."  ]) !!}
                 

                                                  
                                                </div>
                                            </div>
                                          
                                           
                                            
                                            
                                             

                                              <div class="col-sm-10">

                                                <div class="form-group">
                                                  <label for="name"> Content  <span style="color:red">*</span> </label>


                                                

                                                   {!!Form::textarea('content',@$page['content'],['class'=>'form-control','id'=>'contents'])!!}

                                                  
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

                            
                              <?php //echo \SEO\Seo::form($page); ?>
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
        <script type="text/javascript" src="http://vangdecor.local/build/assets/app-0390a907.js"></script>
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
            initEditorBig('contents');
          //  document.getElementById('galaxy_name').addEventListener('change', handleFileSelectMulti, false);
        </script>

        
    @endsection
