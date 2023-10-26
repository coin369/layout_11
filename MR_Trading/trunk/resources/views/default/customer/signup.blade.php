@extends("default.default")
@section("content")
     <div class="main-container col2-right-layout">
            <div class="main container">
                <div class="breadcrumbs">
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul>
                                        <li> <a href="/" title="{{$TGeneral['name']}}">Trang chủ</a> <span>/</span> </li>
                                        
                                             <li> <span>Đăng ký </span> </li>
                                     
                                    </ul>
                                </div>
                            </div>
                        </div>

                
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 box_contact">
                        <div class="single-fta">
                            
                            @include("default.customer.social")
                        </div>
                    </div>


                    <div class="col-md-9 col-sm-9 col-xs-12 box_contact2">

                        {!!Form::open(["method"=>"post","url"=>"/dang-ky"])!!}
                            @if(session("success"))
                                <h4 class="text text-success">{{session("success")}}</h4>
                            @endif
                            <div class="form-fields">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <h3 class="tit_info1">Đăng ký tài khoản:</h3>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Tên đăng nhập:</label>
                                    <div class="col-md-8">
                                        
                                        {!!Form::text("username",null,['class'=>"control cus_input","placeholder"=>"username ( bắt buộc )"])!!}
                                        @if($errors->has("username"))
                                            <p class="text text-danger">{{$errors->first("username")}}</p>
                                        @endif
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


                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Họ và tên:</label>
                                    <div class="col-md-8">
                                        
                                        {!!Form::text("name",null,['class'=>"control cus_input","placeholder"=>"Nguyễn Văn A ( bắt buộc )"])!!}
                                        @if($errors->has("name"))
                                            <p class="text text-danger">{{$errors->first("name")}}</p>
                                        @endif
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Email của bạn</label>
                                    <div class="col-md-8">
                                     
                                        {!!Form::email("email",null,['class'=>"control cus_input","placeholder"=>"nguyenvana@email.com ( bắt buộc )"])!!}
                                         @if($errors->has("email"))
                                            <p class="text text-danger">{{$errors->first("email")}}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Số điện thoại:</label>
                                    <div class="col-md-8">
                                       

                                        {!!Form::number("phone",null,['class'=>"control cus_input","placeholder"=>"09123456789 "])!!}
                                         @if($errors->has("phone"))
                                            <p class="text text-danger">{{$errors->first("phone")}}</p>
                                        @endif
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Địa chỉ </label>
                                    <div class="col-md-8">
                                        
                                         {!!Form::text("address",null,['class'=>"control cus_input","placeholder"=>"nguyenvana@email.com"])!!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-footer text-xs-right text_submit_mobi text-center">
                                <input class="btn btn-primary btn_submitinfo" type="submit" name="submitMessage" value="Đăng ký">
                            </div>
                        {!!Form::close()!!}
                    </div>
                  
                </div>
            </div>
        </div>
  @endsection