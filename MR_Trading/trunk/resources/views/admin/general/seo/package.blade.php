 <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>SEO  </strong>
                                                <small>Form</small>
                                            </div>
                                            <div class="card-body">


                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" data-toggle="tab" href="#seo_google">
                                <i class="fab fa-google"></i>
                                Google</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#seo_facebook">
                                <i class="fab fa-facebook"></i>
                              Facebook</a>
                            </li>
                             <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#seo_twitter">
                                <i class="fab fa-twitter"></i>

                                <i class="fas fa-flag-en"></i>
                              Twitter</a>
                            </li>
                           
                          </ul>

                      <!-- Tab panes -->
                          <div class="tab-content">
                            <div id="seo_google" class="container tab-pane active"><br>
                                <div class="row">

                                                    <div class="col-sm-6">

                                                        <div class="form-group">
                                                            <label for="name"> Title  </label>
        {!! Form::text("seo[seo_title]",@$seo['seo_title'],['class'=>'form-control'])!!}  
                                                            
                                                        </div>

                                                    </div>
                                                     <div class="col-sm-3">

                                                        <div class="form-group">
                                                            <label for="name"> Robot Index  </label>
        {!! Form::select("seo[robot_index]",
                [
                    ''=>"Defautl",
                    'index'=>"Index",
                    "no_index"=>"No Index",
                ],
                @$seo['robot_index'],

                ['class'=>'form-control'])!!}  
                                                            
                                                        </div>

                                                    </div> 
                                                    

                                                     <div class="col-sm-3">

                                                        <div class="form-group">
                                                            <label for="name"> Robot Follow  </label>
          {!! Form::select('seo[robot_follow]',
                [
                    ''=>"Defautl",
                    'follow'=>"Follow",
                    "no_follow"=>"No Follow",
                ],
                @$seo['robot_follow'],
                ['class'=>'form-control'])!!}    
                                                            
                                                        </div>

                                                    </div> 


                                                     <div class="col-sm-10">
                                                        <div class="form-group">
                                                            <label for="name"> Description  </label>
         {!! Form::textarea('seo[seo_description]',@$seo['seo_description'],['class'=>'form-control','rows'=>'3'])!!}  
                                                          
                                                        </div>
                                                    </div>       

                                                   <div class="col-sm-10">
                                                        <div class="form-group">
                                                            <label for="name"> Canonical Url  </label>

         {!! Form::text('seo[canonical]',@$seo['canonical'],['class'=>'form-control','rows'=>'3'])!!}  
                                                          
                                                        </div>
                                                    </div>     

                                                     <div class="col-sm-10">
                                                        <div class="form-group">
                                                            <label for="name"> Image Picture  </label>

                                            

          {!! Form::file('seo_picture',['class'=>'is_picture form-control ','accept'=>'image/*','id'=>'']) !!}
                                                        

                                                  
                                                    
                                                <div class="is_view_picture">
                        @if(!empty($seo_picture))
                        <img src="/<?=PUBLIC_URL?>upload/seo/{{$seo_picture}}" class="thumbnail" style="width:100%" /> 
                        @endif

                                                </div>
                                                          
                                                        </div>
                                                    </div>       
                                            
                                                    
                                                    

                                                </div>


                            </div>
                            <div id="seo_facebook" class="container tab-pane fade"><br>
                                 <div class="row">

                                                    <div class="col-sm-6">

                                                        <div class="form-group">
                                                            <label for="name"> Page Type  </label>
        {!! Form::select('facebook[page_type]' ,
              [
                'article'=>"article",
                'webpage'=>'webpage'
              ],
            @$facebook['page_type'],['class'=>'form-control'])!!}  
                                                            
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-6">

                                                        <div class="form-group">
                                                            <label for="name"> Page Title  </label>
        {!! Form::text('facebook[page_title]',@$facebook['page_title'],['class'=>'form-control'])!!}  
                                                            
                                                        </div>

                                                    </div>
                                    

                                             <div class="col-sm-12">

                                                        <div class="form-group">
                                                            <label for="name"> Meta Description </label>
        {!! Form::textarea('facebook[page_description]',@$facebook['page_description'],['class'=>'form-control'])!!}  
                                                            
                                                        </div>

                                              </div>
            <div class="col-sm-6">

                                                        <div class="form-group">
                                                            <label for="name"> Page Url </label>
        {!! Form::text('facebook[page_url]',@$facebook['page_url'],['class'=>'form-control'])!!}  
                                                            
                                                        </div>

                                              </div>
   

   <div class="col-sm-6">

                                                        <div class="form-group">
                                                            <label for="name"> Image Alt Property </label>
        {!! Form::text('facebook[page_alt]',@$facebook['page_alt'],['class'=>'form-control'])!!}  
                                                            
                                                        </div>

                                              </div>
   
                                                    
                                                    

                                                </div>
                            </div>

                              <div id="seo_twitter" class="container tab-pane fade"><br>
                                 <div class="row">

                                                    <div class="col-sm-7">

                                                        <div class="form-group">
                                                            <label for="name"> Twitter Card  </label>
        {!! Form::select('twitter[twitter_cart]',
              [
                'summary'=>"summary",
                'summary_large_image'=>"summary_large_image"
              ],
              @$twitter['cart'],['class'=>'form-control'])!!}  
                                                            
                                                        </div>

                                                    </div>

                                                     <div class="col-sm-7">
                                                        <div class="form-group">
                                                            <label for="name"> Twitter description  </label>
         {!! Form::textarea('twitter[twitter_description]',@$twitter['twitter_description'],['class'=>'form-control','rows'=>'3'])!!}  
                                                          
                                                        </div>
                                                    </div>       

                                                <div class="col-sm-7">
                                                        <div class="form-group">
                                                            <label for="name"> Twitter title </label>

         {!! Form::text('twitter[twitter_title]',@$twitter['twitter_title'],['class'=>'form-control','rows'=>'3'])!!}  
                                                          
                                                        </div>
                                                    </div>       
                                            
                                                    
                                                    

                                                </div>
                            </div>
                            
                          </div>


                                              
                                               
                                            </div>
                                          
                                        </div>

               
                            </div>

