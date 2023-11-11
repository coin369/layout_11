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
              
                $request->session()->flash("success","Successfully");
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
                   
                        if($password=$request->input("password")){
                            $get_request['password']="required|confirmed|min:6";
                           
                        }
                    if($request->isMethod("post")){
                        $validater=Validator::make($request->all(),$get_request);

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
                         
                         
                            $request->session()->flash("success","Successfully");
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
