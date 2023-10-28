<?php

namespace App\Http\Controllers\Admin\General;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AppController;
use Validator;
use App;
use App\Models\General as DTGeneral;
use Image;

use DB;
use File;
use App\Models\Service as DTService;

use App\Models\News as DTNews;
use App\Models\Product as DTProduct;
use App\Models\Tag as DTTag;
class IndexController extends AppController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $View=[];
 
    public function index(Request $request)
    {
         


   /*   $this->aa();
      exit;*/

        if($request->isMethod("post")){
            $validator=Validator::make($request->all(),[
                    "name"=>"required",
                    "sitename"=>"required",
                    "email"=>"required|email",
                    "phone"=>"required",
                    "address"=>"required",
                    "description"=>"required"
             ]);
            if($validator->fails()){

                return redirect()->back()->withErrors($validator)->withInput();

            }else{
                $logo=$request->file("logo");
                if($logo){
               //   $img=Image::make($logo)->resize(100,67); 
                  $img->save(public_path("/upload/banner/logo.png"));

                

                   
                }
                $logo=$request->file("logo2");
                if($logo){
               //   $img=Image::make($logo)->resize(100,67); 
                  $img->save(public_path("/upload/banner/logo2.png"));


                   
                }
              

             
                $TNew=DTGeneral::findOrNew(1);
                $TNew->name=$request->input('name');
                $TNew->sitename=$request->input('sitename');
                $TNew->email=$request->input('email');
                $TNew->phone=$request->input('phone');
                $TNew->address=$request->input('address');

                $TNew->email1=$request->input('email1');
                $TNew->phone1=$request->input('phone1');
                $TNew->address1=$request->input('address1');


                $TNew->description=$request->input('description');
                $TNew->social=json_encode([
                        'facebook_social'=>$request->input('facebook_social'),
                        'youtube_social'=>$request->input('youtube_social'),
                        'google_social'=>$request->input('google_social'),
                        'skype'=>$request->input('skype'),
                        'nick_facebook'=>$request->input('nick_facebook',""),
                ]);    

               
               // var_dump(route('home'));exit;
                 if ($TNew->save()) {
                       // \SEO\Seo::save($TNew, "/", [
                       //     'title' => $TNew->name,
                       //     'images' => [
                       //         //asset("/public/upload/banner/favicon.png")
                       //     ]
                       // ]);
                      }
               
                $request->session()->flash("success","Cập nhật thông tin thành công. ");
                return redirect()->back();
            }
        } 
        $TData=DTGeneral::find(1);
        $this->View['model']=$TData;

        $TData=$TData->toArray();
         $this->View['data']=[];
        if(!empty($TData)){
           $this->View['data']= array_merge($TData,array_merge( (array)json_decode($TData['social']),(array) json_decode($TData['seo'])  ) );

          // var_dump($this->View['data']);exit;
        }

       
       
        return view("admin.general.index.index",$this->View);
    }

   

}
