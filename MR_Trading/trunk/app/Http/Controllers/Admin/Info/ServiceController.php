<?php

namespace App\Http\Controllers\Admin\Info;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AppController;
use App\Model\Service as DTService;
use App\Model\Servicecate as DTServicecate;
use App\MrData as MrData;
use App;
use Validator;
use Image;

class ServiceController extends AppController
{   
    protected $View=[];
      public function __construct(){
       $this->View['is_side']='general';
    }
     public function add(Request $request)
    {
        $data=[];
        $data['status']=$data['is_home']=1;
    
        if($request->isMethod("post")){
            $validator=Validator::make($request->all(),[
                "name"=>"required",
                "picture"=>"required",
                "description"=>"required"
               
         
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else{
                $TNew=new DTService();
                $TNew->name=$request->input("name");
                $TNew->alias=MrData::toAlias2($request->input("name") ) ;
                $TNew->description=$request->input("description");
                $TNew->content=$request->input("content");
                $TNew->cid_cate=$request->input("cid_cate");

                $TNew->status=$request->input("status");
                $TNew->is_home=$request->input("is_home");


                $picture=$request->file("picture");
                $name_picture=$TNew->alias."".time().".".$picture->getClientOriginalExtension();

                
                Image::make($picture)->resize(
                     config('constants.Service.Current.Width'),
                      config('constants.Service.Current.Height'))
                      ->save(public_path("/upload/service/".$name_picture));

                 Image::make($picture)->resize(
                     config('constants.Service.Small.Width'),
                      config('constants.Service.Small.Height'))
                      ->save(public_path("/upload/service/small/".$name_picture));

                Image::make($picture)->resize(
                     config('constants.Service.Big.Width'),
                      config('constants.Service.Big.Height'))
                      ->save(public_path("/upload/service/big/".$name_picture));

                     
                
                $TNew->picture=$name_picture;

                $TNew->save();

                if( $icon=$request->file("icon")){
                       
                    $name_icon="icon_".$TNew->id.".png";
    
                    
                    Image::make($icon)
                          ->save(public_path("/upload/service/".$name_icon));
    
                    
    
                    
                  }

                $request->session()->flash("success"," Thêm mới thành công ");
                return redirect()->back();
            }
        }
      //  $this->View['cid_cate']=DTServicecate::get()->pluck("name","id");
        $this->View['data']=$data;
        return view("admin.general.service.add",$this->View);   
    }
    public function lists(Request $request){
        $search="";
        if($request->isMethod("get")){
            $search=$request->input("search");
        }
        $this->View['search']=$search;
        $this->View['data_list']=DTService::where("name","LIKE","%$search%")->orderBy("id","DESC")->paginate(20);
        return view("admin.general.service.list",$this->View);

    }

    public function remove(Request $request)
    {
        
        if($request->isMethod("post")){
            if($id=$request->input("id")){
                $data=DTService::find($id);
                @unlink( public_path("/upload/service/".$data->picture));
                  @unlink( public_path("/upload/service/small/".$data->picture));
                    @unlink( public_path("/upload/service/big/".$data->picture));
                $data->delete();
                echo 'destroy success';exit;
            }
        }

    }
    public function edit($id,Request $request)
    {

    
                $data=[];
                $TUpdate=DTService::find($id);
                if($request->isMethod("post")){
                    $validator=Validator::make($request->all(),[
                        "name"=>"required",
                      
                        "description"=>"required"
                   
                    ]);
                    if($validator->fails()){
                        return redirect()->back()->withErrors($validator)->withInput();
                    }else{
                      
                        $TUpdate->name=$request->input("name");
                        $TUpdate->alias=MrData::toAlias2($request->input("name") );
                        $TUpdate->description=$request->input("description");

                        $TUpdate->content=$request->input("content");
                        $TUpdate->cid_cate=$request->input("cid_cate");

                        $TUpdate->status=$request->input("status");
                        $TUpdate->is_home=$request->input("is_home");

                        $picture=$request->file("picture");
                        if($picture){
                            $name_picture=$TUpdate->alias."".time().".".$picture->getClientOriginalExtension();
                               

                                Image::make($picture)->resize(
                                     config('constants.Service.Current.Width'),
                                      config('constants.Service.Current.Height'))
                                      ->save(public_path("/upload/service/".$name_picture));

                                 Image::make($picture)->resize(
                                     config('constants.Service.Small.Width'),
                                      config('constants.Service.Small.Height'))
                                      ->save(public_path("/upload/service/small/".$name_picture));

                                Image::make($picture)->resize(
                                     config('constants.Service.Big.Width'),
                                      config('constants.Service.Big.Height'))
                                      ->save(public_path("/upload/service/big/".$name_picture));
                            $TUpdate->picture=$name_picture;
                        }

                    
                        $TUpdate->save();
                        $request->session()->flash("success"," Cập nhật thành công ");
                        return redirect()->back();
                    }
                
                 }
              

                $this->View['data']=$TUpdate;
         
        return view("admin.general.service.edit",$this->View);   
        
    }
}
