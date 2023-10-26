<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App;
use Validator;
use Image;
use Cache;

use App\Model\Seo as DTSeo;

class AppController extends Controller
{   
    protected $View=[];
     public function __construct(Request $request){

       
     	$this->View['is_side']='general';
        if($request->isMethod("post")){
            Cache::flush();
        }
    }

     public function addSeo($link,$request){

          $name_picture="";
            if($seo_picture=$request->file("seo_picture")){
                 $name_picture="seo_vn_".date( "his" ).".png";
                  $img=Image::make($seo_picture)->encode('webp',70);
                  $img->save(public_path("/upload/seo/".$name_picture));

            }

            $value_seo=$request->input("seo");
            $value_facebook=$request->input("facebook");
            $value_twitter=$request->input("twitter");


            $seo = DTSeo::where(["links"=>$link])->first();

            if(empty($seo)){
                $seo=new DTSeo();
            }
            $seo->links=$link;
            if(!empty($name_picture)){
                $seo->picture=$name_picture;
            }
            
            $seo->meta_title=$value_seo['seo_title'];
            $seo->meta_description=strip_tags($value_seo['seo_description']);
            $seo->seo=json_encode($value_seo);
            $seo->facebook=json_encode($value_facebook);
            $seo->google=json_encode($value_seo);
            $seo->twitter=json_encode($value_twitter);
           

                
            
            $seo->save();

            return false;



    }
    public function getSeo($link){
       
            $seo = DTSeo::where(["links"=>$link])->first();

            if(!empty($seo)){
               $this->View['facebook'] = json_decode( $seo['facebook'],true);
               $this->View['seo'] = json_decode( $seo['google'],true);
               $this->View['twitter'] = json_decode( $seo['twitter'],true);
               $this->View['seo_picture'] = $seo['picture'];
              
            }

            
       
    }
}
