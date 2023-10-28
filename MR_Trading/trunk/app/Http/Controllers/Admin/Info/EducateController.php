<?php

namespace App\Http\Controllers\Admin\Info;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AppController;
use App\Models\Educate as DTEducate;
use App\MrData as MrData;
use App;
use Validator;
use Image;

class EducateController extends AppController
{   
    protected $View=[];
      public function __construct(){
       $this->View['is_side']='info';
    }
     public function add(Request $request)
    {
        $data=[];
        $data['status']=1;
        $data['is_home']=1;
        $data['position']=1;
        if($request->isMethod("post")){
            $validator=Validator::make($request->all(),[
                "name"=>"required",
                "picture"=>"required",
               
         
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else{
                $TNew=new DTEducate();
                $TNew->name=$request->input("name");
                $TNew->alias=MrData::toAlias2($request->input("name") ) ;
                $TNew->description=$request->input("description");
                $TNew->content=$request->input("content");
                $TNew->is_home=$request->input("is_home");
                $TNew->status=$request->input("status");

                $picture=$request->file("picture");
                $name_picture=$TNew->alias."".time().".".$picture->getClientOriginalExtension();

                
                  Image::make($picture)
                      ->save(public_path("/upload/educate/".$name_picture));

                Image::make($picture)->resize(
                     config('constants.Educate.Big.Width'),
                      config('constants.Educate.Big.Height'))
                      ->save(public_path("/upload/educate/big_".$name_picture));

                   
                Image::make($picture)->resize(
                     config('constants.Educate.Small.Width'),
                      config('constants.Educate.Small.Height'))
                      ->save(public_path("/upload/educate/small_".$name_picture));      
                
                $TNew->picture=$name_picture;

                $TNew->save();
                $request->session()->flash("success"," Thêm mới thành công ");
                return redirect()->back();
            }
        }
        $this->View['data']=$data;
        return view("admin.general.educate.add",$this->View);   
    }
    public function lists(Request $request){
        $search="";
        if($request->isMethod("get")){
            $search=$request->input("search");
        }
        $this->View['search']=$search;
        $this->View['data_list']=DTEducate::where("name","LIKE","%$search%")->orderBy("id","DESC")->paginate(20);
        return view("admin.general.educate.list",$this->View);

    }

    public function remove(Request $request)
    {
        
        if($request->isMethod("post")){
            if($id=$request->input("id")){
                $data=DTEducate::find($id);
                @unlink( public_path("/upload/educate/big_".$data->picture));
                 @unlink( public_path("/upload/educate/small_".$data->picture));
                $data->delete();
                echo 'destroy success';exit;
            }
        }

    }
    public function edit($id,Request $request)
    {

    
                $data=[];
                $TUpdate=DTEducate::find($id);
                if($request->isMethod("post")){
                    $validator=Validator::make($request->all(),[
                        "name"=>"required",
                      
                      
                   
                    ]);
                    if($validator->fails()){
                        return redirect()->back()->withErrors($validator)->withInput();
                    }else{
                       $TUpdate->name=$request->input("name");
                        $TUpdate->alias=MrData::toAlias2($request->input("name") ) ;
                        $TUpdate->description=$request->input("description");
                        $TUpdate->content=$request->input("content");
                        $TUpdate->is_home=$request->input("is_home");
                        $TUpdate->status=$request->input("status");



                        $picture=$request->file("picture");
                        if($picture){
                            $name_picture=$TUpdate->alias."".time().".".$picture->getClientOriginalExtension();
                            

                              Image::make($picture)
                                  ->save(public_path("/upload/educate/".$name_picture));

                            Image::make($picture)->resize(
                                 config('constants.Educate.Big.Width'),
                                  config('constants.Educate.Big.Height'))
                                  ->save(public_path("/upload/educate/big_".$name_picture));

                               
                            Image::make($picture)->resize(
                                 config('constants.Educate.Small.Width'),
                                  config('constants.Educate.Small.Height'))
                                  ->save(public_path("/upload/educate/small_".$name_picture));    
                            $TUpdate->picture=$name_picture;
                        }

                    
                        $TUpdate->save();
                        $request->session()->flash("success"," Cập nhật thành công ");
                        return redirect()->back();
                    }
                
                 }
              

                $this->View['data']=$TUpdate;
         
        return view("admin.general.educate.edit",$this->View);   
        
    }
}
