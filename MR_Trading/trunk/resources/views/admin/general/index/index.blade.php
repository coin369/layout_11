@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> Trang chủ </li>
                <li class="breadcrumb-item"><a href="">Thông tin chung </a>
                </li>
               
              
            </ol>


        <div class="container-fluid">
                    
           {!!Form::open(['method'=>'post','files'=>true])!!}
                   
                    @if(!empty(session('success')))
                    <div class="alert alert-primary">
                            <ul>
                                <li>
                                        <p>{!!session('success')!!}</p>
                                </li>   
                                   
                                </ul>
                        </div>
                    @endif
            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Thông tin chung </strong>
                                        <small>Form</small>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            
                                           
                                            <div class="col-sm-10">

                                                <div class="form-group">
                                                    <label for="name"> Name  </label>
         {!! Form::text('name',@$data['name'],['class'=>'form-control'])!!}
                                                   @if($errors->has("name"))
                                                      <p class="text-danger">
                                                        {{$errors->first('name')}}
                                                      </p>
                                                    @else
                                                        <span  class="text-danger">*</span>
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="col-sm-10">

                                                <div class="form-group">
                                                    <label for="name"> Description </label>
        {!! Form::textarea('description',@$data['description'],['class'=>'form-control'])!!}
                                              
                                                  @if($errors->has("description"))
                                                      <p class="text-danger">
                                                        {{$errors->first('description')}}
                                                      </p>
                                                    @else
                                                        <span  class="text-danger">*</span>
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
                                                <strong>Social Network  </strong>
                                                <small>Form</small>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">

                                                    <div class="col-sm-10">

                                                        <div class="form-group">
                                                            <label for="name"> Facebook  </label>

        {!! Form::text('facebook_social',@$data['facebook_social'],['class'=>'form-control'])!!}                                                    
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name"> Youtube  </label>
        {!! Form::text('youtube_social',@$data['youtube_social'],['class'=>'form-control'])!!}     
                                                          
                                                        </div>
                                                         <div class="form-group">
                                                            <label for="name"> Google  </label>
        {!! Form::text('google_social',@$data['google_social'],['class'=>'form-control'])!!}     
                                                          
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                            <label for="name"> Skype  </label>
        {!! Form::text('skype',@$data['skype'],['class'=>'form-control'])!!}   
                                                           
                                                        </div>
                                                       

                                                    </div>
                                                    
                                                    

                                                </div>
                                               
                                            </div>
                                        </div>

               
                            </div>
                            
                            
                            
                             <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                               
                                            </div>
                                            <div class="card-body">
                                              
                                               
                                            </div>
                                            <div class="card-footer">
                                                <input type='hidden' name='_token' value='{{ csrf_token()}}' />
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> LƯU </button>
                                                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> LÀM LẠI </button>
                                            </div>
                                        </div>

               
                            </div>
                   {!!Form::close()!!}

             </div>
    @endsection

    