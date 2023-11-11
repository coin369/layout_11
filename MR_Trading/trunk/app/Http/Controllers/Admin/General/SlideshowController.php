<?php

namespace App\Http\Controllers\Admin\General;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AppController;
use Image;
use Validator;
use App;

use App\Models\Main as DTMain;



class SlideshowController extends AppController
{
   protected $View=[];
  
     public function add(Request $request)
    {
        $data=[];

       
        if($request->isMethod("post")){
            $validator=Validator::make($request->all(),[
                    "name"=>"required",
                    "links"=>"required",
                    "picture"=>"required|mimes:jpg,jpeg,png"
           ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else{
                $picture=$request->file("picture");
                $TNew=new App\Models\Slideshow();
                $TNew->cid_main=$request->input("cid_main");
                $TNew->name=$request->input("name");
                $TNew->links=$request->input("links");
                 $TNew->position=$request->input("position");
                $name_picture="slide_".time().".".$picture->getClientOriginalExtension();
               

                Image::make($picture)
                            //->resize(
                            // config('constants.Slideshow.Current.Width'),
                            // config('constants.Slideshow.Current.Height'))
                            ->save(public_path("/upload/slideshow/".$name_picture));

                //  Image::make($picture)->resize(
                //             config('constants.Slideshow.Small.Width'),
                //             config('constants.Slideshow.Small.Height'))
                //  ->save(public_path("/upload/slideshow/small_".$name_picture));

                // Image::make($picture)->resize(
                //      config('constants.Slideshow.Big.Width'),
                //       config('constants.Slideshow.Big.Height'))
                //       ->save(public_path("/upload/slideshow/big_".$name_picture));



                $TNew->picture=$name_picture;
                $TNew->status='1';
                $TNew->save();
                $request->session()->flash("success"," Successfull!!!");
                return redirect("/admin/slideshow/add");
            }
        }

        $this->View['cid_main']= DTMain::orderBy("id","ASC")->pluck("name",'id');
         $data['position']=App\Models\Slideshow::count();
        $this->View['data']=$data;
        return view("admin.general.slideshow.add",$this->View);
    }
    public function lists(Request $request){
        $search="";
        if($request->isMethod("get")){
            $search=$request->input("search");
        }
        $this->View['search']=$search;
        $this->View['data_list']=App\Models\Slideshow::where("name","LIKE","%$search%")->orderBy("cid_main","ASC")->paginate(100);
        return view("admin.general.slideshow.list",$this->View);

    }
    public function edit($id,Request $request){
      
            $get_data=App\Models\Slideshow::find($id);
            $data=[];
            if($request->isMethod("post")){
                $validator=Validator::make($request->all(),[
                        "name"=>"required",
                        "links"=>"required",
                        
                ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else{
                $picture=$request->file("picture");
                if($picture){
                          $name_picture="slide_".time().".".$picture->getClientOriginalExtension();
                        Image::make($picture)
                            //     ->resize(
                            // config('constants.Slideshow.Current.Width'),
                            // config('constants.Slideshow.Current.Height'))
                            ->save(public_path("/upload/slideshow/".$name_picture));


                    //  Image::make($picture)->resize(
                    //             config('constants.Slideshow.Small.Width'),
                    //             config('constants.Slideshow.Small.Height'))
                    //  ->save(public_path("/upload/slideshow/small_".$name_picture));

                    // Image::make($picture)->resize(
                    //      config('constants.Slideshow.Big.Width'),
                    //       config('constants.Slideshow.Big.Height'))
                    //       ->save(public_path("/upload/slideshow/big_".$name_picture));

                          


                        $get_data->picture=$name_picture;
                }
                $get_data->cid_main=$request->input("cid_main");
                $get_data->name=$request->input("name");
                $get_data->links=$request->input("links");
                 $get_data->position=$request->input("position");
                $get_data->status='1';

                $get_data->save();
                $request->session()->flash("success"," Successfull!!!");
                return redirect()->back();
            }
            }

            $data = $get_data->toArray();
            $this->View['cid_main']= DTMain::orderBy("id","ASC")->pluck("name",'id');
            $this->View['data']=$data;
            return view("admin.general.slideshow.edit",$this->View);
        
    }
    public function remove(Request $request)
    {
        
        if($request->isMethod("post")){
            if($id=$request->input("id")){
                $s=App\Models\Slideshow::find($id);
                @unlink(public_path("/upload/slideshow/".$s->picture) );
                $s->delete();
                echo 'destroy success';exit;
            }
        }

    }
}
