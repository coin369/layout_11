@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> Trang chủ </li>
                <li class="breadcrumb-item"><a href="/admin/keyword/lists"> Danh sách       </a>
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
                                        <strong>Thông tin   </strong>
                                        <small>Form</small>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                           
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name"> Từ khoá   </label>
 {!! Form::text('name',@$data['name'],['class'=>!empty($error['name'])? "form-control  is-invalid":"form-control ", "placeholder"=>"Nhập..."  ]) !!}
    <span style="color:red">*</span>
                                                    
                                                 
                                                </div>
                                            </div>
                                          
                                                
                                          
                                           
                                         


                                        </div>
                                       
                                    </div>
                                </div>

               
                            </div>

                            

                              <?php echo \SEO\Seo::form($model); ?>

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
  