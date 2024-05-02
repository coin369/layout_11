@extends("admin.admin")
 @section('content')

             <ol class="breadcrumb">
                <li class="breadcrumb-item"> 
                        <a href="/" target="_black">Home </a>
                 </li>

                 <li class="breadcrumb-item"> 
                        <a href="/admin/index/index" target="_black"> General  </a>
                 </li>
                <li class="breadcrumb-item"><a href=""> {{$page['name']}}    </a>
                </li>
               
              
            </ol>


        <div class="container-fluid">
               
           {!! Form::open(['method'=>'post','files'=>true]) !!}
                  
            <div class="col-sm-12">

                                <div class="card">
                                    <div class="card-header">
                                        <strong> INFORMATION  </strong>
                                        <small>お知らせ </small>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                           
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label for="name"> Name    <span style="color:red">*</span>
                                      </label>
 {!! Form::text('key_1',@$data_1['key'],['class'=> "form-control ", "placeholder"=>"Input..." ,"requried" ]) !!}
                 

                                                  
                                                </div>
                                            </div>
     
                                     <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label for="name"> English    <span style="color:red">*</span>
                                      </label>
 {!! Form::text('key_en_1',@$data_1['key_en'],['class'=> "form-control ", "placeholder"=>"Input..." ,"requried" ]) !!}
                 

                                                  
                                                </div>
                                            </div>                                       
                                            <div class="col-sm-10">

                                                <div class="form-group">
                                                  <label for="name"> Content </label>


                                                

                                                   {!!Form::textarea('content_1',@$data_1['value'],['class'=>'form-control','id'=>'contents_1'])!!}

                                                
                                                </div>

                                            </div>

                                        </div>
                                       
                                    </div>
                                </div>



                                <div class="card">
                                    <div class="card-header">
                                        <strong> MESSAGE  </strong>
                                        <small>メッセージ </small>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                           
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label for="name"> Name    <span style="color:red">*</span>
                                      </label>
 {!! Form::text('key_2',@$data_2['key'],['class'=> "form-control ", "placeholder"=>"Input..." ,"requried" ]) !!}
                 

                                                  
                                                </div>
                                            </div>
     
                                     <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label for="name"> English    <span style="color:red">*</span>
                                      </label>
 {!! Form::text('key_en_2',@$data_2['key_en'],['class'=> "form-control ", "placeholder"=>"Input..." ,"requried" ]) !!}
                 

                                                  
                                                </div>
                                            </div>     
                                         <div class="col-sm-10">

                                                      
                                                        <div class="form-group">
                                                            <label for="name"> Picture   </label>
      {!! Form::file('picture_2',['class'=>'load_banner form-control','accept'=>'image/*','id'=>'banner_name']) !!}
                                                        

                                                  
                                                      <span style="color:red">*</span>
                                                <div class="detail_banner"></div>
                                                        </div>
                                                       

                                                    </div>
                                                    

                                        

                                            <div class="col-sm-10">

                                                <div class="form-group">
                                                  <label for="name"> Content </label>


                                                

                                                   {!!Form::textarea('content_2',@$data_2['value'],['class'=>'form-control','id'=>'contents_2'])!!}

                                                
                                                </div>

                                            </div>

                                        </div>
                                       
                                    </div>
                                </div>


                                 <div class="card">
                                    <div class="card-header">
                                        <strong> OUR SERVICE  </strong>
                                        <small> 会社情報 </small>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                           
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label for="name"> Name    <span style="color:red">*</span>
                                      </label>
 {!! Form::text('key_3',@$data_3['key'],['class'=> "form-control ", "placeholder"=>"Input..." ,"requried" ]) !!}
                 

                                                  
                                                </div>
                                            </div>
     
                                      
                                         <div class="col-sm-10">

                                                      
                                                        <div class="form-group">
                                                            <label for="name"> Picture   </label>
      {!! Form::file('picture_3',['class'=>'load_banner form-control','accept'=>'image/*','id'=>'banner_name']) !!}
                                                        

                                                  
                                                      <span style="color:red">*</span>
                                                <div class="detail_banner">
                                                    
                                                </div>
                                                        </div>
                                                       

                                                    </div>
                                                    

                                        

                                            <div class="col-sm-10">

                                                <div class="form-group">
                                                  <label for="name"> Content </label>


                                                

                                                   {!!Form::textarea('content_3',@$data_3['value'],['class'=>'form-control','id'=>'contents_3'])!!}

                                                
                                                </div>

                                            </div>

                                        </div>


                                        <div class="row">

                                           
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label for="name"> Name    <span style="color:red">*</span>
                                      </label>
 {!! Form::text('key_4',@$data_4['key'],['class'=> "form-control ", "placeholder"=>"Input..." ,"requried" ]) !!}
                 

                                                  
                                                </div>
                                            </div>
     
                                      
                                         <div class="col-sm-10">

                                                      
                                                        <div class="form-group">
                                                            <label for="name"> Picture   </label>
      {!! Form::file('picture_4',['class'=>'load_banner form-control','accept'=>'image/*','id'=>'banner_name']) !!}
                                                        

                                                  
                                                      <span style="color:red">*</span>
                                                <div class="detail_banner">
                                                    
                                                </div>
                                                        </div>
                                                       

                                                    </div>
                                                    

                                        

                                            <div class="col-sm-10">

                                                <div class="form-group">
                                                  <label for="name"> Content </label>


                                                

                                                   {!!Form::textarea('content_4',@$data_4['value'],['class'=>'form-control','id'=>'contents_4'])!!}

                                                
                                                </div>

                                            </div>

                                        </div>


                                       
                                    </div>
                                </div>










               
                            </div>

                            
                              <?php echo \SEO\Seo::form($page); ?>
                             <div class="col-sm-12">
                                        <div class="card">
                                            
                                         
                                            <div class="card-footer">
                                               
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Save  </button>
                                              
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
           // document.getElementById('picture_name').addEventListener('change', handleFileSelect, false);
           // document.getElementById('banner_name').addEventListener('change', handleFileSelectBanner, false);
            initEditorSmall('contents_1');
            initEditorSmall('contents_2');

            initEditorSmall('contents_3');
            initEditorSmall('contents_4');
            
          //  document.getElementById('galaxy_name').addEventListener('change', handleFileSelectMulti, false);
        </script>

        
    @endsection
