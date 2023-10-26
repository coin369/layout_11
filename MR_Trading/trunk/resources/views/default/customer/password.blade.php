@extends("default.default")
@section("content")
     <div class="main-container col2-right-layout">
            <div class="main container">
                <div class="breadcrumbs">
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul>
                                        <li> <a href="/" title="{{$TGeneral['name']}}">Trang chủ</a> <span>/</span> </li>
                                        
                                             <li> <span> Thay đổi mật khẩu </span> </li>
                                     
                                    </ul>
                                </div>
                            </div>
                        </div>

                
                <div class="row">
                     <div class="col-md-3 col-sm-3 col-xs-12 box_contact">
                        @include("default.customer.sidebar")
                    </div>


                    <div class="col-md-9 col-sm-9 col-xs-12 box_contact2">

                        {!!Form::open(["method"=>"post"])!!}
                            @if(session("success"))
                                <h4 class="text text-success">{{session("success")}}</h4>
                            @endif
                            <div class="form-fields">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <h3 class="tit_info1">Nhập mật khẩu mới:</h3>
                                    </div>
                                </div>
                              
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Mật khẩu:</label>
                                    <div class="col-md-8">
                                        
                                        {!!Form::password("password",['class'=>"control cus_input"])!!}
                                        @if($errors->has("password"))
                                            <p class="text text-danger">{{$errors->first("password")}}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Nhập lại mật khẩu:</label>
                                    <div class="col-md-8">
                                        
                                        {!!Form::password("password_confirmation",['class'=>"control cus_input"])!!}
                                      
                                    </div>
                                </div>


                            <div class="form-footer text-xs-right text_submit_mobi text-center">
                                <input class="btn btn-primary btn_submitinfo" type="submit" name="submitMessage" value="Thay đổi ">
                            </div>
                        {!!Form::close()!!}
                    </div>
                  
                </div>
            </div>
        </div>
  @endsection