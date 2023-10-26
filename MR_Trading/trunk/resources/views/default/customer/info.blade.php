@extends("default.default")
@section("content")
     <div class="main-container col2-right-layout">
            <div class="main container">
                <div class="breadcrumbs">
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul>
                                        <li> <a href="/" title="{{$TGeneral['name']}}">Trang chủ</a> <span>/</span> </li>
                                        
                                             <li> <span> Thông tin cá nhân </span> </li>
                                     
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
                                        <h3 class="tit_info1">Thông tin tài khoản :</h3>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Tên đăng nhập:</label>
                                    <div class="col-md-8">
                                        
                                        {!!Form::text("username",@$data['username'],['class'=>"control cus_input","placeholder"=>"username ( bắt buộc )"])!!}
                                        @if($errors->has("username"))
                                            <p class="text text-danger">{{$errors->first("username")}}</p>
                                        @endif
                                    </div>
                                </div>
                               

                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Họ và tên:</label>
                                    <div class="col-md-8">
                                        
                                        {!!Form::text("name",@$data['name'],['class'=>"control cus_input","placeholder"=>"Nguyễn Văn A ( bắt buộc )"])!!}
                                        @if($errors->has("name"))
                                            <p class="text text-danger">{{$errors->first("name")}}</p>
                                        @endif
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Email của bạn</label>
                                    <div class="col-md-8">
                                     
                                        {!!Form::email("email",@$data['email'],['class'=>"control cus_input","placeholder"=>"nguyenvana@email.com ( bắt buộc )"])!!}
                                         @if($errors->has("email"))
                                            <p class="text text-danger">{{$errors->first("email")}}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Số điện thoại:</label>
                                    <div class="col-md-8">
                                       

                                        {!!Form::number("phone",@$data['phone'],['class'=>"control cus_input","placeholder"=>"09123456789 "])!!}
                                         @if($errors->has("phone"))
                                            <p class="text text-danger">{{$errors->first("phone")}}</p>
                                        @endif
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Địa chỉ </label>
                                    <div class="col-md-8">
                                        
                                         {!!Form::text("address",@$data['address'],['class'=>"control cus_input","placeholder"=>"nguyenvana@email.com"])!!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-footer text-xs-right text_submit_mobi text-center">
                                <input class="btn btn-primary btn_submitinfo" type="submit" name="submitMessage" value="Chỉnh sửa thông tin">
                            </div>
                        {!!Form::close()!!}
                    </div>
                  
                </div>
            </div>
        </div>
  @endsection