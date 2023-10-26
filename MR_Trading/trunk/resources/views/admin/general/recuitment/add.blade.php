@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> Trang chủ </li>
                <li class="breadcrumb-item"><a href=""> Thêm mới Tuyển dụng    </a>
                </li>
               
              
            </ol>


        <div class="container-fluid">
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>
                                    {{$error}}
                            </li>
                        @endforeach
                    </ul>
                    </div> 
            @endif
            @if(!empty(session('success')))
                <div class='alert alert-primary'>
                    {{session('success')}}
                </div>
            @endif
           {!! Form::open(['method'=>'post','files'=>true]) !!}
                
            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Thông tin Tuyển dụng     </strong>
                                        <small>Form</small>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                           
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name">Tên    </label>
 {!! Form::text('name',@$data['name'],['class'=>"form-control ", "placeholder"=>"Nhập..."  ]) !!}
    <span style="color:red">*</span>
                                                    
                                                 
                                                </div>
                                            </div>
                                   
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name"> Số lượng tuyển   </label>
 {!! Form::number('quality',@$data['quality'],['class'=>"form-control ", "placeholder"=>""  ]) !!}
  
                                                    
                                                 
                                                </div>
                                            </div>
                                       <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name"> Vùng miền  </label>
 {!! Form::text('area',@$data['area'],['class'=>"form-control ", "placeholder"=>""  ]) !!}
  
                                                    
                                                 
                                                </div>
                                            </div>

                                     <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name"> Tiền lương  </label>
 {!! Form::text('salary',@$data['salary'],['class'=>"form-control ", "placeholder"=>""  ]) !!}
  
                                                    
                                                 
                                                </div>
                                            </div>

                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name"> Giới hạn </label>
 {!! Form::text('limited',@$data['limited'],['class'=>"form-control ", "placeholder"=>""  ]) !!}
  
                                                    
                                                 
                                                </div>
                                            </div>

  <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name"> Mô tả  </label>
 {!! Form::textarea('description',@$data['description'],['class'=>"form-control ", "placeholder"=>""  ]) !!}
  
                                                    
                                                 
                                                </div>
                                            </div>



  <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name"> Mô tả  </label>
 {!! Form::textarea('content',@$data['content'],['class'=>"form-control ", "placeholder"=>"",'id'=>'content'  ]) !!}
                                                    
                                                 
                                                </div>
                                            </div>







                                        </div>
                                       
                                    </div>
                                </div>

               
                            </div>

                            

                             <div class="col-sm-12">
                                       
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
            initEditor("content");
            // document.getElementById('banner_name').addEventListener('change', handleFileSelectBanner, false);
        </script>
    @endsection