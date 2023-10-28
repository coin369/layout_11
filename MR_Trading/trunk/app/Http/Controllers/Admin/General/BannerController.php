<?php

namespace App\Http\Controllers\Admin\General;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AppController;
use App\Models\Banner as DTBanner;
use App;
use Validator;
use Image;

class BannerController extends AppController
{   
    protected $View=[];
   
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
                "links"=>"required"
            ],[
                "name.required"=>"Vui lòng nhập tên",
                'picture.required'=>"Vui lòng nhập hình banner",
                "links.required"=>" Vui lòng nhập đường dẫn "
            ]);
            if($validator->fails()){
                return redirect("/admin/banner/add")->withErrors($validator)->withInput();
            }else{
                $TNew=new DTBanner();
                $TNew->name=$request->input("name");
                $TNew->links=$request->input("links");
                $TNew->position=$request->input("position");


                $picture=$request->file("picture");
                $name_picture="banner_".time().".".$picture->getClientOriginalExtension();

            

                Image::make($picture)
                            ->save(public_path("/upload/banner/big_".$name_picture));

                 Image::make($picture)->resize(
                            config('constants.Banner.Small.Width'),
                            config('constants.Banner.Small.Height'))
                 ->save(public_path("/upload/banner/small_".$name_picture));


                $TNew->picture=$name_picture;

                $TNew->is_type=$request->input("is_type");
                $TNew->status=$request->input("status");
                $TNew->save();
                $request->session()->flash("success"," Thêm mới banner thành công ");
                return redirect("/admin/banner/add");
            }
        }
        $this->View['data']=$data;
        return view("admin.general.banner.add",$this->View);   
    }
    public function lists(Request $request){
        $search="";
        if($request->isMethod("get")){
            $search=$request->input("search");
        }
        $this->View['search']=$search;
        $this->View['data_list']=DTBanner::where("name","LIKE","%$search%")->orderBy("is_type","ASC")->paginate(20);
        return view("admin.general.banner.list",$this->View);

    }

    public function remove(Request $request)
    {
        
        if($request->isMethod("post")){
            if($id=$request->input("id")){
                $data=DTBanner::find($id);
                @unlink( public_path("/upload/banner/".$data->picture));
                $data->delete();
                echo 'destroy success';exit;
            }
        }

    }
    public function edit($id,Request $request)
    {

    
                $data=[];
                $TUpdate=DTBanner::find($id);
                if($request->isMethod("post")){
                    $validator=Validator::make($request->all(),[
                        "name"=>"required",
                      
                        "links"=>"required"
                    ],[
                        "name.required"=>"Vui lòng nhập tên",
                        
                        "links.required"=>" Vui lòng nhập đường dẫn "
                    ]);
                    if($validator->fails()){
                        return redirect("/admin/banner/edit/".$id)->withErrors($validator)->withInput();
                    }else{
                      
                        $TUpdate->name=$request->input("name");
                        $TUpdate->links=$request->input("links");
                        $TUpdate->position=$request->input("position",1);


                        $picture=$request->file("picture");
                        if($picture){
                            $name_picture="banner_".time().".".$picture->getClientOriginalExtension();


                           /* if(in_array($request->input('is_type'),['5','6','7'])){
                                Image::make($picture)->resize(242,114)->save(public_path("/upload/banner/".$name_picture));
                            }else{
                               if(in_array($request->input('is_type'),['1','2'])){
                                    Image::make($picture)->resize(560,166)->save(public_path("/upload/banner/".$name_picture));
                                }else{
                                    Image::make($picture)->resize(560,344)->save(public_path("/upload/banner/".$name_picture));
                                 
                                }
                            }
                            resize(354,150)*/
                          

                                 Image::make($picture)
                                    ->save(public_path("/upload/banner/big_".$name_picture));

                 Image::make($picture)->resize(
                            config('constants.Banner.Small.Width'),
                            config('constants.Banner.Small.Height'))
                 ->save(public_path("/upload/banner/small_".$name_picture));

                            $TUpdate->picture=$name_picture;
                        }

                        $TUpdate->is_type=$request->input("is_type");
                        $TUpdate->status=$request->input("status");
                        $TUpdate->save();
                        $request->session()->flash("success"," Cập nhật banner thành công ");
                        return redirect("/admin/banner/edit/".$id);
                    }
                
                 }
                $data['status']=$TUpdate['status'];
               $data['links']=$TUpdate['links'];
                $data['name']=$TUpdate['name'];
                 $data['position']=$TUpdate['position'];
                  $data['is_type']=$TUpdate['is_type'];
                   $data['links']=$TUpdate['links'];
                   $data['id']=$TUpdate['id'];
                   $data['picture']=$TUpdate['picture'];

                $this->View['data']=$data;
         
        return view("admin.general.banner.edit",$this->View);   
        
    }
}
