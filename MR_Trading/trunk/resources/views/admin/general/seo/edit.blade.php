@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> Trang chủ </li>
                <li class="breadcrumb-item"><a href="/admin/seo/lists"> Danh sách đường dẫn SEO.      </a>
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
                                                    <label for="name"> Đường dẫn     </label>
 {!! Form::text('links',@$data['links'],['class'=>!empty($error['name'])? "form-control  is-invalid":"form-control ", "placeholder"=>"Nhập..."  ]) !!}
    <span style="color:red">*</span>
                                                    
                                                 
                                                </div>
                                            </div>
                                          
                                                
                                          
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name"> Title   </label>
 {!! Form::text('title',@$data['title'],['class'=>!empty($error['title'])? "form-control  is-invalid":"form-control ", "placeholder"=>"Không vượt quá 65 ký tự ", "maxlength"=>"65"  ]) !!}
    <span style="color:red">*</span>
                                                    
                                                 
                                                </div>
                                            </div>
                                          
                                                
                                          

                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name"> Description   </label>
 {!! Form::textarea('description',@$data['description'],['class'=>!empty($error['name'])? "form-control  is-invalid":"form-control ", "placeholder"=>"Nhập..."  ]) !!}
    <span style="color:red">*</span>
                                                    
                                                 
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