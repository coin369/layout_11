@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> Trang chủ </li>
                <li class="breadcrumb-item"><a href=""> Thêm mới danh mục tin tức </a>
                </li>
               
              
            </ol>


        <div class="container-fluid">
                    
           {!! Form::open(['method'=>'post','files'=>true]) !!}

                   @if(count($errors)>0)

                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(!empty(session('success')))
                    <div class="alert alert-primary">
                            <ul>
                                <li>
                                        <p>{!!session('success')!!}</p>
                                </li>   
                                   
                                </ul>
                        </div>
                    @endif
            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Thông tin Danh mục  </strong>
                                        <small>Form</small>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                           
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name">Tên  </label>
 {!! Form::text('name',@$data['name'],['class'=>"form-control "]) !!}
  
                                                        <span  class="text-danger">*</span>
                                                  
                                                  
                                                </div>
                                            </div>
                                          
                                            
                                          
                                            <div class="col-sm-10">

                                             <div class="form-group row">
                                                <div class='col-sm-3'>
                                                    <label for="name"> Trạng thái  </label>
                                                </div>
                                                <div class='col-sm-9'>
                                                    <div class="radio">
                                                            <label>
 {!! Form::radio('status','1', (($data['status']=='1')? true : false) ) !!} Hiển thị
                                                            </label>
                                                     </div>
                                                    <div class="radio">
                                                            <label>
 {!! Form::radio('status','2', (($data['status']=='2')? true : false) ) !!} Ẩn  
                                                            </label>
                                                     </div>
                                                </div>
                                                   
                                                </div>

                                            </div>

                                            <div class="col-sm-10">

                                                <div class="form-group">
                                                    <label for="name"> Danh mục   </label>
{!! Form::select("cid_parent",$cid_parent,@$data['cid_parent'],[ 'class'=> 'form-control' ])!!}
                                                </div>
                                                 @if($errors->has("cid_parent"))
                                                      <p class="text-danger">
                                                        {{$errors->first('cid_parent')}}
                                                      </p>
                                                    @else
                                                        <span  class="text-danger">*</span>
                                                    @endif

                                            </div>

                                           
                                            

                                        </div>
                                       
                                    </div>
                                </div>

               
                            </div>

                            

                             <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>SEO  </strong>
                                                <small>Form</small>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">

                                                    <div class="col-sm-10">

                                                        <div class="form-group">
                                                            <label for="name"> Title  </label>
 {!! Form::text('seo_title',@$data['seo_title'],['class'=>"form-control "]) !!}
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name"> Description  </label>
   {!! Form::textarea('seo_description',@$data['seo_description'],['class'=>"form-control "]) !!}
                                                        </div>
                                                       

                                                    </div>
                                                    
                                                    

                                                </div>
                                               
                                            </div>
                                            <div class="card-footer">
                                               
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> LƯU </button>
                                                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> LÀM LẠI </button>
                                            </div>
                                        </div>

               
                            </div>
                    {!! Form::close() !!}

             </div>
    @endsection
    @section('script_js') 
        <script type="text/javascript">
            
            initEditorSmall('content');
            
        </script>
    @endsection