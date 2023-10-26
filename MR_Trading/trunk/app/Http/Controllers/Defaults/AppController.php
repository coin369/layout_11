<?php

namespace App\Http\Controllers\Defaults;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Model\General as DTGeneral;
use App\Model\Page as DTPage;
use App\Model\Cate as DTCate;
use App\Model\Banner as DTBanner;
use App\Model\Product as DTProduct;

use App\Model\Service as DTService;

use App\Model\News_Cate as DTNewscate;



use App\Model\Redirects as DTRedirects;
use App\Model\OldPost as DTOldPost;
use App\Model\News as DTNews;

use App\Model\Seolinks as DTSeolinks;
use App\Model\Youtube as DTYoutube;
use App\Model\Slideshow as DTSlideshow;
use Cache;
use URL;
use Session;
use Config;
use DB;
use Redirect;

use Jenssegers\Agent\Agent;

use SEO\Models\Page as SEOPAGE;
use App\Model\Seo as DTSeo;
class AppController extends Controller
{
   protected $View=[];
   public function __construct(Request $request){
      
      
   
      // $my_url= str_replace(Config::get('app.url')."/", '', URL::current());

      // $check_redirect=Cache::remember("my_url_".md5($my_url),0000,function() use ($my_url){
      //       return DTOldPost::where("slug","LIKE","{$my_url}")->first();
      // });

      // if(!empty($check_redirect['id'])){
    
      //   if(!empty($check_redirect['title'])){
      //     $check_new=DTNews::where("name","Like",$check_redirect['title'])->first();

      //     if(!empty($check_new['id'])){
      //           return Redirect::to("/tin-tuc/".$check_new['alias'],301)->send(301);
      //          exit;
      //     }
      //   }
      
      
      // }
          if(env('APP_ENV')=="local"){
//                Cache::flush();
           

          }
   
            

    
        // $agent = new Agent();

     //$this->View['agent']=$agent;


      if (!session()->has('my_token')) {
          //

         session()->push('my_token', md5(date("Ymd H:i:s")) );
      }


       $this->View['my_token'] =session()->get("my_token")[0];
     
      
      $this->View['is_seo']=false;


    
      
      $check_seo= Cache::remember("App_path_".md5(url()->full()),9000,function(){
            $a=  SEOPAGE::where("path",url()->full())->first();
            if(empty($a)){
                return 1;
            }else{
                return 2;
            }
      });
      if($check_seo==2){

           $this->View['is_seo']=true;
      }


     
      $this->View['action_menu']=1;

      $this->View['TCate']=$parent=Cache::remember("App_TParents",2000,function(){
            return DTCate::where("status","1")->where("cid_parent","0")->orderBy("orderby","DESC")->get();
      });
      $this->View['TChild']=Cache::remember("App_TCHILD",2000,function() use ($parent){
            $result=[];
            foreach($parent as $c ){
                $result[$c->alias]=  DTCate::where("status","1")->where("cid_parent",$c->id)->orderBy("orderby","ASC")->get();
            }
            return $result;
          
      });
      
     
      // $this->View['TService']=Cache::remember("App_TSERVICE",200,function(){
      //    return DTService::where("status",'1')->orderBy("id","DESC")->get();
      //  });

      $this->View['TPage']=Cache::remember("App_TPage",2000,function(){
         return DTPage::where("status",'2')->orderBy("id","ASC")->get();
       });

       $this->View['TNewscate']=Cache::remember("App_TNEWS_CATE",2000,function(){
         return DTNewscate::where("status",'1')->where("cid_parent","!=",0)->orderBy("name","ASC")->get();
       });


    
  
      $this->View["TGeneral"]=$General=Cache::remember("App_TGeneral",2000,function(){
        return DTGeneral::find(1);
      });
      $this->View['TSeo']=(array)json_decode($General['seo']);

     
      $this->View['TSocial']=(array)json_decode($General['social']);

    //  Cache::flush();

     
        $this->View['TSlide']=Cache::remember("Index_Slideshow",10000,function(){
            return  DTSlideshow::where('status','1')->orderBy("position","ASC")->get();
        });

     



    }
 
}
