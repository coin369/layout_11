@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> Trang chủ </li>
                <li class="breadcrumb-item"><a href="/admin/service/lists"> Danh sách Dịch vụ  </a>
                </li>
                <li class="breadcrumb-item">
                        {{$data['name']}}
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
                                        <strong>Thông tin Dịch vụ     </strong>
                                        <small>Form</small>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                           
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name">Tên    </label>
 {!! Form::text('name',@$data['name'],['class'=>"form-control ", "placeholder"=>""  ]) !!}
    <span style="color:red">*</span>
                                                    
                                                 
                                                </div>
                                            </div>
                                   

                                              <div class="col-sm-10">

                                                      
                                                        <div class="form-group">
                                                            <label for="name"> Picture   </label>
      {!! Form::file('picture',['class'=>'load_banner form-control is-invalid','accept'=>'image/*','id'=>'banner_name']) !!}
                                                        

                                                      <span style="color:red">*</span>
                                                <div class="detail_banner">
                                                    
                                                    <img class='img-thumbnail' src='/<?=PUBLIC_URL?>upload/service/small/{{$data["picture"]}}'  class="img-thumbnail" />
                                                </div>
                                                        </div>
                                                       

                                                    </div>
                                                    

                  @if(false)                       
                                                    <div class="form-group">
    <label for="name"> Icon   </label>
{!! Form::file('icon',['class'=>'load_banner form-control is-invalid','accept'=>'image/*','id'=>'icon']) !!}


<span style="color:red">*</span>
<div class="detail_banner"></div>

<img class='img-thumbnail' src='/<?=PUBLIC_URL?>upload/service/icon_{{$data["id"]}}.png'  class="img-thumbnail" />
</div>


</div>
@endif
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
                                                    <label for="name"> Mô tả     </label>
 {!! Form::textarea('description',@$data['description'],['class'=>"form-control ", "placeholder"=>"" ,'rows'=>4 ]) !!}
  
                                                    
                                                 
                                                </div>
                                            </div>
                                              <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name"> Nội dung   </label>
 {!! Form::textarea('content',@$data['content'],['class'=>"form-control ", "placeholder"=>"" ,'id'=>"content" ]) !!}
  
                                                    
                                                 
                                                </div>
                                            </div>
                                            

                               

                                        </div>
                                       
                                    </div>
                                </div>

               
                            </div>

                            

                             <div class="col-sm-12">
                                       
                                            <div class="card-footer">
                                               
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Save</button>
                                                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset </button>
                                            </div>
                                        </div>

               
                            </div>
                    {!! Form::close() !!}

             </div>
    @endsection
    @section('script_js') 
        <script type="text/javascript">
            initEditor("content");
             document.getElementById('banner_name').addEventListener('change', handleFileSelectBanner, false);
        </script>
    @endsection