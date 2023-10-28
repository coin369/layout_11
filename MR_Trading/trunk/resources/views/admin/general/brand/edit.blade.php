@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> Trang  chủ </li>
                <li class="breadcrumb-item"><a href="/admin/brand/lists">  Danh sách  chất liệu Thiết kế      </a>
                </li>
               
              <li class="breadcrumb-item"><a href="/admin/brand/lists">  {{$data['name']}}     </a>
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
           {!! Form::open(['method'=>'post','files'=>true,'url'=>'/admin/brand/edit?id='.$data['id']]) !!}
                
            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Thông tin chất liệu Thiết kế        </strong>
                                        <small>Form</small>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                           
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name">Tên    </label>
 {!! Form::text('name',@$data['name'],['class'=>!empty($error['name'])? "form-control  is-invalid":"form-control ", "placeholder"=>"Nhập..."  ]) !!}
    <span style="color:red">*</span>
                                                    
                                                 
                                                </div>
                                            </div>
                                          
                                           

                                          
                                              <div class="col-sm-10">

                                                      
                                                        <div class="form-group">
                                                            <label for="name"> Picture   </label>
      {!! Form::file('picture',['class'=>'load_Brand form-control is-invalid','accept'=>'image/*','id'=>'Brand_name']) !!}
                                                        

                                                      <span style="color:red">*</span>
                                                <div class="detail_Brand">
                                                    
                                                    <img class='img-thumbnail' src='/<?=PUBLIC_URL?>upload/brand/{{$data["picture"]}}'/>
                                                </div>
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
             document.getElementById('Brand_name').addEventListener('change', handleFileSelectBrand, false);
        </script>
    @endsection