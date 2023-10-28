@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> Banner chủ </li>
                <li class="breadcrumb-item"><a href="/admin/banner/lists"> Danh sách  Banner     </a>
                </li>
               
                <li class="breadcrumb-item"><a href=""> {{$data['name']}}    </a>
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
                                        <strong>Thông tin Banner     </strong>
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
                                            
                                            @if(false)
                                                
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


                                                 <div class="form-group row">
                                                <div class='col-sm-3'>
                                                    <label for="name"> Nhóm    </label>
                                                </div>
                                                <div class='col-sm-9'>
                                                    <div class="radio">
                                                            <label>
 {!! Form::radio('is_type','1', (($data['is_type']=='1')? true : false) ) !!} Nhóm  ban dầu trang chủ 
                                                            </label>
                                                     </div>
                                                    <div class="radio">
                                                            <label>
 {!! Form::radio('is_type','2', (($data['is_type']=='2')? true : false) ) !!} NHóm thứ 2 trang chủ 
                                                            </label>
                                                     </div>
                                                      <div class="radio">
                                                            <label>
 {!! Form::radio('is_type','3', (($data['is_type']=='3')? true : false) ) !!} Nhớm thứ 3 trang chủ 
                                                            </label>
                                                     </div>
                                                     <div class="radio">
                                                            <label>
 {!! Form::radio('is_type','4', (($data['is_type']=='4')? true : false) ) !!} Bên cạnh slideshow 
                                                            </label>
                                                     </div>

                                                       <div class="radio">
                                                            <label>
 {!! Form::radio('is_type','5', (($data['is_type']=='5')? true : false) ) !!} Nuóc hoa Nam 
                                                            </label>
                                                     </div>

                                                      <div class="radio">
                                                            <label>
 {!! Form::radio('is_type','6', (($data['is_type']=='6')? true : false) ) !!}  Nuóc hoa Nữ  
                                                            </label>
                                                     </div>


                                                      <div class="radio">
                                                            <label>
 {!! Form::radio('is_type','7', (($data['is_type']=='7')? true : false) ) !!} Tinh dầu 
                                                            </label>
                                                     </div>

                                                     
                                                </div>
                                                   
                                                </div>

                                            </div>
                                        @endif
                                         <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name"> Vị trí  </label>
 {!! Form::text('position',@$data['position'],['class'=> "form-control "  ]) !!}
    <span style="color:red">*</span>
                                                    
                                                 
                                                </div>
                                            </div>
                                          
                                              <div class="col-sm-10">

                                                      
                                                        <div class="form-group">
                                                            <label for="name"> Picture   </label>
      {!! Form::file('picture',['class'=>'load_banner form-control is-invalid','accept'=>'image/*','id'=>'banner_name']) !!}
                                                        

                                                      <span style="color:red">*</span>
                                                <div class="detail_banner">
                                                    
                                                    <img src="/<?=PUBLIC_URL?>upload/banner/small_{{$data['picture']}}"/>
                                                </div>
                                                        </div>
                                                       

                                                    </div>
                                                    

                                <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name">Đường dẫn   </label>
 {!! Form::text('links',@$data['links'],['class'=>!empty($error['name'])? "form-control  is-invalid":"form-control "  ]) !!}
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
             document.getElementById('banner_name').addEventListener('change', handleFileSelectBanner, false);
        </script>
    @endsection