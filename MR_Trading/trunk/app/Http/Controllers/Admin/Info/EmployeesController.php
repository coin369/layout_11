<?php

namespace App\Http\Controllers\Admin\Info;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AppController;
use App\Models\Employees as DTEmployees;
use App\MrData as MrData;
use App;
use Validator;
use Image;

class EmployeesController extends AppController
{   
    protected $View=[];
      public function __construct(){
       $this->View['is_side']='info';
    }
     public function add(Request $request)
    {
        $data=[];
        $data['status']=1;
        $data['is_type']=1;
        $data['position']=1;
        if($request->isMethod("post")){
            $validator=Validator::make($request->all(),[
                "name"=>"required",
                "picture"=>"required",
               
         
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else{
                $TNew=new DTEmployees();
                $TNew->name=$request->input("name");
                $TNew->alias=MrData::toAlias2($request->input("name") ) ;
                $TNew->description=$request->input("description");


                $picture=$request->file("picture");
                $name_picture=$TNew->alias."".time().".".$picture->getClientOriginalExtension();

                
                Image::make($picture)->resize(
                     config('constants.Employees.Width'),
                      config('constants.Employees.Height'))
                      ->save(public_path("/upload/employees/".$name_picture));

                
                $TNew->picture=$name_picture;

                $TNew->save();
                $request->session()->flash("success"," Thêm mới thành công ");
                return redirect()->back();
            }
        }
        $this->View['data']=$data;
        return view("admin.general.employees.add",$this->View);   
    }
    public function lists(Request $request){
        $search="";
        if($request->isMethod("get")){
            $search=$request->input("search");
        }
        $this->View['search']=$search;
        $this->View['data_list']=DTEmployees::where("name","LIKE","%$search%")->orderBy("id","DESC")->paginate(20);
        return view("admin.general.employees.list",$this->View);

    }

    public function remove(Request $request)
    {
        
        if($request->isMethod("post")){
            if($id=$request->input("id")){
                $data=DTEmployees::find($id);
                @unlink( public_path("/upload/employees/".$data->picture));
                $data->delete();
                echo 'destroy success';exit;
            }
        }

    }
    public function edit($id,Request $request)
    {

    
                $data=[];
                $TUpdate=DTEmployees::find($id);
                if($request->isMethod("post")){
                    $validator=Validator::make($request->all(),[
                        "name"=>"required",
                      
                      
                   
                    ]);
                    if($validator->fails()){
                        return redirect()->back()->withErrors($validator)->withInput();
                    }else{
                      
                        $TUpdate->name=$request->input("name");
                        $TUpdate->alias=MrData::toAlias2($request->input("name") );
                        $TUpdate->description=$request->input("description");


                        $picture=$request->file("picture");
                        if($picture){
                            $name_picture=$TUpdate->alias."".time().".".$picture->getClientOriginalExtension();
                               Image::make($picture)->resize(
                                             config('constants.Employees.Width'),
                                              config('constants.Employees.Height'))
                                              ->save(public_path("/upload/employees/".$name_picture));
                            $TUpdate->picture=$name_picture;
                        }

                    
                        $TUpdate->save();
                        $request->session()->flash("success"," Cập nhật thành công ");
                        return redirect()->back();
                    }
                
                 }
              

                $this->View['data']=$TUpdate;
         
        return view("admin.general.employees.edit",$this->View);   
        
    }
}
