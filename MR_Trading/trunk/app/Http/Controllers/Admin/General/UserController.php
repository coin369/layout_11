<?php

namespace App\Http\Controllers\Admin\General;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AppController;
use Validator;
use DB;
use App;
use Excel;
use Auth;

class UserController extends AppController
{
    protected $View=[];
  
     public function add(Request $request)
    {
        $data=[];
        if($request->isMethod("post")){
            $validater=Validator::make($request->all(),[
                "name"=>"required|max:225",
                "email"=>"required|email|max:225|unique:ca_users",
                "phone"=>"required",
                "username"=>"required|max:225|unique:ca_users",
                "password"=>"required|confirmed|min:6",
               
            ],[
                "name.required"=>"Vui lòng nhập tên.",
                "name.max"=>"Vượt quá ký tự giới hạn",
                "email.required"=>" Vui lòng nhập Email",
                "email.email"=>"Vui lòng nhập đúng định dạng Email",
                "email.unique"=>"Email đã tồn tại",
                "phone.required"=>"Vui lòng số điện thoại",
                "username.required"=>"Vui lòng nhập tên đăng nhập",
                "username.unique"=>"Tên đăng nhập đã tồn tại ",
                "password.required"=>"Vui lòng nhập mật khẩu",
                "password.min"=>"Mật khẩu không nhỏ hơn 6 ký tự",
            
                "password.confirmed"=>"Nhập lại mật khẩu không chính xác"
            ]);
            if($validater->fails()){
                return redirect("/admin/customer/add")->withErrors($validater)->withInput();
            }else{

                $TNew=new App\Models\User();
                $TNew->name=$request->input("name");
                $TNew->email=$request->input("email");
                $TNew->username=$request->input("username");
                $TNew->phone=$request->input("phone");
                $TNew->address=$request->input("address");
                $TNew->username=$request->input("username");
                $TNew->password=bcrypt($request->input("password"));
               
                $TNew->save();
              
                $request->session()->flash("success","Thêm mới người dùng thành công.");
                return redirect("/admin/customer/add");
            }
        }

        $this->View['data']=$data;
        return view("admin.general.user.add",$this->View);
    }

    public function logout(){
        Auth::logout();
        return redirect("/");
    }
    public function lists(Request $request){
        $search=[];
        $sql=" id > 0";
        $url="";
        if($is_search=$request->input("is_search")){
            $url= "?is_search=1";
            $search=$request->all();
            if(!empty($search['name'])){
                $sql= $sql. " AND name LIKE '%{$search['name']}%'";
                $url= $url."&name=".$search['name'];
            }
            if(!empty($search['phone'])){
                $sql= $sql. " AND phone LIKE '%{$search['phone']}%'";
                $url= $url."&phone=".$search['phone'];
            }
            if(!empty($search['email'])){
                $sql= $sql. " AND email LIKE '%{$search['email']}%'";
                $url= $url."&email=".$search['email'];
            }
            if(!empty($search['username'])){
                $sql= $sql. " AND username LIKE '%{$search['username']}%'";
                $url= $url."&username=".$search['username'];
            }
        }
        $this->View['url']=$url;
       
        $this->View['data_list']=App\Models\User::whereRaw($sql)->orderBy('id')->paginate(20);
        $this->View['search']=$search;
        return view("admin.general.user.lists",$this->View);
    }
    public function edit($id,Request $request){
        if($id){
            $TUPdated=App\Models\User::find($id);
            if(!empty($TUPdated)){
                    $data=[];
                    $get_request=[
                            "name"=>"required|max:225",
                            "email"=>"required|email|max:225|unique:ca_users,email,{$id},id",
                            "phone"=>"required",
                            "username"=>"required|max:225|unique:ca_users,username,{$id},id",
                            
                        
                        ];
                    $message_request=[
                            "name.required"=>"Vui lòng nhập tên.",
                            "name.max"=>"Vượt quá ký tự giới hạn",
                            "email.required"=>" Vui lòng nhập Email",
                            "email.email"=>"Vui lòng nhập đúng định dạng Email",
                            "email.unique"=>"Email đã tồn tại",
                            "phone.required"=>"Vui lòng số điện thoại",
                            "username.required"=>"Vui lòng nhập tên đăng nhập",
                            "username.unique"=>"Tên đăng nhập đã tồn tại ",
                            
                        
                            "password.confirmed"=>"Nhập lại mật khẩu không chính xác"
                        ];
                        if($password=$request->input("password")){
                            $get_request['password']="required|confirmed|min:6";
                            $message_request['password.required']="Vui lòng nhập mật khẩu";
                            $message_request['password.min']="Mật khẩu không nhỏ hơn 6 ký tự";
                        }
                    if($request->isMethod("post")){
                        $validater=Validator::make($request->all(),$get_request,$message_request);

                        if($validater->fails()){
                            return redirect()->back()->withErrors($validater)->withInput();
                        }else{

                         
                            $TUPdated->name=$request->input("name");
                            $TUPdated->email=$request->input("email");
                            $TUPdated->username=$request->input("username");
                            $TUPdated->phone=$request->input("phone");
                            $TUPdated->address=$request->input("address");
                            $TUPdated->username=$request->input("username");
                            if(!empty($password)){
                            $TUPdated->password=bcrypt($request->input("password"));
                            }
                            $TUPdated->save();
                         
                         
                            $request->session()->flash("success","Cập nhật thành công.");
                            return redirect()->back();
                        }
                    }
                   
                    
                    $data['id']=$TUPdated['id'];
                    $data['name']=$TUPdated['name'];
                    $data['email']=$TUPdated['email'];
                    $data['phone']=$TUPdated['phone'];
                    $data['address']=$TUPdated['address'];
                    $data['username']=$TUPdated['username'];
                 
                    $data['id']=$TUPdated['id'];
                    

                    $this->View['data']=$data;
                    return view("admin.general.user.edit",$this->View);
                }
        }
    }
    public function remove(Request $request)
    {
        
        if($request->isMethod("post")){
            if($id=$request->input("id")){
                $User = App\Models\User::find($id);
                if(!empty($User)){
                 
                  
                   $User->delete();
                }
                echo 'destroy success';exit;
            }
        }

    }
}
