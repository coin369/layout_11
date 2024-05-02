@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> 
                        <a href="/" target="_black">Home </a>
                 </li>
                <li class="breadcrumb-item"><a href="/admin/slideshow/lists">  Slideshow     </a>
                </li>

                 <li class="breadcrumb-item"> {{$data['name']}} </li>
            </ol>


        <div class="container-fluid">
                  
           {!! Form::open(['method'=>'post','files'=>true]) !!}
                    @if(!empty($success))
                    <div class="col-sm-12 col-md-12">
                            <div class="card card-inverse card-primary text-center">
                                <div class="card-block">
                                    <blockquote class="card-blockquote">
                                        <p>Successfull!!!. </p>
                                       
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
                                                    <label for="name">Name  <span style="color:red">*</span> </label>
 {!! Form::text('name',@$data['name'],['class'=>"form-control ", "placeholder"=>"Input..."  ]) !!}
   
                                                  
                                                </div>
                                            </div>
                                          
                                            
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name">Links  <span style="color:red">*</span>
                                              </label>
 {!! Form::text('links',@$data['links'],['class'=>"form-control ", "placeholder"=>"Input..."  ]) !!}
          
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
                                                            <label for="name"> Picture <span style="color:red">*</span>  </label>
      {!! Form::file('picture',['class'=>'load_banner form-control ','accept'=>'image/*','id'=>'banner_name']) !!}
                                                        

                                                 
                                                      
                                                <div class="detail_banner" style="max-width: 400px;">
                                                    
                                                        <img class='img-thumbnail' src='/<?=PUBLIC_URL?>upload/slideshow/{{$data["picture"]}}' />

                                                </div>
                                                        </div>
                                                       

                                                    </div>
                                                    



                                        </div>
                                       
                                    </div>
                                </div>

               
                            </div>

                            

                             <div class="col-sm-12">
                                       
                                            <div class="card-footer">
                                               
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Save</button>
                                               
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
             document.getElementById('banner_name').addEventListener('change', handleFileSelectBanner, false);
        </script>
        <style>
            img.thumb{
                max-width: 400px;
            }
        </style>
    @endsection