@extends("admin.admin")
 @section('content')
 <ol class="breadcrumb">
                <li class="breadcrumb-item"> 
                        <a href="/" target="_black">Home </a>
                 </li>
                 <li class="breadcrumb-item"> 
                        <a href="/admin/page/lists" > Page </a>
                 </li>
                <li class="breadcrumb-item"><a href="">  Edit      </a>
                </li>
               
              
            </ol>



        <div class="">
                    
           {!! Form::open(['method'=>'post','files'=>true]) !!}
               
            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong> Page    </strong>
                                        <small>Form</small>
                                    </div>
                                     <div class="card-body p-1" >
                                        <div class="row">

                                           
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="name">Page   <span style="color:red">*</span>  </label>
 {!! Form::text('name',@$data['name'],['class'=>!empty($error['name'])? "form-control  is-invalid":"form-control ", "placeholder"=>"Input..."  ]) !!}
  
                                                    
                                                   
                                                </div>
                                            </div>
                                          
                                            
                                     

                                              <div class="col-sm-12">

                                                <div class="form-group">
                                                  <label for="name"> Content    <span style="color:red">*</span> </label>


                                                  <textarea  id='contents'  name="contents"  name="textarea-input" rows="9" class="form-control {{ (!empty($error['contents'])) ? 'is-invalid':'' }}" placeholder="Content..">{{@$data['content']}}</textarea>
                                                
                                                
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
            initEditorBig("contents")
        </script>
    @endsection