<?php

namespace App\Http\Controllers\Admin\Info;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AppController;
use App\Model\Rating as DTRating;

use App\MrData as MrData;
use App;
use Validator;
use Image;

class RatingController extends AppController
{   
    protected $View=[];
      public function __construct(){
       $this->View['is_side']='info';
    }
     public function add(Request $request)
    {
        $data=[];
        $data['status']=$data['is_home']=1;
    
        if($request->isMethod("post")){
            $validator=Validator::make($request->all(),[
                "name"=>"required",
                "picture"=>"required",
                // "job"=>"required",
                // "description"=>"required"
               
         
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else{
                $TNew=new DTRating();
                $TNew->name=$request->input("name");
                
                $TNew->description=$request->input("description");
                $TNew->job=$request->input("job");
             


                $picture=$request->file("picture");
                $name_picture=$TNew->alias."".time().".".$picture->getClientOriginalExtension();

                
                Image::make($picture)
                      ->save(public_path("/upload/rating/".$name_picture));

                $TNew->picture=$name_picture;

                $TNew->save();
                $request->session()->flash("success"," Thêm mới thành công ");
                return redirect()->back();
            }
        }
      //  $this->View['cid_cate']=DTRatingcate::get()->pluck("name","id");
        $this->View['data']=$data;
        return view("admin.general.rating.add",$this->View);   
    }
    public function lists(Request $request){
        $search="";
        if($request->isMethod("get")){
            $search=$request->input("search");
        }
        $this->View['search']=$search;
        $this->View['data_list']=DTRating::where("name","LIKE","%$search%")->orderBy("id","DESC")->paginate(20);
        return view("admin.general.rating.list",$this->View);

    }

    public function remove(Request $request)
    {
        
        if($request->isMethod("post")){
            if($id=$request->input("id")){
                $data=DTRating::find($id);
                @unlink( public_path("/upload/rating/".$data->picture));
                $data->delete();
                echo 'destroy success';exit;
            }
        }

    }
    public function edit($id,Request $request)
    {

    
                $data=[];
                $TUpdate=DTRating::find($id);
                if($request->isMethod("post")){
                    $validator=Validator::make($request->all(),[
                        "name"=>"required",
                      
                      //  "description"=>"required"
                   
                    ]);
                    if($validator->fails()){
                        return redirect()->back()->withErrors($validator)->withInput();
                    }else{
                      
                        $TUpdate->name=$request->input("name");
                     
                        $TUpdate->description=$request->input("description");

                        $TUpdate->job=$request->input("job");
                        

                        $picture=$request->file("picture");
                        if($picture){
                            $name_picture=$TUpdate->alias."".time().".".$picture->getClientOriginalExtension();
                               
                         Image::make($picture)
                                    ->save(public_path("/upload/rating/".$name_picture));

                            $TUpdate->picture=$name_picture;
                        }

                    
                        $TUpdate->save();
                        $request->session()->flash("success"," Cập nhật thành công ");
                        return redirect()->back();
                    }
                
                 }
              

                $this->View['data']=$TUpdate;
         
        return view("admin.general.rating.edit",$this->View);   
        
    }
}
