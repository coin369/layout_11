<?php

namespace App\Http\Controllers\Defaults;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;

use App\Models\Users as DTUsers;
use App\Models\Contact as DTContact;
use App\Models\Order as DTOrder;

class CustomerController extends AppController
{

	public function signup(Request $request){
		if($request->isMethod("post")){
			$validater=Validator::make($request->all(),[
					'username'=>"required|min:6|unique:ca_users",
					"password"=>"required|confirmed|min:6",
					"name"=>"required",
					"email"=>"required|email|unique:ca_users"
			],[
				"username.required"=>"Vui lòng nhập tên đăng nhập ",
				"username.min"=>" Tên đăng nhập ít nhất là 6 ký tự",
				"username.unique"=>" Tên đăng nhập của bạn đã được sử dụng",
				"password.required"=>" Vui lòng nhập mật khẩu ",
				"password.confirmed"=>"Vui lòng nhập lại mật khẩu chính xác",
				"password.min"=>"Vui lòng nhập mật khẩu ít nhất 6 ký tự",
				"name.required"=>"Vui lòng nhập họ và tên",
				"email.required"=>"Vui lòng nhập địa chỉ email",
				"email.email"=>"Vui lòng nhập đúng địa chỉ email ",
				"email.unique"=>" Địa chỉ Email của bạn đã sử dụng "
			]);
			if($validater->fails()){
				return redirect()->back()->withErrors($validater)->withInput();
			}else{
				$TNew=new DTUsers();
				$TNew->name=$request->input("name");
				$TNew->email=$request->input("email");
				$TNew->username=$request->input("username");
				$TNew->password=bcrypt($request->input("password") );
				$TNew->phone=$request->input("phone");
				$TNew->address=$request->input("address");
				$TNew->status='1';
				$TNew->role='2';
				$TNew->save();
				$request->session()->flash("success"," Bạn đã đăng ký thành công. ");

			
				if(Auth::attempt(['username'=>$request->input("username"),'password'=>$request->input("password")])){
               			 return redirect("/thong-tin-ca-nhan");
          		  }
				return redirect()->back();
			}
		}
		$this->View['TSeo']['seo_title']=" Đăng ký ";
		return view("default.customer.signup",$this->View);
	}
	public function signin(){
		$this->View['TSeo']['seo_title']=" Đăng ký ";
	}
	public function info(Request $request){
		if($request->isMethod("post")){

			$id=Auth::user()->id;
			
			$validater=Validator::make($request->all(),[
					'username'=>"required|min:6|unique:ca_users,username,{$id},id",
				
					"name"=>"required",
					"email"=>"required|email|unique:ca_users,email,{$id},id"
			],[
				"username.required"=>"Vui lòng nhập tên đăng nhập ",
				"username.min"=>" Tên đăng nhập ít nhất là 6 ký tự",
				"username.unique"=>" Tên đăng nhập của bạn đã được sử dụng",
				
				"name.required"=>"Vui lòng nhập họ và tên",
				"email.required"=>"Vui lòng nhập địa chỉ email",
				"email.email"=>"Vui lòng nhập đúng địa chỉ email ",
				"email.unique"=>" Địa chỉ Email của bạn đã sử dụng "
			]);
			if($validater->fails()){
				return redirect()->back()->withErrors($validater)->withInput();
			}else{
				$TUpdate=DTUsers::find($id);
				$TUpdate->name=$request->input("name");
				$TUpdate->email=$request->input("email");
				$TUpdate->username=$request->input("username");
			
				$TUpdate->phone=$request->input("phone");
				$TUpdate->address=$request->input("address");
				
				$TUpdate->save();
				$request->session()->flash("success"," Bạn đã cập nhật thông tin thành công. ");

			
				if(Auth::attempt(['username'=>$request->input("username"),'password'=>$request->input("password")])){
               			 return redirect("/thong-tin-ca-nhan");
          		  }
				return redirect()->back();
			}
		}


		$this->View['TSeo']['seo_title']=" Thông tin cá nhân ";
		$this->View['data']=Auth::user();
		return view("default.customer.info",$this->View);
	}
	public function order(){

		$this->View['TSeo']['seo_title']=" Lịch sử đơn hàng ";
		$this->View['data']=Auth::user();
		return view("default.customer.order",$this->View);
	}
	public function password(Request $request){

		if($request->isMethod("post")){
			$id=Auth::user()->id;
			$validater=Validator::make($request->all(),[
				
					"password"=>"required|confirmed|min:6",
					
			],[
				
				"password.required"=>" Vui lòng nhập mật khẩu ",
				"password.confirmed"=>"Vui lòng nhập lại mật khẩu chính xác",
				"password.min"=>"Vui lòng nhập mật khẩu ít nhất 6 ký tự",
				
			]);
			if($validater->fails()){
				return redirect()->back()->withErrors($validater)->withInput();
			}else{
				$TPassword=DTUsers::find($id);
			
				$TPassword->password=bcrypt($request->input("password") );
			
				$TPassword->save();
				$request->session()->flash("success"," Thay đổi mật khẩu thành công. ");

				return redirect()->back();
			}
		}

		$this->View['TSeo']['seo_title']=" Thay đổi mật khẩu ";
		return view("default.customer.password",$this->View);
	}
	public function destroy($id,Request $request){
		//dd(Auth::user());
		if(Auth::check()){
			$order=DTOrder::where("id",$id)->where('cid_user',Auth::user()->id)->first();
			if(!empty($order['id'])){
				$order->approved='4';
				$order->save();
			}
			return 'success';
		}
		return 'not access';
	}
	public function login(Request $request){
		if($request->isMethod("post")){
			$validater=Validator::make($request->all(),[
					'username'=>"required",
					"password"=>"required",
					
			],[
				"username.required"=>"Vui lòng nhập tên đăng nhập ",
				
				"password.required"=>" Vui lòng nhập mật khẩu ",
				
			]);
			if($validater->fails()){
				return redirect()->back()->withErrors($validater)->withInput();
			}else{
			
			
				if(Auth::attempt(['username'=>$request->input("username"),'password'=>$request->input("password")])){
               			 return redirect("/thong-tin-ca-nhan");
          		  }else{
	          		  	if(Auth::attempt(['email'=>$request->input("username"),'password'=>$request->input("password")])){
	               			 return redirect("/thong-tin-ca-nhan");
	          		  }else{
	          		  	$validater->errors()->add("username"," Tên đăng nhập & mật khẩu không chính xác.");
	          		  	return redirect()->back()->withErrors($validater)->withInput();
	          		  }
          		  }
				
			}
		}
		$this->View['TSeo']['seo_title']=" Đăng nhập ";
		return view("default.customer.login",$this->View);
	}
	public function orderdetail(){

	}
	
}