@extends("admin.admin")

 @section('content')
 
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> Trang chủ </li>
                <li class="breadcrumb-item"><a href="/admin/news/lists"> Danh sách Tin Tức    </a>
                </li>
                 <li class="breadcrumb-item"> {{$data['name']}} </li>
              
            </ol>


        <div class="container-fluid">
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
           {!! Form::open(['method'=>'post','files'=>true]) !!}
          
        
            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Thông tin Tin Tức    </strong>
                                        <small>Form</small>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                           
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name">Tên  </label>
 {!! Form::text('name',@$data['name'],['class'=>!empty($error['name'])? "form-control  is-invalid":"form-control ", "placeholder"=>"Nhập..."  ]) !!}
    <span style="color:red">*</span>
   
                                                  
                                                </div>
                                            </div>
                                          
                                             <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name"> Danh mục tin tức   </label>
 {!! Form::select('cid_cate',$cid_cate,@$data['cid_cate'],['class'=>!empty($error['name'])? "form-control  is-invalid":"form-control ", "placeholder"=>"Nhập..."  ]) !!}
    <span style="color:red">*</span>
                                                    
                                                  
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
                                                  <label for="name"> Mô tả  </label>


                                                  <textarea  id='description'  name="description"  name="textarea-input" rows="9" class="form-control {{ (!empty($error['description'])) ? 'is-invalid':'' }}" >{{@$data['description']}}</textarea>
                                                   <span style="color:red">*</span>
                                                  @if(!empty($error['description']))
                                                    <div class="invalid-feedback">
                                                        {{@$error['description']}}
                                                    </div>
                                                    @endif
                                                </div>

                                            </div>

                                              <div class="col-sm-10">

                                                <div class="form-group">
                                                  <label for="name"> Nội dung </label>



            {!!Form::textarea('content',$data['content'],['id'=>'contents','class'=>'form-control'])!!}
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

                             <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>Hình ảnh   </strong>
                                                <small>Form</small>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">

                                                    <div class="col-sm-10">

                                                        <div class="form-group">
                                                            <label for="name"> Hình ảnh Tin Tức    </label>
      {!! Form::file('picture',['class'=>'load_banner form-control is-invalid','accept'=>'image/*','id'=>'banner_name']) !!}
                                                        

                                                  
                                                      <span style="color:red">*</span>
                                                <div class="detail_banner">
                                                    

                                                    <img src="{{asset_cdn('/public/upload/news/small/'.$data['picture'])}}"/>
                                                </div>
                                                        </div>
                                                       




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
                                                                <label for="name">Tứ khoá  </label>
             {!! Form::text('tag',@$data['tag'],['class'=>"form-control ",'id'=>"tag"]) !!}
              
                                                              
                                                            </div>
                                                        </div>
                                            <?php echo \SEO\Seo::form($model); ?>
                                            
                                                    @if(false)
                                                    <div class="col-sm-10">

                                                        <div class="form-group">
                                                            <label for="name"> Title  </label>
                                                            <input type="text" class="form-control"  name="seo_title" id="name" placeholder="Nhập.. " value="{{@$data['seo_title']}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name"> Description  </label>
                                                            <input type="text" class="form-control"  name="seo_description" id="name" placeholder="Nhập.. " value="{{@$data['seo_description']}}">
                                                        </div>
                                                        
                                                       

                                                    </div>
                                                    
                                                    @endif
                                                    

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
           // document.getElementById('picture_name').addEventListener('change', handleFileSelect, false);
           // document.getElementById('banner_name').addEventListener('change', handleFileSelectBanner, false);
            initEditor('contents');
           // document.getElementById('galaxy_name').addEventListener('change', handleFileSelectMulti, false);
        </script>
         <script type="text/javascript" src="{{asset_cdn('public/admin/bower_components/jquery-tag/src/jquery.tagsinput.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{asset_cdn('public/admin/bower_components/jquery-tag/src/jquery.tagsinput.css')}}">
        <script type="text/javascript">
            $("#tag").tagsInput({width:'auto'});
        </script>
    @endsection