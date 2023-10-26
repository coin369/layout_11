@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> Trang chủ </li>
                <li class="breadcrumb-item"><a href="/admin/slideshow/lists"> Danh sách  Slideshow     </a>
                </li>
                
                 <li class="breadcrumb-item"> {{$data['name']}} </li>
            </ol>


        <div class="container-fluid">
                     @if(count($errors)>0)
                        <div class='alert alert-danger'>
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
                    @if(!empty($success))
                    <div class="col-sm-12 col-md-12">
                            <div class="card card-inverse card-primary text-center">
                                <div class="card-block">
                                    <blockquote class="card-blockquote">
                                        <p>cập nhật thông tin thành công. </p>
                                       
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    @endif
            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>{{$data['name']}}    </strong>
                                        <small>Form</small>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                           
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name">Tên  </label>
 {!! Form::text('name',@$data['name'],['class'=>"form-control ", "placeholder"=>"Nhập..."  ]) !!}
    <span style="color:red">*</span>
                                                  
                                                </div>
                                            </div>
                                          
                                            
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name">Links   </label>
 {!! Form::text('links',@$data['links'],['class'=>"form-control ", "placeholder"=>"Nhập..."  ]) !!}
    <span style="color:red">*</span>
                                                   
                                                </div>
                                            </div>
                                             <div class="col-sm-10">

                                                <div class="form-group">
                                                    <label for="name"> Vị trí  </label>
{!! Form::number("position",@$data['position'],[ 'class'=> 'form-control','placeholder'=>'' ])!!}
                                                </div>

                                            </div>

                                              <div class="col-sm-10">

                                                      
                                                        <div class="form-group">
                                                            <label for="name"> Picture   </label>
      {!! Form::file('picture',['class'=>'load_banner form-control is-invalid','accept'=>'image/*','id'=>'banner_name']) !!}
                                                        

                                                 
                                                      <span style="color:red">*</span>
                                                <div class="detail_banner">
                                                    
                                                        <img class='img-thumbnail' src='/public/upload/slideshow/{{$data["picture"]}}' />

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
             document.getElementById('banner_name').addEventListener('change', handleFileSelectBanner, false);
        </script>
    @endsection